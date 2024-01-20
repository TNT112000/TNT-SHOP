<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="UPDATE san_pham SET noi_bat='0' where id_sp='$id' ";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:?page=add_product_nb');
    }
    else{
        echo 'Thất bại';
    }
}

?>