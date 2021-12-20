<form action="" method="post">
    @csrf
    <input type="text" name="title" placeholder="Nhập tiêu đề" value="{{ $post->title }}">
    <input type="text" name="content" placeholder="Nhập Nội dung" value="{{ $post->content }}">
    <input type="date" name="post_time" placeholder="Nhập thời gian" value="{{ $post->post_time }}">
    <button type="submit">Cập Nhật</button>
    <a href="{{ route("posts.index") }}">Quay lại</a>
</form>
