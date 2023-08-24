@extends('admin.master.master')
@section('title')
    Product Sizes | {{ config('app.name') }}
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
                                <li class="breadcrumb-item active">Product Sizes</li>
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
                                <h4 class="mb-0 font-size-18 text-light">Product Sizes</h4>
                                <button
                                    data-toggle="modal"
                                    data-target="#addModal"
                                    type="button"
                                    class="btn text-light"
                                    style="background-color: #313866">Add  Product Size <i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="size_datatable" class="table table-bordered dt-responsive nowrap bg-white" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="text-center" style="background-color: #45CFDD;">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
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
@include('admin.ecommerce.size.add')
@include('admin.ecommerce.size.edit')
@section('page-footer-assets')
    <script>
        $(document).ready(function () {
            $('#size_datatable').DataTable({
                processing: true,
                serverSide: true,
                order: [[0, "desc"]],
                ajax: '{{route('admin.sizes.all')}}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            /*Add Size*/
            const AddForm = $('#addForm')
            AddForm.submit(function (event) {
                event.preventDefault();
                $('#AddError').text('')

                const formData = new FormData(AddForm[0]);
                $.ajax({
                    url: '{{ route('admin.size.store') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        console.log(data);
                        if (data.status === 200) {
                            $('#size_datatable').DataTable().ajax.reload();
                            $('.modal_dismiss').trigger('click')
                            Toast.fire({
                                icon: data.type,
                                title: data.message
                            })
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('error')
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

            /*View Size*/
            $('#size_datatable').on('click', '.edit-btn', function(){
                const id = $(this).data('id');
                $.ajax({
                    url: '{{ route('admin.size.edit') }}',
                    type: 'GET',
                    data: {id: id},
                    success: function (data) {
                        if (data.status === 200) {
                            $('#edit_id').val(data.data.id);
                            $('#edit_name').val(data.data.name);
                            $('#editModal').modal('show');
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'Something went wrong'
                            })
                        }

                    },
                })
            })

            /*Update Size*/
            const updateForm = $('#editForm')
            updateForm.submit(function (event) {
                event.preventDefault();
                $('#updateError').text('')

                const formData = new FormData(updateForm[0]);
                $.ajax({
                    url: '{{ route('admin.size.update') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        if (data.status ===200) {
                            $('#size_datatable').DataTable().ajax.reload();
                            $('.modal_dismiss_edit').trigger('click')
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



        });
    </script>
@endsection

