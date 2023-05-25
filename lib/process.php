<?php
require '../config/connect.php';
session_start();
$id=$_POST['id'];
$num=$_POST['num'];

$sql="SELECT * FROM gio_hang where id_gh='$id'";
$result=(mysqli_query($conn,$sql));
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $item_cart[]=$row;
    }
}
foreach($item_cart as $item){
$total = $item['giá_tiền']* $num ;
}
$sql_1= "UPDATE gio_hang SET tổng_tiền='$total', số_lượng='$num' where id_gh='$id'";
$result_1=(mysqli_query($conn,$sql_1));

$sql_2="SELECT * FROM gio_hang where id_tk='{$_SESSION['id']}'" ;
$result_2=mysqli_query($conn,$sql_2);
if(mysqli_num_rows($result_2)>0){
    while($row=mysqli_fetch_assoc($result_2)){
        $list_cart_product[]=$row;
    }
}
$total_all=0;
foreach($list_cart_product as $item){
    $total_all+=$item['tổng_tiền'];
}

$data=array(
    'total' => $total,
    'total_all'=>$total_all,
)
;

echo json_encode($data);
