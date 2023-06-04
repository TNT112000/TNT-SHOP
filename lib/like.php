<?php
session_start();
require '../config/connect.php';

if (isset($_SESSION['is_login'])) {
    $id = $_POST['id'];
    $sql_like = "SELECT * FROM yeu_thich,sản_phẩm where yeu_thich.id_sp=sản_phẩm.id_sp and sản_phẩm.id_sp='$id'";
    $result_like = mysqli_query($conn, $sql_like);
    if (mysqli_num_rows($result_like) > 0) {
        while ($row = mysqli_fetch_assoc($result_like)) {
            $num_like[] = $row;
        }
    }
    $num_like_up = 0;
    if (isset($num_like)) {
        foreach ($num_like as $item) {
            $num_like_up += $item['yeu_thich'];
        }
    }
    $num_like_up += 1;

    $sql_like_up = "INSERT INTO yeu_thich (yeu_thich,id_sp,id_tk) VALUES (1,'$id','{$_SESSION['id']}') ";
    $result_like_up = mysqli_query($conn, $sql_like_up);

    echo "<div id='cart_product_btn_1' data-id='{$id}' class='cart_product_btn'>
<i id='icon_like' class='fa-solid fa-check'></i>
<div id='like_product' class='like_product'>{$num_like_up}</div>
</div>";
}


// echo $num_like_up;