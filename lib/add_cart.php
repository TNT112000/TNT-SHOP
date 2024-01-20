<?php

if (isset($_SESSION["id"])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql_3 = "SELECT * from gio_hang where id_sp='$id' and id_tk='{$_SESSION["id"]}'";
        $result_3 = mysqli_query($conn, $sql_3);
        if (mysqli_num_rows($result_3) > 0) {
            $add_cart_status = 'Đã thêm';
        } else {
            $add_cart_status = 'Thêm giỏ hàng';
        }
    }
} else {
    $add_cart_status = 'Thêm giỏ hàng';
}


if (isset($_POST["add_cart"])) {
    if (isset($_SESSION["is_login"])) {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM san_pham where id_sp='$id'";
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
                    $sql_1 = "INSERT INTO gio_hang (ten_san_pham , anh_san_pham , gia_tien , id_sp , id_tk, tong_tien , so_luong) 
                Values ('{$item["ten_san_pham"]}','{$item["anh_san_pham"]}','{$item["gia_tien"]}','$id','{$_SESSION["id"]}','{$item["gia_tien"]}','1')";
                    $result_1 = mysqli_query($conn, $sql_1);
                    if ($result_1) {
                    } else {
                        echo 'Không thành công ' . mysqli_error($conn);;
                    }

                    $add_cart_status = 'Đã thêm';
                }
            }
        }
    } else {
        header('location: ?page=login');
    }
    
}
