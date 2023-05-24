<?php

if(isset($_GET["id"])){
    $id=$_GET["id"];
    $sql="SELECT * FROM sản_phẩm where id_sp='$id'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $detail_product[]=$row;
        }
    }
}
?>