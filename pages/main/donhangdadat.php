<p style="margin-left: 20px;">Chi tiết đơn hàng đã đặt</>
<div class="wraps">
    <div class="arrow-steps clearfix">
        <div class="progress current"><a href="index.php?quanly=giohang">Giỏ hàng</a></div>
        <div class="progress current"><a href="index.php?quanly=vanchuyen">Vận chuyển</a></div>
        <div class="progress current"><a href="index.php?quanly=thongtinthanhtoan">Thanh toán</a></div>
        <div class="progress current"><a href="index.php?quanly=donhangdadat">Lịch sử đơn hàng</a></div>
    </div>
    <h4>Lịch sử đơn hàng</h4>
    <table style="width:100%";margin-left: 150px; border="1" style="border-collapse: collapse;">
        <tr>
            <th>Id</th>
            <th>Mã đơn hàng</th>
            <th>Tên khách hàng</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Tình trạng</th>
            <th>Ngày đặt</th>
            <th>Quản lý</th>
        </tr>
        <?php
        $id_khachhang = $_SESSION['id_khachhang'];
        $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang = tbl_dangky.id_dangky AND tbl_cart.id_khachhang='$id_khachhang' ORDER BY tbl_cart.id_cart ASC";
        $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_dh)){
            $i++;
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['code_cart'] ?></td>
            <td><?php echo $row['tenkhachhang'] ?></td>
            <td><?php echo $row['diachi'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['dienthoai'] ?></td>
            <td>
                <?php if($row['cart_status'] == 1){
                    echo 'Đơn hàng mới';
                }else{
                    echo 'Đã xem';
                }
                ?>
            </td>
            <td><?php echo $row['cart_date'] ?></td>
            <td>
                <a href="index.php?quanly=donhangdadat&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>