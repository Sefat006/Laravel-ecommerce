@extends('front.layouts.app')

@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Cart</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                    <li class="page-item">Shopping Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->
<!-- wish-list area start here  -->
<div class="wish-list-area cart-page-area section">
    <div class="container">

        <div class="row">
            <div class="col-12 wish-list-table">

                <div class="table-responsive">
                    <div id="cardItem">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <div id="cart_ajax_load">
                                                                                                                        <tr class="cart-page-item">
                                            <td>
                                                <div class="single-grid-product m-0">
                                                    <div class="product-top">
                                                        <a
                                                            href="http://127.0.0.1:8000/product/single/rosmo-namino-2"><img
                                                                class="product-thumbnal"
                                                                src="http://127.0.0.1:8000/uploaded_files/product_image/product-image-8.png"
                                                                alt="cart"></a>
                                                        <div class="product-flags">
                                                                                                                                <span
                                                                    class="product-flag sale">HOT</span>
                                                                                                                                                                                                <span
                                                                    class="product-flag discount">-10.00%</span>
                                                                                                                        </div>
                                                    </div>
                                                    <div class="product-info text-center">
                                                        <h3 class="product-name">
                                                            <a class="product-link"
                                                                href="http://127.0.0.1:8000/product/single/rosmo-namino-2">Rosmo Namino</a>
                                                        </h3>
                                                                                                                                                                            </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-price text-center">
                                                    <h4 class="regular-price">
                                                        $ 500
                                                    </h4>
                                                    <h3 class="price ">
                                                        <span
                                                            class="mainPrice">$ 450</span>
                                                    </h3>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart-quantity input-group">
                                                    <div class="increase-btn dec qtybutton btn qty_decrease"
                                                        data-id="24696d13d171100dc116d322ed356959">-</div>
                                                    <input class="qty-input cart-plus-minus-box qty_value"
                                                        type="text" name="qtybutton" id="qty_value"
                                                        value="1" readonly />
                                                    <div class="increase-btn inc qtybutton btn qty_increase"
                                                        data-id="24696d13d171100dc116d322ed356959">+</div>
                                                </div>
                                            </td>
                                            <td>
                                                <h1 class="cart-table-item-total SubTotalAmount">
                                                    $ 450
                                                </h1>
                                            </td>
                                            <td>
                                                <button class="delet-btn deleteItemCart"
                                                    title="Delete Item" data-id="24696d13d171100dc116d322ed356959">
                                                    <img src="http://127.0.0.1:8000/frontend/assets/images/close.svg"
                                                        alt="close" />
                                                </button>
                                            </td>
                                        </tr>
                                                                        </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cart Page Bottom box area Start -->
        <div class="row cart-page-bottom-box-wrap">

            <!-- Cart page bottom box -->
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="cart-page-bottom-box">
                    <h2 class="bottom-box-title">Discount Codes</h2>

                    <form action="http://127.0.0.1:8000/coupon/apply" method="post">
                        <input type="hidden" name="_token" value="DKSQN4iA4cRMNlognbDBi6YtF3AHDeeT9jJW3yso">                            <div class="form-group">
                            <input type="text" class="form-control" name="coupon_code"
                                placeholder="Enter your coupon code" />
                        </div>
                        <div class="form-button text-center">
                            <button type="submit" class="form-btn">Apply Coupon</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Cart page bottom box -->
            <!-- Cart page bottom box -->

            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="cart-page-bottom-box cart-page-sub-total-box">

                    <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                        <h2 class="bottom-box-title m-0">Subtotal:</h2>
                        <h2 class="bottom-box-title totalAmount m-0">
                            $ 450</h2>
                    </div>

                    
                    <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                        <h2 class="bottom-box-title m-0">Total</h2>
                                                    <h2 class="bottom-box-title cart-page-final-total totalAmount m-0">
                            $ 450</h2>
                    </div>

                    <div class="form-button text-center">
                        <a href="checkout.html"
                            class="form-btn proceed-to-checkout-btn">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
            <!-- Cart page bottom box -->
        </div>
        <!-- Cart Page Bottom box area End -->
    </div>
</div>
<!-- wish-list area end here  -->

@endsection