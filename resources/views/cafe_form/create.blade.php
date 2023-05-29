<h1>Cafe登録</h1>

<form action="{{ route('cafes.store')}}" method="post">
    @csrf

<div>
    <label for="">Cafe（店名）</label>
    <input type="text" id="name" name="name" value="{{ old('neme')}}">
</div>

<div>
    <label for="">都道府県</label>
    <input type="text" id="prefecture" name="prefecture" value="{{ old('prefecture')}}">
</div>

<div>
    <label for="">市町村</label>
    <input type="text" id="address" name="address" value="{{ old('address')}}">
</div>

<div>
    <label for="">評価</label>
    <input type="number" id="review" name="review" value="{{ old('review')}}">
</div>

<div class="p-2 w-full">
    <div class="relative">
    <label for="">カフェ状況</label>

    <input type="radio"  id="is_visible" name="is_visible" value="0" checked>
    <label for="is_visible1" class="leading-7 text-sm text-gray-600">開業中</label>

    <input type="radio"  id="is_visible" name="is_visible" value="1" >
    <label for="is_visible2" class="leading-7 text-sm text-gray-600">閉業中</label>
    </div>
</div>

<div class="p-2 w-full">
    <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-4 focus:outline-none hover:bg-indigo-600 rounded text-md">登録する</button>
</div>
{{-- <button type="button" onClick="history.back()">戻る</button> --}}
</form>
<a href="{{ route('cafes.index') }}" >一覧に戻る</a>

@foreach ($errors->all() as $error)
<li> <span class="error">{{ $error }}</span></li>
@endforeach
