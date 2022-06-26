<?php

namespace App\Http\Controllers;

use App\SmallQuestion;
use App\BigQuestion;
use Illuminate\Http\Request;

class SmallQuestionController extends Controller
{
    //
    public function index(Request $request) {
        $id = $request->id;
        $small_questions = SmallQuestion::where('big_question_id', $id)->get();
        $title = BigQuestion::where('id', $id)->get();
        return view('smallQuestion', ['items' => $small_questions, 'title' => $title]);
    }
}
