<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\Cast\String_;
use stdClass;

class KatlaController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() 
    {
        //get all products
        // $users = User::latest()->paginate(10);

        //render view with products
        // return view('test', compact('users'));
    }
    public function getWord(){
        try{
            $word = DB::table('katla.words')
                ->get();
            return response()->json(["code"=>"00", "message"=>"Success", "data"=>$word]);
        } catch(\Throwable $err) {
            return response()->json([
                "code"      => "1001",
                "message"   => $err->getMessage(),
                "data"      => [],
            ], 500);
        }
    }
    public function getTodayWord(){
        try{
            $now = date("Y-m-d 00:00:00");
            $word = DB::table('katla.words')
                ->where('date', $now)
                ->get();
            $count = DB::table('katla.words')->whereTime('date', '<',$now)->count();
            $objectSend = new stdClass();
            $objectSend->dataWord = $word[0];
            $objectSend->count = $count;
            return response()->json(["code"=>"00", "message"=>"Success", "data"=>$objectSend]);
        } catch(\Throwable $err) {
            return response()->json([
                "code"      => "1002",
                "message"   => $err->getMessage(),
                "data"      => [],
            ], 500);
        }
    }
    public function getWordbyDate(DateTime $date){
        try{
            $now = $date->format("Y-m-d 00:00:00");
            $word = DB::table('katla.words')
                ->where('date', $now)
                ->get();
            return response()->json(["code"=>"00", "message"=>"Success", "data"=>$word]);
        } catch(\Throwable $err) {
            return response()->json([
                "code"      => "1003",
                "message"   => $err->getMessage(),
                "data"      => [],
            ], 500);
        }
    }
    public function deleteById(String $id){
        try{
            $word = DB::table('katla.words')->delete($id);
            return response()->json(["code"=>"00", "message"=>"Success", "data"=>$word]);
        } catch(\Throwable $err) {
            return response()->json([
                "code"      => "1004",
                "message"   => $err->getMessage(),
                "data"      => [],
            ], 500);
        }
    }
    public function insertWord(String $word) {
        try{
            $now = date("Y-m-d 00:00:00");
            $insert = DB::table('katla.words')->insert([
                "word"=> $word,
                "date" => $now
            ]);
            return response()->json(["code"=>"00", "message"=>"Success", "data"=>$insert]);
        } catch(\Throwable $err) {
            return response()->json([
                "code"      => "1005",
                "message"   => $err->getMessage(),
                "data"      => [],
            ], 500);
        }
    }
    public function generateNewWord() {
        try{
            info("start cron Katla word");
        Log::info("start cron Katla word");
        $contents = File::get(base_path('resources/assets/data/dataKata.json'));
        $json = json_decode($contents, true);
        $dataLast = DB::table('katla.words')->orderByDesc('date')->first();
        $dateLast = new DateTime($dataLast->date);
        $dateLast->modify('+1 day');
        $now = $dateLast->format("Y-m-d 00:00:00");
        // $detailWord = [];  $dateLast->format('')
        do {
            $numberRand = rand(0,8309);
            $newWord = $json['words'][$numberRand];
            $checkWord = DB::table('katla.words')->where('word',$newWord)->get();
            info($checkWord);
            if(count($checkWord) < 1){
                $detailWord = DB::table('katla.data_kata')->where('kata',$newWord)->first();
            info($newWord);
            if(!isset($detailWord)) {
                DB::table('katla.unknown_words')->insert([
                    'word' => $newWord,
                    'created_at' => $now
                    ]);
                }
            }
        } while (!isset($detailWord));
        // $description = $detailWord;
        DB::table('katla.words')->insert([
            "word"=> $newWord,
            "desc"=>$detailWord->keterangan,
            "date" => $now
        ]);
        // info($description);
        info($detailWord->id);
        return response()->json(["code"=>"00", "message"=>"Success", "data"=>$detailWord]);
        } catch (\Throwable $err){
            return response()->json([
                "code"      => "1006",
                "message"   => $err->getMessage(),
                "data"      => [],
            ], 500);
        }
    }
    
}
