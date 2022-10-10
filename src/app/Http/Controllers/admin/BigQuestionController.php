<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BigQuestion;

class BigQuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $items = BigQuestion::all()->sortBy('order_id');
        return view('admin.big_questions', compact('items'));
    }

    public function add_form(Request $request)
    {
        return view('admin.big_question_add_form');
    }

    public function add(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        BigQuestion::create([
            'name' => $form['name'],
            'order_id' => $form['order'],
        ]);
        return redirect(route('admin.big_questions.index'));
    }

    public function big_question(Request $request)
    {
        $id = $request->id;
        $item = BigQuestion::find($id);
        return view('admin.big_question.index', compact('item'));
    }

    public function update_index(Request $request){
        $id = $request->id;
        $item = BigQuestion::find($id);
        return view('admin.big_question.update', compact('item'));
    }

    public function update(Request $request){
        $id = $request->id;
        $name = $request->big_question_name;
        $item = BigQuestion::find($id);
        $item->name = $name;
        $item->save();
        return redirect(route('admin.big_questions.big_question', compact('id')));
    }

    public function delete_index(Request $request)
    {
        $id = $request->id;
        return view('admin.big_question.delete', compact('id'));
    }

     public function delete(Request $request){
        $id = $request->id;
        $item = BigQuestion::find($id);
        $item->delete();
        return redirect(route('admin.big_questions.index'));
     }

     public function order(Request $request)
     {
        $form = $request->all();
        $orders = $form['list-ids'];
        $orders = explode(',', $orders);
        foreach ($orders as $key => $order) {
            BigQuestion::where('order_id', '=', $order)->update(['order_id' => $key + 1]);
        }
        return redirect(route('admin.big_questions.index'));
    }
}
