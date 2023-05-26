<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_pr = "SELECT * from sản_phẩm where id_sp='{$id}'";
    $result_pr = mysqli_query($conn, $sql_pr);
    if (mysqli_num_rows($result_pr) > 0) {
        while ($row = mysqli_fetch_assoc($result_pr)) {
            $update_sp = $row;
        }
    }
}

if (isset($_POST['update_product'])) {

    if (empty($_FILES["image_product"]["name"])) {
        $image_product = $update_sp["ảnh_sản_phẩm"];
    } else {
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
    }
    if (!empty($_POST["name_product"])) {
        $name_product = $_POST["name_product"];
    } else {
        $error["name_product"] = "Tên sản phẩm không được bot trống";
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
        $id = $_GET['id'];
        $sql_1 = "UPDATE sản_phẩm SET tên_sản_phẩm='$name_product', mã_sản_phẩm='$ma_product' , số_lượng='$num_product' , ảnh_sản_phẩm='$image_product' , mô_tả='$detail_product' , cấu_hình='$des_product' , tên_danh_mục='$category_product' , giá_tiền='$price_product' WHERE id_sp='{$id}'";
        $result1 = mysqli_query($conn, $sql_1);
        if ($result1) {
            $error["add_product"] = "Chỉnh sửa thành công";
        } else {
            echo mysqli_connect_errno();
        }
    }
}
