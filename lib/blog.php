<?php

$sql_blog_sh="SELECT * FROM bai_viet ";
$result_blog=mysqli_query($conn,$sql_blog_sh);
if(mysqli_num_rows($result_blog)>0){
    while($row=mysqli_fetch_assoc($result_blog)){
        $list_blog[]=$row;
    }
}


?>