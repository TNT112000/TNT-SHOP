$(document).ready(function () {

    $('.buy_now').click(function (e) {
        if ($('#total_all').text() == '0đ') {
            e.preventDefault();
        }
        // else(
        //     window.location.href='?page=bill_detail' 
        // )
    })

    $('.cart_product_num_item').change(function () {
        var $this = $(this);
        var id = $(this).attr('data-id');
        var num = $(this).val();
        data = { id: id, num: num };
        $.ajax({
            url: './lib/process.php',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function (data) {
                if (($this.val()) < 1) {
                    $this.val(1);
                }
                else if (($this.val()) > 100) {
                    $this.val(100);
                }
                else {
                    $('#cart_fix_' + id).text(data.total + 'đ');
                    $('#total_all').text(data.total_all + 'đ');
                }
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


                $('#total_all').text(data + 'đ');

                $('#remote_' + id).detach();
            }
        })
    })

    $('.btn_comment').click(function (event) {
        event.preventDefault();
        var id = $(this).attr('id');
        var comment = $('.content_comment').val();
        data = { comment: comment, id: id };
        $.ajax({
            url: './lib/comment.php',
            method: 'post',
            data: data,
            dataType: 'text',
            success: function (data) {
                $('.list_comment').prepend(data);
                $('.content_comment').val('');
            }
        })
    })

    // $('#cart_product_btn').click(function () {
    //     var id = $(this).attr('data-id');
    //     data = { id: id };
    //     $.ajax({
    //         url: './lib/like.php',
    //         method: 'post',
    //         data: data,
    //         dataType: 'text',
    //         success: function (data) {
    //             //     $('#cart_product_btn').id('cart_product_btn_1');
    //             //     $('#like_product').id('like_product_1');
    //             // $('#like_product').text(data);
    //             // location.reload();
    //             // $('#like_product').text(data);
    //             // $('.okok1').addClass('okok2');
    //             // $('.okok1').removeClass('okok1');
    //             // $('#icon_like').removeClass('fa-thumbs-up');
    //             // $('#icon_like').addClass('fa-check')
    //             // $('#like_product').id('like_product_1');
    //             $('#cart_product_btn').remove();
    //             $('.box_product_btn').append(data);

    //         }
    //     })
    // })

    // $('#cart_product_btn_1').click(function () {
    //     var id = $(this).attr('data-id');
    //     data = { id: id };
    //     $.ajax({
    //         url: './lib/delete_like.php',
    //         method: 'post',
    //         data: data,
    //         dataType: 'text',
    //         success: function (data) {
    //             // $('#cart_product_btn').id('cart_product_btn_1');
    //             // $('#like_product').id('like_product_1');
    //             // $('#icon_like').classList.remove(fa - thumbs - up);
    //             // $('#icon_like').classList.add(fa - check)
    //             // $('#like_product').text(data);
    //             // location.reload();
    //             $('#cart_product_btn_1').remove();
    //             $('.box_product_btn').append(data);
    //         }
    //     })
    // })

    $(document).on('click', '#cart_product_btn_1', function () {
        var id = $(this).attr('data-id');
        data = { id: id };
        $.ajax({
            url: './lib/delete_like.php',
            method: 'post',
            data: data,
            dataType: 'text',
            success: function (data) {
                if (data) {
                    $('#cart_product_btn_1').remove();
                    $('.box_product_btn').append(data);
                }
                // $('#like_product').id('like_product_1');
                // $('#icon_like').classList.remove(fa - thumbs - up);
                // $('#icon_like').classList.add(fa - check)
                // $('#like_product').text(data);
                // $('#cart_product_btn_1').attr('id','cart_product_btn');
                // location.reload();
            }
        })

    })

    $(document).on('click', '#cart_product_btn', function () {
        var id = $(this).attr('data-id');
        data = { id: id };
        $.ajax({
            url: './lib/like.php',
            method: 'post',
            data: data,
            dataType: 'text',
            success: function (data) {
                //     $('#like_product').id('like_product_1');
                // $('#like_product').text(data);
                // // location.reload();
                // // $('#like_product').text(data);
                // // $('.okok1').addClass('okok2');
                // // $('.okok1').removeClass('okok1');
                // $('#icon_like').removeClass('fa-thumbs-up');
                // $('#icon_like').addClass('fa-check');
                // $('#cart_product_btn').attr('id','cart_product_btn_1');
                // $('#like_product').id('like_product_1');
                if (data) {
                    $('#cart_product_btn').remove();
                    $('.box_product_btn').append(data);
                }

            }
        })
    })
})


