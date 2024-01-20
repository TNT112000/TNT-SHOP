<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $nameImage = $_POST['nameImage'];
    $upload_dir = "../../public/image/upload/";
    // ĐƯỜNG DẪN FILE SAU KHI SỬA
    $upload_file = $upload_dir . $_FILES['file']['name'];

    if (move_uploaded_file($_FILES['file']["tmp_name"], $upload_file)) {
        $file_img = $_FILES["file"]["name"];
    } else {
        $error["file_img"] = "upload file không thành công";
    }
    echo $_FILES['file']['name'];
}

