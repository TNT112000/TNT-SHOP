<?php 
if (isset($_SESSION["id"])) {
    $sql_cart_icon = "SELECT * FROM gio_hang where id_tk='{$_SESSION["id"]}'";
    $result_cart_icon = mysqli_query($conn, $sql_cart_icon);
    if (mysqli_num_rows($result_cart_icon) > 0) {
        while ($row = mysqli_fetch_assoc($result_cart_icon)) {
            $list_cart_icon[] = $row;
        }
    }
}
