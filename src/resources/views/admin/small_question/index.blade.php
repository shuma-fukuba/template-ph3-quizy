@extends('layouts.app')

@section('content')
<div>
    <h1>{{$small_question->name}}</h1>
    <img src="{{asset('storage/' . $small_question->image)}}" alt="">
    <div>
        @foreach ($small_question->choices as $choice)
        <p><a href="{{route('admin.choices.choice', ['choice_id' => $choice->id])}}">{{$choice->name}}</a></p>
        @endforeach
    </div>
    <a href="{{route('admin.small_question.image_upload.index', [
            'id' => $small_question->id
        ])}}">画像を追加する</a>
</div>
@endsection
