<?php

require './lib/list_bill.php';

?>
<div class="content_2">
    <div class="box_content row">
        <div class="content_add_product">
            <script>
                $(document).ready(function() {
                    $('#myTable').DataTable();
                });
            </script>
            <div class="title_add_product">Danh sách đơn hàng</div>

            <div class="list_bill">
                <table id="myTable" class="display1 table table-striped" >
                    <thead class="header_data_table">
                        <tr class="">
                            <th class="list_product_item_1">STT</th>
                            <th class="list_product_item_1">Tên khách hàng</th>
                            <th class="list_product_item_1">Số điện thọai</th>
                            <th class="list_product_item_1">Đại chỉ</th>
                            <th class="list_product_item_1">Ngày</th>
                            <th class="list_product_item_1">Trạng thái</th>
                            <th>Chi tiết</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $stt = 1;
                        if (isset($list_bill)) {
                            foreach ($list_bill as $item) {

                                $product['detail_bill'] = "?page=bill_detail_user&id={$item['id_dh']}";

                        ?>
                                <tr>
                                    <td class="list_product_item_1"><?php echo $stt++; ?>
                                    </td>

                                    <td class="list_product_item_1"><?php echo $item["tên_người_mua"] ?></td>
                                    <td class="list_product_item_1"><?php echo $item["SĐT"] ?></td>
                                    <td class="list_product_item_1"><?php echo $item["địa_chỉ"] ?></td>
                                    <td class="list_product_item_1"><?php echo $item["ngày_mua"] ?></td>
                                    <?php if ($item["trạng_thái"] == 'Chưa giao') { ?>
                                        <td class="list_product_item_1" style="color:red"><?php echo $item["trạng_thái"] ?></td>
                                    <?php
                                    } elseif ($item["trạng_thái"] == 'Đã giao'){
                                    ?>
                                        <td class="list_product_item_1" style="color:green"><?php echo $item["trạng_thái"] ?></td>
                                    <?php } else{?>
                                        <td class="list_product_item_1" style="color:orange"><?php echo $item["trạng_thái"] ?></td>
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
</div>