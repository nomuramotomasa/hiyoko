<h1>詳細画面</h1>
<div>{{ $book->id }}</div>
<div>{{ $book->title }}</div>
<div>{{ $book->price }}</div>

<a href="{{ route('books.index') }}">一覧に戻る</a>
<a href="{{ route('books.edit', $book->id) }}">編集</a>

<form action="{{ route('books.destroy', $book->id) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="削除">
</form>
