<?php
require '../config/connect.php';
session_start();
$id =$_POST['id'];

$sql_all="SELECT* from gio_hang where id_tk='{$_SESSION['id']}'";
$result_all=(mysqli_query($conn,$sql_all));
if(mysqli_num_rows($result_all)>0){
    while($row=mysqli_fetch_assoc($result_all)){
        $list_gh[]=$row;
    }
}

$total_all_id=0;
foreach($list_gh as $item){
    $total_all_id+=$item['tong_tien'];
}

$sql_se="SELECT * from gio_hang where id_gh='$id'";
$result_se=(mysqli_query($conn,$sql_se));
$content_gh=mysqli_fetch_assoc($result_se);

$total_all=$total_all_id - ($content_gh['so_luong']*$content_gh['gia_tien']);

$sql="DELETE from gio_hang where id_gh='$id' ";
$result=(mysqli_query($conn,$sql));

$total_all=number_format($total_all,0,'.','.');
echo $total_all;
// if($result){
//     echo "thành công";
// }
// else{
//     echo "không thành công";
// }

?>