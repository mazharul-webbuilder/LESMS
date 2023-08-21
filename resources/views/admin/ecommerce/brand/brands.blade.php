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
                                <button class="btn text-light" style="background-color: #313866">Add New Brand <i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="ProductBrandDataTable" class="table table-bordered dt-responsive nowrap bg-white" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="text-center" style="background-color: #45CFDD;">
                                <tr>
                                    <th>SL</th>
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
                var dataTable = $('#ProductBrandDataTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('admin.brands.all') }}',
                    order: [[1, "desc"]], // Assuming you want to order by 'name' in descending order
                    columns: [
                        {
                            data: null,
                            searchable: false,
                            orderable: false,
                            render: function (data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
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

                // Re-draw the table to update the serial numbers when a new page is displayed
                dataTable.on('draw.dt', function () {
                    var info = dataTable.page.info();
                    dataTable.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                        cell.innerHTML = i + 1 + info.start;
                    });
                });
            });

            // AJAX CRUD
            $('#ProductBrandDataTable').on('click', '.view-btn', function () {
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

            $('#ProductBrandDataTable').on('click', '.edit-btn', function () {
                const id = $(this).data('id');


                // Set the modal title
                $('#categoryModalTitle').text(categoryName);

                // Show the modal
                $('.view-btn').attr('data-toggle', 'modal');
                $('.bs-example-modal-center').modal('show');
            });


            $('#ProductBrandDataTable').on('click', '.delete-btn', function () {
                const id = $(this).data('id');
            });
        </script>
@endsection

@include('admin.ecommerce.brand.view_modal')


