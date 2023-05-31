<h1>フォロワー 一覧</h1>
@foreach($followers as $follower)
<tr>
    <td class="px-4 py-3">{{ $follower->user->name }}</td>
    <td class="text-center">
        <a href="{{ route('other.show', $follower->user->id) }}" class=" text-white bg-teal-500 border-0 py-2 px-6 focus:outline-none hover:bg-teal-600 rounded">詳細表示</a>
    </td>

    <ul>
        <li>{{ $follower->user->name }}</li>
        <li>{{ $follower->user->image }}</li>
        <li>{{ $follower->user->profile_id }}</li>
        <li>{{ $follower->user->profile }}</li>
    </ul>

    <div class="p-2 w-full">
        <div class="relative">
            <label for="">フォロー状況</label>
            <input type="radio"  id="is_visible" name="is_visible" value="0" checked>
            <label for="is_visible1" class="leading-7 text-sm text-gray-600">フォロー中</label>
            <input type="radio"  id="is_visible" name="is_visible" value="1" >
            <label for="is_visible2" class="leading-7 text-sm text-gray-600">フォロー解除</label>
        </div>
    </div>
</tr>
@endforeach

{{-- プロフィール一覧に戻る感じ --}}
<a href="{{ route('other.show', $user->id) }}">戻る</a>
