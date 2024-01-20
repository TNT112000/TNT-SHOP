<?php
require './lib/update_status.php';
require './lib/bill_detail.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../font-awesome/css/all.css" class="">

    <link rel="stylesheet" href="../public/css/reset.css" class="">
    <link rel="stylesheet" href="../public/css/style.css" class="">
    <link rel="stylesheet" href="./public/css/style.css" class="">
    <link rel="stylesheet" href="../public/css/pseudo-class.css" class="">
    <script src="../public/js/item.js"></script>
    <title>TNT-SHOP</title>
</head>

<body>
    <div class="main_bill">
        <div class="content_bill_btn">
            <form action="" method='post' class="content_bill_btn_fo">
                <button class="status_btn_bill" type="submit" name="status_bill">Trạng thái</button>
                <select name="status_item" id="" class="status_list" >
                    <option value="<?php echo $bill_item_1['trang_thai'] ?>"><?php echo $bill_item_1['trang_thai'] ?></option>
                    <option value="Chưa giao" style="color:red" class="">Chưa giao </option>
                    <option value="Đang giao" style="color:orange" class="">Đang giao </option>
                    <option value="Đã giao" style="color:green" class="">Đã giao </option>
                </select>
            </form>
            <a href="?page=list_bill" class="btn_bill_back">Quay lại</a>
        </div>
        <div class="content_bill">
            <div class="box_content_bill">
                <div class="box_content_bill_item">
                    <div class="logo_bill">TNT-SHOP</div>
                    <div class="date_bill"><?php echo $bill_item_1['ngay_mua'] ?></div>
                </div>
                <div class="bill_title_detail">Hóa đơn thanh toán</div>
                <div class="">
                    <div class="user_bill_detail">Tên: <?php echo $bill_item_1['ten_nguoi_mua'] ?></div>
                    <div class="user_bill_detail">Số điện thoại: <?php echo $bill_item_1['SĐT'] ?></div>
                    <div class="user_bill_detail">Địa chỉ: <?php echo $bill_item_1['dia_chi'] ?></div>
                </div>
                <div class="box_content_bill_item box_content_bill_item_bd">
                    <div class="product_bill_detail">Sản phẩm</div>
                    <div class="product_bill_detail">Tổng</div>
                </div>
                <div class="">
                    <?php
                    $total_all = 0;
                    foreach ($bill_item_2 as $item) {
                        $total_all += $item['tong_gia'];
                        $item['tong_gia'] = number_format($item['tong_gia'], 0, '.', '.');
                    ?>
                        <div class="box_content_bill_item box_content_bill_item_bd">
                            <div class="product_bill_detail"><?php echo $item['ten_san_pham'] ?> x <?php echo $item['so_luong'] ?></div>
                            <div class="product_bill_detail"><?php echo $item['tong_gia'] ?>đ</div>
                        </div>
                    <?php
                    }
                    $total_all = number_format($total_all, 0, '.', '.');
                    ?>
                </div>
                <div class="box_content_bill_item">
                    <div class="product_bill_detail">Tổng đơn hàng</div>
                    <div class="product_bill_detail"><?php echo $total_all ?>đ</div>
                </div>
                <div class="status_bill">Trạng thái: <?php echo $bill_item_1['trang_thai'] ?></div>
            </div>
        </div>
    </div>
</body>

</html>