<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BigQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $params = [
            [
                'name' => 'ガチで東京の人しか解けない！#東京の難読地名クイズ'
            ],
            [
                'name' => '広島県民なら解けて同然? #広島県の難読地名クイズ'
            ]
        ];
        DB::table('big_questions')->insert($params);
    }
}
