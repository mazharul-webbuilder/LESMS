<script>
    $(document).ready(function(){

        /*Get User Selected Size*/
        $('.ProductSizeId').on('click', function(e) {
            // Clear previous CSS from all elements
            $('.ProductSizeId').css({
                color: 'initial'
            });
            // Apply CSS to the clicked element
            $(this).css({
                color: '#5F2DED'
            });
            sizeId = $(this).data('id');
            $('#SizeId').val(sizeId);
        });
        /*Add to Cart Start Here*/
        $('#AddToCartInProductDeatil').on('click', function(e) {
            e.preventDefault();
            const productId = $(this).data('id');
            $('#productIDforCart').val(productId);

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

        /*Affiliate Link Copy to user Clipboard*/
        $('#ProductAffiliateLink').on('click', function (){
            const link = $(this).val()

            let temp = $("<input>");
            $("body").append(temp);
            temp.val(link).select();
            document.execCommand("copy");
            temp.remove();

            Toast.fire({
                icon: 'success',
                'title': 'Link Copied'
            })
        })
    })
</script>
