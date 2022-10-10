<?php

namespace App\Http\Controllers\Admin;

use App\BigQuestion;
use App\Http\Controllers\Controller;
use App\SmallQuestion;
use Illuminate\Http\Request;

class SmallQuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $small_question_id = $request->small_question_id;
        $small_question = SmallQuestion::find($small_question_id);
        return view('admin.small_question.index', compact('small_question'));
    }

    public function create_index(Request $request)
    {
        $big_question_id = $request->big_question_id;
        return view('admin.big_question.small_question_create', compact('big_question_id'));
    }

    public function create(Request $request)
    {
        $big_question_id = $request->big_question_id;  # be able to get path param

        $name = $request->name;
        # TODO 画像アップロード
        $image = $request->file('image');
        $path = $image->store('image', 'public');

        // big questionの小テーブルに追加
        $item = SmallQuestion::create([
            'name' => $name,
            'image' => $path,
            'big_question_id' => $big_question_id,
            'order_id' => rand(0, 100),
        ]);

        $item->save();

        return redirect(route('admin.big_questions.big_question', compact('big_question_id')));
    }

    public function update_index(Request $request)
    {
        $id = $request->id;
        return view('admin.small_question.edit', compact('id'));
    }

    public function update(Request $request)
    {
        $small_question_id = $request->small_question_id;
        $name = $request->name;
        $small_question = SmallQuestion::find($small_question_id);
        $small_question->name = $name;
        $small_question->save();

        return redirect(route('admin.small_questions.small_question', compact('small_question')));
    }

    public function delete_index(Request $request)
    {
        $small_question_id = $request->small_question_id;
        return view('admin.small_question.delete', compact('small_question_id'));
    }

    public function delete(Request $request)
    {
        $small_question_id = $request->small_question_id;
        $item = SmallQuestion::find($small_question_id);
        $item->delete();
        return redirect(route('admin.big_questions.index'));
    }

    public function order(Request $request)
    {
        $form = $request->all();
        $orders = $form['list-ids'];
        $orders = explode(',', $orders);
        foreach ($orders as $key => $order) {
            SmallQuestion::where('order_id', '=', $order)->update(['order_id' => $key + 1]);
        }
        return redirect(route('admin.big_questions.big_question'));
    }
}
