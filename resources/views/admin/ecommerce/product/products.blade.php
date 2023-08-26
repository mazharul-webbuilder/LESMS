@extends('admin.master.master')
@section('title')
    Products | {{ config('app.name') }}
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18"></h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Products</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card" style="border: 1px solid #504099">
                        <div class="card-header" style="background-color: #504099">
                            <div class="page-title-box d-flex align-items-center justify-content-between pb-0">
                                <h4 class="mb-0 font-size-18 text-light">Products</h4>
                                <button
                                    id="addProduct"
                                    type="button"
                                    class="btn text-light"
                                    style="background-color: #313866">Add  Product <i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="datatable_item" class="table table-bordered dt-responsive nowrap bg-white" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="text-center" style="background-color: #45CFDD;">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Thumbnail</th>
                                    <th>Current Price</th>
                                    <th class="text-center">Stock Manage</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection
@include('admin.ecommerce.product.stock_add_modal')
@section('page-footer-assets')
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
                        render: function (data) {
                            return data === 1 ? 'Active' : 'Disabled';
                        },
                        searchable: false,
                        orderable: false
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
                            order: [[0, "desc"]],
                            columns: [
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
                const id = $(this).data('id')
                $.ajax({
                    url: '{{ route('admin.stock.edit') }}',
                    method: 'get',
                    data: { id: id },
                    success: function (data) {
                        $('#productSizeDropdown').val(data.size.id)
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
        });

    </script>
@endsection
