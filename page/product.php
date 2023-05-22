

<div class="content">
    <div class="box_content row">
        <?php require './inc/sidebar.php' ?>
        <div class="col-9 box_content_item">

            <div class="list_product">
                <div class="list_product_title">SẢN PHẨM</div>
                <div class="row">

                    <!-- DANH SÁCH SẢN PHẨM -->

                    <?php $sql = "SELECT * FROM sản_phẩm ";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $list_product[] = $row;
                        }
                    }

                    foreach ($list_product as $item) {
                        $id=$item["id_sp"];
                    ?>

                        <div class="col-3">
                            <div class="list_product_box">
                                <div class="list_product_item">
                                    <a href="?page=product_detail&id=<?php echo $id?>" class="list_product_image">
                                        <img src="./public/image/upload/<?php echo $item["ảnh_sản_phẩm"] ?>" class="list_product_image_item" alt="">
                                    </a>
                                    <div class="list_product_name"><?php echo $item["tên_sản_phẩm"] ?></div>
                                    <div class="list_product_rice"><?php echo $item["giá_tiền"] ?></div>
                                </div>
                                <div class="list_product_btn">
                                    <a class="list_product_btn_cart">Thêm giỏ hàng</a>
                                    <a class="list_product_btn_buy">Mua ngay</a>
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