@extends('front.layouts.app')

@php
$subtotal = number_format(collect(session('cart', []))->sum(fn($item) => ($item['discountedPrice'] ?? $item['regularPrice']) * $item['quantity']), 2);

$subtotalInt = collect(session('cart', []))->sum(fn($item) => ($item['discountedPrice'] ?? $item['regularPrice']) * $item['quantity']);
@endphp


@section('content')
<!-- breadcrumb area start here  -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h2 class="page-title">Checkout</h2>
            <ul class="breadcrumb-pages">
                <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a>
                </li>
                <li class="page-item">Checkout</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb area end here  -->

<!-- checkout page area start here  -->
<section class="page-content section">
    <div class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="checkout-form">
                        <form method="post" action="{{route('order.store')}}">
                            @csrf
                            <!-- ---------- shipping address -------------- -->
                            <div class="row">
                                @guest
                                <div class="col-lg-12 mb-3">
                                    <div
                                        class="checkout-page-login-box d-flex justify-content-between align-items-center mb-30">
                                        <h2 class="mb-0 text-capitalize fw-bold">Returning buyer? Please login:</h2>
                                        <a class="primary-btn btn" href="{{route('login')}}">Login</a>
                                    </div>
                                </div>
                                @endguest

                                <div class="col-lg-12">
                                    <h2 class="checkout-title">Shipping Address</h2>
                                </div>
                                <div class="pt-2"></div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="shipping_name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="shipping_name" name="shipping_name" placeholder="Your Name Here" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="shipping_email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="shipping_email" name="shipping_email" placeholder="Email Address" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="shipping_street_address" class="form-label">Street Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="shipping_street_address" name="shipping_street_address" placeholder="Street Address" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="shipping_country" class="form-label">Country <span class="text-danger">*</span></label>
                                        <select class="form-select" id="shipping_country" name="shipping_country">
                                            <option selected disabled>Select Country</option>
                                            @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="shipping_state" class="form-label">State <span class="text-danger">*</span></label>
                                        <select class="form-select" id="shipping_state" name="shipping_state">
                                            <option selected disabled>Select State</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <div class="form-group">
                                        <label for="shipping_zipcode" class="form-label">Zip/Postal Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="shipping_zipcode"
                                            name="shipping_zipcode" placeholder="Zip/Postal Code" value="" />
                                    </div>
                                </div>

                            </div>
                            <div class="form-group form-check terms-agree">
                                <input type="checkbox" class="form-check-input" id="copy_address" name="copy_address"/>
                                <label class="form-check-label" for="copy_address">The Billing Address different from shipping address? </label>
                            </div>
                            <!-- ---------- billing address -------------- -->
                            <div class="row d-none" id="billingform">
                                <div class="col-lg-12">
                                    <h2 class="checkout-title">Billing Address</h2>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="billing_name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="billing_name" name="billing_name" placeholder="Your Name Here" value=""  />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="billing_email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="billing_email" name="billing_email" placeholder="Email Address" value=""  />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="billing_street_address" class="form-label">Street Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="billing_street_address" name="billing_street_address" placeholder="Street Address" value=""  />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="billing_country" class="form-label">Country <span class="text-danger">*</span></label>
                                        <select class="form-select" id="billing_country" name="billing_country" >
                                            <option selected disabled>Select Country</option>
                                            @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="billing_state" class="form-label">State <span class="text-danger">*</span></label>
                                        <select class="form-select" id="billing_state" name="billing_state" >
                                            <option selected disabled>Select State</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <div class="form-group">
                                        <label for="billing_zipcode" class="form-label">Zip/Postal Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="billing_zipcode" name="billing_zipcode" placeholder="Zip/Postal Code" value=""  />
                                    </div>
                                </div>
                            </div>

                            <div class="pt-5"></div>

                            <div class="payment-method">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="checkout-title">Payment Method</h2>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="form-check card-check">
                                                <input class="form-check-input" type="radio" name="payment"
                                                    id="paypal" value="paypal" />
                                                <label class="form-check-label" for="paypal">PayPal</label>
                                                <div class="input-icon">
                                                    <img src="{{ asset('front/assets/images/payment-gateway/paypal.png') }}"
                                                        alt="paypal" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check card-check">
                                                <input class="form-check-input" type="radio" name="payment"
                                                    id="creditcard" value="creditcard" />
                                                <label class="form-check-label" for="creditcard">
                                                    Stripe</label>
                                                <div class="input-icon">
                                                    <img src="{{ asset('front/assets/images/payment-gateway/payment-method.png') }}"
                                                        alt="payment-method" />
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="payment_platform" id="payment_platform">
                                        <div class="card-infor-box mb-3 d-none" id="stripe-area">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label class="mt-3" for="card-element">
                                                        Card details:
                                                    </label>

                                                    <div id="cardElement"></div>

                                                    <small class="form-text text-muted" id="cardErrors"
                                                        role="alert"></small>

                                                    <input type="hidden" name="payment_method" id="paymentMethod">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check card-check">
                                                <input class="form-check-input" type="radio" name="payment"
                                                    id="razorpay" value="razorpay" />
                                                <label class="form-check-label" for="razorpay">Razorpay</label>
                                                <div class="input-icon">
                                                    <img src="{{ asset('front/assets/images/payment-gateway/razorpay.png') }}"
                                                        alt="razorpay" />
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="pay_to_razorpay" id="pay-to-razorpay"
                                            value="44634">
                                        <input type="hidden" name="razorpay_key" id="razorpay-key" value="">
                                        <input type="hidden" name="razorpay_payment_id" id="razorpay-payment-id">
                                        <div class="form-group">
                                            <div class="form-check card-check">
                                                <input class="form-check-input" type="radio" name="payment"
                                                    id="bank" value="bank" />
                                                <label class="form-check-label" for="bank">
                                                    Bank</label>
                                                <div class="input-icon">
                                                    <img src="{{ asset('front/assets/images/payment-gateway/bank.png') }}"
                                                        alt="payment-method" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-infor-box mb-3 d-none" id="bank-area">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="mt-3" for="bank-trans-num">
                                                            Transaction Number:
                                                        </label>
                                                        <input type="text" name="bank_transaction_number"
                                                            id="bank-trans-num" class="form-control"
                                                            placeholder="Enter Your Transaction Number" />
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mt-3">
                                                            <b>Bank Account Details:</b> <br>
                                                            Bank Name:
                                                            bank
                                                            <br>
                                                            Account Number:
                                                            <br>
                                                            Account Holder:
                                                            <br>
                                                            Branch:
                                                            us <br>
                                                            Swift Code:
                                                            <br>
                                                            Routing Number:
                                                            asdf <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check card-check">
                                                <input class="form-check-input" type="radio" name="payment"
                                                    id="sslcommerz" value="sslcommerz" />
                                                <label class="form-check-label" for="sslcommerz">Sslcommerz</label>
                                                <div class="input-icon">
                                                    <img src="{{ asset('front/assets/images/payment-gateway/sslcommerz.png') }}"
                                                        alt="sslcommerz" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check card-check">
                                                <input class="form-check-input" type="radio" name="payment" id="cod"
                                                    value="cod" />
                                                <label class="form-check-label" for="cod">Cash On Delivey</label>
                                                <div class="input-icon">
                                                    <img src="{{ asset('front/assets/images/payment-gateway/cod.jpg') }}"
                                                        alt="Cash On Delivey" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group form-check terms-agree">
                                            <input type="checkbox" class="form-check-input" id="agree" required />
                                            <label class="form-check-label" for="agree">By clicking the button you
                                                agree to our
                                                <a href="terms.html">Terms &amp; Conditions</a></label>
                                        </div>
                                        @guest
                                        <a class="checkout-btn text-center pt-3" href="{{route('login')}}">Please Login First</a>
                                        @else
                                        <button type="submit" class="checkout-btn">Place Order</button>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade common-modal" id="show-razor-thanks" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">
                                                Razorpay Confirmation</h5>
                                        </div>
                                        <div class="modal-body">
                                            Your payment is authorized. For capturing your order click
                                            <b>Place Order</b>
                                            <div class="modal-btn-wrap text-end">
                                                <button type="submit" class="primary-btn">Place Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="cart-summary">
                        <div class="summary-top d-flex">
                            <h2>Cart Summary</h2>
                            <a class="edite-btn" href="/cart/content">Edit</a>
                        </div>
                        <ul class="cart-product-list">
                            @foreach(session('cart') as $product_id => $item)
                            <li class="single-cart-product d-flex justify-content-between">
                                <div class="product-info">
                                    <h3>{{ $item['name'] }}</h3>
                                    <p>Size:
                                        {{ $item['size'] }}
                                    </p>
                                    <p class="checkout-page-color-show">Color: {{ $item['size'] }}
                                    </p>
                                </div>
                                <div class="price-area">
                                    <h3 class="price">
                                        @if(!empty($item['discountedPrice']))
                                        <span class="mainPrice">
                                            $ {{ number_format($item['discountedPrice'], 2) }}
                                        </span>
                                        @else
                                        <span class="mainPrice">
                                            $ {{ number_format($item['regularPrice'], 2) }}
                                        </span>
                                        @endif
                                    </h3>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <!-- Cart page bottom box -->
                        <div class="col-lg-12 col-md-12">
                            <div class="checkout-discount-box">
                                <h2 class="mb-3">Discount Codes</h2>
                                <form id="applyCouponForm">
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Enter your coupon code">
                                        <button type="submit" id="couponBtn" class="border-0 px-4">Apply Coupon</button>
                                    </div>
                                    <p id="couponMessage"></p>
                                </form>
                            </div>
                        </div>
                        <ul class="summary-list">
                            <li>Subtotal <span id="subtotal" data-value="{{ $subtotalInt }}">${{ $subtotal }}</span></li>
                            <li>Coupon Discount <span id="discountAmount" data-value="0"> - $ 0</span></li>
                            <li>Shipping Charge <span id="shippingAmount" data-value="0">$ 0</span></li>
                            <li>VAT/Tax <span id="vatAmount" data-value="0">$ 0</span></li>
                        </ul>
                        <div class="total-amount">
                            <h3>Grand Cost <span id="grandAmount">${{ $subtotal }}</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@push('scripts')
