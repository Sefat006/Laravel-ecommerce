@extends('admin.layouts.app')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__content__left">
                        <div class="breadcrumb__title">
                            <h2>Gateway Settings</h2>
                        </div>
                    </div>
                    <div class="breadcrumb__content__right">
                        <nav>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Gateways</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 200px;">
            <div class="col-md-12">
                <div class="gallery__area bg-style">
                    <div class="gallery__content">
                        <div class="tab-content">
                            <div class="tab-pane fade show active">

                                <form method="POST" action="{{ route('admin.gateways.update') }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">

                                        <!-- PayPal -->
                                        <div class="col-md-6">
                                            <div class="form-vertical__item bg-style">

                                                <h4>PayPal</h4>

                                                <input type="hidden" name="gateways[paypal][id]" value="{{ $gateway['paypal']->id }}">

                                                <div class="input__group mb-25">
                                                    <label>Client ID</label>
                                                    <input type="text"
                                                        name="gateways[paypal][credentials][client_id]"
                                                        value="{{ $gateway['paypal']->credentials['client_id'] ?? '' }}">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>Client Secret</label>
                                                    <input type="text"
                                                        name="gateways[paypal][credentials][client_secret]"
                                                        value="{{ $gateway['paypal']->credentials['client_secret'] ?? '' }}">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>Status</label>
                                                    <select name="gateways[paypal][status]">
                                                        <option value="1" {{ $gateway['paypal']->status ? 'selected' : '' }}>Active</option>
                                                        <option value="0" {{ !$gateway['paypal']->status ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- CREDIT CARD -->
                                        <div class="col-md-6">
                                            <div class="form-vertical__item bg-style">
                                                <h4>Credit Card</h4>

                                                <input type="hidden" name="gateways[creditcard][id]" value="{{ $gateway['creditcard']->id }}">

                                                <div class="input__group mb-25">
                                                    <label>Public Key</label>
                                                    <input type="text" name="gateways[creditcard][credentials][public_key]"
                                                        value="{{ $gateway['creditcard']->credentials['public_key'] ?? '' }}">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>Secret Key</label>
                                                    <input type="text" name="gateways[creditcard][credentials][secret_key]"
                                                        value="{{ $gateway['creditcard']->credentials['secret_key'] ?? '' }}">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>Status</label>
                                                    <select name="gateways[creditcard][status]">
                                                        <option value="1" {{ $gateway['creditcard']->status ? 'selected' : '' }}>Active</option>
                                                        <option value="0" {{ !$gateway['creditcard']->status ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Razorpay -->
                                        <div class="col-md-6">
                                            <div class="form-vertical__item bg-style">

                                                <h4>Razorpay</h4>

                                                <input type="hidden" name="gateways[razorpay][id]" value="{{ $gateway['razorpay']->id }}">

                                                <div class="input__group mb-25">
                                                    <label>Key ID</label>
                                                    <input type="text"
                                                        name="gateways[razorpay][credentials][key_id]"
                                                        value="{{ $gateway['razorpay']->credentials['key_id'] ?? '' }}">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>Key Secret</label>
                                                    <input type="text"
                                                        name="gateways[razorpay][credentials][key_secret]"
                                                        value="{{ $gateway['razorpay']->credentials['key_secret'] ?? '' }}">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>Status</label>
                                                    <select name="gateways[razorpay][status]">
                                                        <option value="1" {{ $gateway['razorpay']->status ? 'selected' : '' }}>Active</option>
                                                        <option value="0" {{ !$gateway['razorpay']->status ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- SSLCommerz -->
                                        <div class="col-md-6">
                                            <div class="form-vertical__item bg-style">

                                                <h4>SSLCommerz</h4>

                                                <input type="hidden" name="gateways[sslcommerz][id]" value="{{ $gateway['sslcommerz']->id }}">

                                                <div class="input__group mb-25">
                                                    <label>Store ID</label>
                                                    <input type="text"
                                                        name="gateways[sslcommerz][credentials][store_id]"
                                                        value="{{ $gateway['sslcommerz']->credentials['store_id'] ?? '' }}">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>Store Password</label>
                                                    <input type="text"
                                                        name="gateways[sslcommerz][credentials][store_password]"
                                                        value="{{ $gateway['sslcommerz']->credentials['store_password'] ?? '' }}">
                                                </div>
                                                <div class="input__group mb-25">
                                                    <label>Status</label>
                                                    <select name="gateways[sslcommerz][status]">
                                                        <option value="1" {{ $gateway['sslcommerz']->status ? 'selected' : '' }}>Active</option>
                                                        <option value="0" {{ !$gateway['sslcommerz']->status ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- BANK -->
                                        <div class="col-md-6">
                                            <div class="form-vertical__item bg-style">
                                                <h4>Bank Transfer</h4>

                                                <input type="hidden" name="gateways[bank][id]" value="{{ $gateway['bank']->id }}">

                                                <div class="input__group mb-25">
                                                    <label>Account Name</label>
                                                    <input type="text" name="gateways[bank][credentials][account_name]"
                                                        value="{{ $gateway['bank']->credentials['account_name'] ?? '' }}">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>Account Number</label>
                                                    <input type="text" name="gateways[bank][credentials][account_number]"
                                                        value="{{ $gateway['bank']->credentials['account_number'] ?? '' }}">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>Bank Name</label>
                                                    <input type="text" name="gateways[bank][credentials][bank_name]"
                                                        value="{{ $gateway['bank']->credentials['bank_name'] ?? '' }}">
                                                </div>

                                                <div class="input__group mb-25">
                                                    <label>Status</label>
                                                    <select name="gateways[bank][status]">
                                                        <option value="1" {{ $gateway['bank']->status ? 'selected' : '' }}>Active</option>
                                                        <option value="0" {{ !$gateway['bank']->status ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- COD -->
                                        <div class="col-md-6">
                                            <div class="form-vertical__item bg-style">

                                                <h4>Cash On Delivery</h4>

                                                <input type="hidden" name="gateways[cod][id]" value="{{ $gateway['cod']->id }}">

                                                <div class="input__group mb-25">
                                                    <label>Status</label>
                                                    <select name="gateways[cod][status]">
                                                        <option value="1" {{ $gateway['cod']->status ? 'selected' : '' }}>Active</option>
                                                        <option value="0" {{ !$gateway['cod']->status ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="input__button">
                                        <button type="submit" class="btn btn-blue">Update</button>
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