<?php

$conn = mysqli_connect('localhost','root','','tnt-shop');
if($conn){
    // echo "Kết nối thành công";
}
else{
    echo "Kết nối thất bai"; mysqli_connect_errno();
}