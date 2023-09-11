<div id="" class="modal fade affiliate-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="modal_dismiss">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card " style="margin-bottom: 0px!important;" >
                    <div class="card-body mb-0 pb-0">
                        <h2 class="card-title mb-4 text-center">Product Affiliate Setting</h2>
                        <form id="affiliateSettingForm" action="" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" id="AffiliateProductId">
                            <div class="row">
                                <div class="col-md-5">
                                    <select name="affiliate_commission_type" id="affiliateCommissionType" class="form-control">
                                        <option value="">Select Type</option>
                                        <option value="flat">Flat</option>
                                        <option value="percent">Percentage</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group row mb-4">
                                        <input type="text" class="form-control" id="affiliateCommission"  name="affiliate_commission" placeholder="Ex: 10">
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
                {{--Product Additional Setting--}}
                <div class="card pb-5" style="margin-bottom: 0px!important;">
                    <div class="card-body mb-0 pb-0">
                        <h2 class="card-title mb-4 text-center">Additional Setting</h2>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="container">
                                    <h6>Flash Dash</h6>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input flashDashSwitch" id="flashDashSwitch">
                                        <label class="custom-control-label" for="flashDashSwitch" style="font-weight: bold;">Flash Dash Product</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container ">
                                    <h6>Recent Product</h6>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input recentProductSwitch" id="recentProductSwitch">
                                        <label class="custom-control-label" for="recentProductSwitch" style="font-weight: bold;">Recent Product</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="container">
                                    <h6>Featured</h6>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input featuredProductSwitch" id="featuredProductSwitch">
                                        <label class="custom-control-label" for="featuredProductSwitch" style="font-weight: bold;">Featured Product</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container ">
                                    <h6>Best Sale</h6>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input bestSaleProductSwitch" id="bestSaleProductSwitch">
                                        <label class="custom-control-label" for="bestSaleProductSwitch" style="font-weight: bold;">Best Sale Product</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

