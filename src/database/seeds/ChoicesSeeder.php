<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'name' => 'こうわ',
            'small_question_id' => 1,
            'valid' => false
        ];
        DB::table('choices')->insert($param);

        $param = [
            'name' => 'たかわ',
            'small_question_id' => 1,
            'valid' => false
        ];
        DB::table('choices')->insert($param);

        $param = [
            'name' => 'たかなわ',
            'small_question_id' => 1,
            'valid' => true
        ];
        DB::table('choices')->insert($param);

        $param = [
            'name' => 'かめいど',
            'small_question_id' => 2,
            'valid' => true
        ];
        DB::table('choices')->insert($param);

        $param = [
            'name' => 'かめど',
            'small_question_id' => 2,
            'valid' => false
        ];
        DB::table('choices')->insert($param);

        $param = [
            'name' => 'かめと',
            'small_question_id' => 2,
            'valid' => false
        ];
        DB::table('choices')->insert($param);

        $param = [
            'name' => 'かゆまち',
            'small_question_id' => 3,
            'valid' => false
        ];
        DB::table('choices')->insert($param);

        $param = [
            'name' => 'おかとまち',
            'small_question_id' => 3,
            'valid' => false
        ];
        DB::table('choices')->insert($param);

        $param = [
            'name' => 'こうじまち',
            'small_question_id' => 3,
            'valid' => true
        ];
        DB::table('choices')->insert($param);
    }
}
