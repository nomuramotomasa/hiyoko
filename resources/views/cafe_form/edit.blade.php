<h1>編集画面</h1>
<form action="{{ route('cafes.update', $cafe->id)}}" method="post">
    @csrf
    @method('put')
<div>
    @if ($errors->has('name'))
     <p class="error">*{{ $errors->first('name') }}</p>
    @endif
    @if ($errors->has('prefecture'))
     <p class="error">*{{ $errors->first('prefecture') }}</p>
    @endif
    @if ($errors->has('address'))
     <p class="error">*{{ $errors->first('address') }}</p>
    @endif
    @if ($errors->has('review'))
     <p class="error">*{{ $errors->first('review') }}</p>
    @endif
    @if ($errors->has('is_visible'))
     <p class="error">*{{ $errors->first('is_visible') }}</p>
    @endif

    <label for="">Cafe（店名）</label>
    <input type="text" id="name" name="name" value="{{ $cafe->name }}">
</div>
<div>
    <label for="">都道府県</label>
    <input type="text" id="prefecture" name="prefecture" value="{{ $cafe->prefecture }}">
</div>
    <label for="">市町村</label>
    <input type="text" id="address" name="address" value="{{ $cafe->address }}">
</div>
<div>
    <label for="">評価</label>
    <input type="number" id="review" name="review" value="{{ $cafe->review }}">
</div>
<div>
    <label for="">カフェ状況</label>
    <input type="radio"  id="is_visible" name="is_visible" value="0" @if($cafe->is_visible == 0) checked @endif>開業中
    <input type="radio"  id="is_visible" name="is_visible" value="1" @if($cafe->is_visible == 1) checked @endif>閉業中
</div>
<div>
<input type="submit" value="更新する"/>
</div>
