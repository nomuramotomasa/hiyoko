<h1>カフェ一覧</h1>
<div class="py-12"></div>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8"></div>
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"></div>
@if (session('flash_message'))
    <div class="mx-auto bg-blue-300">
        {{ session('flash_message') }}
    </div>
@endif

<div class="p-6 text-gray-900"></div>
<div class="flex justify-center mb-8">
    <a href="{{ route('cafes.create') }}" class=" text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">新規作成</a>
</div>
<table class="table-auto w-full text-left whitespace-no-wrap">

@foreach($cafes as $cafe)
<tr>
    <td class="px-4 py-3">{{ $cafe->name }}</td>
    <td class="text-center">
        <a href="{{ route('cafes.show', $cafe->id) }}" class=" text-white bg-teal-500 border-0 py-2 px-6 focus:outline-none hover:bg-teal-600 rounded">詳細表示</a>
    </td>
</tr>
@endforeach
