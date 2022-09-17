<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quizy | @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script src="{{asset('js/quizy.js')}}"></script>
    </head>

    <body>
        @yield('content')
    </body>

</html>
