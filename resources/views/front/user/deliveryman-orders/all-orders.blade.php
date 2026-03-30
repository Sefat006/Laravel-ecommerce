@extends('front.layouts.app')

@section('title', "All Orders")
@section('description', "All Orders")
@section('keywords', "All Orders")

@section('content')

@php $user = Auth::user(); @endphp

<!-- breadcrumb area start here  -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h2 class="page-title">All Orders</h2>
            <ul class="breadcrumb-pages">
                <li class="page-item"><a class="page-item-link" href="{{ url('/') }}">Home</a></li>
                <li class="page-item">All Orders</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb area end here  -->

<!-- Profile Page area start here  -->
<div class="profile-page-area section">
    <div class="container">
        <div class="row">

            {{-- Sidebar --}}
            <div class="col-xl-3 col-lg-4">
                <div class="section-wrap account-page-sidemenu user-profile-sidebar">
                    <nav class="account-page-menu">
                        <ul>
                            <li class="{{ request()->routeIs('delivery.profile') ? 'active' : '' }}">
                                <a href="{{ route('delivery.profile') }}">
                                    <i class="fas fa-user"></i> My Profile
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('delivery.all.orders') ? 'active' : '' }}">
                                <a href="{{ route('delivery.all.orders') }}">
                                    <i class="fas fa-box"></i> All Orders
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('delivery.assigned.orders') ? 'active' : '' }}">
                                <a href="{{ route('delivery.assigned.orders') }}">
                                    <i class="fas fa-truck"></i> Assigned Orders
                                    @if(unreadNotificationCount() > 0)
                                        <span class="badge bg-danger ms-1">{{ unreadNotificationCount() }}</span>
                                    @endif
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            {{-- Main Content --}}
            <div class="col-xl-9 col-lg-8">
                <div class="user-profile-right-part">
                    <div class="user-profile-content-box">

                        <div class="d-flex justify-content-between align-items-center text-black mb-4">
                            <h2 class="user-profile-content-title">All Orders</h2>
                            <span class="text-muted">Total: {{ $orders->count() }}</span>
                        </div>

                        @if($orders->isEmpty())
                            <div class="alert alert-info">No orders found.</div>
                        @else
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Order Number</th>
                                        <th>Customer</th>
                                        <th>Amount</th>
                                        <th>Payment</th>
                                        <th>Status</th>
                                        <th>Assigned To</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $index => $order)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td><strong>{{ $order->order_number }}</strong></td>
                                        <td>{{ $order->shipping_name }}</td>
                                        <td>${{ number_format($order->total_amount, 2) }}</td>
                                        <td>
                                            <span class="badge 
                                                {{ $order->payment_status === 'paid' ? 'bg-success' : 
                                                   ($order->payment_status === 'pending' ? 'bg-warning text-dark' : 'bg-danger') }}">
                                                {{ ucfirst($order->payment_status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge 
                                                {{ $order->order_status === 'delivered' ? 'bg-success' : 
                                                   ($order->order_status === 'pending' ? 'bg-warning text-dark' : 
                                                   ($order->order_status === 'canceled' ? 'bg-danger' : 'bg-info')) }}">
                                                {{ ucfirst($order->order_status) }}
                                            </span>
                                        </td>
                                        <td>
                                            @if($order->deliveryman_id)
                                                @if($order->deliveryman_id == Auth::id())
                                                    <span class="text-success fw-bold">You</span>
                                                @else
                                                    <span class="text-muted">Other</span>
                                                @endif
                                            @else
                                                <span class="text-muted fst-italic">Unassigned</span>
                                            @endif
                                        </td>
                                        <td>{{ $order->created_at->format('d M, Y') }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection