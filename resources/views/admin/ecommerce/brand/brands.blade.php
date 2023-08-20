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
                                    <th>Action</th>
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
                            name:'status',
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
                var userId = $(this).data('id');
                // Perform AJAX request for viewing user details
            });

            $('#ProductCategoryDataTable').on('click', '.edit-btn', function () {
                var userId = $(this).data('id');
                // Perform AJAX request for editing user details
            });

            $('#ProductCategoryDataTable').on('click', '.delete-btn', function () {
                var userId = $(this).data('id');
                // Perform AJAX request for deleting user
            });
        </script>
@endsection


