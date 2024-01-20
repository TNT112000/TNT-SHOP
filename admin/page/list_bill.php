<?php

require './lib/list_bill.php';

?>

<div class="content_add_product">
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <div class="title_add_product">Danh sách đơn hàng</div>

    <div class="list_bill">
        <table id="myTable" class="display1 table table-striped">

            <thead class="header_data_table">

                <tr>

                    <th class="list_product_item">STT</th>
                    <th class="list_product_item">Tên khách hàng</th>
                    <th class="list_product_item">Số điện thọai</th>
                    <th class="list_product_item">Đại chỉ</th>
                    <th class="list_product_item">Ngày</th>
                    <th class="list_product_item">Trạng thái</th>
                    <th>Chi tiết</th>
                </tr>

            </thead>

            <tbody>
                <?php
                if (isset($list_bill)) {
                    $stt = 1;
                    foreach ($list_bill as $item) {

                        $product['detail_bill'] = "?page=bill_detail&id={$item['id_dh']}";

                ?>
                        <tr>
                            <td class="list_product_item"><?php echo $stt++; ?>
                            </td>

                            <td class="list_product_item"><?php echo $item["ten_nguoi_mua"] ?></td>
                            <td class="list_product_item"><?php echo $item["SĐT"] ?></td>
                            <td class="list_product_item"><?php echo $item["dia_chi"] ?></td>
                            <td class="list_product_item"><?php echo $item["ngay_mua"] ?></td>
                            <?php if ($item["trang_thai"] == 'Chưa giao') { ?>
                                        <td class="list_product_item_1" style="color:red"><?php echo $item["trang_thai"] ?></td>
                                    <?php
                                    } elseif ($item["trang_thai"] == 'Đã giao'){
                                    ?>
                                        <td class="list_product_item_1" style="color:green"><?php echo $item["trang_thai"] ?></td>
                                    <?php } else{?>
                                        <td class="list_product_item_1" style="color:orange"><?php echo $item["trang_thai"] ?></td>
                                        <?php
                                            }
                                            ?>
                            <td class=""><a href="<?php echo $product['detail_bill'] ?>" class=""><i class="fa-sharp fa-solid fa-pen-to-square"></i></a></td>


                        </tr>
                <?php
                    }
                }
                ?>

            </tbody>

        </table>

    </div>

</div>
</div>