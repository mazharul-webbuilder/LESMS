<div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <h2 class="card-title mb-4 text-center">Add Size</h2>
                        <form id="addForm" action="" method="POST">
                            <p class="text-center alert-danger" id="brandAddError"></p>
                            @csrf
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name*</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Ex: L" name="name">
                                    <span class="error-message" id="email-error"></span>
                                </div>
                            </div>

                            <div class="form-group row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        <button type="submit"class="btn btn-primary w-md" style="background-color: #504099!important;">Add</button>
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

