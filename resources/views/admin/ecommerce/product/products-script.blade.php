<script>
    $(document).ready(function () {
        // Redirect to Product Create Page
        $('#addProduct').on('click', function () {
            window.location.href = "{{ route('admin.product.create') }}";
        });
        // End Redirect to Product Create Page

        // Initialize the main DataTable
        const mainDataTable = $('#datatable_item').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.products.all') }}',
            order: [[0, "desc"]],
            columns: [
                {
                    data: 'id',
                    name: 'id',
                    searchable: false,
                    orderable: true,
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'thumbnail_image',
                    name: 'thumbnail_image',
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'current_price',
                    name: 'current_price',
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'stock_management',
                    name: 'stock_management',
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'status',
                    name: 'status',
                    // render: function (data) {
                    //     return data === 1 ? 'Active' : 'Disabled';
                    // },
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'affiliate',
                    name: 'affiliate',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });

        let stockDt; // Declare a variable to hold the stock DataTable instance

        /* Stock Manage */
        $('#datatable_item').on('click', '.stock-btn', function () {
            const productId = $(this).data('id');

            if ($.fn.DataTable.isDataTable('#stock_datatable_item')) {
                $('#stock_datatable_item').DataTable().destroy();
            }

            $.ajax({
                url: '{{ route('admin.product.all.sizes') }}',
                method: 'get',
                data: { id: productId },
                success: function (sizes) {
                    const sizeDropdown = $('#productSizeDropdown');

                    $('#productId').val(productId);

                    sizeDropdown.empty();
                    sizeDropdown.append('<option value="">Select Size</option>');

                    $.each(sizes, function (index, size) {
                        sizeDropdown.append('<option value="' + size.id + '">' + size.name + '</option>');
                    });

                    /* Show stock DataTable */
                    stockDt = $('#stock_datatable_item').DataTable({
                        processing: true,
                        serverSide: true,
                        searching: false,
                        lengthChange: false,
                        ajax: {
                            url: '{{ route('admin.stock.all') }}',
                            data: {
                                productId: productId
                            },
                        },
                        order: [[0, "asc"]],
                        columns: [
                            {
                                data: 'product_name',
                                name: 'product_name',
                            },
                            {
                                data: 'size_name',
                                name: 'size_name'
                            },
                            {
                                data: 'quantity',
                                name: 'quantity',
                                searchable: true,
                                orderable: true,
                            },
                            {
                                data: 'action',
                                name: 'action',
                                orderable: false,
                                searchable: false
                            }
                        ]
                    });
                }
            });

            $('.stock-modal').modal('show');
        });
        /* End Stock Manage */

        /*Stock Add*/
        const stockAddForm = $('#StockAddForm')

        stockAddForm.submit(function (event) {
            event.preventDefault();
            const formData = new FormData(stockAddForm[0]);
            $.ajax({
                url: '{{ route('admin.stock.store') }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data.status ===200) {
                        $('#productSizeDropdown').val('')
                        $('#stockQuantity').val('')
                        $('#stock_datatable_item').DataTable().ajax.reload();
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
            })
        })
        /*End Stock Add*/
        /*Stock Edit*/
        $('#stock_datatable_item').on('click', '.stock-edit-btn', function(){
            const id = $(this).data('id') // stockId
            $.ajax({
                url: '{{ route('admin.stock.edit') }}',
                method: 'get',
                data: { id: id },
                success: function (data) {
                    console.log(data);
                    if (data.size_id != null) {
                        $('#productSizeDropdown').val(data.size.id)
                    }
                    $('#stockQuantity').val(data.quantity)
                    $('#stockId').val(data.id)

                    const stockAddForm = $('#StockAddForm')
                    stockAddForm.submit(function (event) {
                        event.preventDefault();

                        const formData = new FormData(stockAddForm[0]);
                        $.ajax({
                            url: '{{ route('admin.stock.store') }}',
                            type: 'POST',
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                if (data.status ===200) {
                                    $('#stockId').val('')
                                    $('#productSizeDropdown').val('')
                                    $('#stock_datatable_item').DataTable().ajax.reload();
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
                        })
                    })


                }
            })

        })
        /*End Stock Edit*/

        /*Stock Delete*/
        $('#stock_datatable_item').on('click', '.stock-delete-btn', function (){
            const id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if(result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('admin.stock.delete') }}',
                        type: 'GET',
                        data: {id: id},
                        success: function (data) {
                            console.log(data);
                            if (data.status === 200) {
                                Toast.fire({
                                    icon: data.type,
                                    title: data.message
                                })
                                $('#stock_datatable_item').DataTable().ajax.reload();
                            }
                        }
                    })
                }
            })
        })
        /*End Stock Decelte*/

        /*Product Status Control*/
        $('#datatable_item').on('change', '.status-select', function(){
            const newStatus = $(this).val();
            $.ajax({
                url: '{{ route('admin.product.status') }}',
                type: 'GET',
                data: {
                    id: $(this).data('id'), // id of product
                    newStatus: newStatus
                },
                success: function (data) {
                    if (data.status === 200) {
                        Toast.fire({
                            icon: data.type,
                            title: data.message
                        })
                        $('#datatable_item').DataTable().ajax.reload();
                    }
                }
            })

        })
        /*End Product Status Control*/

        /* edit Product */
        $('#datatable_item').on('click', '.edit-btn', function (e) {
            const id = $(this).data('id');
            window.location.href = '{{ url('admin/ecommerce/product-edit')}}' + '/' + id
        });

        /*End edit Product*/


        /*Delete Product*/
        $('#datatable_item').on('click', '.delete-btn', function(){
            const productId = $(this).data('id')
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('admin.product.delete') }}',
                        method: 'get',
                        data: {productId: productId},
                        success: function(data) {
                            if (data.status === 200) {
                                Toast.fire({
                                    icon: data.type,
                                    title: data.message
                                })
                                $('#datatable_item').DataTable().ajax.reload()
                            }
                        }
                    })
                }
            })
        })
        /*End Delete Product*/

        /*Affiliate Setting*/
        $('#datatable_item').on('click', '.affiliate-setting-btn', function () {
            const productId = $(this).data('id');
            $('#AffiliateProductId').val(productId);

            // Use a single AJAX request for efficiency
            $.ajax({
                url: '{{route('admin.product.affiliate.show')}}',
                method: 'get',
                data: {id: productId},
                success: function (data) {
                    $('#affiliateCommissionType').val(data.affiliate_commission_type);
                    $('#affiliateCommission').val(data.affiliate_commission);
                }
            });

            // Define an array of product control switches
            const productControlSwitches = [
                {element: $('.flashDashSwitch'), type: 'flashDeal'},
                {element: $('.recentProductSwitch'), type: 'recentProduct'},
                {element: $('.featuredProductSwitch'), type: 'featured'},
                {element: $('.bestSaleProductSwitch'), type: 'bestSale'},
            ];

            // Reset all switches to unchecked state
            productControlSwitches.forEach(function (control) {
                control.element.attr('checked', false);
            });

            // Use Promise.all to fetch control status efficiently
            Promise.all(productControlSwitches.map(function (control) {
                return getProductControlStatus(productId, control.type);
            })).then(function (results) {
                // Set switches based on the results
                results.forEach(function (result, index) {
                    if (result) {
                        productControlSwitches[index].element.attr('checked', true);
                    }
                });
            });

            // Show the modal after a 600 ms delay
            setTimeout(function () {
                $('.affiliate-modal').modal('show');
            }, 600);
        });

        /*End Affiliate Setting*/

        /*Affiliate Data Store*/
        const affiliateSettingForm = $('#affiliateSettingForm')

        affiliateSettingForm.submit(function (event) {
            event.preventDefault();
            const formData = new FormData(affiliateSettingForm[0]);
            $.ajax({
                url: '{{ route('admin.affiliate.setting.store') }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data.status ===200) {
                        Toast.fire({
                            icon: data.type,
                            title: data.message
                        })

                        $('.affiliate-modal').modal('hide')

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

        /*End AAffiliate Data Store*/



        function getProductControlStatus(productId, action) {
            // Return a promise from the function
            return new Promise(function(resolve) {
                $.ajax({
                    url: '{{route('admin.additional.setting.status')}}',
                    method: 'get',
                    data: {id: productId, action: action},
                    success: function (data) {
                        // Check the condition and return true or false
                        if (data.status === 200) {
                            resolve(true); // Return true if the condition is met
                        } else {
                            resolve(false); // Return false if the condition is not met
                        }
                    }
                });
            });
        }

    });
</script>
