<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ローカルインフルエンサーのマッチングサービス</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <main>
        <h1 class="title">Which one will you choose? </h1>
        <div class="container">
            <a class="btn" href="{{ route('companies.register') }}">Company</a>
            <a class="btn" href="{{ route('register') }}">Influencer</a>
        </div>
    </main>
</body>
</html>
