<p>Quản lý thông tin Website</p>
<?php
    $sql_lh = "SELECT * FROM tbl_lienhe WHERE id = 1";
    $query_lh = mysqli_query($mysqli,$sql_lh);
?>
<table border="1" with="100%" style="border-collapse: collapse;">
    <?php
        While($dong = mysqli_fetch_array($query_lh)){    
    ?>   
    <form action="../admin/modules/thongtin/xuly.php?id=<?php echo $dong['id'] ?>" method="POST" enctype="multipart/form-data">
        <tr>
            <td>Thông tin liên hệ</td>
            <td><textarea rows="10" name="thongtinlienhe" style="resize: none;"><?php echo $dong['thongtinlienhe'] ?></textarea></td>
        </tr>
        <tr>
            
            <td collapse="2"><input type="submit" name="capnhatlienhe" value="Cập nhật"></td>
        </tr>
        <?php
        }
        ?>
    </from>
</table>