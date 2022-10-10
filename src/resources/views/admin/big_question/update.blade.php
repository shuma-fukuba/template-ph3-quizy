@extends('layouts.app')

@section('content')
<div>
    <form action="{{route('admin.big_questions.update', ['id' => $item->id])}}" method="POST">
        @csrf
        <p>大門名：<input type="text" name="big_question_name" value="{{$item->name}}"></p>
        <p>小問</p>
        <ul>
            @foreach ($item->small_questions as $small)
            <h2>{{$small->name}}</h2>
            <a href="{{route('admin.small_question.edit.index', ['id' => $small->id])}}">この問題を編集</a>
            @endforeach
        </ul>
        <input type="submit" value="submit">
    </form>
</div>
@endsection
