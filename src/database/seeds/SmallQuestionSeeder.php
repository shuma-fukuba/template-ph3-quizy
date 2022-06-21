<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmallQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id = 1
        $param = [
            'name' => 'この地名はなんて読む? 高輪',
            'image' => 'takanawa.png',
            'big_question_id' => 1
        ];
        DB::table('small_questions')->insert($param);

        // id = 2
        $param = [
            'name' => 'この地名はなんて読む? 亀戸',
            'image' => 'kameido.png',
            'big_question_id' => 1
        ];
        DB::table('small_questions')->insert($param);

        // id = 3
        $param = [
            'name' => 'この地名はなんて読む? 麹町',
            'image' => 'koujimachi.png',
            'big_question_id' => 1
        ];
        DB::table('small_questions')->insert($param);
    }
}
