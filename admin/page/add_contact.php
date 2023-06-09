<?php

require './lib/add_contact.php';

?>

<div class="content_add_product">
    <form enctype="multipart/form-data" action="" method="post">
        <div class="title_add_product">Phần liên hệ</div>
        <div class="error_product"> <?php echo show_error("add_contact"); ?> </div>
        <div class="box_add_product">
            <div class="name_add_product">Liên hệ</div>
            <textarea name="name_contact" id="" cols="60" rows="3"><?php echo $update_contact['tên_liên_hệ'] ?></textarea>
            <div class="error_product"> <?php echo show_error("name_contact"); ?> </div>
        </div>
        <div class="box_add_product">
            <div class="name_add_product">Mở đầu</div>
            <textarea name="header_contact" id="" cols="100" rows="10"><?php echo $update_contact['mở_đầu'] ?></textarea>
            <div class="error_product"> <?php echo show_error("header_contact"); ?> </div>
        </div>
        <div class="box_add_product">
            <div class="name_add_product">Nội dung</div>
            <textarea name="detail_contact" cols="100" rows="10"><?php echo $update_contact['liên_hệ'] ?></textarea>
            <div class="error_product"> <?php echo show_error("detail_contact") ?></div>
        </div>
        <button type="submit" class="btn_add_product" name="update_contact">Hoàn tất</button>
    </form>
</div>
</div>