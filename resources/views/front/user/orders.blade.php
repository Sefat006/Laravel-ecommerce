@extends('front.layouts.app')


<!-- -------------- these are for dynamic meta header -------------------->
<!-- used in app.blade.php-- -->
@section('title', "Customer Orders")
@section('description', "Customer Orders")
@section('keywords', "Customer Orders")
<!-- -------------- these are for dynamic meta header -------------------->


@section('content')

<!-- breadcrumb area start here  -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h2 class="page-title">My Order</h2>
            <ul class="breadcrumb-pages">
                <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                <li class="page-item">My Order</li>
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
            <div class="col-xl-9 col-lg-8">
                <div class="user-profile-right-part">
                    <div class="user-profile-content-box my-order-page-box">

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-active-order-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-active-order" type="button" role="tab"
                                    aria-controls="pills-active-order" aria-selected="true">
                                    All Orders
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-delivered-order-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-delivered-order" type="button" role="tab"
                                    aria-controls="pills-delivered-order" aria-selected="false">
                                    Delivered Order
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-cancelled-order-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-cancelled-order" type="button" role="tab"
                                    aria-controls="pills-cancelled-order" aria-selected="false">
                                    Cancelled Order
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-active-order" role="tabpanel"
                                aria-labelledby="pills-active-order-tab">
                                <div class="order-table mt-5">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Payment Status</th>
                                                    <th>Order Status</th>
                                                    <th>Total Amount</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orders as $order)
                                                <tr>
                                                    <td>
                                                        <p>Order ID: {{ $order->order_number }}</p>
                                                        <p>Order Time: {{ $order->created_at->format('F d, Y, h:i A') }}</p>
                                                    </td>
                                                    <td>
                                                        {{ ucfirst($order->payment_status) }}
                                                    </td>
                                                    <td>
                                                        {{ ucfirst($order->order_status) }}
                                                    </td>
                                                    <td>
                                                        <span class="amount">$ {{ $order->total_amount }}</span>
                                                    </td>
                                                    <td>
                                                        {{ $order->created_at->format('d M Y') }}
                                                    </td>
                                                    <td>
                                                        <a title="Track Order" href="{{ route('order.track', $order->tracking_number) }}">
                                                            <i class="fas fa-user-cog"></i>
                                                        </a>
                                                        |
                                                        <a title="Order Details" href="{{ route('user.order.details', $order->id) }}">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        |
                                                        <a title="Order Invoice" href="{{ route('order.invoice', $order->id) }}">
                                                            <i class="fas fa-file-invoice"></i>
                                                        </a>
                                                        |
                                                        @if($order->payment_status == "pending" || $order->payment_status == "failed")
                                                        <a title="Pay Now" href="">
                                                            <i class="fas fa-file-invoice-dollar"></i>
                                                        </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-delivered-order" role="tabpanel"
                                aria-labelledby="pills-delivered-order-tab">
                                <div class="order-table mt-5">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Payment Status</th>
                                                    <th>Order Status</th>
                                                    <th>Total Amount</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($deliveredOrders as $dorder)
                                                <tr>
                                                    <td>
                                                        <p>Order ID: {{ $dorder->order_number }}</p>
                                                        <p>Order Time: {{ $dorder->created_at->format('F d, Y, h:i A') }}</p>
                                                    </td>
                                                    <td>
                                                        {{ ucfirst($dorder->payment_status) }}
                                                    </td>
                                                    <td>
                                                        {{ ucfirst($dorder->order_status) }}
                                                    </td>
                                                    <td>
                                                        <span class="amount">$ {{ $dorder->total_amount }}</span>
                                                    </td>
                                                    <td>
                                                        {{ $dorder->created_at->format('d M Y') }}
                                                    </td>
                                                    <td>
                                                        <a title="Track Order" href="{{ route('order.track', $dorder->tracking_number) }}">
                                                            <i class="fas fa-user-cog"></i>
                                                        </a>
                                                        |
                                                        <a title="Order Details" href="{{ route('user.order.details', $dorder->id) }}">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        |
                                                        <a title="Order Invoice" href="{{ route('order.invoice', $dorder->id) }}">
                                                            <i class="fas fa-file-invoice"></i>
                                                        </a>
                                                        |
                                                        @if($dorder->payment_status == "pending" || $dorder->payment_status == "failed")
                                                        <a title="Pay Now" href="">
                                                            <i class="fas fa-file-invoice-dollar"></i>
                                                        </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-cancelled-order" role="tabpanel"
                                aria-labelledby="pills-cancelled-order-tab">
                                <div class="order-table mt-5">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Payment Status</th>
                                                    <th>Order Status</th>
                                                    <th>Total Amount</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($canceledOrders as $corder)
                                                <tr>
                                                    <td>
                                                        <p>Order ID: {{ $corder->order_number }}</p>
                                                        <p>Order Time: {{ $corder->created_at->format('F d, Y, h:i A') }}</p>
                                                    </td>
                                                    <td>
                                                        {{ ucfirst($corder->payment_status) }}
                                                    </td>
                                                    <td>
                                                        {{ ucfirst($corder->order_status) }}
                                                    </td>
                                                    <td>
                                                        <span class="amount">$ {{ $corder->total_amount }}</span>
                                                    </td>
                                                    <td>
                                                        {{ $corder->created_at->format('d M Y') }}
                                                    </td>
                                                    <td>
                                                        <a title="Track Order" href="{{ route('order.track', $corder->tracking_number) }}">
                                                            <i class="fas fa-user-cog"></i>
                                                        </a>
                                                        |
                                                        <a title="Order Details" href="{{ route('user.order.details', $corder->id) }}">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        |
                                                        <a title="Order Invoice" href="{{ route('order.invoice', $corder->id) }}">
                                                            <i class="fas fa-file-invoice"></i>
                                                        </a>
                                                        |
                                                        @if($corder->payment_status == "pending" || $corder->payment_status == "failed")
                                                        <a title="Pay Now" href="">
                                                            <i class="fas fa-file-invoice-dollar"></i>
                                                        </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile Page area end here  -->


@endsection