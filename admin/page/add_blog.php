<?php

require './lib/add_blog.php';

?>

<div class="content_add_product">
    <form enctype="multipart/form-data" action="" method="post">
        <div class="title_add_product">Thêm bài viết</div>
        <div class="error_product"> <?php echo show_error("add_blog"); ?> </div>
        <div class="box_add_product">
            <div class="name_add_product">Tên bài viết</div>
            <textarea name="name_blog" id="" cols="40" rows="4"></textarea>
            <div class="error_product"> <?php echo show_error("name_blog"); ?> </div>
        </div>
        <div class="box_add_product">
            <div class="name_add_product">Ảnh đại diện bài viết</div>
            <div class="display_img_product">

                <img class="image-upload" src="../public/image/upload/add.jpg" alt="Mô tả ảnh">
                <input type="file" id='image_product' class='image_product' name="image_blog">
            </div>
            <div class="error_product"> <?php echo show_error("image_blog") ?></div>
        </div>

        <div class="box_add_product">
            <div class="name_add_product">Nội dung</div>
            <textarea name="detail_blog" id="editor1" class="textarea" style="height: 400px;"></textarea>

            <div class="error_product"> <?php echo show_error("detail_blog") ?></div>
        </div>

        <button type="submit" class="btn_add_product" name="btn_add_blog">Thêm mới</button>
    </form>
</div>
</div>