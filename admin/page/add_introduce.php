<?php

require './lib/add_introduce.php';

?>

<div class="content_add_product">
    <form enctype="multipart/form-data" action="" method="post">
        <div class="title_add_product">Phần giới thiệu</div>
        <div class="error_product"> <?php echo show_error("add_introduce"); ?> </div>
        <div class="box_add_product">
            <div class="name_add_product">Tên bài viết</div>
            <textarea name="name_introduce" id="" cols="60" rows="3"><?php echo $update_introduce['tên_giới_thiệu']?></textarea>
            <div class="error_product"> <?php echo show_error("name_introduce"); ?> </div>
        </div>
        <div class="box_add_product">
            <div class="name_add_product">Mở đầu</div>
            <textarea name="header_introduce" id="" cols="100" rows="10"><?php echo $update_introduce['mở_đầu']?></textarea>
            <div class="error_product"> <?php echo show_error("header_introduce"); ?> </div>
        </div>
        <div class="box_add_product">
            <div class="name_add_product">Nội dung</div>
            <textarea name="detail_introduce" id="editor2" ><?php echo $update_introduce['nội_dung']?></textarea>
            <script>
                CKEDITOR.replace('editor2');
            </script>
            <div class="error_product"> <?php echo show_error("detail_introduce") ?></div>
        </div>

        <button type="submit" class="btn_add_product" name="update_introduce">Hoàn tất</button>
    </form>
</div>
</div>