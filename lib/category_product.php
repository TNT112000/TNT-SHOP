<?php
$category_product = "category_product";
if (isset($category_product)) {
    $sql = "SELECT * FROM danh_muc ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $list_category[] = $row;
        }
    }
}
