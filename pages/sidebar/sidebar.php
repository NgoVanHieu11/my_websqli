<?php
    // Bắt đầu output buffering ở đầu file
    ob_start();
?>

<!-- Nội dung file sidebar.php hoặc các file khác không có HTML nào trước khi gọi header -->
<h4>Danh mục sản phẩm</h4>
<ul class="list_sidebar">
    <?php 
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
    if($query_danhmuc){
        while ($row = mysqli_fetch_array($query_danhmuc)) {
    ?>
    <li>
        <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>" style="text-transform: uppercase;">
            <?php echo $row['tendanhmuc'] ?>
        </a>
    </li>
    <?php 
        }
    } else {
        echo "<li>Không có danh mục nào</li>";
    }
    ?>   
</ul>

<h4>Danh mục bài viết</h4>
<ul class="list_sidebar">
    <?php 
    $sql_danhmuc_bv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet ASC";
    $query_danhmuc_bv = mysqli_query($mysqli, $sql_danhmuc_bv);
    if($query_danhmuc_bv){
        while ($row = mysqli_fetch_array($query_danhmuc_bv)) {
    ?>
    <li>
        <a href="index.php?quanly=danhmucbaiviet&id=<?php echo $row['id_baiviet'] ?>" style="text-transform: uppercase;">
            <?php echo $row['tendanhmuc_baiviet'] ?>
        </a>
    </li>
    <?php 
        }
    } else {
        echo "<li>Không có danh mục bài viết nào</li>";
    }
    ?>   
</ul>

<?php
    // Chạy đoạn mã chứa header
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
            header('Location:index.php?quanly=giohang');
        } else {
            echo '<p style="color:red">Mật khẩu hoặc Email sai, vui lòng nhập lại.</p>';
        }
    }

 
?>

