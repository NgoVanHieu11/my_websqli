<div class="main">
            <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <?php
                include("../pages/sidebar/sidebar.php")
            ?>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <div class="maincontent">
                <?php
                if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                }else{
                    $tam = '';
                }
                if($tam=='danhmucsanpham'){
                    include("../pages/main/danhmuc.php");
                }elseif($tam=='giohang'){
                    include("../pages/main/giohang.php");
                }elseif($tam=='danhmucbaiviet'){
                    include("../pages/main/danhmucbaiviet.php");
                }elseif($tam=='baiviet'){
                    include("../pages/main/baiviet.php");
                }elseif($tam=='tintuc'){
                    include("../pages/main/tintuc.php");
                }elseif($tam=='lienhe'){
                    include("../pages/main/lienhe.php");
                }elseif($tam=='sanpham'){
                    include("../pages/main/sanpham.php");
                }elseif($tam=='dangky'){
                    include("../pages/main/dangky.php");
                }elseif($tam=='thanhtoan'){
                    include("../pages/main/thanhtoan.php");
                }elseif($tam=='dangnhap'){
                    include("../pages/main/dangnhap.php");
                }elseif($tam=='timkiem'){
                    include("../pages/main/timkiem.php");
                }elseif($tam=='camon'){
                    include("../pages/main/camon.php");
                }elseif($tam=='thaydoimatkhau'){
                    include("../pages/main/thaydoimatkhau.php");
                }elseif($tam=='vanchuyen'){
                    include("../pages/main/vanchuyen.php");
                }elseif($tam=='thongtinthanhtoan'){
                    include("../pages/main/thongtinthanhtoan.php");
                }elseif($tam=='donhangdadat'){
                    include("../pages/main/donhangdadat.php");
                }elseif($tam=='lichsudonhang'){
                    include("../pages/main/lichsudonhang.php");
                }elseif($tam=='xemdonhang'){
                    include("../pages/main/xemdonhang.php");
                }else{
                    include("../pages/main/index.php");
                }
                ?>
            </div>
        </div>
        </div>
        </div>