@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>Create Coupon</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Coupon</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="gallery__area bg-style">
                <div class="gallery__content">

                    <form method="POST" action="{{ route('admin.coupons.store') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-vertical__item bg-style">

                                    <!-- Coupon Code -->
                                    <div class="input__group mb-25">
                                        <label>Coupon Code</label>
                                        <input type="text" name="code" placeholder="Enter coupon code">
                                    </div>

                                    <!-- Type -->
                                    <div class="input__group mb-25">
                                        <label>Type</label>
                                        <select name="type">
                                            <option value="percentage">Percentage (%)</option>
                                            <option value="fixed">Fixed Amount</option>
                                        </select>
                                    </div>

                                    <!-- Discount -->
                                    <div class="input__group mb-25">
                                        <label>Discount Value</label>
                                        <input type="number" step="0.01" name="discount_value" placeholder="Enter value">
                                    </div>

                                    <!-- Expiry Date -->
                                    <div class="input__group mb-25">
                                        <label>Expiry Date</label>
                                        <input type="date" name="expiry_date">
                                    </div>

                                    <!-- Status -->
                                    <div class="input__group mb-25">
                                        <label>Status</label>
                                        <select name="status">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                                    <!-- Submit -->
                                    <div class="input__button">
                                        <button type="submit" class="btn btn-blue">Create</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection