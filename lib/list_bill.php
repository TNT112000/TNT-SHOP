<?php
$sql = "SELECT * FROM don_hang where id_tk='{$_SESSION['id']}'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_bill[] = $row;
    }
}
