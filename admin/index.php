<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location:login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../admin/css/styleadmin.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
</head>
<body>
    <h3 class="title_admin">Hello Admin</h3>
    <div class="wrapper">
    <?php
            include("../admin/config/config.php");
            include("../admin/modules/header.php");
            include("../admin/modules/menu.php");
            include("../admin/modules/main.php");
            include("../admin/modules/footer.php");
    ?>
    </div>
    <script>
         CKEDITOR.replace("thongtinlienhe");
        CKEDITOR.replace("tomtat");
        CKEDITOR.replace("noidung");
    </script>   
</body>
</html>

