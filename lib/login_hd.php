<?php

if (isset($_POST["btn_login"])) {
    if (!empty($_POST["username"])) {
        $username = $_POST["username"];
    } else {
        $error["username"] = "Tên đăng nhập không được bỏ trống";
    }

    if (!empty($_POST["password"])) {
        $password = md5($_POST["password"]);
    } else {
        $error["password"] = "Mật khẩu không được bỏ trống";
    }

    if (empty($error)) {

        $sql = "SELECT * FROM tai_khoan where tên_đăng_nhập='$username'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $sql_1 = "SELECT * FROM tai_khoan where tên_đăng_nhập='$username' AND mật_khẩu='$password'";
            $result_1 = mysqli_query($conn, $sql_1);
            if (mysqli_num_rows($result_1) == 1) {
                $_SESSION["is_login"] = true;
                $_SESSION["username"] = $username;
                $row = mysqli_fetch_assoc($result_1);
                $id_user = $row["id_tk"];
                $level = $row["cấp_bậc"];
                $_SESSION['level']=$level;
                $_SESSION["id"] = $id_user;
                if ($level == 0) {
                  
                    header('Location:?page=home');
                }
                if($level == 1){
                  
                    header('location:./admin');
                }
            } else {
                $error["login"] = "Mật khẩu nhập sai";
                unset($password);
            }
        } else {
            $error["login"] = "Tên đăng nhập không tồn tại";
            unset($password);
        }
    }
    
}
