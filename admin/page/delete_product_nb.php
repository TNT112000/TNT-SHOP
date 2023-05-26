<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="UPDATE sản_phẩm SET nổi_bật='0' where id_sp='$id' ";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:?page=add_product_nb');
    }
    else{
        echo 'Thất bại';
    }
}

?>