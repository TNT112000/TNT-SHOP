<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE from san_pham WHERE id_sp='{$id}'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        navigation('?page=list_product');
    } else {
        echo 'Xóa Không thành công';
    }
}
