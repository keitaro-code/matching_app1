{{-- エラーが起きた時 --}}
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
{{-- 画像アップロードの遷移先 --}}
<form
method="post"
    action="{{ route('users.store') }}"
    enctype="multipart/form-data"
    >
    @csrf
    タイトル
    <input type="text" name="title">
    添付したい画像
    <input type="file" name="user" accept="image/png, image/jpeg">
    <input type="submit" value="Upload">
    内容
    <textarea name="body"></textarea>

</form>
