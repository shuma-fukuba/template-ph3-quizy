@extends('layouts.app')

@section('content')
    <div>
        <form action="{{route('admin.big_question.update', ['id' => $item->id])}}" method="POST">
            @csrf
            <input type="text" name="name" value="{{$item->name}}">
            <input type="submit" value="submit">
        </form>
    </div>
@endsection
