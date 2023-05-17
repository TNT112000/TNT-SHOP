<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./public/css/reset.css" class="">
    <link rel="stylesheet" href="./public/css/style.css" class="">
    <link rel="stylesheet" href="./public/css/pseudo-class.css" class="">
    <script src="./public/js/item.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="main_app">
        <div class="header ">
            <div class="box_header ">
                <div class="box_header_page">
                    <div class="box_header_page_item">
                        <a class="header_home" href="?page=home">Trang chủ</a>
                        <ul class="list_item_page">
                            <li class=""><a href="?page=product" class="list_link_page">Sản phẩm</a></li>
                            <li class=""><a href="?page=blog" class="list_link_page">Blog</a></li>
                            <li class=""><a href="?page=introduce" class="list_link_page">Giới thiệu</a></li>
                            <li class=""><a href="?page=contact" class="list_link_page">Liên hệ</a></li>
                            <li class=""><a href="?page=register" class="list_link_page">Đăng ký</a></li>
                            <li class=""><a href="?page=login" class="list_link_page">Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
                <div class="box_header_item">
                    <div class="box_header_item_item">
                        <div class="header_logo"><img class="img_logo" src="./public/image/upload/TNT.png" alt=""></div>
                        <div class="box_search">
                            <form action="" class="header_form_search" method="post">
                                <input type="text" class="header_search" placeholder="Nhập từ khóa tìm kiếm tại đây">
                                <button type="submit" class="header_form_btn">Tìm Kiếm</button>
                            </form>
                        </div>
                        <div class="box_header_contact">
                            <div class="box_header_contact_icon">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="box_header_contact_item">
                                <div class="box_header_contact_text">Tư vấn</div>
                                <div class="box_header_contact_text">0972.612.200</div>
                            </div>
                        </div>
                        <div class="box_header_cart">
                            <div class="box_header_cart_item">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>