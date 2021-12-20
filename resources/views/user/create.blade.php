<form action=""method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhập tên">
    <input type="text" name="email" placeholder="Nhập Email">
    <input type="date" name="birthday" placeholder="Nhập Ngày Sinh">
    <input type="text" name="address" placeholder="Nhập Địa chỉ">
    <button type="submit">Thêm Mới</button>
    <a href="{{ route("users.index") }}">Quay lai</a>
</form>
