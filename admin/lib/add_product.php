<?php

if (isset($_POST["btn_add_product"])) {

    $upload_dir = "../public/image/upload/";
    // ĐƯỜNG DẪN FILE SAU KHI SỬA
    $upload_file = $upload_dir . $_FILES["image_product"]["name"];

    if (move_uploaded_file($_FILES['image_product']["tmp_name"], $upload_file)) {
        if (!empty($_FILES["image_product"]["name"])) {
            $image_product = $_FILES["image_product"]["name"];
        } else {
            $error["file_img"] = "Ảnh sản phẩm không được bỏ trống";
        }
    } else {
        $error["file_img"] = "upload file không thành công";
    }
    if (!empty($_POST["name_product"])) {
        $name_product = $_POST["name_product"];
    } else {
        $error["name_product"] = "Tên sản phẩm không được bỏ trống";
    }
    if (!empty($_POST["price_product"])) {
        $price_product = $_POST["price_product"];
    } else {
        $error["price_product"] = "Gía sản phẩm không được bỏ trống";
    }
    if (!empty($_POST["des_product"])) {
        $des_product = $_POST["des_product"];
    } else {
        $error["des_product"] = "Mô tả ngắn không được bỏ trống";
    }
    if (!empty($_POST["detail_product"])) {
        $detail_product = $_POST["detail_product"];
    } else {
        $error["detail_product"] = "Chi tiết không được bỏ trống";
    }

    if (!empty($_POST["ma_product"])) {
        $ma_product = $_POST["ma_product"];
    } else {
        $error["ma_product"] = "Mã sản phẩm không được bỏ trống";
    }

    if (!empty($_POST["num_product"])) {
        $num_product = $_POST["num_product"];
    } else {
        $error["num_product"] = "Số lượng không được bỏ trống";
    }

    if (!empty($_POST["category_product"])) {
        $category_product = $_POST["category_product"];
    } else {
        $error["category_product"] = "Danh mục không được bỏ trống";
    }


    if (empty($error)) {
        $sql_1 = "SELECT * from san_pham where ten_san_pham='$name_product' and ma_san_pham='$ma_product'";
        $result1 = mysqli_query($conn, $sql_1);
        if (mysqli_num_rows($result1) > 0) {
            $product = mysqli_fetch_assoc($result1);
            $num_product = $product["so_luong"] + $num_product;
            $sql_2 = "UPDATE san_pham SET so_luong='$num_product' WHERE id_sp='{$product["id_sp"]}'";
            $result2 = mysqli_query($conn, $sql_2);
        } else {
            $sql = "INSERT INTO san_pham (ten_san_pham, ma_san_pham, ten_danh_muc, gia_tien, so_luong, anh_san_pham, mo_ta, cau_hinh) 
        VALUES ('$name_product', '$ma_product', '$category_product', '$price_product', '$num_product', '$image_product', '$detail_product', '$des_product')";

            if (mysqli_query($conn, $sql)) {
                $error["add_product"]="Thêm thành công";
            } else {
                echo mysqli_connect_errno();
            }
        }
    }
   
}
