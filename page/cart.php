<?php

?>

<div class="content">
    <div class="box_content row">
        <?php require './inc/sidebar.php' ?>
        <div class="col-9 box_content_item">
            <div class="box_cart_title">
                <div class="list_product_title">GIỎ HÀNG</div>
            </div>
            <div class="box_cart_product_item_1">
                <div class="cart_product_stt cart_product_img_color">STT</div>
                <div class="cart_product_name cart_product_img_color">TÊN SẢN PHẨM</div>
                <div class="cart_product_img cart_product_img_color cart_product_img_he">
                    ẢNH
                </div>
                <div class="cart_product_num cart_product_img_color">
                    SỐ
                </div>
                <div class="cart_product_price cart_product_img_color">ĐƠN GIÁ</div>
                <div class="cart_product_tt-price cart_product_img_color">THÀNH TIỀN</div>
            </div>
            <div class="box_cart_product">
                <?php if (isset($list_cart)) {
                    $stt = 0;
                   
                    $total_all=0;
                    foreach ($list_cart as $item) {
                        $total_all+=$item['tổng_tiền'];

                ?>
                        <div class="box_cart_product_item">
                            <div class="cart_product_stt"><?php echo $stt++; ?></div>
                            <div class="cart_product_name"><?php echo $item["tên_sản_phẩm"] ?></div>
                            <div class="cart_product_img">
                                <img src="./public/image/upload/<?php echo $item["ảnh_sản_phẩm"] ?>" alt="" class="cart_product_img_item">
                            </div>
                            <div class="cart_product_num">
                                <input data-id="<?php echo $item["id_gh"]?>" value="<?php echo $item['số_lượng'] ?>" min="1" max="100" type="number" class="cart_product_num_item">
                            </div>
                            <div class="cart_product_price" ><?php echo $item["giá_tiền"] ?></div>
                            <div id="cart_fix_<?php echo $item["id_gh"]?>" class="cart_product_tt-price cart_product_tt-price_js"><?php echo $item['tổng_tiền'] ?></div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="box_cart_product_item_1 total_all">
                <div class="flex_cart_product_total">
                <div class="cart_product_name cart_product_img_color width_cart_product_total">TỔNG TIỀN</div>
                <div id="total_all" class="cart_product_name cart_product_img_color width_cart_product_total"><?php echo $total_all; ?></div>
                </div>
            </div>
           
        </div>
    </div>
</div>