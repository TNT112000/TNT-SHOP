<?php


?>

<div class="content">
    <div class="box_content row">
        <?php require './inc/sidebar.php' ?>
        <div class="col-9 box_content_item">
            <div class="box_cart_title">
                <div class="list_product_title">GIỎ HÀNG</div>
            </div>
            <?php
            if (isset($list_cart)) {
            ?>
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
                    <div class="cart_product_stt cart_product_img_color">Xóa</div>
                </div>

                <div class="box_cart_product">
                    <?php
                    $stt = 1;
                    $total_all = 0;
                    foreach ($list_cart as $item) {
                        $price = $item["gia_tien"];
                        $formatNumber = number_format($price, 0, '.', '.');
                        $total_all += $item['tong_tien'];
                        $item['tong_tien'] = number_format($item['tong_tien'], 0, '.', '.');

                    ?>
                        <div id="remote_<?php echo $item['id_gh'] ?>" class="box_cart_product_item">

                            <div class="cart_product_stt"><?php echo $stt++; ?></div>

                            <div class="cart_product_name"><?php echo $item["ten_san_pham"] ?></div>
                            <div class="cart_product_img">
                                <img src="./public/image/upload/<?php echo $item["anh_san_pham"] ?>" alt="" class="cart_product_img_item">
                            </div>
                            <div class="cart_product_num">
                                <input data-id="<?php echo $item["id_gh"] ?>" value="<?php echo $item['so_luong'] ?>" min="1" max="<?php echo $item['all_num'] ?>" type="number" class="cart_product_num_item">
                            </div>
                            <div class="cart_product_price"><?php echo $formatNumber; ?>đ</div>
                            <div id="cart_fix_<?php echo $item["id_gh"] ?>" class="cart_product_tt-price cart_product_tt-price_js"><?php echo $item['tong_tien'] ?>đ</div>
                            <a data-id="<?php echo $item["id_gh"] ?>" class="cart_product_stt delete_cart_item_click"> <i id="delete_cart_item" class="fa-solid fa-delete-left"></i></a>
                        </div>
                    <?php
                    }
                    $total_all = number_format($total_all, 0, '.', '.');

                    ?>
                </div>
                <div class="box_cart_product_item_1 total_all">
                    <div class="flex_cart_product_total">
                        <div class="cart_product_name cart_product_img_color width_cart_product_total">TỔNG TIỀN</div>
                        <div id="total_all" class="cart_product_name cart_product_img_color width_cart_product_total"><?php echo $total_all;?>đ</div>
                    </div>
                </div>
                <div class="box_buy_now">
                    <a href="?page=bill" class="buy_now">MUA NGAY</a>
                </div>
                <?php } ?>
        </div>
    </div>
</div>