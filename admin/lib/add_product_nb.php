<?php


    $sql="SELECT * from sản_phẩm ";
    $result=(mysqli_query($conn,$sql));
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $list_name_product[]=$row ;
        }
    }
if(isset($_POST['add_product_nb'])){
    $name_product=$_POST['name_product_nb'];
    $sql_1="UPDATE sản_phẩm SET nổi_bật='1' Where tên_sản_phẩm='$name_product'";
    $result=mysqli_query($conn,$sql_1);
    if($result){
        $error['add_product_nb']='Thêm thành công';
    }
}

$sql_2="SELECT * from sản_phẩm where nổi_bật='1'";
    $result_2=(mysqli_query($conn,$sql_2));
    if(mysqli_num_rows($result_2)>0){
        while($row=mysqli_fetch_assoc($result_2)){
            $list_name_product_1[]=$row ;
        }
    }
   
?>