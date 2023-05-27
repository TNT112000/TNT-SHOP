<?php 

$sql_introduce = "SELECT * from gioi_thieu ";
$result_introduce = mysqli_query($conn, $sql_introduce);
if (mysqli_num_rows($result_introduce) > 0) {
    while ($row = mysqli_fetch_assoc($result_introduce)) {
        $update_introduce= $row;
    }
}

?>