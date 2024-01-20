<?php
$sql_introduce = "SELECT * from lien_he ";
$result_introduce = mysqli_query($conn, $sql_introduce);
if (mysqli_num_rows($result_introduce) > 0) {
    while ($row = mysqli_fetch_assoc($result_introduce)) {
        $update_introduce = $row;
    }
}
if (isset($update_introduce)) {
    $update_introduce['lien_he'] = nl2br($update_introduce['lien_he']);
}
