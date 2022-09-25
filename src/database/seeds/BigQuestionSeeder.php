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
                'name' => 'ガチで東京の人しか解けない！#東京の難読地名クイズ',
                'order_id' => 1,
            ],
            [
                'name' => '広島県民なら解けて同然? #広島県の難読地名クイズ',
                'order_id' => 2,
            ],
            [
                'name' => '大阪府民なら解けて同然? #広島県の難読地名クイズ',
                'order_id' => 3,
            ],
            [
                'name' => 'DJ松永なら解けて同然? #新潟県の難読地名クイズ',
                'order_id' => 4,
            ],
            [
                'name' => '影が薄くてかわいそうだね #鳥取県の難読地名クイズ',
                'order_id' => 5,
            ],
        ];
        DB::table('big_questions')->insert($params);
    }
}
