<?php

namespace App\Http\Controllers;

use App\BigQuestion;
use Illuminate\Http\Request;

class BigQuestionController extends Controller
{
   public function index(Request $request)
    {
        $items = BigQuestion::all();
        return view('bigQuestion', compact('items'));
    }
}
