<?php 
    include("../../config/config.php");

    $tensanpham = $_POST['tensanpham'];
    $masp = $_POST['masp'];
    $giasp = $_POST['giasp'];
    $soluong = $_POST['soluong'];

    // Xử lý hình ảnh
    $hinhanh_name = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];

    // Tách tên file và phần mở rộng
    $hinhanh_ext = pathinfo($hinhanh_name, PATHINFO_EXTENSION);
    $hinhanh_new_name = time() . '.' . $hinhanh_ext;

    $tomtat = $_POST['tomtat'];
    $noidung = $_POST['noidung'];
    $tinhtrang = $_POST['tinhtrang'];
    $danhmuc = $_POST['danhmuc'];

    if(isset($_POST["themsanpham"])){
        // Thêm sản phẩm
        $sql_them = "INSERT INTO tbl_sanpham(tensanpham, masp, giasp, soluong, hinhanh, tomtat, noidung, tinhtrang, id_danhmuc) 
                    VALUES ('$tensanpham', '$masp', '$giasp', '$soluong', '$hinhanh_new_name', '$tomtat', '$noidung', '$tinhtrang', '$danhmuc')";
        mysqli_query($mysqli, $sql_them);
        move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh_new_name);
        header("Location: ../../index.php?action=quanlysp&query=them");
    } elseif (isset($_POST["suasanpham"])) {
        // Sửa sản phẩm
        if($hinhanh_name!=''){

            move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh_new_name);
            
            $sql_update = "UPDATE tbl_sanpham SET tensanpham='$tensanpham', masp='$masp', giasp='$giasp'
            , soluong='$soluong', hinhanh='$hinhanh_new_name', tomtat='$tomtat', noidung='$noidung',
            tinhtrang='$tinhtrang', id_danhmuc='$danhmuc'  WHERE id_sanpham = '$_GET[idsanpham]'";
            //xoa hinh anh cu
            $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
            $query = mysqli_query($mysqli, $sql);
            while($row = mysqli_fetch_assoc($query)){
                unlink('uploads/'.$row['hinhanh']);
            }
        }else{
            $sql_update = "UPDATE tbl_sanpham SET tensanpham='$tensanpham', masp='$masp', giasp='$giasp'
            , soluong='$soluong', tomtat='$tomtat', noidung='$noidung',
            tinhtrang='$tinhtrang', id_danhmuc='$danhmuc'  WHERE id_sanpham = '$_GET[idsanpham]'";
        }
        mysqli_query($mysqli, $sql_update);
        header("Location: ../../index.php?action=quanlysp&query=them");
    } else {
        // Xóa sản phẩm
        $id = $_GET['idsanpham'];
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while($row = mysqli_fetch_assoc($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham ='$id'";
        mysqli_query($mysqli, $sql_xoa);
        header("Location: ../../index.php?action=quanlysp&query=them");
    }
?>