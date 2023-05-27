<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../Ckeditor/ckeditor/ckeditor.js"></script>
    <script src="../Ckeditor/ckfinder/ckfinder.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="../font-awesome/css/all.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./public/css/reset.css" class="">
    <link rel="stylesheet" href="./public/css/pseudo-class.css" class="">
    <link rel="stylesheet" href="./public/css/style.css" class="">
    <script src="./public/js/setup.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="main_admin ">
        <nav class="navbar navbar-expand-lg bg-body-tertiary header">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse header_box" id="navbarNav">
                    <ul class="navbar-nav header_box_item">
                        <li class="nav-item ">
                            <a class="navbar-brand header_box_item_link" href="?page=home">ADMIN</a>
                        </li>
                        <?php if (isset($_SESSION["is_login"])) {
                            if ($_SESSION["is_login"]) { ?><div class="header_user">
                                    <li class=""><a class="list_link_page"><?php echo $_SESSION["username"] ?></a></li>
                                    <div class="img_user"><img src="../public/image/upload/user_image.png" alt="" class="img_user_item"></div>
                                    <div class="box_list_user">
                                        <ul class="list_user">
                                            <li class="list_user_item"><a href="" class="list_user_item_link">Lịch sử mua hàng</a></li>
                                            <li class="list_user_item"><a href="" class="list_user_item_link">Thông tin cá nhân</a></li>
                                            <li class="list_user_item"><a href="?page=logout" class="list_user_item_link">Đăng xuất</a></li>
                                        </ul>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
</body>

</html>