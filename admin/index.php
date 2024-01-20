<?php
session_start();

require "../config/connect.php";
require "../config/function.php";

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = "login";
}


$path = "./page/{$page}.php";



if (file_exists($path)) {
    if ($page == "logout" or $page == "login" or $page == "delete_product" or $page == "delete_product_nb"  or $page == "delete_blog" or $page == "bill_detail") {
        require "$path";
    } else {
        if (isset($_SESSION["is_login_ad"])) {
            require './inc/header.php';
            require './inc/sidebar.php';
            require "{$path}";
            require './inc/footer.php';
        }
        else{
            header('location:?page=login');
        }
    }
} else {
    require "./page/404.php";
}


?>