<h1>フォロー 一覧</h1>
@foreach($follows as $follow)
<tr>
    <td class="px-4 py-3">{{ $follow->user->name }}</td>
    <td class="text-center">
        <a href="{{ route('other.show', $follow->user->id) }}" class=" text-white bg-teal-500 border-0 py-2 px-6 focus:outline-none hover:bg-teal-600 rounded">詳細表示</a>
    </td>
    <ul>
<li>{{ $follow->user->name }}</li>
<li>{{ $follow->user->image }}</li>
<li>{{ $follow->user->profile_id }}</li>
<li>{{ $follow->user->profile }}</li>
</ul>
</tr>

@endforeach


{{-- プロフィール一覧に戻る感じ --}}
<a href="{{ route('other.show', $user->id) }}">戻る</a>

