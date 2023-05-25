<?php
session_start();

date_default_timezone_set('Asia/Ho_Chi_Minh');
require './config/connect.php';
require './lib/cart.php';
require "./lib/add_cart.php";
require './lib/category_product.php';
require "./lib/login_hd.php";
require "./lib/register_hd.php";
require "./config/function.php";

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = "home";
}

$path = "./page/{$page}.php";

if (file_exists($path)) {
    if ($page =="register" or $page =="login" or $page=="logout") {
        require "$path";
    }
    else{
        require "./inc/header.php";
        require "$path";
        require "./inc/footer.php";
    }
}
else{
    require "./page/404.php";
}
