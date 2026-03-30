@extends('front.layouts.app')


<!-- -------------- these are for dynamic meta header -------------------->
@section('title', "Customer Profile")
@section('description', "Profile")
@section('keywords', "Customer Profile")
<!-- -------------- these are for dynamic meta header -------------------->


@section('content')

@php $user = Auth::user(); @endphp

<!-- breadcrumb area start here  -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h2 class="page-title">User Profile</h2>
            <ul class="breadcrumb-pages">
                <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                <li class="page-item">User Profile</li>
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

                            {{-- Profile --}}
                            <li class="{{ request()->routeIs('user.profile') || request()->routeIs('delivery.profile') ? 'active' : '' }}">
                                <a href="{{ $user->user_type === 'deliveryman' ? route('delivery.profile') : route('user.profile') }}">
                                    <i class="fas fa-user"></i> My Profile
                                </a>
                            </li>

                            {{-- CUSTOMER MENU --}}
                            @if($user->user_type === 'customer')
                            <li class="{{ request()->routeIs('user.orders') ? 'active' : '' }}">
                                <a href="{{ route('user.orders') }}">
                                    <i class="fas fa-box-open"></i> My Order
                                </a>
                            </li>

                            <li class="{{ request()->routeIs('user.reviews') ? 'active' : '' }}">
                                <a href="{{ route('user.reviews') }}">
                                    <i class="fas fa-user-edit"></i> My Review
                                </a>
                            </li>
                            @endif

                            {{-- DELIVERYMAN MENU --}}
                            @if($user->user_type === 'deliveryman')
                            <li class="{{ request()->routeIs('delivery.all.orders') ? 'active' : '' }}">
                                <a href="{{ route('delivery.all.orders') }}">
                                    <i class="fas fa-box"></i> All Orders
                                </a>
                            </li>

                            <li class="{{ request()->routeIs('delivery.assigned.orders') ? 'active' : '' }}">
                                <a href="{{ route('delivery.assigned.orders') }}">
                                    <i class="fas fa-truck"></i> Assigned Orders
                                </a>
                            </li>
                            @endif

                            {{-- Logout --}}
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
                    <div class="user-profile-content-box">
                        <div class="d-flex justify-content-between align-items-center text-black mb-5">
                            <h2 class="user-profile-content-title">My Profile</h2>
                            <a href="{{ route('user.profile.edit') }}" class="text-black">Edit My Profile</a>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="address-box card">
                                    <h3 class="text-black">Personal Information</h3>
                                    <ul>
                                        <li>Name: {{ auth()->user()->name ?? "" }}</li>
                                        <li>Email: {{ auth()->user()->email ?? "" }}</li>
                                        <li>Phone: {{ auth()->user()->phone ?? "N/A" }}</li>
                                        <li>Address: {{ auth()->user()->address ?? "N/A" }}</li>
                                        <li>Zipcode: {{ auth()->user()->zipcode ?? "N/A" }}</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="address-box card">
                                    <h3 class="text-black">Order Status</h3>
                                    <ul>
                                        <li>Pending: {{ orderStatusCount('pending') }}</li>
                                        <li>Processing: {{ orderStatusCount('processing') }}</li>
                                        <li>Shipped: {{ orderStatusCount('shipped') }}</li>
                                        <li>Delivered: {{ orderStatusCount('delivered') }}</li>
                                        <li>Cancelled: {{ orderStatusCount('canceled') }}</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="address-box card">
                                    <h3 class="text-black">Other Info</h3>
                                    <ul>
                                        <li>Joined: {{ auth()->user()->created_at->format('d M, Y') }}</li>
                                    </ul>
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