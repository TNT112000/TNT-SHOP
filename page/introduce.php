<?php

require './lib/introduce.php';

?>

<div class="content">
    <div class="box_content row">
        <?php require './inc/sidebar.php' ?>
        <div class="col-9 box_content_item">
            <div class="list_product">
                <div class="list_product_title">BÀI VIẾT</div>
                <div class="box_content_blog">
                    <div class="box_content_blog_item">
                        <div class="box_content_blog_name"><?php echo $update_introduce['tên_giới_thiệu'] ?></div>
                        <div class="box_content_blog_date"><?php echo $update_introduce['mở_đầu'] ?></div>
                        
                        <div class="box_content_blog_detail"><?php echo $update_introduce['nội_dung'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>