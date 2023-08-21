@extends('admin.master.master')
@section('title')
    Brands | {{config('app.name')}}
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
                                <li class="breadcrumb-item active">Brands</li>
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
                                <h4 class="mb-0 font-size-18 text-light">Brands</h4>
                                <button
                                    type="button"
                                    data-toggle="modal"
                                    data-target="#brandAddModal"
                                    class="btn text-light"
                                    style="background-color: #313866"><Add></Add> New Brand <i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="datatable_item" class="table table-bordered dt-responsive nowrap bg-white" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="text-center" style="background-color: #45CFDD;">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Slogan</th>
                                    <th>Logo</th>
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
@section('page-footer-assets')
        <script>
            $(document).ready(function () {
                var dataTable = $('#datatable_item').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('admin.brands.all') }}',
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
                            data: 'slogan',
                            name: 'slogan'
                        },
                        {
                            data: 'logo',
                            name: 'logo',
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
            });

            // AJAX CRUD
            $('#datatable_item').on('click', '.view-btn', function () {
                const id = $(this).data('id');
                $.ajax({
                    url: '{{ route('admin.brand.show') }}',
                    type: 'GET',
                    data: {id: id},
                    dataType: 'json',
                    success: function (data) {
                        $('.brandName').text('Brand Name :' + ' ' + data.name)
                        $('.brand-slogan').text('Slogan :' + ' ' + data.slogan)
                        $('.brand-image').attr('src', '{{asset("/")}}' + data.logo);
                        let status = data.status === 1 ? 'Active' : 'Disabled';
                        $('.brand-status').text('Status :' + ' ' + status);


                        $('.brand-show-modal').modal('show');

                    }
                })
            });

            /*Edit Button*/
            $('#datatable_item').on('click', '.edit-btn', function () {
                const id = $(this).data('id');
                $.ajax({
                    url: '{{ route('admin.brand.edit') }}',
                    type: 'GET',
                    data: {id: id},
                    success: function (data) {
                        if (data.status === 200) {
                            $('.brandEditModal').modal('show');
                        }
                    }
                })

            });


            /*Delete Button*/
            $('#datatable_item').on('click', '.delete-btn', function () {
                const id = $(this).data('id');
            });
        </script>

        {{--Add Brand--}}
        <script>
            const brandAddForm = $('#brandAddForm')
            brandAddForm.submit(function (event) {
                event.preventDefault();
                $('#brandAddError').text('')

                const formData = new FormData(brandAddForm[0]);
                $.ajax({
                    url: '{{ route('admin.brand.store') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        if (data.status ===200) {
                            $('#datatable_item').DataTable().ajax.reload();
                            $('.modal_dismiss').trigger('click')
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
        </script>
@endsection

@include('admin.ecommerce.brand.view_modal')
@include('admin.ecommerce.brand.add_modal')


