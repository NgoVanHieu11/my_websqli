<?php
    session_start();
    include("../../admin/config/config.php");

    // Thêm số lượng
    if (isset($_GET['cong'])) {
        $id = $_GET['cong'];
        foreach ($_SESSION['cart'] as &$cart_item) {
            if ($cart_item['id'] == $id) {
                if ($cart_item['soluong'] < 10) {
                    $cart_item['soluong']++;
                }
                break;
            }
        }
        header("Location:../../pages/index.php?quanly=giohang");
        exit();
    }

    // Trừ số lượng
    if (isset($_GET['tru'])) {
        $id = $_GET['tru'];
        foreach ($_SESSION['cart'] as $key => &$cart_item) {
            if ($cart_item['id'] == $id) {
                $cart_item['soluong']--;
                if ($cart_item['soluong'] <= 0) {
                    // Nếu số lượng <= 0, xóa sản phẩm khỏi giỏ hàng
                    unset($_SESSION['cart'][$key]);
                }
                break;
            }
        }
    // Làm mới lại chỉ số mảng
    $_SESSION['cart'] = array_values($_SESSION['cart']);
    header("Location:../../pages/index.php?quanly=giohang");
    exit();
    }

    // Xóa sản phẩm
    if (isset($_SESSION['cart']) && isset($_GET['xoa'])) {
        $id = $_GET['xoa'];
        foreach ($_SESSION['cart'] as $key => $cart_item) {
            if ($cart_item['id'] == $id) {
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
        // Làm mới lại chỉ số mảng
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        header("Location:../../pages/index.php?quanly=giohang");
        exit();
    }
    //xóa tất cả
    if(isset($_GET['xoatatca']) && $_GET['xoatatca'] ==1){
        unset($_SESSION['cart']) ;
        header("Location:../../pages/index.php?quanly=giohang");
    }

    if (isset($_POST['themgiohang'])) {
        $id = $_GET['idsanpham'];
        $soluong = 1;
    
        // Truy vấn sản phẩm từ cơ sở dữ liệu
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
    
        if ($row) {
            $new_product = array(
                'tensanpham' => $row['tensanpham'],
                'id' => $id,
                'soluong' => $soluong,
                'giasp' => $row['giasp'],
                'hinhanh' => $row['hinhanh'],
                'masp' => $row['masp']
            );
    
            // Kiểm tra nếu giỏ hàng đã tồn tại
            if (isset($_SESSION['cart'])) {
                $found = false;
                foreach ($_SESSION['cart'] as $key => $cart_item) {
                    if ($cart_item['id'] == $id) {
                        $_SESSION['cart'][$key]['soluong'] += $soluong;
                        $found = true;
                        break;
                    }
                }
    
                // Nếu sản phẩm không tồn tại trong giỏ hàng, thêm sản phẩm mới
                if (!$found) {
                    $_SESSION['cart'][] = $new_product;
                }
            } else {
                // Nếu giỏ hàng chưa tồn tại, tạo giỏ hàng mới với sản phẩm hiện tại
                $_SESSION['cart'] = array($new_product);
            }
        }
    
        header("Location:../../pages/index.php?quanly=giohang");
        exit();
    }
?>
