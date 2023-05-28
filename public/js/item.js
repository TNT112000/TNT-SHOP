$(document).ready(function () {
    $('.cart_product_num_item').change(function () {
       
        var id = $(this).attr('data-id');
        var num = $(this).val();
        data = { id: id, num: num };
        $.ajax({
            url: './lib/process.php',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function (data) {

                $('#cart_fix_' + id).text(data.total);
                $('#total_all').text(data.total_all);
            }
        })
    })

    

    $('.delete_cart_item_click').click(function () {
        
        var id = $(this).attr('data-id');
        data = { id: id };
        $.ajax({
            url: './lib/delete_cart.php',
            method: 'post',
            data: data,
            dataType: 'text',
            success: function (data) {
               $('#total_all').text(data+'đ');
               $('#remote_'+id).detach();

            }
        })
    })

    $('.btn_comment').click(function (event){
        event.preventDefault();
        var id =$(this).attr('id');
        var comment = $('.content_comment').val();
        data = {comment : comment , id:id};
        $.ajax({
            url: './lib/comment.php',
            method: 'post',
            data: data,
            dataType: 'text',
            success: function(data){
                $('.list_comment').prepend(data);
                $('.content_comment').val('');
            }
        })
    })
})


