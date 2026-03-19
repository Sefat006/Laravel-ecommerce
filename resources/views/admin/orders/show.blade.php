@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Order Details: #{{ $order->order_number }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">
                <div class="customers__table">
                    <div id="OrderDetails_wrapper" class="dataTables_wrapper no-footer">

                        <h4 class="mb-3">General Information</h4>
                        <table class="table mb-4">
                            <tr>
                                <td width="30%"><strong>Order Number:</strong></td>
                                <td>{{ $order->order_number }}</td>
                            </tr>
                            <tr>
                                <td><strong>Order Status:</strong></td>
                                <td><span class="badge bg-info">{{ ucfirst($order->order_status) }}</span></td>
                            </tr>
                            <tr>
                                <td><strong>Payment Status:</strong></td>
                                <td><span class="badge {{ $order->payment_status == 'paid' ? 'bg-success' : 'bg-warning' }}">{{ ucfirst($order->payment_status) }}</span></td>
                            </tr>
                            <tr>
                                <td><strong>Payment Method:</strong></td>
                                <td>{{ strtoupper($order->payment_method) }}</td>
                            </tr>
                            <tr>
                                <td><strong>Tracking Number:</strong></td>
                                <td>{{ $order->tracking_number ?? 'N/A' }}</td>
                            </tr>
                        </table>

                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-3">Billing Address</h4>
                                <table class="table">
                                    <tr>
                                        <td><strong>Name:</strong> {{ $order->billing_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email:</strong> {{ $order->billing_email }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Address:</strong> {{ $order->billing_street_address }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Location:</strong> {{ $order->BillingState?->name ?? 'N/A' }}, {{ $order->BillingCountry?->name ?? 'N/A' }} </td>
                                    </tr>
                                    <tr>
                                        <td><strong>ZipCode:</strong> {{ $order->billing_zipcode }}</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-md-6">
                                <h4 class="mb-3">Shipping Address</h4>
                                <table class="table">
                                    <tr>
                                        <td><strong>Name:</strong> {{ $order->shipping_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email:</strong> {{ $order->shipping_email }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Address:</strong> {{ $order->shipping_street_address }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Location:</strong> {{ $order->ShippingState?->name ?? 'N/A' }}, {{ $order->shipping_country }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ZipCode:</strong>{{ $order->ShippingCountry?->name ?? 'N/A' }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <h4 class="mb-3 mt-4">Amount Summary</h4>
                        <table class="table">
                            <tr>
                                <td width="30%"><strong>Subtotal:</strong></td>
                                <td>${{ number_format($order->subtotal_amount, 2) }}</td>
                            </tr>
                            <tr>
                                <td><strong>Coupon Code:</strong></td>
                                <td>{{ $order->coupon_code ?? 'None' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Discount:</strong></td>
                                <td class="text-danger">-${{ number_format($order->discounted_amount, 2) }}</td>
                            </tr>
                            <tr>
                                <td><strong>Tax:</strong></td>
                                <td>${{ number_format($order->tax_amount, 2) }}</td>
                            </tr>
                            <tr>
                                <td><strong>Shipping:</strong></td>
                                <td>${{ number_format($order->shipping_amount, 2) }}</td>
                            </tr>
                            <tr class="table-active">
                                <td><strong>Total Amount:</strong></td>
                                <td><strong>${{ number_format($order->total_amount, 2) }}</strong></td>
                            </tr>
                        </table>

                        <table id="ContactUsTable" class="table table-bordered">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="ContactUsTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="SL: activate to sort column descending" style="width: 279px;">SL.</th>

                                    <th class="sorting" tabindex="0" aria-controls="ContactUsTable" rowspan="1" colspan="1" aria-label="Product Name: activate to sort column ascending" style="width: 279px;">Product Name</th>

                                    <th class="sorting" tabindex="0" aria-controls="ContactUsTable" rowspan="1" colspan="1" aria-label="Thumbnail: activate to sort column ascending" style="width: 224px;">Thumbnail</th>

                                    <th class="sorting" tabindex="0" aria-controls="ContactUsTable" rowspan="1" colspan="1" aria-label="Color: activate to sort column ascending" style="width: 185px;">Color</th>

                                    <th class="sorting" tabindex="0" aria-controls="ContactUsTable" rowspan="1" colspan="1" aria-label="Size: activate to sort column ascending" style="width: 205px;">Size</th>

                                    <th class="sorting" tabindex="0" aria-controls="ContactUsTable" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending" style="width: 205px;">Quantity</th>

                                    <th class="sorting" tabindex="0" aria-controls="ContactUsTable" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 205px;">Price ($)</th>

                                    <th class="sorting" tabindex="0" aria-controls="ContactUsTable" rowspan="1" colspan="1" aria-label="Total Price: activate to sort column ascending" style="width: 205px;">Total Price ($)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $data)
                                <tr role="row" class="odd">
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="sorting_1">{{ $data->product_name }}</td>
                                    <td>
                                        <img width="80" src="{{ asset('front/assets/images/' . $data->thumb) }}" alt="Product Image">
                                    </td>
                                    <td>{{ $data->color ?? "N/A" }}</td>
                                    <td>{{ $data->size ?? "N/A" }}</td>
                                    <td>{{ $data->quantity }}</td>
                                    <td>{{ $data->price ?? "0" }}</td>
                                    <td>{{ $data->total ?? "0" }}</td>
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

@endsection