<?php
require './lib/add_product_nb.php';
?>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
<div class="content_add_product">
    <div class="title_add_product">Sản phẩm nổi bật</div>
    <div class="error_product"> <?php echo show_error("add_product_nb"); ?> </div>
    <form enctype="" action="" method="post">

        <div class="title_add_product_nb">Thêm sản phẩm nổi bật</div>
        <select class="name_product_nb" name="name_product_nb">
            <option disabled selected>Sản phẩm</option>
            <?php
            foreach ($list_name_product as $item) {
            ?>
                <option value="<?php echo  $item['ten_san_pham'] ?>"><?php echo $item['ten_san_pham'] ?></option>
            <?php
            }
            ?>
        </select>
        <button type="submit" class="add_product_nb" name="add_product_nb">Thêm vào</button>
    </form>
    <div class="box_myTable2">
        <div class="">
            <table id="myTable" class="display1 table table-striped">

                <thead class="header_data_table">

                    <tr>

                        <th class="list_product_item">STT</th>
                        <th class="list_product_item">Mã sản phẩm</th>
                        <th class="list_product_item">Tên</th>

                        <th class="list_product_item">Danh mục</th>

                        <th class="list_product_item">Giá</th>

                        <th class="list_product_item">Số lượng</th>

                        <th>Sửa</th>

                        <th>Xóa</th>
                    </tr>

                </thead>

                <tbody>
                    <?php
                    $stt = 1;
                    foreach ($list_name_product_1 as $item) {
                        $price = $item["gia_tien"];
                        $formatNumber = number_format($price, 0, '.', '.');
                        $product['url_update'] = "?page=update_product&id={$item['id_sp']}";
                        $product['url_delete'] = "?page=delete_product_nb&id={$item['id_sp']}";
                    ?>
                        <tr>
                            <td class="list_product_item"><?php echo $stt++; ?>
                            </td>

                            <td class="list_product_item"><?php echo $item["ma_san_pham"] ?></td>
                            <td class="list_product_item"><?php echo $item["ten_san_pham"] ?></td>
                            <td class="list_product_item"><?php echo $item["ten_danh_muc"] ?></td>
                            <td class="list_product_item"><?php echo $formatNumber ?>đ</td>
                            <td class="list_product_item"><?php echo $item["so_luong"] ?></td>
                            <td class=""><a href="<?php echo $product['url_update'] ?>" class=""><i class="fa-sharp fa-solid fa-pen-to-square"></i></a></td>
                            <td class=""><a href="<?php echo $product['url_delete'] ?>" class=""><i class="fa-solid fa-trash"></i></a></td>

                        </tr>
                    <?php
                    }
                    ?>

                </tbody>

            </table>
        </div>
    </div>

</div>
</div>