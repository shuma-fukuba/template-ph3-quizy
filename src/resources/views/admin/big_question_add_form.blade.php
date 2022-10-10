@extends('layouts.app')

@section('content')
    <form action="{{route('admin.big_questions.add')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="クイズ名">
        <input type="text" name="order" placeholder="順番">
        <input type="submit" value="submit">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </form>
@endsection
