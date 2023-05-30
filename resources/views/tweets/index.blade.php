<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <header>
        <h1 class="title">ぴよったー</h1>
    </header>
    <article>
        <div class="side">
          <p>サイドバー</p>
          {{--ツイート一覧
            プロフィール
            ログアウト --}}
        </div>
        <div class="content">
          <p>メインコンテンツ</p>
        </div>
      </article>

</body>
</html>
