@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $item->name }}</h1>
        <div>
            @foreach ($item->small_questions as $small)
                <p>{{$small->name}}</p>
            @endforeach
        </div>
        {{-- <a href="{{route('admin.big_question.update')}}">編集</a>
        <a href="{{route('admin.big_question.delete')}}">削除</a>
        <a href="{{route('admin.big_question.add_small')}}">小問追加</a> --}}
    </div>
@endsection
