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
        <div class="content">
            <p>あなたのつぶやき</p>
            @foreach ($tweets as $tweet)
            <form action="{{ route('tweets.destroy', $tweet->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">削除</button>
            </form>
        @endforeach
        {{-- <form action="{{ route('tweets.destroy', $tweet->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button>
        </form> --}}

            @foreach ($errors->all() as $error)
            <li> <span class="error">{{ $error }}</span></li>
            @endforeach
        </div>
    </article>
    <footer>
        <p>© 2023 株式会社コアテック. All rights reserved.</p>
    </footer>
</body>
</html>
