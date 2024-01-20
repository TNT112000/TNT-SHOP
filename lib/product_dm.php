<?php

if(isset($_GET["category"])){
    $category=$_GET["category"];
    $sql="SELECT * FROM san_pham where ten_danh_muc='$category' ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $list_product_category[]=$row;
        }
    }
}

?>