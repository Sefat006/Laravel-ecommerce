@extends('front.layouts.app')


<!-- -------------- these are for dynamic meta header -------------------->
<!-- used in app.blade.php-- -->
@section('title', "Customer Order Details")
@section('description', "Customer Order Details")
@section('keywords', "Customer Order Details")
<!-- -------------- these are for dynamic meta header -------------------->


@section('content')

<!-- breadcrumb area start here  -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h2 class="page-title">Order Details</h2>
            <ul class="breadcrumb-pages">
                <li class="page-item"><a class="page-item-link" href="{{ url('/') }}">Home</a></li>
                <li class="page-item">Order Details</li>
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
                            <<li class="{{ request()->routeIs('user.profile') ? 'active' : '' }}">
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
            <div class="col-xl-9 col-lg-8">
                <div class="user-profile-right-part">
                    <div class="user-profile-content-box my-order-page-box">
                        <h2>Order Details (Order No: {{ $order->order_number }})</h2>

                        <div class="order-info">
                            <h4>Order Time: {{ $order->created_at->format('F d, Y, h:i A') }}</h4>
                            <p><strong>Payment Status:</strong> {{ ucfirst($order->payment_status) }}</p>
                            <p><strong>Order Status:</strong> {{ ucfirst($order->order_status) }}</p>
                            <p><strong>Total Amount:</strong> ${{ number_format($order->total_amount, 2) }}</p>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h4>Shipping Details</h4>
                                <ul>
                                    <li><strong>Name:</strong> {{ $order->shipping_name }}</li>
                                    <li><strong>Email:</strong> {{ $order->shipping_email }}</li>
                                    <li><strong>Address:</strong> {{ $order->shipping_street_address }}</li>
                                    <li><strong>State:</strong> {{ $order->shipping_state }}</li>
                                    <li><strong>Zipcode:</strong> {{ $order->shipping_zipcode }}</li>
                                    <li><strong>Country:</strong> {{ $order->shipping_country }}</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4>Billing Details</h4>
                                <ul>
                                    <li><strong>Name:</strong> {{ $order->billing_name }}</li>
                                    <li><strong>Email:</strong> {{ $order->billing_email }}</li>
                                    <li><strong>Address:</strong> {{ $order->billing_street_address }}</li>
                                    <li><strong>State:</strong> {{ $order->billing_state }}</li>
                                    <li><strong>Zipcode:</strong> {{ $order->billing_zipcode }}</li>
                                    <li><strong>Country:</strong> {{ $order->billing_country }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-5">
                            <h4>Order Items</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->orderItems as $item)
                                    <tr>
                                        <td>{{ $item->product_name }}</td>
                                        <td>{{ $item->color ?? 'N/A' }}</td>
                                        <td>{{ $item->size ?? 'N/A' }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>${{ number_format($item->price, 2) }}</td>
                                        <td>${{ number_format($item->total, 2) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <h4>Additional Info</h4>
                            <p><strong>Shipping Method:</strong> {{ $order->shipping_method }}</p>
                            <p><strong>Payment Method:</strong> {{ $order->payment_method }}</p>
                            <p><strong>Order Notes:</strong> {{ $order->order_notes ?? 'N/A' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile Page area end here  -->


@endsection