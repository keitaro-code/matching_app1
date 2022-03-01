<x-layout>
    <x-slot name='title'>
        インフルエンサー情報
    </x-slot>
    <h1>
        <span>インフルエンサー</span>
        <a href="{{ route('users.create') }}">投稿</a>
    </h1>
    <ul>
        @forelse ($userLists as $userList)
        <li>
            <a href="{{ route('users.show', $userList) }}">
                {{ $userList->title }}
            </a>
        </li>
        @empty
        <li>No user yet!!</li>
        @endforelse
    </ul>
</x-layout>
