<?php

require './lib/blog.php';

?>

<div class="content">
    <div class="box_content row">
        <?php require './inc/sidebar.php' ?>
        <div class="col-9 box_content_item">

            <div class="list_product">
                <div class="list_product_title">BÀI VIẾT</div>
                <?php
                foreach($list_blog as $item){

                ?>
                <div class="">
                    <div class="row box_blog">
                        <div class="col-4 box_blog_item">
                            <a href="" class="box_image_blog">
                                <img src="./public/image/upload/<?php echo $item['ảnh_bài_viết']?>" alt="" class="box_image_blog_item">
                            </a>
                        </div>
                        <div class="col-8 box_blog_item">
                            <div class="box_content_blog">
                                <a class="title_blog_item"><?php echo $item['tên_bài_viết']?></a>
                                <div class="date_blog_item"><?php echo $item['ngày_đăng']?></div>
                                <div class="content_blog_item"><?php echo $item['nội_dung']?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

            </div>
        </div>
    </div>
</div>