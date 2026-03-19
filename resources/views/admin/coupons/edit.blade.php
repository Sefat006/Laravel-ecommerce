@extends('admin.layouts.app')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__content__left">
                        <div class="breadcrumb__title">
                            <h2>Edit/Update Coupon</h2>
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
                        <div class="tab-content">
                            <div class="tab-pane fade show active">

                                <form method="POST" action="{{ route('admin.coupon.update', $coupon->id) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-vertical__item bg-style">

                                                <!-- Code -->
                                                <div class="input__group mb-25">
                                                    <label>Coupon Code</label>
                                                    <input type="text" name="code"
                                                        value="{{ $coupon->code }}" placeholder="Enter coupon code">
                                                </div>

                                                <!-- Type -->
                                                <div class="input__group mb-25">
                                                    <label>Type</label>
                                                    <select name="type">
                                                        <option value="percentage" {{ $coupon->type == 'percentage' ? 'selected' : '' }}>
                                                            Percentage
                                                        </option>
                                                        <option value="fixed" {{ $coupon->type == 'fixed' ? 'selected' : '' }}>
                                                            Fixed
                                                        </option>
                                                    </select>
                                                </div>

                                                <!-- Discount -->
                                                <div class="input__group mb-25">
                                                    <label>Discount Value</label>
                                                    <input type="number" step="0.01" name="discount_value"
                                                        value="{{ $coupon->discount_value }}" placeholder="Enter discount">
                                                </div>

                                                <!-- Expiry -->
                                                <div class="input__group mb-25">
                                                    <label>Expiry Date</label>
                                                    <input type="date" name="expiry_date"
                                                        value="{{ $coupon->expiry_date ? $coupon->expiry_date->format('Y-m-d') : '' }}">
                                                </div>

                                                <!-- Status -->
                                                <div class="input__group mb-25">
                                                    <label>Status</label>
                                                    <select name="status">
                                                        <option value="1" {{ $coupon->status == 1 ? 'selected' : '' }}>Active</option>
                                                        <option value="0" {{ $coupon->status == 0 ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>

                                                <!-- Submit -->
                                                <div class="input__button">
                                                    <button type="submit" class="btn btn-blue">Update</button>
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
        </div>

    </div>
</div>

@endsection

@push('scripts')
@endpush