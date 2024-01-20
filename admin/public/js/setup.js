$(document).ready(function () {
    $('#image_product').change(function () {
        var file = $('#image_product')[0].files;
        // var files = input.files;
        // var nameImage = input.files[0].name;
        // var formData = new FormData();
        // formData.append('image', files[0]);

        var formData = new FormData();
        formData.append('file', file[0]);
        // alert('okoko');
        // formData.append('nameImage', nameImage);
        // data = { nameImage : nameImage };
        $.ajax({
            url: './lib/upload_image_product.php',
            method: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                // alert(data);
                // console.log(data);
                // alert(data);
                // var image = $('<img class="image-upload" src="../public/image/upload/'+ data +'" alt="Mô tả ảnh">');
                $('.image-upload').attr("src", "../public/image/upload/"+ data );
                // $('.content_img_product').hide();
                
            }
        })
       
    })
    
})