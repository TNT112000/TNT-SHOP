<?php

$sql_num_product = "SELECT sản_phẩm.số_lượng as sl , gio_hang.số_lượng , sản_phẩm.id_sp FROM sản_phẩm,gio_hang where sản_phẩm.id_sp=gio_hang.id_sp and gio_hang.id_tk='{$_SESSION["id"]}'";
$result_num_product = mysqli_query($conn, $sql_num_product);
if (mysqli_num_rows($result_num_product) > 0) {
    while ($row = mysqli_fetch_assoc($result_num_product)) {
        $list_num_product[] = $row;
    }
};


$sql_num_product = "SELECT * FROM gio_hang where id_tk='{$_SESSION["id"]}'";
$result_cart = mysqli_query($conn, $sql_cart);
if (mysqli_num_rows($result_cart) > 0) {
    while ($row = mysqli_fetch_assoc($result_cart)) {
        $list_cart_bill[] = $row;
    }
}

if (isset($_POST["btn_bill"])) {

    if (!empty($_POST['name_user'])) {
        $name_user = $_POST['name_user'];
    } else {
        $error['bill_error'] = 'Không để trống thông tin';
    }
    if (!empty($_POST['email_user'])) {
        $email_user = $_POST['email_user'];
    } else {
        $error['bill_error'] = 'Không để trống thông tin';
    }
    if (!empty($_POST['phone_user'])) {
        $phone_user = $_POST['phone_user'];
    } else {
        $error['bill_error'] = 'Không để trống thông tin';
    }
    if (!empty($_POST['address_user'])) {
        $address_user = $_POST['address_user'];
    } else {
        $error['bill_error'] = 'Không để trống thông tin';
    }
    if (!empty($_POST['check_address'])) {
        $check_address = $_POST['check_address'];
    } else {
        $error['bill_error'] = 'Không để trống thông tin';
    }
    $tt = 'Chưa giao';

    if (empty($error)) {
        $sql_dh = "INSERT INTO don_hang (tên_người_mua,ngày_mua,địa_chỉ,SĐT,email,giao_hàng,id_tk,trạng_thái) 
        VALUES ('$name_user',NOW(),'$address_user','$phone_user','$email_user','$check_address','{$_SESSION['id']}','$tt')";
        $result_dh = mysqli_query($conn, $sql_dh);
        if ($result_dh) {
        } else {
            $error['bill_error'] = 'Đặt hàng không thành công đơn hàng ';
        }
    } else {
    }

    $id_dh = mysqli_insert_id($conn);
    if (!empty($id_dh)) {
        $sql_cart = "SELECT * FROM gio_hang where id_tk='{$_SESSION["id"]}'";
        $result_cart = mysqli_query($conn, $sql_cart);
        if (mysqli_num_rows($result_cart) > 0) {
            while ($row = mysqli_fetch_assoc($result_cart)) {
                $list_bill_ct[] = $row;
            }
        } else {
            $error['bill_error'] = 'Đặt hàng không thành công đơn hàng ';
        }

        foreach ($list_bill_ct as $item) {
            $sql_ct_dh = "INSERT INTO ct_don_hang (id_tk,id_dh,id_sp,đơn_giá,tổng_giá,số_lượng)
            VALUES ('{$_SESSION['id']}','$id_dh','{$item['id_sp']}','{$item['giá_tiền']}','{$item['tổng_tiền']}','{$item['số_lượng']}') ";
            $result_dht = mysqli_query($conn, $sql_ct_dh);
            if ($result_dht) {
                $sql_de_gh = "DELETE from gio_hang where id_tk='{$_SESSION['id']}'";
                $result_de_gh = mysqli_query($conn, $sql_de_gh);
            } else {
                $error['bill_error'] = 'Đặt hàng không thành công đơn hàng ';
            }
        }
    }
    if (empty($error)) {
        foreach ($list_num_product as $item) {
            $num = $item['sl'] - $item['số_lượng'];
            $sql_up_num = "UPDATE sản_phẩm SET số_lượng='$num' where id_sp ='{$item['id_sp']}' ";
            $result_up_num = mysqli_query($conn, $sql_up_num);
            if ($result_up_num) {
            } else {
                $error['bill_error'] = 'Đặt hàng không thành công đơn hàng ';
            }
        }
    }
    if (empty($error)) {
        echo "<script>window.location.href='?page=bill_detail&id={$id_dh}' </script>";
    }
}
