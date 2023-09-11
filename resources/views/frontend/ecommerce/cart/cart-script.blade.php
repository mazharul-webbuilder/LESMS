<script>
    $(document).ready(function () {
        $('body').on('click','.qtybutton', function(e) {

            // $(".qtybutton").on("click", function () {
            const $quantityBox = $(this).siblings(".cart-quantity-box");
            const currentQuantity = parseInt($quantityBox.val());
            const cartId = $(this).data("id");
            let flag = null;

            /*Increment Cart Quantity*/
            if ($(this).hasClass("dec")) {
                if (currentQuantity > 1) {
                    $quantityBox.val(currentQuantity - 1);
                    flag = 0;
                }
            }
            /*Decrement Cart Quantity*/
            else if ($(this).hasClass("inc")) {
                $quantityBox.val(currentQuantity + 1);
                flag = 1;
            }

            $.ajax({
                url: '{{route('ecommerce.cart.quantity.adjust')}}',
                method: 'get',
                data: {
                    flag: flag,
                    cartId: cartId
                },
                success: function (data) {
                    if (data.status === 200) {
                        $('#cartCounterId').text(data.cartCount)
                        $('#cartTotalPriceInCart').text(data.cartTotal)
                        $('.cartList').html(data.get_cart_list)
                        $('.appearUpdatedCarts').html(data.get_cart_large_list)

                    }
                }
            })

        });
    });
</script>

<script>
    /*Cart item remove from carts page*/
    $(document).ready(function () {
        $('body').on('click', '.TrashCartItem', function (e) {
            const  id = $(this).data('id');
            $.ajax({
                url: '{{route('ecommerce.cart.trash')}}',
                method: 'get',
                data: {id: id},
                success: function (data) {
                    if (data.status === 200) {
                        $('#cartCounterId').text(data.cartCount)
                        $('#cartTotalPriceInCart').text(data.cartTotal)
                        $('.cartList').html(data.get_cart_list)
                        $('.appearUpdatedCarts').html(data.get_cart_large_list)
                        if (data.flag === 0) {
                            $('#CheckoutSection').addClass('d-none')
                            $('.showCartEmpty').html(data.no_cart)
                        }
                    }
                }
            })
        })
    });
</script>

