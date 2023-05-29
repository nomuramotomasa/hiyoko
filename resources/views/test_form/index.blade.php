<h1>Book</h1>

@foreach($books as $book)
<a href="{{ route('books.show', $book->id ) }}"> {{ $book->id }}</a>
    {{ $book->title }} {{ $book->price }}
@endforeach

<a href="{{ route('books.create') }}">新規登録</a>
