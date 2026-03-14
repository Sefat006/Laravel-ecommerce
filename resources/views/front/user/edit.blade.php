@extends('front.layouts.app')


<!-- -------------- these are for dynamic meta header -------------------->
<!-- used in app.blade.php-- -->
@section('title', "Customer Profile Edit")
@section('description', "Profile Edit")
@section('keywords', "Customer Profile Edit")
<!-- -------------- these are for dynamic meta header -------------------->


@section('content')

<!-- breadcrumb area start here  -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h2 class="page-title">Update Profile</h2>
            <ul class="breadcrumb-pages">
                <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                <li class="page-item">Update Profile</li>
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
                    <div class="user-profile-content-box edit-user-profile-page-box">

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="true">
                                    Change Profile/Shipping Info
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-password-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-password" type="button" role="tab"
                                    aria-controls="pills-password" aria-selected="false">
                                    Change Password</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="profile-form mt-5">
                                    <form enctype="multipart/form-data" action="{{route('user.profile.update')}}" method="post">
                                        @csrf
                                        <div class="profile-top mb-4">
                                            <div class="d-flex align-items-center">
                                                <div class="profile-image">
                                                    @if(auth()->user()->image)
                                                    <img class="avater-image" id="target1" src="{{asset('front/assets/images/avatar/'.auth()->user()->image)}}" alt="img">
                                                    @else
                                                    <img class="avater-image" id="target1" src="{{asset('front/assets/images/user-avatar.png')}}" alt="img">
                                                    @endif

                                                    <div class="custom-fileuplode">
                                                        <label for="fileuplode" class="file-uplode-btn">
                                                            <i class="fas fa-camera"></i>
                                                        </label>
                                                        <input type="file" id="fileuplode" name="image" class="putImage1">
                                                    </div>
                                                </div>

                                                <div class="author-info">
                                                    <h3>{{auth()->user()->name}}</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="your name" id="name" name="name" value="{{auth()->user()->name}}">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="your email" id="email" name="email" value="{{auth()->user()->email}}">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" class="form-control" placeholder="your phone" id="phone" name="phone" value="{{auth()->user()->phone}}">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group">
                                                    <label for="address">Street Address</label>
                                                    <input type="text" class="form-control" placeholder="your address" id="address" name="address" value="{{auth()->user()->address}}">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group">
                                                    <label for="zipcode">Zipcode</label>
                                                    <input type="text" class="form-control" placeholder="your zipcode" id="zipcode" name="zipcode" value="{{auth()->user()->zipcode}}">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-button text-center">
                                                    <button type="submit" class="form-btn primary-btn">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-password" role="tabpanel"
                                aria-labelledby="pills-password-tab">
                                <form class="change-password-form mt-5" method="post" action="{{ route('user.change-password') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="current_password" placeholder="Current Password" required />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="new_password" placeholder="New Password" required />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-button text-center">
                                                <button type="submit" class="form-btn primary-btn">Save Change</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection