<x-layout>
    <x-slot name="title">
        情報登録
    </x-slot>

    <div class="back-link">
        &laquo;<a href="{{route('users.user_list')}}">戻る</a>
    </div>
    <h1>Add New Post</h1>
    <form action="{{route('users.store')}}" method="post">

        @csrf
        <div class="form-group">
            <label>
                Title
                <input type="text" name="title" value="{{old('title')}}">

                @error('title')
                    <div class="error">{{ $message }}</div>
                @enderror
            </label>
        </div>

        <div class="form-group">
            <label>
                Body
                <textarea name="body">{{old('body')}}</textarea>
                @error('body')
                    <div class="error">{{ $message }}</div>
                @enderror
            </label>
        </div>

        <div class="form-button">
            <button>登録</button>
        </div>
    </form>
</x-layout>
