<?php

$sql_3 = "SELECT * from gio_hang where id_sp='$id' and id_tk='{$_SESSION["id"]}'";
$result_3 = mysqli_query($conn, $sql_3);
if (mysqli_num_rows($result_3) > 0) {
    $add_cart_status = 'Đã thêm';
} else {
    $add_cart_status = 'Thêm giỏ hàng';
}

if (isset($_POST["add_cart"])) {

    if (isset($_SESSION["is_login"])) {
        $id = $_GET["id"];
        $sql = "SELECT * FROM sản_phẩm where id_sp='$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $detail_product_1[] = $row;
            }
        }

        $sql_2 = "SELECT * from gio_hang where id_sp='$id' and id_tk='{$_SESSION["id"]}'";
        $result_2 = mysqli_query($conn, $sql_2);
        if (mysqli_num_rows($result_2) > 0) {
        } else {

            foreach ($detail_product_1 as $item) {
                $sql_1 = "INSERT INTO gio_hang (tên_sản_phẩm , ảnh_sản_phẩm , giá_tiền , id_sp , id_tk) 
                Values ('{$item["tên_sản_phẩm"]}','{$item["ảnh_sản_phẩm"]}','{$item["giá_tiền"]}','$id','{$_SESSION["id"]}')";
                $result_1 = mysqli_query($conn, $sql_1);
                if ($result_1) {
                    
                } else {
                    echo 'Không thành công ' . mysqli_error($conn);;
                }

                $add_cart_status = 'Đã thêm';
            }
        }
    } else {

        header("location: ?page=login");
    }
}
