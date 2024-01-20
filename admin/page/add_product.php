<?php

require "./lib/add_product.php";
?>

<div class="content_add_product">
    <form enctype="multipart/form-data" action="" method="post">
        <div class="title_add_product">Thêm sản phẩm</div>
        <div class="error_product"> <?php echo show_error("add_product"); ?> </div>

        <div class="box_add_product">
            <div class="name_add_product">Mã sản phẩm</div>
            <input type="text" name="ma_product" class="input_add_product">
            <div class="error_product"> <?php echo show_error("ma_product") ?></div>
        </div>
        <div class="box_add_product">
            <div class="name_add_product">Tên sản phẩm</div>
            <input type="text" name="name_product" class="input_add_product">
            <div class="error_product"> <?php echo show_error("name_product"); ?> </div>
        </div>
        
        <div class="box_add_product">
            <div class="box_add_product_item">
                <div class="">
                    <div class="name_add_product">Giá sản phẩm</div>
                    <input type="text" name="price_product" class="input_add_product">
                    <div class="error_product"> <?php echo show_error("price_product") ?></div>
                </div>
                <div class="box_add_product_item_con">
                    <div class="name_add_product">Số lượng</div>
                    <input type="number" name="num_product" class="input_add_num">
                    <div class="error_product"> <?php echo show_error("num_product") ?></div>
                </div>
            </div>

        </div>
        <div class="box_add_product">
            <div class="name_add_product">Danh mục sản phẩm</div>
            <select class="list_category" name="category_product" value="-- Danh mục --">
                <option disabled selected>Danh mục</option>

                <!-- HIỂN THỊ DANH SÁCH DANH MỤC -->

                <?php
                $sql = "SELECT * FROM danh_muc ";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $list_category_product[] = $row;
                    }
                }

                foreach ($list_category_product as $item) {
                ?>
                    <option value="<?php echo $item["ten_danh_muc"] ?>"><?php echo $item["ten_danh_muc"] ?> </option>
                <?php }  ?>
            </select>
            <div class="error_product"> <?php echo show_error("category_product") ?></div>
        </div>
        <div class="box_add_product">
            <div class="name_add_product">Mô tả ngắn</div>
            <textarea class="textarea" name="des_product" id="" cols="60" rows="10"></textarea>
            <div class="error_product"> <?php echo show_error("des_product") ?></div>
        </div>
        <div class="box_add_product">
            <div class="name_add_product">Chi tiết</div>
            <textarea class="textarea" name="detail_product" id="" cols="70" rows="13"></textarea>
            <div class="error_product"> <?php echo show_error("detail_product") ?></div>
        </div>

        <div class="box_add_product">
            <div class="name_add_product">Ảnh sản phẩm</div>
            <div class="display_img_product">
                <!-- <label  for="image_product" id="click-image" class="content_img_product">+</label> -->
                <img class="image-upload" src="../public/image/upload/add.jpg" alt="Mô tả ảnh">
                <input type="file" id='image_product' class='image_product' name="image_product" >
            </div>
            <div class="error_product"> <?php echo show_error("file_img") ?></div>
        </div>
        <button type="submit" class="btn_add_product" name="btn_add_product">Thêm mới</button>
    </form>
</div>
</div>