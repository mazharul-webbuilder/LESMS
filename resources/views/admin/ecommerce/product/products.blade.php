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
            $('#addProduct').on('click', function(){
                window.location.href = "{{ route('admin.product.create') }}";
            })
            // End Redirect to Product Create Page

            // Load DataTable
            const dataTable = $('#datatable_item').DataTable({
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
            // End Load DataTable

            /*Stock Manage*/
            $('#datatable_item').on('click', '.stock-btn', function () {
                const productId =$(this).data('id');
                $.ajax({
                    {{--url: '{{ route('admin.product.all.sizes') }}',--}}
                    method: 'get',
                    data: { id: productId },
                    success: function (data) {


                        $('.stock-modal').modal('show')
                    }
                })


            })
            /*End Stock Mange*/

        });

    </script>
@endsection
