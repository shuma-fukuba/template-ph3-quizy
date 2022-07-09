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
        $params = [
            [
                'name' => 'こうわ',
                'small_question_id' => 1,
                'valid' => false
            ],
            [
            'name' => 'たかわ',
            'small_question_id' => 1,
            'valid' => false
            ],
            [
            'name' => 'たかなわ',
            'small_question_id' => 1,
            'valid' => true
            ],
            [
                'name' => 'かめいど',
                'small_question_id' => 2,
                'valid' => true
            ],
            [
                'name' => 'かめど',
                'small_question_id' => 2,
                'valid' => false
            ],
            [
                'name' => 'かめと',
                'small_question_id' => 2,
                'valid' => false
            ],
            [
                'name' => 'かゆまち',
                'small_question_id' => 3,
                'valid' => false
            ],
            [
                'name' => 'おかとまち',
                'small_question_id' => 3,
                'valid' => false
            ],
            [
                'name' => 'こうじまち',
                'small_question_id' => 3,
                'valid' => true
            ]
        ];
        DB::table('choices')->insert($params);
    }
}
