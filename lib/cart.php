<?php

if (isset($_GET['page']) and !isset($_SESSION["is_login"])) {
    if ($_GET['page'] =='cart') {
        header("location: ?page=home");
    }
}

if (isset($_SESSION["id"])) {
    $sql_cart = "SELECT gio_hang.* , sản_phẩm.số_lượng as all_num FROM gio_hang, sản_phẩm where sản_phẩm.id_sp=gio_hang.id_sp and id_tk='{$_SESSION["id"]}'";
    $result_cart = mysqli_query($conn, $sql_cart);
    if (mysqli_num_rows($result_cart) > 0) {
        while ($row = mysqli_fetch_assoc($result_cart)) {
            $list_cart[] = $row;
        }
    }
    
}

