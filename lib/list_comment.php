<?php
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql_bl = "SELECT * FROM binh_luan where id_sp='$id' ORDER BY id_sp DESC";
    $result = mysqli_query($conn, $sql_bl);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $list_comment[] = $row;
        }
    }
}

?>
