<?php

if (isset($_GET['page']) and !isset($_SESSION["is_login"])) {
    if ($_GET['page'] =='cart') {
        header("location: ?page=home");
    }
}

if (isset($_SESSION["id"])) {
    $sql_cart = "SELECT * FROM gio_hang where id_tk='{$_SESSION["id"]}'";
    $result_cart = mysqli_query($conn, $sql_cart);
    if (mysqli_num_rows($result_cart) > 0) {
        while ($row = mysqli_fetch_assoc($result_cart)) {
            $list_cart[] = $row;
        }
    }
}
