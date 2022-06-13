<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$datas['title']}}</h1>
    <ul>
        @foreach ($datas['quizes'] as $quiz)
        <li>{{$quiz['question']}}</li>
        @foreach ($quiz['choices'] as $choice)
            <p>{{$choice['name']}}</p>
        @endforeach
    @endforeach
    </ul>
</body>
</html>
