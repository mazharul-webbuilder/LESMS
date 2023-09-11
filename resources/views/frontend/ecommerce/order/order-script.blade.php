<!-- Your JavaScript -->
<script>
    $(document).ready(function() {
        $('#orderPlaceButton').on('click', function() {
            const orderPlaceForm = $('#orderPlacesForm');
            const formData = new FormData(orderPlaceForm[0]) // u se this to gather form data if form includes file use this

            $('.error-message').hide()

            $.ajax({
                url: '{{route('ecommerce.placeOrder')}}',
                method: 'POST',
                contentType: false,
                processData: false,
                data: formData,
                success: function(data) {
                   if (data.status === 200) {
                       window.location.href = "{{ route('ecommerce.orderSuccess') }}";
                       Toast.fire({
                           icon: data.type,
                           title: data.message
                       })
                   }
                },
                error: function(xhr, status, error) {
                    if (xhr.status === 422) {
                        const errors = xhr.responseJSON.errors;

                        // Clear previous error messages
                        $('.error-message').remove();

                        // Display error messages for each input field
                        Object.keys(errors).forEach(function(field) {
                            const errorMessage = errors[field][0];
                            const inputField = $('[name="' + field + '"]');
                            inputField.after('<span class="error-message text-danger">' + errorMessage + '</span>');
                        });

                    } else {
                        console.log('An error occurred:', status, error);
                    }
                }
            });
        });
    });
</script>
