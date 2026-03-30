@extends('front.layouts.app')

@section('title', "Assigned Orders")
@section('description', "Assigned Orders")
@section('keywords', "Assigned Orders")

@section('content')

@php $user = Auth::user(); @endphp

<!-- breadcrumb area start here  -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h2 class="page-title">Assigned Orders</h2>
            <ul class="breadcrumb-pages">
                <li class="page-item"><a class="page-item-link" href="{{ url('/') }}">Home</a></li>
                <li class="page-item">Assigned Orders</li>
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
                            <h2 class="user-profile-content-title">Assigned Orders</h2>
                            <span class="text-muted">Total: {{ $orders->count() }}</span>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if($orders->isEmpty())
                            <div class="alert alert-info">No orders have been assigned to you yet.</div>
                        @else
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Order Number</th>
                                        <th>Customer</th>
                                        <th>Address</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $index => $order)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td><strong>{{ $order->order_number }}</strong></td>
                                        <td>
                                            {{ $order->shipping_name }}<br>
                                            <small class="text-muted">{{ $order->shipping_email }}</small>
                                        </td>
                                        <td>
                                            {{ $order->shipping_street_address }},
                                            {{ $order->shipping_state }},
                                            {{ $order->shipping_country }}
                                        </td>
                                        <td>${{ number_format($order->total_amount, 2) }}</td>
                                        <td>
                                            <span class="badge 
                                                {{ $order->order_status === 'delivered' ? 'bg-success' : 
                                                   ($order->order_status === 'pending' ? 'bg-warning text-dark' : 
                                                   ($order->order_status === 'canceled' ? 'bg-danger' : 'bg-info')) }}">
                                                {{ ucfirst($order->order_status) }}
                                            </span>
                                        </td>
                                        <td>{{ $order->created_at->format('d M, Y') }}</td>
                                        <td>
                                            @if($order->order_status !== 'delivered' && $order->order_status !== 'canceled')
                                                <form action="{{ route('delivery.mark.delivered', $order->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success btn-sm"
                                                        onclick="return confirm('Mark this order as delivered?')">
                                                        <i class="fas fa-check"></i> Mark Delivered
                                                    </button>
                                                </form>
                                            @elseif($order->order_status === 'delivered')
                                                <span class="badge bg-success">Delivered ✓</span>
                                            @else
                                                <span class="badge bg-danger">Cancelled</span>
                                            @endif
                                        </td>
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