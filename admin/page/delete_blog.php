<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE from bai_viet WHERE id_bv='{$id}'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        navigation('?page=list_blog');
    } else {
        echo 'Xóa Không thành công';
    }
}

?>