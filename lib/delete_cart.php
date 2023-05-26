<?php
require '../config/connect.php';
$id =$_POST['id'];
$sql="DELETE from gio_hang where id_gh='$id' ";
$result=(mysqli_query($conn,$sql));
if($result){
    echo "thành công";
}
else{
    echo "không thành công";
}
?>