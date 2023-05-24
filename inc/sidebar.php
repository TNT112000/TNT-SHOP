<div class="sidebar col-3">
    <div class="category_product">
        <div class="category_product_title">DANH MỤC SẢN PHẨM</div>
        <?php foreach ($list_category as $item_category) {
        ?>
            <a href="?page=product_dm&category=<?php echo $item_category["tên_danh_mục"]?>" class="category_product_item"><?php echo $item_category["tên_danh_mục"] ?></a>
        <?php } ?>
    </div>
    <div class="product_outstanding">
        <div class="category_product_title">SẢN PHẨM NỔI BẬT</div>
        <div class="product_outstanding_list">
            <a class="product_outstanding_item row">
                <div class="col-3">
                    <div class="product_outstanding_image">
                        <img src="./public/image/upload/TNT.png" class="product_outstanding_image_item" alt="">
                    </div>
                </div>
                <div class="col-9 ">
                    <div class="product_outstanding_text">
                        <div class="product_outstanding_text_name">Điện Thoại Sam Sung Mới</div>
                        <div class="product_outstanding_text_rice">5.900.000đ</div>
                        <div class="product_outstanding_text_buy">MUA NGAY</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class=""></div>
</div>