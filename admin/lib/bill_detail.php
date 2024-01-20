<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_bill_detail = "SELECT * FROM san_pham,don_hang,ct_don_hang where san_pham.id_sp=ct_don_hang.id_sp and don_hang.id_dh=ct_don_hang.id_dh and don_hang.id_dh='$id' and ct_don_hang.id_dh='$id'";
    $result_bill_detail = mysqli_query($conn, $sql_bill_detail);
    if (mysqli_num_rows($result_bill_detail)) {
        while ($row = mysqli_fetch_assoc($result_bill_detail)) {
            $bill_item_1 = $row;
            $bill_item_2[] = $row;
        }
    }
}
