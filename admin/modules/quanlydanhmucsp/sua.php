<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc = '$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<p>Sửa danh mục sản phẩm</p>
    <table border="1" with="50%" style="border-collapse: collapse;">
        <form action="../admin/modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="POST">
            <?php
            While($dong = mysqli_fetch_array($query_sua_danhmucsp)){
            ?>
            <tr>
                <td>Tên danh mục</td>
                <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
            </tr>
            <tr>
                <td collapse="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
            </tr>
            <?php
            }
            ?>
        </from>
    </table>