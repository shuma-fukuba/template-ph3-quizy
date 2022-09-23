@extends('layouts.app')

@section('content')
<div class="container">

    <form action="" method="POST">
        @csrf
        <div>
            <ul class="big_questions sortable">
                @foreach ($items as $item)
                <li id="big_question_{{$item['order_id']}}"><a
                        href="{{route('admin.big_question', ['id' => $item['id']])}}">{{$item->name}}</a></li>
                @endforeach
            </ul>
        </div>
        <input type="hidden" name="list-ids" id="list-ids">
        <button id="submit">update</button>
    </form>

    <a href="{{route('admin.big_question_add_form')}}">問題を追加する</a>
</div>
@endsection
