<form action=""method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhập tên" value="{{ $user->name }}">
    <input type="text" name="email" placeholder="Nhập Email" value="{{ $user->email }}">
    <input type="date" name="birthday" placeholder="Nhập Ngày Sinh" value="{{ $user->birthday }}">
    <input type="text" name="address" placeholder="Nhập Địa chỉ" value="{{ $user->address }}">
    <button type="submit">Cập nhật</button>
    <a href="{{ route("users.index") }}">Quay lai</a>
</form>
