<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>今日のレシピ</title>
</head>
<body>
    <h1>今日のレシピを決めてあげます</h1>
    <form action="/recipe" method="post">
        @csrf
        <button type="submit">今日のレシピを決めてもらう</button>
    </form>
</body>
</html>