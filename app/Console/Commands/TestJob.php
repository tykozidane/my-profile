<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Mockery\Undefined;

class TestJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $dataKata = json_decode(Storage::get('resources/assets/data/dataKata.json'), true);
        info("start cron Katla word");
        $contents = File::get(base_path('resources/assets/data/dataKata.json'));
        $json = json_decode($contents, true);
        $now = date("Y-m-d 00:00:00");
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
