<h1>編集画面</h1>
<form action="{{ route('books.update', $book->id)}}" method="post">
    @csrf
    @method('put')
    <div>
        <label for="">本のタイトル</label>
        <input type="text" id="title" name="title" value="{{ $book->title }}">
        </div>
      <div>
        <label for="price">金額</label>
        <input type="number" id="price" name="price" value="{{ $book->price }}">
      </div>
      <div>
        <input type="submit" value="更新する"/>
      </div>
    </form>
