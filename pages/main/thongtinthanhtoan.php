<p style="margin-left: 40px;">Thông tin thanh toán</p>
<div class="wrapd">
    <div class="arrow-steps clearfix">
        <div class="progress current"><a href="index.php?quanly=giohang">Giỏ hàng</a></div>
        <div class="progress current"><a href="index.php?quanly=vanchuyen">Vận chuyển</a></div>
        <div class="progress current"><a href="index.php?quanly=thongtinthanhtoan">Thanh toán</a></div>
        <div class="progress"><a href="index.php?quanly=donhangdadat">Lịch sử đơn hàng</a></div>
    </div>
<form action="../pages/main/xulythanhtoan.php" method="POST">
    <div class="row">
        <?php
        $id_dangky = $_SESSION['id_khachhang'];
        $sql_get_vanchuyen = mysqli_query($mysqli,"SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
        $count = mysqli_num_rows($sql_get_vanchuyen);
        if($count>0){
            $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
            $name = $row_get_vanchuyen['name'];
            $phone = $row_get_vanchuyen['phone'];   
            $address = $row_get_vanchuyen['address'];
            $note = $row_get_vanchuyen['note'];
        }else{
            $name = '';
            $phone = '';
            $address = '';
            $note = '';
        }
        ?>
        <div class="col-md-8">
            <h4>Thông tin vận chuyển và giỏ hàng</h4>
            <ul>
                <li>Họ và tên vận chuyển : <b><?php echo $name ?></b></li>
                <li>Số điện thoại : <b><?php echo $phone ?></b></li>
                <li>Địa chỉ : <b><?php echo $address ?></b></li>
                <li>Ghi chú : <b><?php echo $note ?></b></li>
            </ul>
            <h5>Giỏ hàng của bạn</h5>
            <table style="width: 100%; text-align: center; border-collapse: collapse;" border="1">
                <tr>
                <td>Id</td>
                <td>Mã sp</td>
                <td>Tên sản phẩm</td>
                <td>Hình ảnh</td>
                <td>Số lượng</td>
                <td>Giá sản phẩm</td>
                <td>Thành tiền</td>
                </tr>
                <?php
                $tongtien = 0;
                if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
                    $i = 0;
                    foreach($_SESSION["cart"] as $cart_item) {
                        $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
                        $tongtien += $thanhtien;
                        $i++;
                ?>
                <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $cart_item['masp']; ?></td>
                <td><?php echo $cart_item['tensanpham']; ?></td>
                <td><img src="../admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
                <td>
                    <a href="../pages/main/themgiohang.php?cong=<?php echo $cart_item['id']; ?>"><i class="fa-solid fa-plus fa-style"></i></a>
                    <?php echo $cart_item['soluong']; ?>
                    <a href="../pages/main/themgiohang.php?tru=<?php echo $cart_item['id']; ?>"><i class="fa-solid fa-minus fa-style"></i></a>
                </td>
                <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnđ'; ?></td>
                <td><?php echo number_format($thanhtien,0,',','.').'vnđ'; ?></td>
                </tr>
                <?php
                    }
                ?>
                <tr>
                <td colspan="8">
                    <div style="clear: both"></div>
                </td>
                </tr>
                <?php 
                } else {
                ?>
                <tr>
                <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <style type="text/css">
            .col-md4.hinhthucthanhtoan .form-check{
                margin: 11px;
            }
            .btn-danger {
                margin-right: 150px;
            }
        </style>
        <div class="col-md-4">
            <h4>Phương thức thanh toán</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="tienmat" checked>
                <label class="form-check-label" for="exampleRadios1">Tiền mặt</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="chuyenkhoan">
                <label class="form-check-label" for="exampleRadios2">Chuyển khoản</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="exampleRadios3" value="mono">
                <img src="../images/MoMo_Logo.png" height="32" width="32">
                <label class="form-check-label" for="exampleRadios3">Momo</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="exampleRadios4" value="vnpay">
                <img src="../images/vnpay1.png" height="25" width="40">
                <label class="form-check-label" for="exampleRadios4">Vnpay</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="exampleRadios5" value="paypal">
                <img src="../images/paypal1.png" height="32" width="30">
                <label class="form-check-label" for="exampleRadios5">Paypal</label>
            </div>
            <p style="float: left;  margin-left: 20px;">Tổng tiền cần thanh toán: <?php echo number_format($tongtien,0,',','.').'vnđ'; ?></p><br/>
            <input type="submit" value="Thanh toán ngay" name="thanhtoanngay" class="btn btn-danger">
        </div>
    </div>
</div>
</form>