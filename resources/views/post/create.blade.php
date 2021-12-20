<form action="" method="post">
    @csrf
    <input type="text" name="title" placeholder="Nhập tiêu đề">
    <input type="text" name="content" placeholder="Nhập Nội dung">
    <input type="date" name="post_time" placeholder="Nhập thời gian">
    <button type="submit">Thêm Mới</button>
    <a href="{{ route("posts.index") }}">Quay lại</a>
</form>
