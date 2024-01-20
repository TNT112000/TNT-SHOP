<?php

require './lib/update_info.php';

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
                                    <input name="username" type="text" class="input_content_bill" value="<?php echo $info_user['ten_dang_nhap'] ?>">
                                    <div class="error_login">
                                        <p class="error_login_status"><?php echo show_error("username") ?></p>
                                    </div>
                                </div>
                                <div class="col-6 content_item_item">
                                    <div class="title_mt_item">Email</div>
                                    <input name="email" type="email" class="input_content_bill" value="<?php echo $info_user['email'] ?>">
                                    <div class="error_login">
                                        <p class="error_login_status"><?php echo show_error("email") ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 content_item_item">
                                    <div class="title_mt_item">Số điện thoại</div>
                                    <input name="phone" type="text" class="input_content_bill" value="<?php echo $info_user['dien_thoai'] ?>">
                                    <div class="error_login">
                                        <p class="error_login_status"><?php echo show_error("phone") ?></p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-6 box_tt_dn">
                        <div class="title_bill_item">Địa chỉ giao hàng</div>
                        <div class="box_content_item">
                            <div class="box_dc_content">
                                <div class="title_mt_item">Địa chỉ</div>
                                <textarea name="address" id="" cols="60" rows="10"><?php echo $info_user['dia_chi'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="box_content_list_item_btn bill_bill_content">
                        <div class="error_bill"><?php echo show_error('update_info') ?></div>
                        <button type="submit" name="btn_info_user" class="bill_btn_item">Xác nhận</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>