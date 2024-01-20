<?php

session_start();
require '../config/connect.php';

if (isset($_SESSION['is_login'])) {
    $id = $_POST['id'];
    $sql_like = "SELECT * FROM yeu_thich,san_pham where yeu_thich.id_sp=san_pham.id_sp and san_pham.id_sp='$id'";
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


    $sql_de_like = "DELETE from yeu_thich where id_sp='$id' and id_tk='{$_SESSION['id']}'";
    $result_de_like = mysqli_query($conn, $sql_de_like);



    $num_like_up -= 1;

    echo "<div id='cart_product_btn' data-id='{$id} ' class='cart_product_btn'>
<i id='icon_like' class='fa-solid fa-thumbs-up'></i>
<div id='like_product' class='like_product'>{$num_like_up}</div>
</div>";

}

// echo $num_like_up;
// 
