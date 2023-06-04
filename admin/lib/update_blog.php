<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_bl_1 = "SELECT * from bai_viet where id_bv='{$id}'";
    $result_bl_1 = mysqli_query($conn, $sql_bl_1);
    if (mysqli_num_rows($result_bl_1) > 0) {
        while ($row = mysqli_fetch_assoc($result_bl_1)) {
            $update_blog_1 = $row;
        }
    }
    
}

if (isset($_POST['update_blog'])) {
    if (empty($_FILES["image_blog"]["name"])) {
        $image_blog = $update_blog_1["ảnh_bài_viết"];
    } else {
        $upload_dir = "../public/image/upload/";
        // ĐƯỜNG DẪN FILE SAU KHI SỬA
        $upload_file = $upload_dir . $_FILES["image_blog"]["name"];

        if (move_uploaded_file($_FILES['image_blog']["tmp_name"], $upload_file)) {
            if (!empty($_FILES["image_blog"]["name"])) {
                $image_blog = $_FILES["image_blog"]["name"];
            } else {
                $error["image_blog"] = "Ảnh sản phẩm không được bỏ trống";
            }
        } else {
            $error["image_blog"] = "upload file không thành công";
        }
    }
    if (!empty($_POST["name_blog"])) {
        $name_blog = $_POST["name_blog"];
    } else {
        $error["name_blog"] = "Tên sản phẩm không được bot trống";
    }
    if (!empty($_POST["detail_blog"])) {
        $detail_blog = $_POST["detail_blog"];
    } else {
        $error["detail_blog"] = "Tên sản phẩm không được bot trống";
    }

    if (empty($error)) {
        $id = $_GET['id'];
        $sql_1 = "UPDATE bai_viet SET tên_bài_viết='$name_blog', nội_dung='$detail_blog' , ảnh_bài_viết='$image_blog' WHERE id_bv='{$id}'";
        $result1 = mysqli_query($conn, $sql_1);
        if ($result1) {
            $error["add_blog"] = "Chỉnh sửa thành công";
        } else {
            echo mysqli_connect_errno();
        }
    }
    
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_bl = "SELECT * from bai_viet where id_bv='{$id}'";
    $result_bl = mysqli_query($conn, $sql_bl);
    if (mysqli_num_rows($result_bl) > 0) {
        while ($row = mysqli_fetch_assoc($result_bl)) {
            $update_blog = $row;
        }
    }
   
}
