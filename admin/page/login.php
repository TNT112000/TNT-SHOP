<?php

require './lib/login.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/reset.css" class="">
    <link rel="stylesheet" href="../public/css/style.css" class="">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <img src="https://img.lovepik.com/photo/50042/5113.jpg_wh300.jpg" alt="" class="background_img_login">
        <div class="content_1">
            <form action="" method="post" class="form_content_login">
                <div class="form_content_title">
                    <p class="title_login">Đăng nhập để sử dụng chức năng</p>
                </div>
                <div class="box_input_login">
                    <input name="username" type="text" class="input_login" placeholder="Tên đăng nhập" value="<?php echo show_variable("username")?>">
                    <div class="error_login">
                        <p class="error_login_status"><?php  echo show_error("username")?></p>
                    </div>
                    <input name="password" type="password" class="input_login" placeholder="Mật khẩu" value="<?php echo show_variable("password")?>">
                    <div class="error_login">
                        <p class="error_login_status"><?php  echo show_error("password")?></p>
                    </div>
                </div>
                <div class="box_btn_login">
                    <div class="error_login">
                        <p class="error_login_status"><?php  echo show_error("login")?></p>
                    </div>
                    <div class="box_btn_login_item">
                        <button name="btn_login" type="submit" class="btn_login">Đăng nhập</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</body>

</html>