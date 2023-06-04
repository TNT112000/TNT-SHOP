<?php

if (isset($_POST["btn_register"])) {
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

    if (!empty($_POST["password"])) {
        if (preg_match('/^.{6,32}$/', $_POST["password"])) {
            if (preg_match('/^[A-Za-z0-9]{6,32}$/', $_POST["password"])) {
                $password = $_POST["password"];
            } else {
                $error["password"] = "Mật khẩu không có ký tự đặc biệt";
            }
        } else {
            $error["password"] = "Mật khẩu từ 6-32 ky tự";
        }
    } else {
        $error["password"] = "Mật khẩu không để trống";
    }

    if (!empty($_POST["password_repeat"])) {
        if ($_POST["password_repeat"] == $_POST["password"]) {
            if (isset($password)) {
                $password_repeat = $password;
            }
        } else {
            $error["password_repeat"] = "Mật khẩu nhập lại chưa khớp";
        }
    } else {
        $error["password_repeat"] = "Mật khẩu chưa được nhập lại";
    }
    if (empty($error)) {
        $sql = "SELECT * from tai_khoan where tên_đăng_nhập='{$_POST["username"]}'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) < 1) {
            $password = md5($password);
            $level = '0';
            $sql = "INSERT INTO tai_khoan (tên_đăng_nhập,mật_khẩu,email,ngày_tạo,cấp_bậc) VALUES ('$username','$password','$email',NOW(),'$level')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $success["register"] = "Đăng ký thành công";
                unset($username);
                unset($password);
                unset($email);
                unset($password_repeat);
            }
        } else {
            $error["register"] = "Tên đăng nhập đã tồn tại";
           
        }
    }
    
}
