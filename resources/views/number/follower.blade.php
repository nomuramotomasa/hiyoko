@foreach($followers as $follower)
<tr>
    <td class="px-4 py-3">{{ $follower->name }}</td>
    <td class="text-center">
        <a href="{{ route('cafes.show', $follower->id) }}" class=" text-white bg-teal-500 border-0 py-2 px-6 focus:outline-none hover:bg-teal-600 rounded">詳細表示</a>
    </td>
</tr>
@endforeach

<h1>フォロー 一覧</h1>
<div>{{ $follows->name }}</div>
<div>{{ $follows->image }}</div>
<div>{{ $follows->profile_id }}</div>
<div>{{ $follows->profile }}</div>

{{-- プロフィール一覧に戻る感じ --}}
<a href="{{ route('.show') }}">戻る</a>