<script>
    $(document).ready(function () {

        // ── Billing address toggle ──────────────────────────────────────────
        $('#copy_address').on('change', function () {
            if ($(this).is(':checked')) {
                $('#billingform').removeClass('d-none');
            } else {
                $('#billingform').addClass('d-none');
                // Clear billing fields when hidden so they don't confuse validation
                $('#billingform input, #billingform select').val('').trigger('change');
            }
        });

        // ── Before form submit: copy shipping → billing when checkbox is OFF ─
        $('form[action="{{ route("order.store") }}"]').on('submit', function () {
            if (!$('#copy_address').is(':checked')) {
                $('#billing_name').val($('#shipping_name').val());
                $('#billing_email').val($('#shipping_email').val());
                $('#billing_street_address').val($('#shipping_street_address').val());
                $('#billing_country').val($('#shipping_country').val());
                $('#billing_state').val($('#shipping_state').val());
                $('#billing_zipcode').val($('#shipping_zipcode').val());
            }
        });

        // ── State dropdowns ─────────────────────────────────────────────────
        // Shipping country → loads shipping states only
        $('#shipping_country').on('change', function () {
            let country_id = $(this).val();
            if (country_id) {
                $.ajax({
                    url: `/get-states/${country_id}`,
                    type: 'GET',
                    success: function (response) {
                        $('#shipping_state').empty().append('<option value="">Select State</option>');
                        $.each(response.states, function (key, state) {
                            $('#shipping_state').append('<option value="' + state.id + '">' + state.name + '</option>');
                        });
                    }
                });

                // Also fetch VAT/Tax
                $.ajax({
                    url: `/get-tax/${country_id}`,
                    type: 'GET',
                    success: function (response) {
                        //let taxAmount = (parseFloat(response.tax_rate) / 100) * parseFloat($('#subtotal').data('value'));
                        let taxAmount = (parseFloat(response.tax_rate));
                        $('#vatAmount').text('$ ' + taxAmount.toFixed(2)).data('value', taxAmount);
                        updateGrandTotal();
                    }
                });
            }
        });

        // Billing country → loads billing states only
        $('#billing_country').on('change', function () {
            let country_id = $(this).val();
            if (country_id) {
                $.ajax({
                    url: `/get-states/${country_id}`,
                    type: 'GET',
                    success: function (response) {
                        $('#billing_state').empty().append('<option value="">Select State</option>');
                        $.each(response.states, function (key, state) {
                            $('#billing_state').append('<option value="' + state.id + '">' + state.name + '</option>');
                        });
                    }
                });
            }
        });

        // Shipping state → shipping charge
        $('#shipping_state').on('change', function () {
            let state_id = $(this).val();
            if (state_id) {
                $.ajax({
                    url: `/get-shipping/${state_id}`,
                    type: 'GET',
                    success: function (response) {
                        let shippingCharge = parseFloat(response.shipping_charge);
                        $('#shippingAmount').text('$ ' + shippingCharge.toFixed(2)).data('value', shippingCharge);
                        updateGrandTotal();
                    }
                });
            }
        });

        // ── Grand total calculator ──────────────────────────────────────────
        function updateGrandTotal() {
            let subtotal = parseFloat($('#subtotal').data('value')) || 0;
            let vat      = parseFloat($('#vatAmount').data('value')) || 0;
            let shipping = parseFloat($('#shippingAmount').data('value')) || 0;
            let discount = parseFloat($('#discountAmount').data('value')) || 0;

            let grandTotal = subtotal + vat + shipping - discount;
            $('#grandAmount').text('$ ' + grandTotal.toFixed(2));
        }

        // ── Coupon apply ────────────────────────────────────────────────────
        $('#applyCouponForm').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: '/coupon/apply',
                type: 'POST',
                data: {
                    _token: $('input[name="_token"]').val(),
                    coupon_code: $('#coupon_code').val()
                },
                success: function (response) {
                    if (response.success) {
                        $('#couponMessage').text(response.message).css('color', 'green');
                        $('#discountAmount').text('- $ ' + response.discount.toFixed(2)).data('value', response.discount);
                        $('#coupon_code').prop('readonly', true);
                        $('#couponBtn').prop('disabled', true);
                        updateGrandTotal();
                    } else {
                        $('#couponMessage').text(response.message).css('color', 'red');
                    }
                },
                error: function () {
                    $('#couponMessage').text('Something went wrong!').css('color', 'red');
                }
            });
        });

    });
</script>
@endpush
