<div class="modal fade" id="scrollableModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <h5 class="modal-title mt-0 card-header" id="exampleModalScrollableTitle">Order Details</h5>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Order Number</th>
                                <td id="orderNumber"></td>
                            </tr>
                            <tr>
                                <th>Customer Name</th>
                                <td id="customerName"></td>
                            </tr>
                            <tr>
                                <th>Customer Email</th>
                                <td id="CustomerEmail"></td>
                            </tr>
                            <tr>
                                <th>Order Date</th>
                                <td id="OrderDate"></td>
                            </tr>
                            <tr>
                                <th>Shipping Address</th>
                                <td id="ShippingAddress"></td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <td id="PaymentStatus"></td>
                            </tr>
                            <tr>
                                <th>Order Status</th>
                                <td id="orderStatus"></td>
                            </tr>
                            <tr>
                                <th>Total Amount</th>
                                <td id="totalAmount"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{--Product Details--}}
                <div class="card mt-2">
                    <h5 class="modal-title mt-0 card-header" id="exampleModalScrollableTitle">Products</h5>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Product name</th>
                                <th>Size</th>
                                <th>Image</th>
                                <th>Quantity</th>
                            </tr>
                            </thead>
                            <tbody id="tableBody">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
