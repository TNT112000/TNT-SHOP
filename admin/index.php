
<?php
session_start();
require "../config/connect.php";
require "../config/function.php";

if(!$_SESSION["is_login"]){
    header('location: ../?page=home');
}

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = "list_product";
}


$path = "./page/{$page}.php";



if (file_exists($path)) {
    if($page=="logout" or  $page=="delete_product" or $page=="delete_product_nb"  or $page=="delete_blog" or $page=="bill_detail"){
        require "$path";
    }
    else{
    require './inc/header.php';
    require './inc/sidebar.php';
    require "{$path}";
    require './inc/footer.php';
    }
} else {
    require "./page/404.php";
}


?>