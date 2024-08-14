<?php
if (isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);

    if ($count > 0) {
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangky'] = $row_data['tenkhachhang'];
        $_SESSION['id_khachhang'] = $row_data['id_dangky'];
        header('Location: index.php?quanly=giohang');
        exit(); // Ngừng thực thi script sau khi header() được gửi
    } else {
        echo '<p style="color:red">Mật khẩu hoặc Email sai, vui lòng nhập lại.</p>';
    }
}
?>
<style type="text/css">
    table.table_login tr td{
        padding: 5px;
    }
</style>
<form action="" autocomplete="off" method="POST" style="margin-left: 150px;">
    <table class="table_login" border="1" width="50%" style="text-align: center;">
        <tr>
            <td colspan="2"><h4>Đăng nhập khách hàng</h4></td>
        </tr>
        <tr>
            <td>Tài khoản</td>
            <td><input type="text" size="50" name="email" placeholder="Email..." required></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="password" size="50" name="password" placeholder="Mật khẩu..." required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
        </tr>
    </table>
</form>