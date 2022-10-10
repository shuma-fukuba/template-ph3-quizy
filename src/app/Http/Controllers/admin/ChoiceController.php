<?php

namespace App\Http\Controllers\Admin;

use App\Choice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $choices = Choice::all();
        return view('admin.choices.index', compact('choices'));
    }

    public function choice(Request $request)
    {
        $choice_id = $request->choice_id;
        $choice = Choice::find($choice_id);
        return view('admin.choices.choice' , compact('choice'));
    }

    public function update(Request $request)
    {
        $choice_id = $request->choice_id;
        $name = $request->name;
        $valid = $request->valid;
        if ($valid === 'correct') {
            $valid = true;
        } else if ($valid === 'incorrect') {
            $valid = false;
        }
        // TODO elseのときのバリデーション
        $choice = Choice::find($choice_id);
        $choice->name = $name;
        $choice->valid;
        $choice->save();

        return redirect(route('admin.choices.choice', compact('choice_id')));
    }
}
