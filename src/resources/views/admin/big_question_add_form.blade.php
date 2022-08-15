@extends('layouts.app')

@section('content')
    <form action="{{route('admin.big_question_add')}}" method="post">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="submit">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </form>
@endsection
