<?php
if (isset($_SESSION['level'])) {
    if (($_SESSION['level']) == 1) {
        header('location: ?page=login');
    }
}

require './lib/list_cart_icon.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./font-awesome/css/all.css" class="">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" class="">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" class="">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="./public/css/reset.css" class="">
    <link rel="stylesheet" href="./public/css/style.css" class="">
    <link rel="stylesheet" href="./public/css/pseudo-class.css" class="">
    <script src="./public/js/item.js"></script>
    <title> TNT - SHOP </title>
</head>

<body>
    <div class="main_app">
        <div class="header ">
            <div class="box_header ">
                <div class="box_header_page">
                    <div class="box_header_page_item">
                        <a class="header_home" href="?page=home"> Trang chủ </a>
                        <ul class="list_item_page">
                            <li class="">
                                <a href="?page=product" class="list_link_page"> Sản phẩm </a>
                            </li>
                            <li class="">
                                <a href="?page=blog" class="list_link_page"> Blog </a>
                            </li>
                            <li class="">
                                <a href="?page=introduce" class="list_link_page"> Giới thiệu </a>
                            </li>
                            <li class="">
                                <a href="?page=contact" class="list_link_page"> Liên hệ </a>
                            </li>
                            <?php if (isset($_SESSION["is_login"])) {
                                if ($_SESSION["is_login"]) { ?> <div class="header_user">
                                        <li class="">
                                            <a class="list_link_page"> <?php echo $_SESSION["username"] ?> </a>
                                        </li>
                                        <div class="img_user">
                                            <img src="./public/image/upload/user_image.png" alt="" class="img_user_item">
                                        </div>
                                        <div class="box_list_user">
                                            <ul class="list_user">
                                            <li class="list_user_item">
                                                    <a href="?page=history_bill" class="list_user_item_link"> Lịch sử mua hàng </a>
                                                </li>
                                                <li class="list_user_item">
                                                    <a href="" class="list_user_item_link"> Thông tin quản lý </a>
                                                </li>
                                                <li class="list_user_item">
                                                    <a href="?page=logout" class="list_user_item_link"> Đăng xuất </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php
                                }
                            } else {
                                ?> <li class="">
                                    <a href="?page=register" class="list_link_page"> Đăng ký </a>
                                </li>
                                <li class="">
                                    <a href="?page=login" class="list_link_page"> Đăng nhập </a>
                                </li> <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="box_header_item">
                    <div class="box_header_item_item">
                        <div class="header_logo">
                            <img class="img_logo" src="./public/image/upload/TNT.png" alt="">
                        </div>
                        <div class="box_search">
                            <form action="?page=search" class="header_form_search" method="post">
                                <input type="text" class="header_search" name="search_name_product" placeholder="Nhập từ khóa tìm kiếm tại đây">
                                <button type="submit" name="search_header" class="header_form_btn"> Tìm Kiếm </button>
                            </form>
                        </div>
                        <div class="box_header_contact">
                            <div class="box_header_contact_icon">
                                <i class="fa-solid fa-phone-volume">
                                </i>
                            </div>
                            <div class="box_header_contact_item">
                                <div class="box_header_contact_text"> Tư vấn </div>
                                <div class="box_header_contact_text"> 0972.612 .200 </div>
                            </div>
                        </div>
                        <div class="box_header_cart">
                            <div class="hover_cart_header">
                                <a href="?page=cart" class="box_header_cart_item">
                                    <i class="fa-solid fa-cart-shopping">
                                    </i>
                                </a>
                                <div class="box_cart_hover">

                                    <a href="?page=cart" class="cart_hover_item">
                                        <?php
                                        if (isset($list_cart_icon)) {
                                            foreach ($list_cart_icon as $item) {
                                        ?>
                                                <div class="cart_hover_item_list">
                                                    <div class="cart_hover_item_img">
                                                        <img src="./public/image/upload/<?php echo $item['ảnh_sản_phẩm'] ?>" alt="" class="cart_hover_item_img_item">
                                                    </div>
                                                    <div class="cart_hover_item_name"> <?php echo $item['tên_sản_phẩm'] ?> x <?php echo $item['số_lượng'] ?> </div>
                                                </div>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <div class="cart_hover_item_list_no">
                                                <div class="cart_hover_item_name"> BẠN CHƯA CÓ SẢN PHẨM </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </a>
                                    <div class="cart_hover_item_url">
                                        <a href="?page=cart" class="cart_hover_item_link"> Vào giỏ hàng </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>