window.onload = function () {
    document.getElementById('login_add_cart').addEventListener('click', login_add_cart);

    function show_title(event) {
        event.preventDefault()
        Swal.fire('Hãy đăng nhập để mua hàng');
    }

    function login_add_cart() {
        show_title(function () { })
    }
};



