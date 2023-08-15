<script>
    $(document).ready(function() {
        const loginForm = $('#adminLoginForm')
        loginForm.submit(function(event){
            event.preventDefault()
            const formData = new FormData(loginForm[0])
            $.ajax({
                url: '{{url('admin/login')}}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response.status){
                        window.location.href = '/admin/dashboard'
                    } else {
                        $('#AdminLoginError').text(response.message);

                        // Clear previous error messages
                        $('.error-message').remove();
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
            })
        })
    })
</script>
