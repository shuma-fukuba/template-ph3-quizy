<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BigQuestion;
use App\Http\Requests\BigQuestionRequest;
use Illuminate\Foundation\Console\Presets\React;
use Symfony\Component\HttpKernel\Exception\HttpException;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $sort = $request->sort;
        $param = ['sort' => $sort,
        'user' => $user];
        return view('admin.index', compact('user', 'sort'));
    }

    public function get_big_questions(Request $request)
    {
        $items = BigQuestion::all();
        return view('admin.big_questions', compact('items'));
    }

    public function big_question_add_form(Request $request)
    {
        return view('admin.big_question_add_form');
    }

    public function add_big_questions(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        BigQuestion::create([
            'name' => $form['name'],
        ]);
        return redirect(route('admin.big_questions'));
    }

    public function big_question(Request $request)
    {
        $id = $request->id;
        $item = BigQuestion::find($id);
        return view('admin.big_question.index', compact('item'));
    }

    public function update_big_question_index(Request $request)
    {
        $id = $request->id;
        $item = BigQuestion::find($id);
        return view('admin.big_question.update', compact('item'));
    }

    public function update_big_question(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $item = BigQuestion::find($id);
        $item->name = $name;
        $item->save();
        return redirect(route('admin.big_question', compact('id')));
    }

    public function delete_big_quesiton_index(Request $request)
    {
        $id = $request->id;
        return view('admin.big_question.delete', compact('id'));
    }

    public function delete_big_question(Request $request)
    {
        $id = $request->id;
        $item = BigQuestion::find($id);
        $item->delete();
        return redirect(route('admin.big_questions'));
    }
}
