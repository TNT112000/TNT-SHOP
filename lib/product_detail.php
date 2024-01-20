<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    // $sql="SELECT * FROM yeu_thich,san_pham where yeu_thich.id_sp=san_pham.id_sp and id_sp='$id'";
    $sql = "SELECT * FROM san_pham where  id_sp='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $detail_product[] = $row;
        }
    }
    $sql_2 = "SELECT * FROM yeu_thich where id_sp='$id' ";
    $result_2 = mysqli_query($conn, $sql_2);
    if (mysqli_num_rows($result_2) > 0) {
        while ($row = mysqli_fetch_assoc($result_2)) {
            $like_product[] = $row;
        }
    }
    if (isset($like_product)) {
        $num_like = 0;
        foreach ($like_product as $item) {
            $num_like += $item['yeu_thich'];
        }
    } else {
        $num_like = 0;
    }

    if (isset($_SESSION['id'])) {
        $sql_3 = "SELECT *FROM yeu_thich where id_sp='$id' and id_tk='{$_SESSION['id']}' ";
        $result_3 = mysqli_query($conn, $sql_3);
        if (mysqli_num_rows($result_3) > 0) {
            $icon_num_like = 1;
        } else {
            $icon_num_like ;
        }
    }
}
