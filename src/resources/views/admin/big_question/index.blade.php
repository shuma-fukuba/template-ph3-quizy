@extends('layouts.app')

@section('content')
<div>
    <h1>{{ $item->name }}</h1>
    <div>
        <form id="sort-form" action="{{route('admin.big_questions.order')}}" method="post">
            @csrf
            @foreach ($item->small_questions as $small)
            <p id="{{$item['order_id']}}"><a
                    href="{{route('admin.small_questions.small_question', ['small_question_id' => $small->id])}}">{{$small->name}}</a>
            </p>
            @foreach ($small->choices as $choice)
            <h3>{{$choice->name}}</h3>
            <p>{{$choice->valid ? '正解' : '不正解'}}</p>
            @endforeach
            @endforeach
            <input type="hidden" name="list-ids" id="list-ids">
            <button type="button" id="save-order">順番をセーブ</button>
            <button type="submit" id="submit">update</button>
        </form>
    </div>
    <a href="{{route('admin.big_questions.update_index', ['id' => $item->id])}}">編集</a>
    <a href="{{route('admin.big_questions.delete_index', ['id' => $item->id])}}">削除</a>
    <a href="{{route('admin.big_questions.small_questions.create_index', ['big_question_id' => $item->id])}}">小問追加</a>
</div>
@endsection
