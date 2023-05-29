<form action="{{ route('books.store')}}" method="post">
@csrf
<div>
    <label for="">本のタイトル</label>
    <input type="text" id="title" name="title" value="{{ old('title')}}">
    </div>
  <div>
    <label for="price">金額</label>
    <input type="number" id="price" name="price" value="{{ old('price')}}">
  </div>
  <div>
    <input type="submit" value="送信"/>
  </div>
</form>
