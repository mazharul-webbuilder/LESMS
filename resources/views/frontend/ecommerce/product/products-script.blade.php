<script>
    $(document).ready(function (){
        /*Add to Cart Start Here*/
        $('.AddToCartInProductDeatil').on('click', function(e) {
            e.preventDefault();
            const productId = $(this).data('id')

            $('#productIDforCart').val(productId)

            const cartAddFormData = $('#addToCartForm');
            const formData = new FormData(cartAddFormData[0]);

            $.ajax({
                url: '{{route('ecommerce.addToCart')}}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.status === 200) {
                        $('#cartCounterId').text(data.cartCount)
                        $('.cartList').html(data.get_cart_list)

                        Toast.fire({
                            icon: data.type,
                            title: data.message
                        })
                    }
                },

            });
        });
    })
</script>
