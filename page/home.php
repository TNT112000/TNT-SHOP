<?php
require "./lib/list_product.php"

?>

<div class="content">
    <div class="box_content row">
        <?php require './inc/sidebar.php' ?>
        <div class="col-9 box_content_item">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="4000">
                        <img src="./public/image/upload/slider-01.PNG" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <img src="./public/image/upload/slider-02.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <img src="./public/image/upload/slider-03.PNG" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
            <div class="section row">
                <div class="section_item section_item_after col">
                    <div class="section_item_image">
                        <img src="./public/image/upload/icon-1.png" alt="">
                    </div>
                    <div class="section_item_title">Miễn phí vận chuyển</div>
                    <div class="section_item_text">Tới tận tay khách hàng</div>
                </div>
                <div class="section_item section_item_after col">
                    <div class="section_item_image">
                        <img src="./public/image/upload/icon-2.png" alt="">
                    </div>
                    <div class="section_item_title">Miễn phí vận chuyển</div>
                    <div class="section_item_text">Tới tận tay khách hàng</div>
                </div>
                <div class="section_item section_item_after col">
                    <div class="section_item_image">
                        <img src="./public/image/upload/icon-3.png" alt="">
                    </div>
                    <div class="section_item_title">Miễn phí vận chuyển</div>
                    <div class="section_item_text">Tới tận tay khách hàng</div>
                </div>
                <div class="section_item section_item_after col">
                    <div class="section_item_image">
                        <img src="./public/image/upload/icon-4.png" alt="">
                    </div>
                    <div class="section_item_title">Miễn phí vận chuyển</div>
                    <div class="section_item_text">Tới tận tay khách hàng</div>
                </div>
                <div class="section_item col">
                    <div class="section_item_image">
                        <img src="./public/image/upload/icon-5.png" alt="">
                    </div>
                    <div class="section_item_title">Đặt hàng online</div>
                    <div class="section_item_text">Tới tận tay khách hàng</div>
                </div>
            </div>


            <div class="list_product">
                <div class="list_product_title">SẢN PHẨM</div>
                <div class="list_product_product_over row">
                    <!-- DANH SÁCH SẢN PHẨM -->

                    <?php 

                    foreach($list_product as $item){
                        $id=$item["id_sp"];
                        $price = $item["giá_tiền"];
                        $formatNumber = number_format($price,0, '.', '.');
                    ?>
                    
                    <div class="col-3">
                        <div class="list_product_box">
                            <div class="list_product_item">
                                <a href="?page=product_detail&id=<?php echo $id?>" class="list_product_image">
                                    <img src="./public/image/upload/<?php  echo $item["ảnh_sản_phẩm"]?>" class="list_product_image_item" alt="">
                                </a>
                                <div class="list_product_name"><?php  echo $item["tên_sản_phẩm"]?></div>
                                <div class="list_product_rice"><?php  echo $formatNumber ?>đ</div>
                            </div>
                            <div class="list_product_btn">
                                <a href="?page=product_detail&id=<?php echo $id?>" class="list_product_btn_cart">Thêm giỏ hàng</a>
                                <a href="?page=product_detail&id=<?php echo $id?>" class="list_product_btn_buy">Sản phẩm</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>