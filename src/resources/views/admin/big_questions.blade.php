@extends('layouts.app')

@section('content')
<div class="container">

    <form id="sort-form" action="{{route('admin.big_questions.order')}}" method="post">
        @csrf
        <div>
            <ul class="big_questions sortable">
                @foreach ($items as $item)
                <li id="{{$item['order_id']}}">
                    <a href="{{route('admin.big_questions.big_question', ['id' => $item['id']])}}">{{$item->name}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <input type="hidden" name="list-ids" id="list-ids">
        <button type="button" id="save-order">順番をセーブ</button>
        <button type="submit" id="submit">update</button>
    </form>

    <a href="{{route('admin.big_questions.add_index')}}">問題を追加する</a>
</div>
@endsection
