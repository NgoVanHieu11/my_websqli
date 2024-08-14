<p>Giỏ hàng
  <?php
    if(isset($_SESSION['dangky'])){
      echo 'Xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
    } 
  ?>
</p>

<div class="wrap">
  <div class="arrow-steps clearfix">
    <div class="progress current"><a href="index.php?quanly=giohang">Giỏ hàng</a></div>
    <div class="progress"><a href="index.php?quanly=vanchuyen">Vận chuyển</a></div>
    <div class="progress"><a href="index.php?quanly=thongtinthanhtoan">Thanh toán</a></div>
    <div class="progress"><a href="index.php?quanly=donhangdadat">Lịch sử đơn hàng</a></div>
  </div>
  <table style="width: 100%; text-align: center; border-collapse: collapse;" border="1">
    <tr>
      <td>Id</td>
      <td>Mã sp</td>
      <td>Tên sản phẩm</td>
      <td>Hình ảnh</td>
      <td>Số lượng</td>
      <td>Giá sản phẩm</td>
      <td>Thành tiền</td>
      <td>Quản lý</td>
    </tr>
    <?php
      if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
          $i = 0;
          $tongtien = 0;
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
      <td><a href="../pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></td>
    </tr>
    <?php
          }
    ?>
    <tr>
      <td colspan="8">
          <p style="float: left;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ'; ?></p><br/>
          <p style="float: right;"><a href="../pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
          <div style="clear: both"></div>
          <?php
            if(isset($_SESSION['dangky'])){
          ?>
            <p><a href="../pages/index.php?quanly=vanchuyen">Hình thức vận chuyển</a></p>
          <?php
            }else{
          ?>
          <p><a href="../pages/index.php?quanly=dangky">Đăng ký đặt hàng</a></p>
          <?php
            }
          ?>
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