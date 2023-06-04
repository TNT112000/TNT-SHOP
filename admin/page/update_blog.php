<?php

require './lib/update_blog.php';

?>

<div class="content_add_product">
    <form enctype="multipart/form-data" action="" method="post">
        <div class="title_add_product">Chỉnh sửa bài viết</div>
        <div class="error_product"> <?php echo show_error("add_blog"); ?> </div>
        <div class="box_add_product">
            <div class="name_add_product">Tên bài viết</div>
            <textarea name="name_blog" id="" cols="40" rows="4"><?php echo $update_blog['tên_bài_viết'] ?>"</textarea>
            <div class="error_product"> <?php echo show_error("name_blog"); ?> </div>
        </div>
        <div class="box_add_product">
            <div class="name_add_product">Ảnh đại diện bài viết</div>
            <div class="display_img_product">

                <input type="file" name="image_blog" class="">
            </div>
            <div class="error_product"> <?php echo show_error("image_blog") ?></div>
        </div>

        <div class="box_add_product">
            <div class="name_add_product">Nội dung</div>
            <textarea name="detail_blog" id="editor1"><?php echo $update_blog['nội_dung'] ?>"</textarea>
            <script>
                CKEDITOR.replace( 'editor1' );
            </script>
            <div class="error_product"> <?php echo show_error("detail_blog") ?></div>
        </div>

        <button type="submit" class="btn_add_product" name="update_blog">Hoàn tất</button>
    </form>
</div>
</div>