<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <h1><a href="{{ route('tweets.index') }}"><img src="..\images\logo.png" alt="ぴよったー"></a></h1>
    </header>
    <article>
        <div class="side">
            <p>MENU</p>
            <ul>
                <li><a href="{{ route('tweets.index') }}">プロフィール</a></li>
                <li><a href="{{ route('tweets.index') }}">ツイート一覧</a></li>
                <li><a href="{{ route('tweets.index') }}">ログアウト</a></li>
        </div>
        {{-- <div class="content">
          <p>投稿画面</p>
          <form action="{{ route('tweets.store')}}" method="post">
            <label for="message">メッセージ:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>
            <input type="submit" value="投稿する">
            <a href="{{ route('tweetss.index') }}" >一覧に戻る</a>

            @foreach ($errors->all() as $error)
            <li> <span class="error">{{ $error }}</span></li>
            @endforeach --}}
        </div>
    </article>
    <footer>
        <p>© 2023 株式会社コアテック. All rights reserved.</p>
    </footer>
</body>
</html>
