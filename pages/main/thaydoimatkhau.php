<?php
if (isset($_POST['doimatkhau'])) {
    $taikhoan = mysqli_real_escape_string($mysqli, $_POST['email']);
    $matkhau_cu = md5($_POST['password_cu']);
    $matkhau_moi = md5($_POST['password_moi']);
    $sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);

    if ($count > 0) {
        $sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='$matkhau_moi'");
        echo '<p style="color:green;margin-left: 150px;">Mật khẩu đã được thay đổi</p>';
    } else {
        echo '<p style="color:red;margin-left: 150px;">Tài khoản hoặc mật khẩu cũ không đúng, vui lòng nhập lại</p>';
    }
}
?>
<h3>Đổi mật khẩu</h3>
<form action="" autocomplete="off" method="POST" style="margin-left: 150px;">
    <table border="1" style="text-align: center;">
        <tr>
            <td colspan="2"><h4>Đổi mật khẩu Admin</h4></td>
        </tr>
        <tr>
            <td>Tài khoản</td>
            <td><input type="text" size="50" name="email" required></td>
        </tr>
        <tr>
            <td>Mật khẩu cũ</td>
            <td><input type="text" size="50" name="password_cu" required></td>
        </tr>
        <tr>
            <td>Mật khẩu mới</td>
            <td><input type="text" size="50" name="password_moi" required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="doimatkhau" value="Đổi mật khẩu"></td>
        </tr>
    </table>
</form>