<?php
    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }else{
        $page = '';
    }
    if($page == '' || $page == 1){
        $begin = 0;
    }else{
        $begin = ($page*3)-3;
    }
    $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY 
        tbl_sanpham.id_sanpham DESC LIMIT $begin,3";
    $query_pro = mysqli_query($mysqli,$sql_pro);
?>
<h2 class="section-title">Sản phẩm mới nhất</h2>
<div class="product-grid">
    <?php
        while($row = mysqli_fetch_array($query_pro)){
    ?>    
    <div class="product-item">
        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
            <img class="product-img" src="../admin/modules/quanlysp/uploads/<?php echo $row['hinhanh']; ?>" alt="<?php echo $row['tensanpham']; ?>">
            <p class="product-title"><?php echo $row['tensanpham'] ?></p>
            <p class="product-price"><?php echo number_format($row['giasp'],0,',','.').' vnđ' ?></p>
            <p class="product-category"><?php echo $row['tendanhmuc'] ?></p>
        </a>
    </div>
    <?php
    }
    ?>
</div>
<div style="clear:both;"></div>
<style type="text/css">
    ul.list_trang{
        padding: 0;
        margin: 0;
        list-style: none;
        display: flex;
        justify-content: center;
        float: left;
        margin-left: 40px;
        margin-bottom: 10px;
    }
    ul.list_trang li{
        padding: 10px 15px;
        margin: 0 5px;
        background: #f0f0f0;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    ul.list_trang li:hover {
        background-color: #d1d1d1;
    }
    ul.list_trang li a{
        color: #000;
        text-align: center;
        text-decoration: none;
    }
    ul.list_trang li.active {
        background-color: #ff4500;
        color: #fff;
    }
</style>
<?php
$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
$row_count = mysqli_num_rows($sql_trang); 
$trang = ceil($row_count/3);
?>
<p style="margin-left: 50px; margin-top: 10px;">Trang hiện tại: <?php echo $page ?>/<?php echo $trang ?></p>
<ul class="list_trang">
    <?php
        for($i=1;$i<=$trang;$i++){
    ?>
    <li class="<?php if($i==$page){echo 'active';} ?>">
        <a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a>
    </li>
    <?php 
        }
    ?>
</ul>