<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    private const quizes = [
        [
            'id' => 1,
            'title' => 'ガチで東京の人しか解けない！#東京の難読地名クイズ',
            'quizes' => [
                [
                    'question' => 'この地名はなんて読む? 高輪',
                    'choices' => [
                        [
                            'name' => 'こうわ',
                            'valid' => false,
                        ],
                        [
                            'name' => 'たかわ',
                            'valid' => false,
                        ],
                        [
                            'name' => 'たかなわ',
                            'valid' => false,
                        ],
                    ]
                ],
                [
                    'question' => 'この地名はなんて読む? 亀戸',
                    'choices' => [
                        [
                            'name' => 'かめいど',
                            'valid' => true,
                        ],
                        [
                            'name' => 'かめと',
                            'valid' => false,
                        ],
                        [
                            'name' => 'かめど',
                            'valid' => false,
                        ],
                    ]
                ],
                [
                    'question' => 'この地名はなんて読む? 麹町',
                    'choices' => [
                        [
                            'name' => 'かゆまち',
                            'valid' => false,
                        ],
                        [
                            'name' => 'おかとまち',
                            'valid' => false,
                        ],
                        [
                            'name' => 'こうじまち',
                            'valid' => true,
                        ],
                    ]
                ],
            ]
        ],
        [
            'id' => 2,
            'title' => '広島県民なら解けて同然? #広島県の難読地名クイズ',
            'quizes' => [
                [
                    'question' => 'この地名はなんて読む? 高輪',
                    'choices' => [
                        [
                            'name' => 'こうわ',
                            'valid' => false,
                        ],
                        [
                            'name' => 'たかわ',
                            'valid' => false,
                        ],
                        [
                            'name' => 'たかなわ',
                            'valid' => false,
                        ],
                    ]
                ],
                [
                    'question' => 'この地名はなんて読む? 亀戸',
                    'choices' => [
                        [
                            'name' => 'かめいど',
                            'valid' => true,
                        ],
                        [
                            'name' => 'かめと',
                            'valid' => false,
                        ],
                        [
                            'name' => 'かめど',
                            'valid' => false,
                        ],
                    ]
                ],
                [
                    'question' => 'この地名はなんて読む? 麹町',
                    'choices' => [
                        [
                            'name' => 'かゆまち',
                            'valid' => false,
                        ],
                        [
                            'name' => 'おかとまち',
                            'valid' => false,
                        ],
                        [
                            'name' => 'こうじまち',
                            'valid' => true,
                        ],
                    ]
                ],
            ]
        ]
    ];

    public function index()
    {
        $datas = [
            ['id' => 1, 'title' => 'ガチで東京の人しか解けない！#東京の難読地名クイズ'],
            ['id' => 2, 'title' => '広島県民なら解けて同然? #広島県の難読地名クイズ']
        ];
        return view('quizes', ['datas' => $datas]);
    }

    public function read_one($id)
    {
        $key = array_search($id, array_column(self::quizes, 'id'));
        $datas = self::quizes[$key];
        return view('quiz', ['datas' => $datas]);
    }
}
