<?php

$sql_num_product = "SELECT san_pham.so_luong as sl , gio_hang.so_luong , san_pham.id_sp FROM san_pham,gio_hang where san_pham.id_sp=gio_hang.id_sp and gio_hang.id_tk='{$_SESSION["id"]}'";
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
        $sql_dh = "INSERT INTO don_hang (ten_nguoi_mua,ngay_mua,dia_chi,SĐT,email,giao_hang,id_tk,trang_thai) 
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
            $sql_ct_dh = "INSERT INTO ct_don_hang (id_tk,id_dh,id_sp,don_gia,tong_gia,so_luong)
            VALUES ('{$_SESSION['id']}','$id_dh','{$item['id_sp']}','{$item['gia_tien']}','{$item['tong_tien']}','{$item['so_luong']}') ";
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
            $num = $item['sl'] - $item['so_luong'];
            $sql_up_num = "UPDATE san_pham SET so_luong='$num' where id_sp ='{$item['id_sp']}' ";
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

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $sql_tttk = "SELECT * from tai_khoan where id_tk='{$id}'";
    $result_tttk = mysqli_query($conn, $sql_tttk);
    if (mysqli_num_rows($result_tttk) > 0) {
        while ($row = mysqli_fetch_assoc($result_tttk)) {
            $info_user = $row;
        }
    }
   
}
