<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_dt_blog = "SELECT * FROM bai_viet where id_bv='$id'";
    $result_dt_blog = mysqli_query($conn,$sql_dt_blog);
    if (mysqli_num_rows($result_dt_blog)>0) {
        $detail_blog = mysqli_fetch_assoc($result_dt_blog);
    }
}

