<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($items as $item)
        <div><a href="{{route('quiz.index', ['id' => $item['id']])}}">{{$item['name']}}</a></div>
    @endforeach
</body>
</html>
