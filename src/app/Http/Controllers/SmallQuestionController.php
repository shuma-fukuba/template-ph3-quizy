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
        $title = BigQuestion::find($id)->name;
        $small_questions = BigQuestion::find($id)->small_questions;
        return view('smallQuestion', ['items' => $small_questions, 'title' => $title]);
    }
}
