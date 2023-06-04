<?php

if(isset($_POST['status_bill'])){
    $status = $_POST['status_item'];
        $sql_st_up="UPDATE don_hang SET trạng_thái='$status' where id_dh='{$_GET['id']}'";
        $result_st_up=mysqli_query($conn,$sql_st_up);
    // $sql_st="SELECT * from don_hang where id_dh='{$_GET['id']}'" ;
    // $result_st=mysqli_query($conn,$sql_st);
    // $status_bill=mysqli_fetch_assoc($result_st);
    // if($status_bill['trạng_thái']=='chưa giao'){
    //     $sql_st_up="UPDATE don_hang SET trạng_thái='đã giao' where id_dh='{$_GET['id']}'";
    //     $result_st_up=mysqli_query($conn,$sql_st_up);
    // }
    // else{
    //     $sql_st_up="UPDATE don_hang SET trạng_thái='chưa giao' where id_dh='{$_GET['id']}'";
    //     $result_st_up=mysqli_query($conn,$sql_st_up);
    // }
   
}

?>