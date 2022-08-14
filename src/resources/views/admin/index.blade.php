@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (Auth::check())
                    <p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
                    @else
                    <p>ログインしていません。(<a href="/login">ログイン</a>|
                        <a href="/register">登録</a>)
                    </p>
                    @endif
                    You are logged in!
                </div>
                <div class="card-body">
                    <a href="{{route('admin.big_questions')}}">問題一覧へ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
