<?php



if (isset($_POST['update_introduce'])) {
    
    if (!empty($_POST["name_introduce"])) {
        $name_introduce = $_POST["name_introduce"];
    } else {
        $error["name_introduce"] = "Tên sản phẩm không được bỏ trống";
    }
    if (!empty($_POST["detail_introduce"])) {
        $detail_introduce = $_POST["detail_introduce"];
    } else {
        $error["detail_introduce"] = "Tên sản phẩm không được bỏ trống";
    }
    if (!empty($_POST["header_introduce"])) {
        $header_introduce = $_POST["header_introduce"];
    } else {
        $error["header_introduce"] = "Tên sản phẩm không được bỏ trống";
    }

    if (empty($error)) {
        $sql_1 = "UPDATE gioi_thieu SET tên_giới_thiệu='$name_introduce', nội_dung='$detail_introduce' , mở_đầu ='$header_introduce'";
        $result1 = mysqli_query($conn, $sql_1);
        if ($result1) {
            $error["add_introduce"] = "Chỉnh sửa thành công";
        } else {
            echo mysqli_connect_errno();
        }
    }
   
}


$sql_bl = "SELECT * from gioi_thieu ";
$result_bl = mysqli_query($conn, $sql_bl);
if (mysqli_num_rows($result_bl) > 0) {
    while ($row = mysqli_fetch_assoc($result_bl)) {
        $update_introduce= $row;
    }
}
