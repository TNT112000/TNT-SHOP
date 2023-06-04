<?php
$sql_introduce = "SELECT * from lien_he ";
$result_introduce = mysqli_query($conn, $sql_introduce);
if (mysqli_num_rows($result_introduce) > 0) {
    while ($row = mysqli_fetch_assoc($result_introduce)) {
        $update_introduce= $row;
    }
}
$update_introduce['liên_hệ'] = nl2br($update_introduce['liên_hệ']);

?>
