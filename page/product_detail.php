<?php
require "./lib/product_detail.php";
require "./lib/list_comment.php";
?>

<div class="content">
    <div class="box_content row">
        <?php require './inc/sidebar.php' ?>
        <div class="col-9 box_content_item">

            <div class="list_product">
                <div class="list_product_title">SẢN PHẨM</div>

                <!-- Chi tiết sản phẩm -->
                <?php foreach ($detail_product as $item) {
                    $mo_ta = nl2br($item["mô_tả"]);
                    $price = $item["giá_tiền"];
                    $formatNumber = number_format($price, 0, '.', '.');
                ?>
                    <div class="box_product_detail row">
                        <div class="col-4 ">
                            <div class="product_detail_img">
                                <img src="./public/image/upload/<?php echo $item["ảnh_sản_phẩm"]; ?>" alt="" class="product_detail_img_item">
                            </div>
                        </div>
                        <div class=" col-8">

                            <div class="product_detail_content">
                                <div class="product_detail_name"><?php echo $item["tên_sản_phẩm"]; ?></div>
                                <div class="product_detail_num">Số lượng : <?php echo $item["số_lượng"]; ?></div>
                                <div class="product_detail_price">Giá tiền : <?php echo $formatNumber; ?>đ</div>
                                <div class="product_detail_des"><?php echo $item["cấu_hình"]; ?></div>
                                <div class="box_product_btn">
                                    <form action="" method="post">

                                        <button id="login_add_cart" type="submit" name="add_cart" class="cart_product_btn"><?php echo $add_cart_status ?></button>

                                    </form>
                                    <a href="" class="cart_product_btn">Yêu thích</a>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="box_product_detail row">
                        <div class="col-12">
                            <div class="box_detail_product_mt">
                                <div class="detail_product_mt_title">Mô tả</div>
                                <div class="detail_product_mt"><?php echo $mo_ta; ?></div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="box_comment">
                <form action="" class="form_comment">
                    <textarea name="" id="" cols="30" rows="10" class="content_comment"></textarea>
                    <button id="<?php echo $id ?>" class="btn_comment">Bình luận</button>
                </form>
                <div class="box_list_comment">
                    <div class="all_comment">Tất cả bình luận</div>
                    <ul class="list_comment">
                        <?php
                        if (isset($list_comment)) {
                            foreach ($list_comment as $value) {
                        ?>
                                <li class="comment_item">
                                    <div class="comment_item_name">
                                        <div class="comment_item_name_item"><?php echo $value['tên_người_đăng']; ?></div>
                                        <div class="comment_item_date"><?php echo $value['ngày_đăng']; ?></div>
                                    </div>
                                    <div class="comment_item_text"><?php echo $value['nội_dung']; ?></div>
                                </li>
                        <?php
                            }
                        } ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>