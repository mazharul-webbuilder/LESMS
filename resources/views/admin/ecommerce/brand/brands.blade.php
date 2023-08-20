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
                                <li class="breadcrumb-item active">Categories</li>
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
                                <h4 class="mb-0 font-size-18 text-light">Categories</h4>
                                <button class="btn text-light" style="background-color: #313866">Add Category <i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="ProductCategoryDataTable" class="table table-bordered dt-responsive nowrap bg-white" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="text-center" style="background-color: #45CFDD;">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Image</th>
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
                $('#ProductCategoryDataTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('admin.category.all') }}',
                    columns: [
                        {
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'title',
                            name: 'title'
                        },
                        {
                            data: 'image',
                            name: 'image',
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
                            searchable: false }
                    ]
                });
            });

            // AJAX CRUD
            $('#ProductCategoryDataTable').on('click', '.view-btn', function () {
                const id = $(this).data('id');
                $.ajax({
                    url: '{{ route('admin.category.show') }}',
                    type: 'GET',
                    data: {id: id},
                    dataType: 'json',
                    success: function (data) {
                        $('.categoryName').text('Name :' + ' ' + data.name)
                        $('.category-title').text('Title :' + ' ' + data.title)
                        $('.category-image').attr('src', '{{asset("/")}}' + data.image);
                        let status = data.status === 1 ? 'Active' : 'Disabled';
                        $('.category-status').text('Status :' + ' ' + status);


                        $('.category-show-modal').modal('show');

                    }
                })
            });

            $('#ProductCategoryDataTable').on('click', '.edit-btn', function () {
                const id = $(this).data('id');


                // Set the modal title
                $('#categoryModalTitle').text(categoryName);

                // Show the modal
                $('.view-btn').attr('data-toggle', 'modal');
                $('.bs-example-modal-center').modal('show');
            });


            $('#ProductCategoryDataTable').on('click', '.delete-btn', function () {
                const id = $(this).data('id');
            });
        </script>
@endsection

@include('admin.ecommerce.category.view_modal')


