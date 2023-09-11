<script>
$(document).ready(function() {
    $('body').on('click','.cartCloseBtn', function(e) {
        const cartId = $(this).data('id')
        $.ajax({
            url: '{{route('ecommerce.cart.remove')}}',
            type: 'get',
            data: {
                cartId: cartId
            },
            success: function(data) {
                if (data.status === 200) {
                    $('#cartCounterId').text(data.cartCount)
                    $('.cartList').html(data.get_cart_list)

                    Toast.fire({
                        icon: data.type,
                        title: data.message
                    })
                }
            }
        })
    })
    $('body').on('click','.wishlistCloseBtn', function(e) {
        const wishlistId = $(this).data('id')

        $.ajax({
            url: '{{route('ecommerce.wishlist.remove')}}',
            type: 'get',
            data: {id: wishlistId},
            success: function(data) {
                if (data.status === 200) {
                    $('#wishListCounterId').text(data.totalCount)
                    $('.wishtListFreshContent').html(data.get_wishlist)
                    Toast.fire({
                        icon: data.type,
                        title: data.message
                    })
                }
            }
        })
    })

})
</script>
