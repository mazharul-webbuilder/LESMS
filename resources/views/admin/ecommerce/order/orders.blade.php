@extends('admin.master.master')
@section('title')
    Manage Orders | {{config('app.name')}}
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
                                <li class="breadcrumb-item active">Orders</li>
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
                                <h4 class="mb-0 font-size-18 text-light">Orders</h4>
{{--                                <button--}}
{{--                                    type="button"--}}
{{--                                    data-toggle="modal"--}}
{{--                                    data-target="#brandAddModal"--}}
{{--                                    class="btn text-light"--}}
{{--                                    style="background-color: #313866"><Add></Add> New Brand <i class="fas fa-plus"></i></button>--}}
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="datatable_item" class="table table-bordered dt-responsive nowrap bg-white" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="text-center" style="background-color: #45CFDD;">
                                <tr>
                                    <th>Id</th>
                                    <th>Order Number</th>
                                    <th>Order Date</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Items Ordered</th>
                                    <th>Order Total</th>
                                    <th>Order Status</th>
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
    @include('admin.ecommerce.order.order-details-modal')
@endsection
@section('page-footer-assets')
    <script>
        $(document).ready(function () {
            var dataTable = $('#datatable_item').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.orders.all') }}',
                order: [[0, "desc"]],
                columns: [
                    {
                        data: 'id',
                        name: 'id',
                        searchable: false,
                        orderable: true,
                    },
                    {
                        data: 'order_number',
                        name: 'order_number',
                        searchable: true,
                        orderable: true,
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        searchable: true,
                        orderable: true,
                    },
                    {
                        data: 'name',
                        name: 'name',
                        searchable: true,
                        orderable: true,
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                        searchable: true,
                    },
                    {
                        data: 'total_item',
                        name: 'total_item',
                        orderable: true,
                    },
                    {
                        data: 'order_total',
                        name: 'order_total',
                        orderable: true,
                    },
                    {
                        data: 'order_status',
                        name: 'order_status',
                        orderable: true
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
    </script>
    @include('admin.ecommerce.order.orders-script')
@endsection

