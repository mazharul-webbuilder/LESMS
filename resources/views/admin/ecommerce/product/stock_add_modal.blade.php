<div id="" class="modal fade stock-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="modal_dismiss">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title mb-4 text-center">Stock Management</h2>
                        <form id="addForm" action="" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" id="productId">
                            <div class="row">
                                <div class="col-md-5">
                                    <select name="size_id" id="productSizeDropdown" class="form-control">
                                        {{--Option will appear dynamicaly by AJAX--}}
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group row mb-4">
                                        <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Stock Ex: 15" name="quantity">
                                        <span class="error-message" id="email-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group row justify-content-end">
                                        <button type="submit"class="btn btn-primary" style="background-color: #504099!important;">Add</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

