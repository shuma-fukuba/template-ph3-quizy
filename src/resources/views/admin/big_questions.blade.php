@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($items as $item)
        <div>
            {{$item->name}}
        </div>
    @endforeach
    <a href="{{route('admin.big_question_add_form')}}">問題を追加する</a>
</div>
@endsection
