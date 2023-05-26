<?php
require "./lib/list_blog.php"

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
                    <th class="list_product_item">Tên bài viết</th>
                    <th class="list_product_item">Ngày đăng</th>

                    <th>Sửa</th>

                    <th>Xóa</th>
                </tr>

            </thead>

            <tbody>
                <?php
                $stt = 1;
                foreach ($list_blog as $item) {
                  
                    $product['url_update'] = "?page=update_blog&id={$item['id_bv']}";
                    $product['url_delete'] = "?page=delete_blog&id={$item['id_bv']}";
                ?>
                    <tr>
                        <td class="list_product_item"><?php echo $stt++; ?>
                        </td>

                        <td class="list_product_item"><?php echo $item["tên_bài_viết"] ?></td>
                        <td class="list_product_item"><?php echo $item["ngày_đăng"] ?></td>
                        
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