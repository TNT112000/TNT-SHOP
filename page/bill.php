<?php
require './lib/bill.php';

?>

<div class="content">
    <div class="box_content row">
        <div class="">
            <div class="row">
                <form action="" method="post" class="row">
                    <div class="col-6 box_tt_dn">
                        <div class="title_bill_item">Thông tin khách hàng</div>
                        <div class="box_content_item">
                            <div class="row box_display_dh">
                                <div class="col-6 content_item_item">
                                    <div class="title_mt_item">Họ tên</div>
                                    <input name="name_user" type="text" class="input_content_bill" value="<?php echo $info_user['ten_dang_nhap']?>">
                                </div>
                                <div class="col-6 content_item_item">
                                    <div class="title_mt_item">Giao hàng</div>
                                    <select class="input_content_bill">

                                        <option value="Bình thường" class="">Bình thường</option>
                                        <option value="Nhanh" class="">Nhanh</option>
                                        <option value="Hỏa tốc" class="">Hỏa tốc</option>
                                    </select>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 content_item_item">
                                    <div class="title_mt_item">Số điện thoại</div>
                                    <input name="phone_user" type="text" class="input_content_bill" value="<?php echo $info_user['dien_thoai']?>">
                                </div>
                                <div class="col-6 content_item_item">
                                    <div class="title_mt_item">Email</div>
                                    <input name="email_user" type="email" class="input_content_bill" value="<?php echo $info_user['email']?>">
                                </div>
                            </div>
                            <div class="box_dc_content">
                                <div class="title_mt_item">Địa chỉ</div>
                                <textarea name="address_user" id="" cols="60" rows="10"><?php echo $info_user['dia_chi']?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 box_tt_dn">
                        <div class="title_bill_item">Thông tin đơn hàng</div>
                        <div class="box_content_item">
                            <div class="box_content_list_item box_content_list_item_bd">
                                <div class="sp_bill_content">Sản phẩm</div>
                                <div class="sp_bill_content">Tổng</div>
                            </div>
                            <div class="box_product_bill_content">
                                <?php
                                $total_all = 0;
                                if(isset($list_cart_bill)){
                                foreach ($list_cart_bill as $item) {
                                    $total_all += $item['tong_tien'];
                                    $item['tong_tien'] = number_format($item['tong_tien'], 0, '.', '.',);
                                ?>
                                    <div class="box_content_list_item product_bill_content">
                                        <div class="name_product_bill"><?php echo $item['ten_san_pham'] . ' x ' . $item['so_luong'] ?></div>
                                        <div class="price_product_bill"><?php echo $item['tong_tien'] ?>đ</div>
                                    </div>
                                <?php
                                }
                            }
                                $total_all = number_format($total_all, 0, '.', '.',);
                                ?>
                            </div>
                            <div class="box_content_list_item bill_bill_content">
                                <div class="sp_bill_content">Tổng đơn hàng</div>
                                <div class="sp_bill_content"><?php echo $total_all; ?>đ</div>
                            </div>
                            <div class=" bill_bill_content_ok">
                                <div class="radio_bill">
                                    <input type="radio" name="check_address" id="check_address" value="thanh toán khi nhận">
                                    <div class="">Thanh toán khi nhận</div>
                                </div>
                                <div class="radio_bill">
                                    <input type="radio" name="check_address" id="check_address" value="thanh toán trực tuyến">
                                    <div class="">Thanh toán trực tuyến</div>
                                </div>
                            </div>
                            <div class="box_content_list_item_btn bill_bill_content">
                                <div class="error_bill"><?php echo show_error('bill_error') ?></div>
                                <button type="submit" name="btn_bill" class="bill_btn_item">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>