<?php
if (isset($_POST["search_header"])) {
    if (!empty($_POST["search_name_product"])) {
        $search = $_POST["search_name_product"];
        $sql = "SELECT * from sản_phẩm Where tên_sản_phẩm LIKE '%$search%'";
        $result =mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            
        }
    }
}
