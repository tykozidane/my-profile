<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GenerateWordKatla extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-word-katla';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate new word for Katla Games';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        info("start cron Katla word");
        $contents = File::get(base_path('resources/assets/data/dataKata.json'));
        $json = json_decode($contents, true);
        $checkWord = DB::table('katla.words')->latest()->first();
        // $now = date("Y-m-d 00:00:00");
        $now = date('Y-m-d', strtotime($checkWord->date . " +1 days"));
        // $detailWord = [];
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
    }
}
