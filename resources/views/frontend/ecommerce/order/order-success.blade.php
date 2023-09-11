@extends('frontend.master.master')
@section('title')
    Congratulations | Order Success | {{ config('app.name') }}
@endsection

@section('content')
    <div class="d-flex align-items-center justify-content-center" style="height: 80vh;">
        <div class="congratulations-card p-4 text-center">
            <h2 class="mb-4">Congratulations!</h2>
            <p>Your order has been successfully placed.</p>
            <p>Thank you for shopping with us!</p>

            <div class="contact-info mt-4">
                <p>If you have any questions or need assistance, feel free to contact our support team:</p>
                <p>Email: support@yeasin.com</p>
                <p>Phone: +88 01973217348</p>
            </div>

        </div>
    </div>

    <style>
        .congratulations-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px; /* Limit card width for readability */
            margin: auto;
        }
        .congratulations-card h2 {
            color: #28a745;
        }
    </style>
@endsection
