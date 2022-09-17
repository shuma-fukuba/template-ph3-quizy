@extends('layouts.base')

@section('title')
Big Question
@endsection

@section('content')
@foreach ($items as $item)
<div><a href="{{route('quiz.index', ['id' => $item['id']])}}">{{$item['name']}}</a></div>
@endforeach
@endsection
