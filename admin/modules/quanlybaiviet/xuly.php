<?php 
    include("../../config/config.php");

    $tenbaiviet = $_POST['tenbaiviet'];
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

    if(isset($_POST["thembaiviet"])){
        // Thêm 
        $sql_them = "INSERT INTO tbl_baiviet(tenbaiviet, hinhanh, tomtat, noidung, tinhtrang, id_danhmuc) 
                    VALUES ('$tenbaiviet', '$hinhanh_new_name', '$tomtat', '$noidung', '$tinhtrang', '$danhmuc')";
        mysqli_query($mysqli, $sql_them);
        move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh_new_name);
        header("Location: ../../index.php?action=quanlybaiviet&query=them");
    }elseif (isset($_POST["suabaiviet"])) {
        // Sửa 
        if($hinhanh_name!=''){

            move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh_new_name);
            
            $sql_update = "UPDATE tbl_baiviet SET tenbaiviet='$tenbaiviet', hinhanh='$hinhanh_new_name', tomtat='$tomtat', noidung='$noidung',
            tinhtrang='$tinhtrang', id_danhmuc='$danhmuc'  WHERE id = '$_GET[idbaiviet]'";
            //xoa hinh anh cu
            $sql = "SELECT * FROM tbl_baiviet WHERE id = '$_GET[idbaiviet]' LIMIT 1";
            $query = mysqli_query($mysqli, $sql);
            while($row = mysqli_fetch_assoc($query)){
                unlink('uploads/'.$row['hinhanh']);
            }
        }else{
            $sql_update = "UPDATE tbl_baiviet SET tenbaiviet='$tenbaiviet', tomtat='$tomtat', noidung='$noidung',
            tinhtrang='$tinhtrang', id_danhmuc='$danhmuc'  WHERE id = '$_GET[idbaiviet]'";
        }
        mysqli_query($mysqli, $sql_update);
        header("Location: ../../index.php?action=quanlybaiviet&query=them");
    } else {
        // Xóa 
        $id = $_GET['idbaiviet'];
        $sql = "SELECT * FROM tbl_baiviet WHERE id = '$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while($row = mysqli_fetch_assoc($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tbl_baiviet WHERE id ='$id'";
        mysqli_query($mysqli, $sql_xoa);
        header("Location: ../../index.php?action=quanlybaiviet&query=them");
    }
?>