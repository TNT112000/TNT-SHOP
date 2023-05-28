<?php

require './lib/product_dm.php';

?>
<div class="content">
    <div class="box_content row">
        <?php require './inc/sidebar.php' ?>
        <div class="col-9 box_content_item">

            <div class="list_product">
                <div class="list_product_title"><?php echo $category ?></div>
                <div class="row">

                    <!-- DANH SÁCH SẢN PHẨM -->

                    <?php
                    if (isset($list_product_category)) {
                        foreach ($list_product_category as $item) {
                            $price = $item["giá_tiền"];
                            $formatNumber = number_format($price,0, '.', '.');
                            $id = $item["id_sp"];
                    ?>

                            <div class="col-3">
                                <div class="list_product_box">
                                    <div class="list_product_item">
                                        <a href="?page=product_detail&id=<?php echo $id ?>" class="list_product_image">
                                            <img src="./public/image/upload/<?php echo $item["ảnh_sản_phẩm"] ?>" class="list_product_image_item" alt="">
                                        </a>
                                        <div class="list_product_name"><?php echo $item["tên_sản_phẩm"] ?></div>
                                        <div class="list_product_rice"><?php echo $formatNumber ?>đ</div>
                                    </div>
                                    <div class="list_product_btn">
                                        <a href="?page=product_detail&id=<?php echo $id ?>" class="list_product_btn_cart">Thêm giỏ hàng</a>
                                        <a href="?page=product_detail&id=<?php echo $id ?>" class="list_product_btn_buy">Sản phẩm</a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>