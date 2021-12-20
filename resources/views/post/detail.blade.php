<table border="1px">
    <a href="{{ route("posts.index") }}">Quay lại</a>
    <thead>
    <tr>
        <th>ID</th>
        <th>Tiêu Đề</th>
        <th>Nội Dung</th>
        <th>Thời Gian</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->post_time }}</td>
        </tr>
    </tbody>
</table>
