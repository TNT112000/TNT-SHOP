<?php

$sql="SELECT * FROM bai_viet ";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){
     $list_blog[]=$row;
   }
}
