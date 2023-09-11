<script>
    $(document).ready(function () {
        $('.addToWishlist').on('click', function (){
            const productId = $(this).data('id');
            $.ajax({
                url: '{{route('ecommerce.addToWishlist')}}',
                method: 'get',
                data: {id: productId},
                success: function (data) {
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
