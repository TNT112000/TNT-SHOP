<?php

if(!$_SESSION['is_login']){
    header('location: ?page=login');
}

?>

<div class="content">
    <div class="box_content row">
        <?php require './inc/sidebar.php' ?>
        <div class="col-9 box_content_item">
            <div class=""></div>
        </div>
    </div>
</div>