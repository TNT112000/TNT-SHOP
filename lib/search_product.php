
<?php

if (isset($_POST["search_header"])) {
    if (!empty($_POST["search_name_product"])) {
        $search=$_POST["search_name_product"];
        $sql="SELECT *from san_pham where ten_san_pham LIKE '%$search%'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $list_product_search[]=$row;
            }
        }
    }
}

?>