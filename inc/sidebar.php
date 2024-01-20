<div class="sidebar col-3">
    <div class="category_product">
        <div class="category_product_title">DANH MỤC SẢN PHẨM</div>
        <?php foreach ($list_category as $item_category) {
        ?>
            <a href="?page=product_dm&category=<?php echo $item_category["ten_danh_muc"] ?>" class="category_product_item"><?php echo $item_category["ten_danh_muc"] ?></a>
        <?php } ?>
    </div>
    <div class="product_outstanding">
        <div class="category_product_title">SẢN PHẨM NỔI BẬT</div>
        <div class="product_outstanding_list">
            <div class="">
                <?php
                foreach ($list_product_nb as $item) {
                    $item['gia_tien'] = number_format($item['gia_tien'], 0, '.', '.');
                ?>
                    <a href="?page=product_detail&id=<?php echo $item['id_sp'] ?>" class="product_outstanding_item row">
                        <div class="col-3">
                            <div class="product_outstanding_image">
                                <img src="./public/image/upload/<?php echo $item['anh_san_pham'] ?>" class="product_outstanding_image_item" alt="">
                            </div>
                        </div>
                        <div class="col-9 ">
                            <div class="product_outstanding_text">
                                <div class="product_outstanding_text_name"><?php echo $item['ten_san_pham'] ?></div>
                                <div class="product_outstanding_text_rice"><?php echo $item['gia_tien'] ?>đ</div>
                                <div class="product_outstanding_text_buy">MUA NGAY</div>
                            </div>
                        </div>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class=""></div>
</div>