<h3 class="section-title">Chi tiết sản phẩm</h3>
<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.
        id_sanpham='$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
    <div class="hinhanh_sanpham">
        <img  width="100%" src="../admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
    </div>
    <form action="../pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="POST">
        <div class="chitiet_sanpham">
            <h3 style="margin-left: 80px;">Tên sản phẩm:<?php echo $row_chitiet['tensanpham'] ?></h3>
            <p>Mã sp: <?php echo $row_chitiet['masp']?></p>
            <p>Giá sp: <?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ' ?></p>
            <p>Số lượng sp: <?php echo $row_chitiet['soluong']?></p>
            <p>Danh mục sp: <?php echo $row_chitiet['tendanhmuc']?></p>
            <style>
        /* CSS code for styling the submit button */
            p input[type="submit"] {
                border: none;
                background: brown;
                color: #fff;
                padding: 12px;
                font-size: 15px;
                cursor: pointer;
                border-radius: 5px;
            }
        </style>
            <p><input type="submit" name="themgiohang" value="Thêm giỏ hàng"></p>
        </div>
    </form>
</div>
<div class="clear"></div>
    <div class="tabs">
    <ul id="tabs-nav">
        <li><a href="#tab1">Thông số kĩ thuật</a></li>
        <li><a href="#tab2">nội dung chi tiết</a></li>
        <li><a href="#tab3">Hình ảnh sản phẩm</a></li>
    </ul> <!-- END tabs-nav -->
    <div id="tabs-content">
        <div id="tab1" class="tab-content">
            <?php echo $row_chitiet['tomtat']?>
        </div>
        <div id="tab2" class="tab-content">
            <?php echo $row_chitiet['noidung']?>
        </div>
        <div id="tab3" class="tab-content" style="display: block;text-align: center;">
            <img  width="40%" src="../admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
        </div>
        </div>
    </div> <!-- END tabs-content -->
    </div> <!-- END tabs -->
<?php
    }
?>