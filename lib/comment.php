<?php
session_start();
require '../config/connect.php';
if (isset($_SESSION['username'])) {
    if (!empty($_POST['comment'])) {
        $id = $_POST['id'];
        $comment = $_POST['comment'];
        $sql_bl = "INSERT INTO binh_luan (ten_nguoi_dung , ngay_dang , noi_dung , id_sp) 
        VALUES ('{$_SESSION['username']}',NOW(),'$comment','$id')";
        $result_bl = mysqli_query($conn, $sql_bl);
        $time = date('Y-m-d h-i-s');

        echo "<li class='comment_item'>
    <div class='comment_item_name'>
        <div class='comment_item_name_item'>{$_SESSION['username']}</div>
        <div class='comment_item_date'>{$time}</div>
    </div>
    <div class='comment_item_text'>$comment</div>
</li>";
    }
}
