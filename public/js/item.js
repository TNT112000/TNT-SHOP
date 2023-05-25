$(document).ready(function () {
    $('.cart_product_num_item').change(function () {
        var id = $(this).attr('data-id');
        var num =$(this).val();
        data= {id :id , num: num};
        $.ajax({
            url: './lib/process.php',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function (data) {
                console.log(data);
               $('#cart_fix_'+id).text(data.total);
               $('#total_all').text(data.total_all);
            }
        })
    })
})


