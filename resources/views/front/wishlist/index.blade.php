@extends('front.layouts.app')

@section('content')

    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Wish List</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                    <li class="page-item">Wish List</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- wish-list area start here  -->
    <div class="wish-list-area section">
        <div class="container">
            <div class="row">

                <div class="col-12 wish-list-table">
                    <div class="table-responsive">
                        <div id="wishlistTable">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                        <th scope="col">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="product-image">
                                                <a href="/product/single/rosmo-namino-2"><img class="product-thumbnal"
                                                        src="/uploaded_files/product_image/product-image-8.png"
                                                        alt="product" /></a>
                                                <div class="product-flags">

                                                    <span class="product-flag sale">HOT</span>
                                                    <span class="product-flag discount">-10.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-info text-center">
                                                <h3 class="product-name"><a class="product-link"
                                                        href="/product/single/rosmo-namino-2">Rosmo Namino</a>
                                                </h3>
                                                <!-- This is server side code. User can not modify it. -->
                                                <ul class="product-review">
                                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                                </ul>
                                                <div class="variable-single-item color-switch">
                                                    <div class="product-variable-color">
                                                        <input type="hidden" name="quantity" value="1"
                                                            id="product_quantity">

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-price text-center">
                                                <span class="regular-price">$ 500</span>
                                                <span class="price">$ 450</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="action-area">
                                                <a href="javascript:void(0)" title="Add To Cart" data-id="8"
                                                    class="add-cart action-btn addCart">Add To Cart <i
                                                        class="icon fas fa-plus-circle"></i></a>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="delet-btn deleteWishlist" data-id="1" title="Delete Item">
                                                <img src="assets/images/close.svg" alt="close" /></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-image">
                                                <a href="product-details.html"><img class="product-thumbnal"
                                                        src="/uploaded_files/product_image/product-image-7.png"
                                                        alt="product" /></a>
                                                <div class="product-flags">

                                                    <span class="product-flag sale">HOT</span>
                                                    <span class="product-flag discount">-10.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-info text-center">
                                                <h3 class="product-name"><a class="product-link"
                                                        href="product-details.html">Tailored Fit Mesh-Panel</a>
                                                </h3>
                                                <!-- This is server side code. User can not modify it. -->
                                                <ul class="product-review">
                                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                                </ul>
                                                <div class="variable-single-item color-switch">
                                                    <div class="product-variable-color">
                                                        <input type="hidden" name="quantity" value="1"
                                                            id="product_quantity">
                                                        <label>
                                                            <input type="hidden" name="colorId" value="1">
                                                            <input name="productColor" class="color-select" type="radio"
                                                                value="1">
                                                            <span style="background:#FF0000;"></span>
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-price text-center">
                                                <span class="regular-price">$ 500</span>
                                                <span class="price">$ 450</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="action-area">
                                                <a href="javascript:void(0)" title="Add To Cart" data-id="7"
                                                    class="add-cart action-btn addCart">Add To Cart <i
                                                        class="icon fas fa-plus-circle"></i></a>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="delet-btn deleteWishlist" data-id="2" title="Delete Item">
                                                <img src="assets/images/close.svg" alt="close" /></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wish-list area end here  -->



@endsection