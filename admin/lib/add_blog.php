<?php

if (isset($_POST['btn_add_blog'])) {
    if (!empty($_POST['name_blog'])) {
        $name_blog = $_POST['name_blog'];
    } else {
        $error['name_blog'] = "Tên bài viết không được để trống";
    }
    $upload_dir = "../public/image/upload/";
    // ĐƯỜNG DẪN FILE SAU KHI SỬA
    $upload_file = $upload_dir . $_FILES["image_blog"]["name"];

    if (move_uploaded_file($_FILES['image_blog']["tmp_name"], $upload_file)) {
        if (!empty($_FILES["image_blog"]["name"])) {
            $image_blog = $_FILES["image_blog"]["name"];
        } else {
            $error["image_blog"] = "Ảnh bài viết không được bỏ trống";
        }
    }
    if (!empty($_POST['detail_blog'])) {
        $detail_blog = $_POST['detail_blog'];
    } else {
        $error['detail_blog'] = "Nội dung bài viết không được để trống";
    }

    if(empty($error)){
        $sql="INSERT INTO bai_viet (ten_bai_viet,noi_dung,anh_bai_viet,ngay_dang)
        VALUES ('$name_blog','$detail_blog','$image_blog',NOW())";
        $result=mysqli_query($conn,$sql);
        if($result){
            $error["add_blog"]="Thêm thành công";
        } else {
            echo mysqli_connect_errno();
        }
    }
   
}

