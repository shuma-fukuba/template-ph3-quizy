<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BigQuestion;
use App\Http\Requests\BigQuestionRequest;
use App\SmallQuestion;
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

    public function small_question_index(Request $request)
    {
        $small_question_id = $request->id;
        $small_question = SmallQuestion::find($small_question_id);
        return view('admin.small_question.index', compact('small_question'));
    } // done

    public function update_small_question_index(Request $request)
    {
        $id = $request->id;
        return view('admin.small_question.edit', compact('id'));
    }  // done

    public function small_question_create_index(Request $request)
    {
        $id = $request->id;
        return view('admin.big_question.small_question_create', compact('id'));
    } // done

    public function create_small_question(Request $request)
    {
        $id = $request->id;  # be able to get path param
        $name = $request->name;
        # TODO 画像アップロード
        return redirect(route('admin.big_question', compact('id')));
    }  // done



    public function small_question_image_upload_index(Request $request)
    {
        $id = $request->id;
        return view('admin.small_question.image_upload', compact('id'));
    }

    public function small_question_image_upload(Request $request)
    {
        $id = $request->id;
        $path = 'small_question' . $id . '.' . $request->img->extension();

        $request->file('img')->storeAs('/public/img', $path);

        $small_question = SmallQuestion::find($id);
        $small_question->update(['image' => $path]);
        return redirect(route('admin.small_question_index', [
            'id' => $id
        ]));
    }

    public function update_big_questions_order(Request $request)
    {
        $form = $request->all();
        $orders = $form['list-ids'];
        $orders = explode(',', $orders);
        foreach ($orders as $key => $order) {
            $post = BigQuestion::where('order_id', '=', $order)->update(['order_id' => $key + 1]);
        }
        return redirect(route('admin.big_questions'));
    } // done
}
