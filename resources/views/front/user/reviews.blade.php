@extends('front.layouts.app')

<!-- -------------- these are for dynamic meta header -------------------->
<!-- used in app.blade.php-- -->
@section('title', "Customer Review")
@section('description', "Customer Reviews")
@section('keywords', "Customer Reviews")
<!-- -------------- these are for dynamic meta header -------------------->


@section('content')

<!-- breadcrumb area start here  -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h2 class="page-title">My Reviews</h2>
            <ul class="breadcrumb-pages">
                <li class="page-item"><a class="page-item-link" href="">Home</a></li>
                <li class="page-item">My Reviews</li>
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
                    <div class="user-profile-content-box my-reviwe-list-box">

                        <div class="d-flex justify-content-between align-items-center text-black mb-5">
                            <h2 class="user-profile-content-title">My Review</h2>
                        </div>

                        @foreach($reviews as $review)
                        <div class="single-review-item bg-white d-flex align-items-center">
                            <div class="review-left flex-shrink-0">
                                <a href="{{ route('product.details', $review->products->slug ) }}">
                                    <img class="product-thumbnail"
                                        src="{{ asset('front/assets/images/products/'. $review->products->thumb ) }}"
                                        alt="product">
                                </a>
                            </div>
                            <div class="review-right flex-grow-1">
                                <h4 class="product-name">
                                    <a href="{{ route('product.details', $review->products->slug ) }}">
                                        {{ $review->products->en_name }}
                                    </a>
                                </h4>
                                <!-- This is server side code. User can not modify it. -->
                                <ul class="product-review">
                                    @for($i=1; $i<=5; $i++)
                                        <li class="review-item">
                                        <i class="flaticon-star" style="color: {{ $i <= $review->rating ? '#FFD700' : '#ccc' }};"> </i>
                                        </li>
                                    @endfor
                                </ul>
                                <p>{{ $review->review }}</p>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile Page area end here  -->


@endsection