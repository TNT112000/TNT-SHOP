<?php
$sql_bl = "SELECT * from lien_he ";
$result_bl = mysqli_query($conn, $sql_bl);
if (mysqli_num_rows($result_bl) > 0) {
    while ($row = mysqli_fetch_assoc($result_bl)) {
        $update_contact = $row;
    }
}


if (isset($_POST['update_contact'])) {

    if (!empty($_POST["name_contact"])) {
        $name_contact = $_POST["name_contact"];
    } else {
        $error["name_contact"] = " Không được bỏ trống hãy điền vào";
    }
    if (!empty($_POST["detail_contact"])) {
        $detail_contact = $_POST["detail_contact"];
    } else {
        $error["detail_contact"] = " Không được bỏ trống hãy điền vào";
    }
    if (!empty($_POST["header_contact"])) {
        $header_contact = $_POST["header_contact"];
    } else {
        $error["header_contact"] = " Không được bỏ trống hãy điền vào";
    }

    if (empty($error)) {
        $sql_1 = "UPDATE lien_he SET tên_liên_hệ='$name_contact', liên_hệ='$detail_contact' , mở_đầu ='$header_contact'";
        $result1 = mysqli_query($conn, $sql_1);
        if ($result1) {
            $error["add_contact"] = "Chỉnh sửa thành công";
        } else {
            echo mysqli_connect_errno();
        }
    }
   
}

