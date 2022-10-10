@extends('layouts.app')

@section('content')
    <div>
        <form action="{{route('admin.big_questions.delete', ['id' => $id])}}" method="POST">
        @csrf
            <input type="submit" value="delete">
        </form>
    </div>
@endsection
