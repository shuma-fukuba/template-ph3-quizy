@extends('layouts.app')

@section('content')
<div>
    <form action="{{route('admin.big_questions.small_questions.create', compact('big_question_id'))}}" method="POST" enctype="multipart/form-data">
        @csrf
        設問タイトル：<input type="text" name="name" placeholder="設問タイトル">
        <label>画像：<input type="file" name="image"></label>
        <input type="submit" value="submit">
    </form>

</div>
@endsection
