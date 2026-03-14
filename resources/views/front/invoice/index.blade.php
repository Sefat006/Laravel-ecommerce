@extends('front.layouts.app')


<!-- -------------- these are for dynamic meta header -------------------->
<!-- used in app.blade.php-- -->
@section('title', "Customer Order Invoice")
@section('description', "Customer Order Invoice")
@section('keywords', "Customer Order Invoice")
<!-- -------------- these are for dynamic meta header -------------------->


@section('content')

<style type="text/css">
    .invoice h3 {
        font-size: 25px;
        color: #000;
    }

    .invoice p.h3 {
        font-size: 28px;
        color: #000;
    }

    .invoice button.btn.btn-info {
        font-size: 16px;
        color: #fff;
    }

    .invoice .logo img {
        width: 200px;
        display: block;
        padding: 21px 23px;
        border: 2px solid #fff8f8;
        float: right;
    }

    table.table.table-borderless tr, td, th {
        border: 1px solid #ddd;
    }

    #invoiceSection .card-body {
        padding: 50px;
    }
</style>


<!-- breadcrumb area start here  -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h2 class="page-title">Order Invoice</h2>
            <ul class="breadcrumb-pages">
                <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                <li class="page-item">Order Invoice</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb area end here  -->

<!-- Profile Page area start here  -->
<div class="profile-page-area section">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="section-wrap account-page-sidemenu user-profile-sidebar">
                    <nav class="account-page-menu">
                        <ul>
                            <li class="{{ request()->routeIs('user.profile') ? 'active' : '' }}">
                                <a href="{{ route('user.profile') }}"><i class="fas fa-user"></i> My Profile</a>
                            </li>

                            <li class="{{ request()->routeIs('user.orders') ? 'active' : '' }}">
                                <a href="{{ route('user.orders') }}"><i class="fas fa-box-open"></i> My Order</a>
                            </li>

                            <li class="{{ request()->routeIs('user.reviews') ? 'active' : '' }}">
                                <a href="{{ route('user.reviews') }}"><i class="fas fa-user-edit"></i> My Review</a>
                            </li>

                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); 
                                        document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 d-print-none">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h3>Invoice</h3>
                    <div>
                        <button class="btn btn-info" onclick="printInvoice()" style="min-width: 200px !important; font-size: 18px;">
                            <i class="fas fa-print"></i> Print Invoice
                        </button>
                    </div>
                </div>
            </div>

            <div id="invoiceSection">
                <div class="card card-lg">
                    <div class="card-body">
                        <div class="row">
                            <div class="logo">
                                <img src="{{ asset('front/assets/images/' . get_settings()->logo) }}">
                            </div>

                            <div class="pt-2 col-md-6">
                                <strong><i>Sold To: </i></strong>
                                <p class="h3">{{ auth()->user()->name ?? "" }}</p>
                                <address>
                                    {{ auth()->user()->name ?? "" }}<br>
                                    {{ auth()->user()->email ?? "" }}<br>
                                    {{ auth()->user()->phone ?? "" }}<br>
                                    {{ auth()->user()->address ?? "" }}
                                </address>
                            </div>

                            <div class="pt-2 col-md-6">
                                <strong><i>Sold From: </i></strong>
                                <p class="h3">{{ get_settings()->site_name }}</p>
                                <address>
                                    <br>
                                    {{ get_settings()->phone }}<br>
                                    {{ get_settings()->address }}<br>
                                </address>
                            </div>
                        </div>

                        <hr class="mt-3">

                        <div class="row">
                            <div class="col-6 p-0">
                                <h3>Invoice: {{ $order->order_number }}</h3>
                                <ul>
                                    <li>Invoice Date: {{ $order->created_at->format('d M, Y') }}</li>
                                </ul>
                            </div>
                            <div class="col-6 text-right">
                                <h3>Payment Info</h3>
                                <ul>
                                    <li>Order Status: {{ $order->order_status }}</li>
                                    <li>Payment Method: {{ $order->payment_method }}</li>
                                    <li>Payment Status: {{ $order->payment_status }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="table-responsive mt-5">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th class="text-right" colspan="2">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderItems as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->product_name }}</td>
                                        <td>
                                            <span class="amount">${{ $item->price }}</span>
                                        </td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>${{ $item->total }}</td>
                                    </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Subtotal</td>
                                        <td>${{ $order->subtotal_amount }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Tax</td>
                                        <td>${{ $order->tax_amount }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Delivery Charge</td>
                                        <td>${{ $order->shipping_amount }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Discount (-)</td>
                                        <td>${{ $order->discounted_amount }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td><strong>Grand Total</strong></td>
                                        <td><strong>${{ $order->total_amount }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p class="text-secondary text-center mt-5">
                            Thank you very much for doing shopping with us. We look forward to working with you again!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile Page area end here  -->



@endsection

@push('scripts')
<script>
    function printInvoice() {
        var printContents = $("#invoiceSection").html();
        var originalContents = $("body").html();

        $("body").html(printContents);
        window.print();
        $("body").html(originalContents);
        location.reload(); // Added to restore functional state after body swap
    }
</script>
@endpush