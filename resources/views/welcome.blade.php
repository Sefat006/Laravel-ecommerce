@extends('front.layouts.app')

@section('content')
    <!-- hero-section area start here  -->
        <div class="hero-section">
            <div class="hero-slider">
                @foreach($sliders as $slider)
                <div class="signle-slide"
                    style="background-image: url('{{ asset('front/assets/images/slider/' . $slider->image) }}')">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-6 mb-5">
                                <div class="hero-slider-content text-center">
                                    <h2 class="slider-sub-title">
                                        {{ $slider->title ?? " "}}</h2>
                                    <h1 class="slider-title">
                                        {{ $slider->subtitle ?? " "}}
                                    </h1>
                                    <p class="slider-text">
                                        {{ $slider->description ?? " "}}
                                    </p>
                                    <div class="slider-btn">
                                        <a href="{{ $slider->link }}" class="secondary-btn">See Colections
                                            <i class="iocn flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- hero-section area end here  -->
        <!-- Popular Categories area start here  -->
        <div class="popular-categories-area section-bg section-top pb-100">
            <div class="container">
                <div class="section-header-area">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="sub-title">
                                Popular Collections
                            </h3>
                            <h2 class="section-title">
                                Popular Categories
                            </h2>
                        </div>
                        <div class="col-md-6 align-self-end text-md-end">
                            <a href="/product/all" class="primary-btn">View All Products</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <a class="single-categorie" href="/product/category/5">
                            <div class="categorie-wrap">
                                <div class="categorie-icon">
                                    <i class="icon flaticon-blazer"></i>
                                </div>
                                <div class="categorie-info">
                                    <h3 class="categorie-name">
                                        Sports</h3>
                                    <h4 class="categorie-subtitle">
                                        Sports products</h4>
                                </div>
                            </div>
                            <i class="arrow flaticon-right-arrow"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="single-categorie" href="/product/category/6">
                            <div class="categorie-wrap">
                                <div class="categorie-icon">
                                    <i class="icon flaticon-blazer"></i>
                                </div>
                                <div class="categorie-info">
                                    <h3 class="categorie-name">
                                        Blazers Collection</h3>
                                    <h4 class="categorie-subtitle">
                                        Dress For Man And Women</h4>
                                </div>
                            </div>
                            <i class="arrow flaticon-right-arrow"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="single-categorie" href="/product/category/7">
                            <div class="categorie-wrap">
                                <div class="categorie-icon">
                                    <i class="icon flaticon-hoodie"></i>
                                </div>
                                <div class="categorie-info">
                                    <h3 class="categorie-name">
                                        Hoodie Collection</h3>
                                    <h4 class="categorie-subtitle">
                                        Dress For Man And Women</h4>
                                </div>
                            </div>
                            <i class="arrow flaticon-right-arrow"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="single-categorie" href="/product/category/8">
                            <div class="categorie-wrap">
                                <div class="categorie-icon">
                                    <i class="icon flaticon-long-sleeve"></i>
                                </div>
                                <div class="categorie-info">
                                    <h3 class="categorie-name">
                                        Long Sleeve Wear</h3>
                                    <h4 class="categorie-subtitle">
                                        Dress For Man And Women</h4>
                                </div>
                            </div>
                            <i class="arrow flaticon-right-arrow"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="single-categorie" href="/product/category/9">
                            <div class="categorie-wrap">
                                <div class="categorie-icon">
                                    <i class="icon flaticon-waistcoat"></i>
                                </div>
                                <div class="categorie-info">
                                    <h3 class="categorie-name">
                                        Waistcoart Collection</h3>
                                    <h4 class="categorie-subtitle">
                                        Dress For Man And Women</h4>
                                </div>
                            </div>
                            <i class="arrow flaticon-right-arrow"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="single-categorie" href="/product/category/10">
                            <div class="categorie-wrap">
                                <div class="categorie-icon">
                                    <i class="icon flaticon-long-sleeve"></i>
                                </div>
                                <div class="categorie-info">
                                    <h3 class="categorie-name">
                                        Long Sleeve Wear</h3>
                                    <h4 class="categorie-subtitle">
                                        Dress For Man And Women</h4>
                                </div>
                            </div>
                            <i class="arrow flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Categories area end here  -->
    
        <!-- Featured Products area start here  -->
        <div class="featured-productss-area section-top pb-100">
            <div class="container">
                <div class="section-header-area">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="sub-title">
                                New Products
                            </h3>
                            <h2 class="section-title">
                                Products
                            </h2>
                        </div>
                        <div class="col-md-6 align-self-end text-md-end">
                            <a href="/product/all" class="see-btn">See All</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-grid-product">
                            <div class="product-top">
                                <a href="/product/single/fit-flare-dress-2"><img class="product-thumbnal"
                                        src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">NEW</span>
                                    <span class="product-flag discount">-10.00</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="product-btn CompareList" data-id="11" title="Add To Compare"><i
                                                class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="product-btn MyWishList" data-id="11" title="Add To Wishlist"><i
                                                class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <input type="hidden" name="quantity" value="1" id="product_quantity">
                                <h3 class="product-name"><a class="product-link"
                                        href="/product/single/fit-flare-dress-2">Fit-Flare Dress</a>
                                </h3>
                                <!-- This is server side code. User can not modify it. -->
                                <ul class="product-review">
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$ 200</span>
                                    <span class="price">$ 180</span>
                                </div>
                                <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart" data-id="11">Add
                                    To Cart <i class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-grid-product">
                            <div class="product-top">
                                <a href="product-details.html"><img class="product-thumbnal"
                                        src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">HOT</span>
                                    <span class="product-flag discount">-10.00</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="product-btn CompareList" data-id="7" title="Add To Compare"><i
                                                class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="product-btn MyWishList" data-id="7" title="Add To Wishlist"><i
                                                class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <input type="hidden" name="quantity" value="1" id="product_quantity">
                                <h3 class="product-name"><a class="product-link" href="product-details.html">Tailored Fit
                                        Mesh-Panel</a>
                                </h3>
                                <!-- This is server side code. User can not modify it. -->
                                <ul class="product-review">
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$ 500</span>
                                    <span class="price">$ 450</span>
                                </div>
                                <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart" data-id="7">Add To
                                    Cart <i class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-grid-product">
                            <div class="product-top">
                                <a href="/product/single/rosmo-namino-2"><img class="product-thumbnal"
                                        src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">HOT</span>
                                    <span class="product-flag discount">-10.00</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="product-btn CompareList" data-id="8" title="Add To Compare"><i
                                                class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="product-btn MyWishList" data-id="8" title="Add To Wishlist"><i
                                                class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <input type="hidden" name="quantity" value="1" id="product_quantity">
                                <h3 class="product-name"><a class="product-link" href="/product/single/rosmo-namino-2">Rosmo
                                        Namino</a>
                                </h3>
                                <!-- This is server side code. User can not modify it. -->
                                <ul class="product-review">
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$ 500</span>
                                    <span class="price">$ 450</span>
                                </div>
                                <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart" data-id="8">Add To
                                    Cart <i class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-grid-product">
                            <div class="product-top">
                                <a href="/product/single/Best-t-Shirt-for-male"><img class="product-thumbnal"
                                        src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">NEW</span>
                                    <span class="product-flag discount">-10.00</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="product-btn CompareList" data-id="9" title="Add To Compare"><i
                                                class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="product-btn MyWishList" data-id="9" title="Add To Wishlist"><i
                                                class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">HOT - COLLECTION</h4>
                                <input type="hidden" name="quantity" value="1" id="product_quantity">
                                <h3 class="product-name"><a class="product-link"
                                        href="/product/single/Best-t-Shirt-for-male">Best T-Shirt for
                                        Male</a>
                                </h3>
                                <!-- This is server side code. User can not modify it. -->
                                <ul class="product-review">
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$ 500</span>
                                    <span class="price">$ 450</span>
                                </div>
                                <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart" data-id="9">Add To
                                    Cart <i class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
        <!-- Featured Products area end here  -->
    
        <!-- About Area start here  -->
        <div class="about-area section" style="background-image: url(/uploaded_files/about_us_page/about-home.jpg)">
            <div class="container">
                <div class="section-header-area">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="sub-title">
                                Testimonials
                            </h3>
                            <h2 class="section-title">Popular Testimonials Of<br /> Fashionwave</h2>
                        </div>
                        <div class="col-md-6 align-self-end text-md-end">
                            <a href="/about-us" class="primary-btn">Know More About Us</a>
                        </div>
                    </div>
                </div>
                <div class="story-box-slide">
                    @foreach($testimonials as $testimonial)
                    <div class="single-story-box">
                        <img src="{{ asset('front/assets/images/'.$testimonial->image) }}" class="avatar" alt="Testimonial">
                        <h3 class="story-title">{{$testimonial->name}} <span class="story-year">{{ $testimonial->profession }}</span>
                        </h3>
                        <p class="story-content">
                            {{ $testimonial->review }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- About Area  end here  -->
    
        <!-- Trending Products area start here  -->
        <div class="trending-products-area section-top pb-100">
            <div class="container">
                <div class="section-header-area">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="sub-title">
                                Popular Products
                            </h3>
                            <h2 class="section-title">
                                Trending Products
                            </h2>
                        </div>
                        <div class="col-lg-6 align-self-end text-lg-end">
                            <div class="primary-tabs">
                                <ul class="nav nav-tabs" id="TrendingProducts" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="new-arrival-tab" data-bs-toggle="tab"
                                            data-bs-target="#new-arrival" type="button" role="tab"
                                            aria-controls="new-arrival" aria-selected="true">NEW ARRIVAL</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="best-selling-tab" data-bs-toggle="tab"
                                            data-bs-target="#best-selling" type="button" role="tab"
                                            aria-controls="best-selling" aria-selected="false">BEST SELLING</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="on-sell-tab" data-bs-toggle="tab"
                                            data-bs-target="#on-sell" type="button" role="tab" aria-controls="on-sell"
                                            aria-selected="false">ON SALE</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="featured-items-tab" data-bs-toggle="tab"
                                            data-bs-target="#featured-items" type="button" role="tab"
                                            aria-controls="featured-items" aria-selected="false">FEATURED ITEMS</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="TrendingProductsContent">
                    <div class="tab-pane fade show active" id="new-arrival" role="tabpanel"
                        aria-labelledby="new-arrival-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/fit-flare-dress-2"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">NEW</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="11" title="Add To Compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="11" title="Add To Wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="/product/single/fit-flare-dress-2">Fit-Flare
                                                Dress</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 200</span>
                                            <span class="price">$ 180</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="11">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="product-details.html"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">HOT</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="7" title="Add To Compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="7" title="Add To Wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="product-details.html">Tailored
                                                Fit Mesh-Panel</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 500</span>
                                            <span class="price">$ 450</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="7">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/rosmo-namino-2"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png')}}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">HOT</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="8" title="Add To Compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="8" title="Add To Wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
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
                                        <div class="product-price">
                                            <span class="regular-price">$ 500</span>
                                            <span class="price">$ 450</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="8">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/Best-t-Shirt-for-male"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">NEW</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="9" title="Add To Compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="9" title="Add To Wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">HOT - COLLECTION</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="/product/single/Best-t-Shirt-for-male">Best
                                                T-Shirt for Male</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 500</span>
                                            <span class="price">$ 450</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="9">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="best-selling" role="tabpanel" aria-labelledby="best-selling-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/fit-flare-dress-2"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">NEW</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="11" title="Add To Compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="11" title="Add To Wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="/product/single/fit-flare-dress-2">Fit-Flare
                                                Dress</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 200</span>
                                            <span class="price">$ 180</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="11">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="product-details.html"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">HOT</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="7" title="Add To Compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="7" title="Add To Wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="product-details.html">Tailored
                                                Fit Mesh-Panel</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 500</span>
                                            <span class="price">$ 450</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="7">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/rosmo-namino-2"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">HOT</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="8" title="Add To Compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="8" title="Add To Wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
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
                                        <div class="product-price">
                                            <span class="regular-price">$ 500</span>
                                            <span class="price">$ 450</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="8">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/Best-t-Shirt-for-male"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">NEW</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="9" title="Add To Compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="9" title="Add To Wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">HOT - COLLECTION</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="/product/single/Best-t-Shirt-for-male">Best
                                                T-Shirt for Male</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 500</span>
                                            <span class="price">$ 450</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="9">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="on-sell" role="tabpanel" aria-labelledby="on-sell-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/fit-flare-dress-2}"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">NEW</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="11" title="Add to compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="11" title="Add to wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="/product/single/fit-flare-dress-2">Fit-Flare
                                                Dress</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 200</span>
                                            <span class="price">$ 180</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="11">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="product-details.html}"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">HOT</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="7" title="Add to compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="7" title="Add to wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="product-details.html">Tailored
                                                Fit Mesh-Panel</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 500</span>
                                            <span class="price">$ 450</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="7">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/rosmo-namino-2}"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">HOT</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="8" title="Add to compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="8" title="Add to wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
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
                                        <div class="product-price">
                                            <span class="regular-price">$ 500</span>
                                            <span class="price">$ 450</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="8">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/Best-t-Shirt-for-male}"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">NEW</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="9" title="Add to compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="9" title="Add to wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">HOT - COLLECTION</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="/product/single/Best-t-Shirt-for-male">Best
                                                T-Shirt for Male</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 500</span>
                                            <span class="price">$ 450</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="9">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="featured-items" role="tabpanel" aria-labelledby="featured-items-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/fit-flare-dress-2"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">NEW</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="11" title="Add to compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="11" title="Add to wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="/product/single/fit-flare-dress-2">Fit-Flare
                                                Dress</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 200</span>
                                            <span class="price">$ 180</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="11">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="product-details.html"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">HOT</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="7" title="Add to compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="7" title="Add to wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="product-details.html">Tailored
                                                Fit Mesh-Panel</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 500</span>
                                            <span class="price">$ 450</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="7">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/rosmo-namino-2"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">HOT</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="8" title="Add to compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="8" title="Add to wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
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
                                        <div class="product-price">
                                            <span class="regular-price">$ 500</span>
                                            <span class="price">$ 450</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="8">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/Best-t-Shirt-for-male"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">NEW</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="9" title="Add to compare"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="9" title="Add to wishlist"><i
                                                        class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">HOT - COLLECTION</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="/product/single/Best-t-Shirt-for-male">Best
                                                T-Shirt for Male</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 500</span>
                                            <span class="price">$ 450</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="9">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Products area end here  -->
        <div>
        </div>
        <!-- Image Gallery area end here  -->
        <!-- Testimonial ara end here  -->
        <div id="AddToCompareItemUrl" data-url="compare.html/add"></div>
        <div id="AddToCartIntoSession" data-url="/cart/add"></div>
        <div id="productWishlistUrl" data-url="wishlist.html/add"></div>
        <div id="currency-price-url" data-url="/currency-price"></div>
        <div id="currency-symbol-url" data-url="/currency-symbol"></div>
        <div id="productImgAsset" data-url="/uploaded_files/product_image"></div>

@endsection