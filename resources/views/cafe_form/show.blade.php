<h1>詳細画面</h1>
<div>{{ $cafe->id }}</div>
<div>{{ $cafe->name }}</div>
<div>{{ $cafe->prefecture }}</div>
<div>{{ $cafe->address }}</div>
<div>{{ $cafe->review }}</div>
<div>{{ $cafe->is_visible }}</div>


<a href="{{ route('cafes.index') }}">一覧に戻る</a>
<a href="{{ route('cafes.edit', $cafe->id) }}">編集</a>

<form action="{{ route('cafes.destroy', $cafe->id) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="削除">
</form>
