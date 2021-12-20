<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hiển thị danh sách bảng post</h1>
<a href="{{ route("posts.create") }}">Thêm Mới</a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Tiêu Đề</th>
        <th>Nội Dung</th>
        <th>Thời Gian</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->post_time }}</td>
            <td><a href="{{ route("posts.detail", $post->id) }}">Detail</a></td>
            <td><a href="{{ route("posts.update", $post->id) }}">Update</a></td>
            <td><a onclick="return confirm('Bạn có muốn xóa k?')" href="{{ route("posts.delete", $post->id) }}">Delete</a></td>

        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
