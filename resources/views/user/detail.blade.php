<h1>Bảng Chi tiết</h1>
<a href="{{ route("users.index") }}">Quay lại</a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Email</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>

    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->birthday }}</td>
            <td>{{ $user->address }}</td>
        </tr>
    </tbody>
</table>
