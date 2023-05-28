<?php
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
        $name_user = $_POST['phone_user'];
    } else {
        $error['bill_error'] = 'Không để trống thông tin';
    }
    if (!empty($_POST['address_user'])) {
        $address_user = $_POST['address_user'];
    } else {
        $error['bill_error'] = 'Không để trống thông tin';
    }
    if (!empty($_POST['phone_user'])) {
        $phone_user = $_POST['phone_user'];
    } else {
        $error['bill_error'] = 'Không để trống thông tin';
    }

    if (!empty($_POST['check_address'])) {
        $check_address = $_POST['check_address'];
    } else {
        $error['bill_error'] = 'Không để trống thông tin';
    }

    if (empty($error)) {
        $sql_dh = "INSERT INTO don_hang (tên_người_mua,ngày_mua,địa_chỉ,SĐT,email,giao_hàng,id_tk) 
        VALUES ('$name_user',NOW(),'$address_user','$phone_user','$email_user','$check_address','{$_SESSION['id']}')";
        $result_dh = mysqli_query($conn, $sql_dh);
        if ($result_dh) {
            $error['bill_error'] = 'Đặt hàng thành công';
        } else {
            mysqli_info($conn);
        }
    }

    $id_dh = mysqli_insert_id($conn);


    $sql_cart = "SELECT * FROM gio_hang where id_tk='{$_SESSION["id"]}'";
    $result_cart = mysqli_query($conn, $sql_cart);
    if (mysqli_num_rows($result_cart) > 0) {
        while ($row = mysqli_fetch_assoc($result_cart)) {
            $list_bill_ct[] = $row;
        }
    }

    foreach ($list_bill_ct as $item) {
        $sql_ct_dh = "INSERT INTO ct_don_hang (id_tk,id_dh,id_sp,đơn_giá,tổng_giá,số_lượng)
            VALUES ('{$_SESSION['id']}','$id_dh','{$item['id_sp']}','{$item['giá_tiền']}','{$item['tổng_tiền']}','{$item['số_lượng']}') ";
        $result_dht = mysqli_query($conn, $sql_ct_dh);
        if ($result_dht) {
            $error['bill_error'] = 'Đặt hàng thành công';
        }
    }
    header('location:?page=bill_detail');
}
