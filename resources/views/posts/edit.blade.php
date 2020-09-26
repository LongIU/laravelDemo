修改文章

<form action="{{ route('posts.update', ['post' => $post]) }}" method="post">
    <label>
        @csrf
        @method('PUT')
        <textarea name="content" id="" cols="30" rows="10">{{ $post->content }}</textarea>
    </label>
    <input type="submit" value="送出">
</form>

<form action="{{ route('posts.destroy', ['post' => $post]) }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="刪除">
</form>
