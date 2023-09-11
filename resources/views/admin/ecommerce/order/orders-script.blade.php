<script>
    $(document).ready(function (){
        /*Product Status Control*/
        $('#datatable_item').on('change', '.status-select', function(){
            const newStatus = $(this).val();
            $.ajax({
                url: '{{ route('admin.order.status') }}',
                type: 'GET',
                data: {
                    id: $(this).data('id'), // id of order
                    newStatus: newStatus
                },
                success: function (data) {
                    if (data.status === 200) {
                        Toast.fire({
                            icon: data.type,
                            title: data.message
                        })
                        $('#datatable_item').DataTable().ajax.reload();
                    }
                }
            })

        })
        /*End Product Status Control*/

        /*Order Details Modal Data Appearance*/
        $('#datatable_item').on('click', '.details-btn', function(){
            const orderId = $(this).data('id');
            $.ajax({
                url: '{{ route('admin.order.details') }}',
                method: 'get',
                data: {orderId: orderId},
                success: function(order) {
                    console.log(order)

                    if (order.status === 200) {
                        $('#orderNumber').text(order.data.order_number);
                        $('#customerName').text(order.data.customer.name);
                        $('#CustomerEmail').text(order.data.customer.email);
                        $('#OrderDate').text(order.data.order_date);
                        $('#ShippingAddress').text(order.data.billing.address);
                        $('#PaymentStatus').text(order.data.payment_status);
                        $('#orderStatus').text(order.data.order_status);
                        $('#totalAmount').text(order.data.grand_total);
                        $('#tableBody').html(order.data.order_details);

                        /*Show Modal*/
                        setTimeout(function(){
                            $('#scrollableModal').modal('show');
                        }, 50);
                    }
                }
            })
        })
        /*End Order Details Modal Data Appearance*/

        /*Order Invoice Generate*/
        $('#datatable_item').on('click', '.invoice-btn', function(){
            const orderId = $(this).data('id');
            let url = '{{ url('admin/ecommerce/order/invoice')}}' + '/' + orderId;
            window.open(url, '_blank');
        })
        /*End Order Invoice*/
    })
</script>
