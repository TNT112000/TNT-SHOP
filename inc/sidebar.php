<div class="sidebar col-3">
    <div class="category_product">
        <div class="category_product_title">DANH MỤC SẢN PHẨM</div>
        <?php foreach ($list_category as $item_category) {
        ?>
            <a href="?page=product_dm&category=<?php echo $item_category["tên_danh_mục"] ?>" class="category_product_item"><?php echo $item_category["tên_danh_mục"] ?></a>
        <?php } ?>
    </div>
    <div class="product_outstanding">
        <div class="category_product_title">SẢN PHẨM NỔI BẬT</div>
        <div class="product_outstanding_list">
            <div class="">
                <?php
                foreach ($list_product_nb as $item) {
                    $item['giá_tiền'] = number_format($item['giá_tiền'], 0, '.', '.');
                ?>
                    <a href="?page=product_detail&id=<?php echo $item['id_sp'] ?>" class="product_outstanding_item row">
                        <div class="col-3">
                            <div class="product_outstanding_image">
                                <img src="./public/image/upload/<?php echo $item['ảnh_sản_phẩm'] ?>" class="product_outstanding_image_item" alt="">
                            </div>
                        </div>
                        <div class="col-9 ">
                            <div class="product_outstanding_text">
                                <div class="product_outstanding_text_name"><?php echo $item['tên_sản_phẩm'] ?></div>
                                <div class="product_outstanding_text_rice"><?php echo $item['giá_tiền'] ?>đ</div>
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