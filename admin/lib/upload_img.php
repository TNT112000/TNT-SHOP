<?php

if(isset($_POST["upload_img_product"])){
    // THƯ MỤC CHỨA FILE UPLOAD
    $upload_dir="./public/image/upload/";
    // ĐƯỜNG DẪN FILE SAU KHI SỬA
    $upload_file=$upload_dir.$_FILES["image"]["name"];

    if(move_uploaded_file($_FILES['image']["tmp_name"],$upload_file))
    {
        $file_img=$_FILES["image"]["name"];
    }
    else{
        $error["file_img"]="upload file không thành công";
    }
    
}

?>