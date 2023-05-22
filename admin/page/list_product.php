<?php
require "../lib/list_product.php"

?>

<div class="content_add_product">
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <div class="title_add_product">Danh sách sản phẩm</div>
    <div class="">
        <a href="?page=add_product" class="link_add_product">Thêm mới</a>
    </div>
    <div class="">
        <table id="myTable" class="display1">

            <thead>

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
                foreach ($list_product as $item) {
                    $price = $item["giá_tiền"];
                        $formatNumber = number_format($price,0, '.', '.');
                    $product['url_update'] = "?page=update_product&id={$item['id_sp']}";
                    $product['url_delete'] = "?page=delete_product&id={$item['id_sp']}";
                ?>
                    <tr>
                        <td class="list_product_item"><?php echo $stt++; ?>
                        </td>

                        <td class="list_product_item"><?php echo $item["mã_sản_phẩm"] ?></td>
                        <td class="list_product_item"><?php echo $item["tên_sản_phẩm"] ?></td>
                        <td class="list_product_item"><?php echo $item["tên_danh_mục"] ?></td>
                        <td class="list_product_item"><?php echo $formatNumber ?>đ</td>
                        <td class="list_product_item"><?php echo $item["số_lượng"] ?></td>
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