<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ぺんぎんおみくじ</title>
    <link rel="stylesheet" href="{{secure_asset('/css/app.css') }}">
</head>
<body>
    <h1>結果発表～！！！！</h1>
    <h2 class='omikujititle'>{{$omikuji->title}}</h2>
    <div>{{$omikuji->content}}</div>
</body>
</html>