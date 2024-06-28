<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ぺんぎんおみくじ</title>
    <style>
        body {
            background-image: url('{{ asset('images/penguin.png') }}');
            background-size: cover; 
            background-position: center;
            height: 100vh;
            }
    </style>
     <link rel="stylesheet" href="{{secure_asset('/css/app.css') }}">
</head>
<body>
    <div class='center'>
    <div>
    <h1>ぺんぎんおみくじ？</h1>
    <form class='buttoncenter' action="/omikuji" method="post">
        @csrf
        <button type="submit">おみくじを引く</button>
    </form>
    </div>
    </div>
</body>
</html>