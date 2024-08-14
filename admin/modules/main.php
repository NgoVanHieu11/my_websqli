<div class="clear"></div>
<div class="main">
    <?php
                if(isset($_GET['action']) && $_GET['query']){
                    $tam = $_GET['action'];
                    $query = $_GET['query'];
                }else{
                    $tam = '';
                    $query = '';
                }
                if($tam=='quanlydanhmucsanpham' && $query=='them'){
                    include("../admin/modules/quanlydanhmucsp/them.php");
                    include("../admin/modules/quanlydanhmucsp/lietke.php");
                }elseif($tam=='quanlydanhmucsanpham' && $query=='sua'){
                    include("../admin/modules/quanlydanhmucsp/sua.php");
                }elseif($tam=='quanlysp' && $query=='them'){
                    include("../admin/modules/quanlysp/them.php");
                    include("../admin/modules/quanlysp/lietke.php");
                }elseif($tam=='quanlysp' && $query=='sua'){
                    include("../admin/modules/quanlysp/sua.php");
                }elseif($tam=='quanlydonhang' && $query=='lietke'){
                    include("../admin/modules/quanlydonhang/lietke.php");
                }elseif($tam=='donhang' && $query=='xemdonhang'){
                    include("../admin/modules/quanlydonhang/xemdonhang.php");
                }elseif($tam=='quanlydanhmucbaiviet' && $query=='them'){
                    include("../admin/modules/quanlydanhmucbaiviet/them.php");
                    include("../admin/modules/quanlydanhmucbaiviet/lietke.php");
                }elseif($tam=='quanlydanhmucbaiviet' && $query=='sua'){
                    include("../admin/modules/quanlydanhmucbaiviet/sua.php");
                }elseif($tam=='quanlybaiviet' && $query=='them'){
                    include("../admin/modules/quanlybaiviet/them.php");
                    include("../admin/modules/quanlybaiviet/lietke.php");
                }elseif($tam=='quanlybaiviet' && $query=='sua'){
                    include("../admin/modules/quanlybaiviet/sua.php");
                }elseif($tam=='quanlyweb' && $query=='capnhat'){
                    include("../admin/modules/thongtin/quanly.php");
                }else{
                    include("../admin/modules/dashboard.php");
                }
    ?>
</div>