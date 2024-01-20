<?php

$conn = mysqli_connect('localhost:3307','root','','tnt-shop');
if($conn){
    // echo "Kết nối thành công";
}
else{
    echo "Kết nối thất bai"; mysqli_connect_errno();
}