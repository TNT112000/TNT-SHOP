<?php

require './lib/detail_blog.php';

?>

<div class="content">
    <div class="box_content row">
        <?php require './inc/sidebar.php' ?>
        <div class="col-9 box_content_item">
            <div class="list_product">
                <div class="list_product_title">BÀI VIẾT</div>
                <div class="box_content_blog">
                    <div class="box_content_blog_item">
                        <div class="box_content_blog_name"><?php echo $detail_blog['ten_bai_viet'] ?></div>
                        <div class="box_content_blog_date"><?php echo $detail_blog['ngay_dang'] ?></div>
                        <div class="box_content_blog_img">
                            <img src="./public/image/upload/<?php echo $detail_blog['anh_bai_viet']?>" alt="" class="box_content_blog_img_item">
                        </div>
                        <div class="box_content_blog_detail"><?php echo $detail_blog['noi_dung'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>