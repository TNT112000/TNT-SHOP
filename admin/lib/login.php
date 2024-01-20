<?php

if(isset($_POST['btn_login'])){
    if(!empty($_POST['username'])){
        $username=$_POST['username'];
    }
    else{
        $error['username']='Tên đăng nhập không được bỏ trống';
    }

    if (!empty($_POST["password"])) {
        $password = ($_POST["password"]);
    } else {
        $error["password"] = "Mật khẩu không được bỏ trống";
    }

    if(empty($error)){
        $sql_1="SELECT * from tai_khoan_ad Where ten_dang_nhap='$username'  ";
        $result_1=mysqli_query($conn,$sql_1);
        if(mysqli_num_rows($result_1)>0){
            $sql_2="SELECT * FROM tai_khoan_ad where mat_khau='$password' and ten_dang_nhap='$username'";
            $result_2=mysqli_query($conn,$sql_2);
            if(mysqli_num_rows($result_2)>0){
                $_SESSION["is_login_ad"] = true;
                $_SESSION["username_ad"] = $username;
                $row = mysqli_fetch_assoc($result_1);
                $id_user = $row["id_tk_ad"];
                $_SESSION["id_ad"] = $id_user;
                header('location:?page=list_product');
            }
            else{
                $error["login"] = "Mật khẩu nhập sai";
                unset($password);
            }
        }
        else{
            $error['username']='Tên đăng nhập không tồn tại';
            unset($password);
        }
    }
}

?> 