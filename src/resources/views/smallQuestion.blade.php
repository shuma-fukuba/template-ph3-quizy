@extends('layouts.base')

@section('title')
 {{ $title }}
@endsection

@section('content')
<header>
    <div class="container header-content">
        <div class="header-left">
            <div class="hungerger"></div>
            <div class="logo"><a href="#">Kuizy</a></div>
        </div>

        <div class="header-right">
            <div class="making-link"><button class="btn make-btn">クイズ・診断を作る</button></div>
            <div class="search btn search-btn">検索</div>
        </div>
    </div>
</header>


<main class="container">
    <div class="main-nav">
        <div class="nav-bar">
            <div class="nav-content">
                <a href="#">
                    <img src="#" alt="クイズ">
                    <span>クイズ</span>
                </a>
            </div>
            <div class="nav-content">
                <a href="#">
                    <img src="#" alt="診断">
                    <span>診断</span>
                </a>
            </div>
            <div class="nav-content">
                <a href="#">
                    <img src="#" alt="お絵かき診断">
                    <span>お絵かき診断</span>
                </a>
            </div>
            <div class="nav-content">
                <a href="#">
                    <img src="#" alt="ログイン">
                    <span>ログイン</span>
                </a>
            </div>
        </div>
        <div class="news">
            <a href="#"> 新登場！絵を描いてしりとりするゲームがKuizyに登場！詳しくは<span style="color: #287dff;">こちら</span>！</a>
        </div>
    </div>

    <div class="main-content">
        <!-- クイズ -->
        <h1>{{$title}}</h1>

        <article id="questions">
            @foreach ($items as $quiz)
            <section class="quiz">
                <h1>この地名はなんて読む?</h1>
                <img src="{{asset('img/' . $quiz['image'])}}" alt="{{$quiz['name']}}">
                <ul class ="choices">
                    @foreach ($quiz['choices'] as $choice)
                    <li class="choice" id="{{$quiz['id']}}-{{$choice['id']}}-{{$choide['valid']}}">{{$choice['name']}}</li>
                    @endforeach
                </ul>
                <div class ="quiz-result" id="quiz-result-{{$quiz['id']}}">
                    <p class ="quiz-result-title"></p>
                    <p class ="quiz-result-description"></p>
                    </div>
            </section>
            @endforeach
        </article>

    </div>
</main>


<footer class="container">

</footer>
@endsection
