<x-layout>
    <x-slot name="title">
        Edit info - Lim;
    </x-slot>

    <div class="back-link">
        &laquo;<a href="{{route('users.show',$userList)}}">Back</a>
    </div>
    <h1>Edit</h1>
    <form action="{{ route('users.update', $userList) }}" method="post">
        @method('Patch')
        @csrf

        <div class="form-group">
            <label>
                Title
                <input type="text" name="title" value="{{old('title',$userList->title)}}">

                @error('title')
                    <div class="error">{{ $message }}</div>
                @enderror
            </label>
        </div>

        <div class="form-group">
            <label>
                Body
                <textarea name="body">{{old('body',$userList->body)}}</textarea>
                @error('body')
                    <div class="error">{{ $message }}</div>
                @enderror
            </label>
        </div>

        <div class="form-button">
            <button>Update</button>
        </div>
    </form>
</x-layout>
