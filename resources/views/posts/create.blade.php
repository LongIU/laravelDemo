建立文章

<form action="{{ route('posts.store') }}" method="post">
@csrf
<label>內容:
    <textarea name="content" id="" cols="30" rows="10"></textarea>
</label>
<input type="submit" value="送出">
</form>
