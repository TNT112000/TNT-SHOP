<?php

if(isset($_GET["page"])){
    $page=$_GET["page"];
}
else{
    $page="home";
}


$path="./page/{$page}.php";
require './inc/header.php';
require './inc/sidebar.php';
if(file_exists($path)){
    require "{$path}";

}
else{
    require "./page/404.php";
}
require './inc/footer.php';

?>