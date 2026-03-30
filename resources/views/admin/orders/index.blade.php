@extends('admin.layouts.app')



@section('content')


<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Orders List</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Orders List</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">

                <div class="customers__table">
                    <table class="table-style dataTable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Order Number</th>
                                <th>Discounted Amount</th>
                                <th>Tax Amount ($)</th>
                                <th>Order Amount</th>
                                <th>Shipping Amount ($)</th>
                                <th>Subtotal Amount</th>
                                <th>Payment Method</th>
                                <th>Payment Status</th>
                                <th>Order Status</th>
                                <th>Tracking Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($orders as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $data->order_number }}</td>

                                <td>{{ $data->discounted_amount ?? "0.00"}}</td>
                                <td>{{ $data->tax_amount ?? "0.00" }}</td>
                                <td>{{ $data->order_amount ?? "0.00"}}</td>
                                <td>{{ $data->shipping_amount ?? "0.00"}}</td>
                                <td>{{ $data->subtotal_amount ?? "0.00"}}</td>
                                <td>{{ $data->payment_method ?? ""}}</td>
                                <td>{{ $data->payment_status ?? ""}}</td>
                                <td>{{ $data->order_status ?? ""}}</td>
                                <td>{{ $data->tracking_number ?? "" }}</td>

                                <!-- <td>
                                        <img width="50" src="{{ asset('front/assets/images/'.$data->icon) }}" alt="icon">
                                </td> -->

                            
                                <td>
                                    @if($data->status == 1)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-secondary">Inactive</span>
                                    @endif
                                </td>

                                <td>
                                    <div class="action_buttons">

                                        <!-- Edit -->
                                        <a href="{{ route('admin.orders.show', $data->id) }}" class="btn-action">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                    </div>
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

@endsection


@push('scripts') <!-- to app.blade.php, all the pages where "Add to Cart" button is placed -->

@endpush
