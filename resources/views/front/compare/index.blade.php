@extends('front.layouts.app')

@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Compare</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                    <li class="page-item">Compare</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Checkout-Area -->
    <section class="compare-page-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table_page table-responsive compare-table">
                        <div id="compareListTable">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="first-column">Product</td>
                                        <td class="product-image-title">
                                            <div class="product-top">
                                                <a href="/product/single/rosmo-namino-2" class="image"><img
                                                        src="{{ asset('front/assets/images/products/tshirt.png')}}"
                                                        alt="Compare Product"></a>
                                            </div>
                                            <div>
                                                <h5><a href="/product/single/rosmo-namino-2" class="title">Rosmo
                                                        Namino</a>
                                                </h5>
                                            </div>
                                        </td>
                                        <td class="product-image-title">
                                            <div class="product-top">
                                                <a href="product-details.html" class="image"><img
                                                        src="{{ asset('front/assets/images/products/tshirt.png') }}"
                                                        alt="Compare Product"></a>
                                            </div>
                                            <div>
                                                <h5><a href="product-details.html" class="title">Tailored Fit
                                                        Mesh-Panel</a>
                                                </h5>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="first-column">Description</td>
                                        <td class="pro-desc">
                                            <p>Please note: We have this product in United States warehouse. If
                                                destination means you can receive the parcel faster and earlier than
                                                expected.
                                            </p>
                                        </td>
                                        <td class="pro-desc">
                                            <p>Please note: We have this product in United States warehouse. If
                                                destination means you can receive the parcel faster and earlier than
                                                expected.
                                            </p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="first-column">Price</td>
                                        <td class="pro-price">$ 450
                                        </td>
                                        <td class="pro-price">$ 450
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Color</td>
                                        <td class="pro-color">
                                        </td>
                                        <td class="pro-color">
                                            Red
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Stock</td>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <td class="pro-stock">In Stock</td>
                                        <td class="pro-stock">In Stock</td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Add To Cart</td>
                                        <td class="pro-addtocart">

                                            <a href="javascript:void(0)" title="Add To Cart" data-id="8"
                                                class="add-cart action-btn addCart primary-btn">Add To Cart</a>
                                        </td>
                                        <td class="pro-addtocart">

                                            <a href="javascript:void(0)" title="Add To Cart" data-id="7"
                                                class="add-cart action-btn addCart primary-btn">Add To Cart</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Delete</td>
                                        <td class="pro-remove"><button class="bg-transparent border-0 deleteCompareList"
                                                data-id="1" title="Delete Item"><i class="fas fa-times"></i></button>
                                        </td>
                                        <td class="pro-remove"><button class="bg-transparent border-0 deleteCompareList"
                                                data-id="2" title="Delete Item"><i class="fas fa-times"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="first-column">Rating</td>
                                        <td class="pro-ratting">
                                            <!-- This is server side code. User can not modify it. -->
                                            <ul class="product-review">
                                                <li class="review-item"><i class="flaticon-star"></i></li>
                                                <li class="review-item"><i class="flaticon-star"></i></li>
                                                <li class="review-item"><i class="flaticon-star"></i></li>
                                                <li class="review-item"><i class="flaticon-star"></i></li>
                                                <li class="review-item"><i class="flaticon-star"></i></li>
                                            </ul>
                                        </td>
                                        <td class="pro-ratting">
                                            <!-- This is server side code. User can not modify it. -->
                                            <ul class="product-review">
                                                <li class="review-item"><i class="flaticon-star"></i></li>
                                                <li class="review-item"><i class="flaticon-star"></i></li>
                                                <li class="review-item"><i class="flaticon-star"></i></li>
                                                <li class="review-item"><i class="flaticon-star"></i></li>
                                                <li class="review-item"><i class="flaticon-star"></i></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection