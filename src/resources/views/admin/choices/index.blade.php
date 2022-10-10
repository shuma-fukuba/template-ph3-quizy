@extends('layouts.app')

@section('content')
<div>
    @foreach ($choices as $choice)
        <div>
            <a href="{{route('admin.choices.choice', ['choice_id' => $choice->id])}}">
                <p>{{$choice->name}}</p>
                <p>{{$choice->correct}}</p>
            </a>
        </div>
    @endforeach
</div>
@endsection
