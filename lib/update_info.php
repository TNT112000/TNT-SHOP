
<?php



if (isset($_POST["btn_info_user"])) {
    if (!empty($_POST["username"])) {
        if (preg_match('/^.{6,32}$/', $_POST["username"])) {
            if (preg_match('/^[A-Za-z]/', $_POST["username"])) {
                if (preg_match('/^[A-Za-z][A-Za-z0-9]{5,31}$/', $_POST["username"])) {
                    $username = $_POST["username"];
                } else {
                    $error["username"] = "Tên đăng nhập không có ký tự đặc biệt";
                }
            } else {
                $error["username"] = "Tên đăng nhập bắt đầu bằng chữ hoa hoặc chữ thường";
            }
        } else {
            $error["username"] = "Tên đăng nhập từ 6-32 ky tự";
        }
    } else {
        $error["username"] = "Tên đăng nhập không để trống";
    }

    if (!empty($_POST["email"])) {
        if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $_POST["email"])) {
            $email = $_POST["email"];
        } else {
            $error["email"] = "Email không đúng định dạng";
        }
    } else {
        $error["email"] = "Email không để trống";
    }

    if (!empty($_POST["phone"])) {
        if (preg_match('/^(\d{10,12}|\d{3}[-\s]\d{3}[-\s]\d{4})$/', $_POST["phone"])) {
            $phone = $_POST["phone"];
        } else {
            $error["phone"] = "Số điện thoại phải từ 0-9 và có từ 10-12 số";
        }
    } 
    if (!empty($_POST["address"])) {
        $address = $_POST["address"];
    } else {
        $address = "";
    }

    if (empty($error)) {
        $id = $_SESSION['id'];
        $sql_1 = "UPDATE tai_khoan SET ten_dang_nhap='$username', email='$email' , dien_thoai='$phone' , dia_chi='$address' WHERE id_tk='{$id}'";
        $result1 = mysqli_query($conn, $sql_1);
        if ($result1) {
            $error["update_info"] = "Chỉnh sửa thành công";
        } else {
            echo mysqli_connect_errno();
        }
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

?>
