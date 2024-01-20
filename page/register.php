<?php
require "./lib/register_hd.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/reset.css" class="">
    <link rel="stylesheet" href="./public/css/style.css" class="">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <img src="https://img.lovepik.com/photo/50042/5113.jpg_wh300.jpg" alt="" class="background_img_login">
        <div class="content_1">
            <form action="" method="post" class="form_content_register">
                <div class="form_content_title">
                    <p class="title_login">Đăng ký tài khoản mới</p>
                </div>
                <div class="box_input_register">
                    <div class="box_input_register_item">
                        <input name="username" type="text" class="input_login" placeholder="Tên đăng nhập" value="<?php echo show_variable("username") ?>">
                        <div class="error_login">
                            <p class="error_login_status"><?php echo show_error("username") ?></p>
                        </div>
                        <input name="email" type="text" class="input_login" placeholder="Email" value="<?php echo show_variable("email") ?>">
                        <div class="error_login">
                            <p class="error_login_status"><?php echo show_error("email") ?></p>
                        </div>
                        <input name="password" type="password" class="input_login" placeholder="Mật khẩu" value="<?php echo show_variable("password") ?>">
                        <div class="error_login">
                            <p class="error_login_status"><?php echo show_error("password") ?></p>
                        </div>
                        <input name="password_repeat" type="password" class="input_login" placeholder="Nhập lại mật khẩu" value="<?php echo show_variable("password_repeat") ?>">
                        <div class="error_login">
                            <p class="error_login_status"><?php echo show_error("password_repeat") ?></p>
                        </div>
                    </div>
                </div>
                <div class="box_btn_login">
                    <div class="error_login">
                        <p class="error_login_status">
                            <?php echo show_success("register");
                            echo show_error("register")
                            ?></p>
                    </div>
                    <div class="box_btn_login_item">
                        <button type="submit" name="btn_register" class="btn_login">Đăng ký</button>
                    </div>
                    <div class="box_btn_register_item">
                        <p class="box_btn_register_title">Trở lại về trang <a href="?page=login" class="btn_login_register"> Đăng nhập</a></button></p>
                        <p class="box_btn_register_title">Trở về lại <a href="?page=home" class="btn_login_register"> Trang chủ</a></button></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>