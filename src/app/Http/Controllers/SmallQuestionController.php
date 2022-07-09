<?php

namespace App\Http\Controllers;

use App\SmallQuestion;
use App\BigQuestion;
use Illuminate\Http\Request;

class SmallQuestionController extends Controller
{
    public function index(Request $request) {
        $id = $request->id;
        $big_question = BigQuestion::find($id);
        $title = $big_question->name;
        $items = $big_question->small_questions;
        return view('smallQuestion', compact('items', 'title'));
    }
}
