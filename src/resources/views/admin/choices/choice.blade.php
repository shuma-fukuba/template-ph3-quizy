@extends('layouts.app')

@section('content')
<div>
    <form action="{{route('admin.choices.update', ['choice_id' => $choice->id])}}" method="POST">
        @csrf
        <div>
            <input type="text" name="name" value="{{$choice->name}}" placeholder="選択肢">
        </div>
        <div><label><input type="radio" name="valid" value="correct">correct</label>
            <label><input type="radio" name="valid" value="incorrect">incorrect</label>
        </div>
        <div><input type="submit" value="submit"></div>
    </form>
</div>
@endsection
