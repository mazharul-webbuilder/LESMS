<div id="" class="modal fade stock-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="modal_dismiss">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card " style="margin-bottom: 0px!important;">
                    <div class="card-body mb-0 pb-0">
                        <h2 class="card-title mb-4 text-center">Stock Management</h2>
                        <form id="StockAddForm" action="" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" id="productId">
                            <input type="hidden" name="stock_id" id="stockId">
                            <div class="row">
                                <div class="col-md-5">
                                    <select name="size_id" id="productSizeDropdown" class="form-control">
                                        {{--Option will appear dynamicaly by AJAX--}}
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group row mb-4">
                                        <input type="number" class="form-control" id="stockQuantity" placeholder="Stock Ex: 15" name="quantity">
                                        <span class="error-message" id="email-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group row justify-content-end">
                                        <button type="submit"class="btn btn-primary" style="background-color: #504099!important;">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <section class="pb-5 pt-0">
                    <table id="stock_datatable_item" class="table table-bordered dt-responsive nowrap bg-white" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="text-center" style="background-color: #BEADFA;">
                        <tr>
                            <th>P-Name</th>
                            <th>Size</th>
                            <th>In Stock</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                    </table>
                </section>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

