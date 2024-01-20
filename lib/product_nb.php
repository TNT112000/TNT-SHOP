<?php

$sql_nb=" SELECT * from san_pham where noi_bat='1' ";
$result_nb=mysqli_query($conn , $sql_nb);
if(mysqli_num_rows($result_nb)>0){
    while($row=mysqli_fetch_assoc($result_nb)){
        $list_product_nb[]=$row;
    }
}else{
    echo mysqli_error($conn);
}

?>