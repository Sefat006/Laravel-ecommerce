@extends('front.layouts.app')


<!-- -------------- these are for dynamic meta header -------------------->
<!-- used in app.blade.php-- -->
@section('title', 'Orders Tracking')
@section('description', 'Orders Tracking')
@section('keywords', 'Tracking, Order')
<!-- -------------- these are for dynamic meta header -------------------->


@section('content')
<style type="text/css">
    .single-progress.cancelled {
        background-color: #ffcccc;
        border: 1px solid red;
        text-align: center;
        padding: 10px;
        font-weight: bold;
    }
</style>


<!-- breadcrumb area start here  -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h2 class="page-title">Track Order</h2>
            <ul class="breadcrumb-pages">
                <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                <li class="page-item">Track Order</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb area end here  -->

<!-- Profile Page area start here  -->
<div class="profile-page-area section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="user-profile-right-part">
                    <div class="user-profile-content-box my-order-page-box track-my-order-page-box">

                        <div class="d-flex justify-content-between align-items-center text-black mb-5">
                            <h2 class="user-profile-content-title">Track Order</h2>
                        </div>

                        <div class="order-progress bg-white">
                            @if ($order->order_status == 'canceled')
                            <div class="single-progress cancelled">
                                <span class="text-danger">Order Cancelled</span>
                            </div>
                            @else
                            <div class="single-progress {{ in_array($order->order_status, ['pending', 'processing', 'shipped', 'delivered']) ? 'active' : '' }}">
                                <span>Pending</span>
                            </div>

                            <div class="single-progress {{ in_array($order->order_status, ['processing', 'shipped', 'delivered']) ? 'active' : '' }}">
                                <span>Processing</span>
                            </div>

                            <div class="single-progress {{ in_array($order->order_status, ['shipped', 'delivered']) ? 'active' : '' }}">
                                <span>Shipped</span>
                            </div>

                            <div class="single-progress {{ $order->order_status == 'delivered' ? 'active' : '' }}">
                                <span>Delivered</span>
                            </div>
                            @endif
                        </div>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Item</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderItems as $item)
                                    <tr>
                                        <td>{{ $item->product_name }}</td>
                                        <td>
                                            <div class="item-image-list d-flex align-items-center">
                                                <div class="single-item">
                                                    <img class="order-image"
                                                        src="{{ asset('front/assets/images/products/' . $item->thumb) }}"
                                                        alt="Product Image">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="amount">${{ number_format($item->price, 2) }}</span>
                                        </td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>${{ number_format($item->total, 2) }}</td>
                                    </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Subtotal</td>
                                        <td>${{ number_format($order->subtotal_amount, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Tax</td>
                                        <td>${{ number_format($order->tax_amount, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Delivery Charge</td>
                                        <td>${{ number_format($order->shipping_amount, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Discount (-)</td>
                                        <td>${{ number_format($order->discounted_amount, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td><strong>Grand Total</strong></td>
                                        <td><strong>${{ number_format($order->total_amount, 2) }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile Page area end here  -->


@endsection