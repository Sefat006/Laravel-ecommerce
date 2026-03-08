@extends('front.layouts.app')

<!-- -------------- these are for dynamic meta header -------------------->
<!-- used in app.blade.php-- -->
@section('title', $selectedCat->meta_title)
@section('description', $selectedCat->meta_description)
@section('keywords', $selectedCat->meta_keywords)
<!-- -------------- these are for dynamic meta header -------------------->


@section('content')

<!-- breadcrumb area start here  -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h2 class="page-title">{{ $selectedCat->meta_title }}</h2>
            <ul class="breadcrumb-pages">
                <li class="page-item">
                    <a class="page-item-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="page-item">{{ $selectedCat->meta_title }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb area end here  -->




<!-- Product Area Start -->
<div class="product-area section">
    <div class="container">

        <!-- Mobile Filter Button -->
        <div class="d-lg-none mb-3">
            <button class="btn btn-outline-secondary w-100"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#mobileFilters"
                aria-controls="mobileFilters">
                <i class="fas fa-filter me-2"></i> Filters
            </button>
        </div>

        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-xl-3 col-lg-4">

                <!-- Desktop: always visible sidebar -->
                <div class="sidebar-widget-area d-none d-lg-block">
                    <!-- Search Widget -->
                    <div class="single-widget search-widget">
                        <h3 class="widget-title">Search Here</h3>
                        <form method="GET" action="{{ route('products.byCategory', $selectedCat->slug) }}">
                            <div class="form-group">
                                <input type="text"
                                    class="form-control"
                                    id="searchwidget"
                                    name="keywords"
                                    placeholder="Product Store"
                                    value="{{ request('keywords') }}" />
                                <button type="submit" class="search-btn">
                                    <i class="flaticon-search searchWidget"></i>
                                </button>
                            </div>
                            <!-- Preserve hidden fields for price -->
                            <input type="hidden" id="minPrice" name="min_price" value="{{ request('min_price') }}" />
                            <input type="hidden" id="maxPrice" name="max_price" value="{{ request('max_price') }}" />
                        </form>
                    </div>

                    <!-- Price Widget -->
                    <div class="single-widget price-widget">
                        <h3 class="widget-title">Price</h3>
                        <form method="GET" action="{{ route('products.byCategory', $selectedCat->slug) }}">
                            <div class="price-wrap">
                                <div class="price-wrap-left">
                                    <div class="single-price">
                                        <input type="number" class="form-control" id="minPrice" name="min_price"
                                            placeholder="$ Min" min="1" value="{{ request('min_price') }}" />
                                    </div>
                                    <div class="single-price">
                                        <input type="number" class="form-control" id="maxPrice" name="max_price"
                                            placeholder="$ Max" value="{{ request('max_price') }}" />
                                    </div>
                                </div>
                                <button type="submit" class="price-submit PriceSubmit"><i class="fas fa-play"></i></button>
                            </div>
                            <!-- Keep keywords in sync -->
                            <input type="hidden" name="keywords" value="{{ request('keywords') }}" />
                        </form>
                    </div>

                    <!-- Colors Widget -->
                    <div class="single-widget colors-widget">
                        <h3 class="widget-title">Colors</h3>
                        <div class="colors-list">
                            @foreach($colors as $color)
                            <div class="single-colors">
                                <div class="colors-left">
                                    <input style="background: {{ $color->color_code }}"
                                        class="form-check-input checkColor" type="checkbox"
                                        value="{{ $color->id }}"
                                        id="color-{{ $color->id }}"
                                        {{ request()->has('colors') && in_array($color->id, explode(',', request('colors'))) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="color-{{ $color->id }}">{{ $color->color }}</label>
                                </div>
                                <span class="colors-count">{{ $color->count ?? 0 }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Size Widget -->
                    <div class="single-widget size-widget">
                        <h3 class="widget-title">Size</h3>
                        <div class="size-list">
                            @foreach($sizes as $size)
                            <div class="single-size">
                                <input class="form-check-input checkSize" type="checkbox"
                                    value="{{ $size->id }}"
                                    id="size-{{ $size->id }}"
                                    {{ request()->has('sizes') && in_array($size->id, explode(',', request('sizes'))) ? 'checked' : '' }}>
                                <label class="form-check-label" for="size-{{ $size->id }}">{{ $size->size }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Brand Widget -->
                    <div class="single-widget brand-widget">
                        <h3 class="widget-title">Brand</h3>
                        <div class="brand-list">
                            @foreach($brands as $brand)
                            <div class="single-brand">
                                <div class="brand-left">
                                    <input class="form-check-input CheckBrand" type="checkbox"
                                        value="{{ $brand->id }}"
                                        {{ request()->has('brands') && in_array($brand->id, explode(',', request('brands'))) ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $brand->en_brand_name }}</label>
                                </div>
                                <span class="brand-count">{{ $brand->prd_count ?? 0 }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- (your commented categories widget remains commented) -->
                    <!-- 
                    <div class="single-widget categories-widget"> ... </div>
                    -->
                </div>

                <!-- Mobile: Offcanvas -->
                <div class="offcanvas offcanvas-start d-lg-none"
                    tabindex="-1"
                    id="mobileFilters"
                    aria-labelledby="mobileFiltersLabel">

                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="mobileFiltersLabel">Filters</h5>
                        <button type="button"
                            class="btn-close text-reset"
                            data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body p-0">
                        <div class="sidebar-widget-area">
                            <!-- Same content as desktop sidebar (no duplication) -->
                            <div class="single-widget search-widget">
                                <h3 class="widget-title">Search Here</h3>
                                <form method="GET" action="{{ route('products.byCategory', $selectedCat->slug) }}">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control"
                                            id="searchwidgetMobile"
                                            name="keywords"
                                            placeholder="Product Store"
                                            value="{{ request('keywords') }}" />
                                        <button type="submit" class="search-btn">
                                            <i class="flaticon-search searchWidget"></i>
                                        </button>
                                    </div>
                                    <input type="hidden" name="min_price" value="{{ request('min_price') }}" />
                                    <input type="hidden" name="max_price" value="{{ request('max_price') }}" />
                                </form>
                            </div>

                            <div class="single-widget price-widget">
                                <h3 class="widget-title">Price</h3>
                                <form method="GET" action="{{ route('products.byCategory', $selectedCat->slug) }}">
                                    <div class="price-wrap">
                                        <div class="price-wrap-left">
                                            <div class="single-price">
                                                <input type="number" class="form-control" id="minPriceMobile" name="min_price"
                                                    placeholder="$ Min" min="1" value="{{ request('min_price') }}" />
                                            </div>
                                            <div class="single-price">
                                                <input type="number" class="form-control" id="maxPriceMobile" name="max_price"
                                                    placeholder="$ Max" value="{{ request('max_price') }}" />
                                            </div>
                                        </div>
                                        <button type="submit" class="price-submit PriceSubmit"><i class="fas fa-play"></i></button>
                                    </div>
                                    <input type="hidden" name="keywords" value="{{ request('keywords') }}" />
                                </form>
                            </div>

                            <div class="single-widget colors-widget">
                                <h3 class="widget-title">Colors</h3>
                                <div class="colors-list">
                                    @foreach($colors as $color)
                                    <div class="single-colors">
                                        <div class="colors-left">
                                            <input style="background: {{ $color->color_code }}"
                                                class="form-check-input checkColor" type="checkbox"
                                                value="{{ $color->id }}"
                                                id="color-{{ $color->id }}-mobile"
                                                {{ request()->has('colors') && in_array($color->id, explode(',', request('colors'))) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="color-{{ $color->id }}-mobile">{{ $color->color }}</label>
                                        </div>
                                        <span class="colors-count">{{ $color->count ?? 0 }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="single-widget size-widget">
                                <h3 class="widget-title">Size</h3>
                                <div class="size-list">
                                    @foreach($sizes as $size)
                                    <div class="single-size">
                                        <input class="form-check-input checkSize" type="checkbox"
                                            value="{{ $size->id }}"
                                            id="size-{{ $size->id }}-mobile"
                                            {{ request()->has('sizes') && in_array($size->id, explode(',', request('sizes'))) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="size-{{ $size->id }}-mobile">{{ $size->size }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="single-widget brand-widget">
                                <h3 class="widget-title">Brand</h3>
                                <div class="brand-list">
                                    @foreach($brands as $brand)
                                    <div class="single-brand">
                                        <div class="brand-left">
                                            <input class="form-check-input CheckBrand" type="checkbox" value="{{$brand->id}}"
                                                @if(request()->has('brands') && in_array($brand->id, explode(',', request('brands')))) checked @endif>
                                            <label class="form-check-label" for="Renuar">{{$brand->en_brand_name}}</label>
                                        </div>
                                        <span class="brand-count">{{ $brand->prd_count }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-9 col-lg-8">
                <div class="product-section-top">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="product-section-top-left">
                                <button class="sidebar-filter d-block d-lg-none" type="button"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                                    aria-controls="offcanvasExample">
                                    Filter <img src="{{ asset('assets/images/angle-down.svg') }}" alt="angle-down" />
                                </button>
                                <div class="list-grid-view">
                                    <a href="#" class="view-btn grid-view active">
                                        <img class="view-icon" src="{{ asset('front/assets/images/view-grid.svg') }}" alt="view-grid" />
                                    </a>
                                    <!-- You can add list view button later if needed -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="product-filter">
                                <select class="form-select sortingFilter productsByCategory">
                                    <option value="stop">Categories</option>
                                    @foreach( $categories as $category)
                                    <option value="{{ $category->slug }}">
                                        {{ $category->en_category_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="filterProduct">
                    <div class="product-list">
                        <div class="row">
                            @forelse($products as $product)
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="{{ route('product.details' , $product->slug )}}"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/' . $product->thumb ) }}" alt="product" /></a>
                                        <!-- You can conditionally show flags -->
                                        <!-- <div class="product-flags"> ... </div> -->

                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="{{ $product->id }}"
                                                    title="Add To Compare"><i class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="{{ $product->id }}"
                                                    title="Add To Wishlist"><i class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">
                                            {{ $product->brand->en_brand_name ?? '' }} - {{ $product->category->en_category_name ?? '' }}
                                        </h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity_{{ $product->id }}">
                                        <h3 class="product-name">
                                            <a class="product-link" href="{{ route('product.details', $product->slug) }}">
                                                {{ $product->en_name ?? 'No name' }}
                                            </a>
                                        </h3>
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            @if($product->discounted_price && $product->discounted_price < $product->price)
                                                <span class="regular-price">${{ number_format($product->price, 2) }}</span>
                                                <span class="price">${{ number_format($product->discounted_price, 2) }}</span>
                                                @else
                                                <span class="price">${{ number_format($product->price, 2) }}</span>
                                                @endif
                                        </div>

                                        <a href="javascript:void(0)" title="Add To Cart"
                                            class="add-cart addToCart" data-id="{{ $product->id }}">
                                            Add To Cart <i class="icon fas fa-plus-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-12 text-center py-5">
                                <p>No products found matching your criteria.</p>
                            </div>
                            @endforelse
                        </div>

                        <div class="pagination-area mt-30">
                            {{ $products->appends(request()->query())->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>












<!-- Product Area Start -->
<!-- <div class="product-area section">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-widget-area mobile-sidebar">
                    <div class="sidebar-widget-header d-block d-lg-none">
                        <div class="widget-header-wrap">
                            <h5 class="offcanvas-title">Filter</h5>
                            <button type="button" class="btn-close text-reset sidebar-close"></button>
                        </div>
                    </div>

                    <div class="single-widget search-widget">
                        <h3 class="widget-title">Search Here</h3>
                        <form method="GET" action="{{ route('products.byCategory', $selectedCat->slug) }}">
                            <div class="form-group">
                                <input type="text"
                                    class="form-control"
                                    id="searchwidget"
                                    name="keywords"
                                    placeholder="Search products..."
                                    value="{{ request('keywords') }}" />
                                <button type="submit" class="search-btn">
                                    <i class="flaticon-search"></i>
                                </button>
                            </div>
                            <input type="hidden" id="minPrice" name="min_price"
                                min="1" value="{{ request('min_price') }}" />
                            <input type="hidden" id="maxPrice" name="max_price"
                                value="{{ request('max_price') }}" />
                        </form>
                    </div> -->

<!-- <div class="single-widget categories-widget">
                            <h3 class="widget-title">Categories</h3>
                            <div class="categories-list">
                                @foreach($categories as $category)
                                <div class="single-categorie">
                                    <div class="categorie-left">
                                        <input class="form-check-input CheckCategory" type="checkbox"
                                            value="{{ $category->en_category_name }}">
                                        <label class="form-check-label">{{$category->en_category_name}}</label>
                                    </div>
                                    <span class="categories-count">{{ $category->prd_count}}</span>
                                </div>
                                @endforeach
                            </div>
                        </div> -->

<!-- <div class="single-widget price-widget">
                        <h3 class="widget-title">Price</h3>
                        <form method="GET" action="{{ route('products.byCategory', $selectedCat->slug) }}">
                            <div class="form-group">
                                <input type="text"
                                    id="searchwidget"
                                    name="keywords"
                                    value="{{ request('keywords') }}" />
                            <div class="price-wrap">
                                <div class="price-wrap-left">
                                    <div class="single-price">
                                        <input type="number" class="form-control" id="minPrice" name="min_price"
                                            placeholder="$ Min" min="1" value="{{ request('min_price') }}" />
                                    </div>
                                    <div class="single-price">
                                        <input type="number" class="form-control" id="maxPrice" name="max_price"
                                            placeholder="$ Max" value="{{ request('max_price') }}" />
                                    </div>
                                </div>
                                <button type="submit" class="price-submit"><i class="fas fa-play"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="single-widget colors-widget">
                        <h3 class="widget-title">Colors</h3>
                        <div class="colors-list">
                            @foreach($colors as $color)
                            <div class="single-colors">
                                <div class="colors-left">
                                    <input style="background: {{ $color->color_code }}" class="form-check-input checkColor"
                                        type="checkbox" id="#FF0000" value="{{ $color->id }}">
                                    <label class="form-check-label" for="#FF0000">{{ $color->color }}</label>
                                </div>
                                <span class="colors-count">{{ $color->count ?? ""}}</span>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="single-widget size-widget">
                        <h3 class="widget-title">Size</h3>
                        <div class="size-list">
                            @foreach( $sizes as $size)
                            <div class="single-size">
                                <input class="form-check-input checkSize" type="checkbox" id="1" value="{{ $size->id }}">
                                <label class="form-check-label" for="1">{{ $size->size }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="single-widget brand-widget">
                        <h3 class="widget-title">Brand</h3>
                        <div class="brand-list">
                            @foreach($brands as $brand)
                            <div class="single-brand">
                                <div class="brand-left">
                                     <input class="form-check-input CheckBrand" type="checkbox" value="{{$brand->id}}"
                                    @if(request()->has('brands') && in_array($brand->id, explode(',', request('brands')))) checked @endif>
                                    <label class="form-check-label" for="Renuar">{{$brand->en_brand_name}}</label>
                                </div>
                                <span class="brand-count">{{ $brand->prd_count }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
    
            
            <div class="col-xl-9 col-lg-8">
                <div class="product-section-top">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="product-section-top-left">
                                <button class="sidebar-filter d-block d-lg-none" type="button"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                                    aria-controls="offcanvasExample">
                                    Filter <img src="{{ asset('front/assets/images/angle-down.svg') }}" alt="angle-down" />
                                </button>
                                <div class="list-grid-view">
                                    <a href="/product/category/1" class="view-btn grid-view active"><img
                                            class="view-icon" src="{{ asset('front/assets/images/view-grid.svg') }}"
                                            alt="view-grid" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="product-filter">

                                <select class="form-select sortingFilter productsByCategory">
                                    <option value="stop">Categories</option>
                                    @foreach( $categories as $category)
                                    <option value="{{ $category->slug }}">
                                        {{ $category->en_category_name }}
                                    </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="filterProduct">
                    <div class="product-list">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="{{ route('product.details' , $product->slug )}}"><img class="product-thumbnal"
                                                src="{{ asset('front/assets/images/products/' . $product->thumb ) }}" alt="product" /></a> -->
<!-- <div class="product-flags">
                                            <span class="product-flag sale">NEW</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div> -->
<!-- <ul class="prdouct-btn-wrapper">
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
                                        <h4 class="product-catagory">{{ $product->brand->en_brand_name }} - {{ $product->category->en_category_name}}</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="/product/single/fit-flare-dress-2">{{ $product->en_name ?? ""}}</a>
                                        </h3> -->
<!-- This is server side code. User can not modify it. -->
<!-- <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ {{ $product->price }}</span>
                                            <span class="price">$ {{ $product->discounted_price }}</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addToCart" data-id="{{ $product->id }}">
                                            Add To Cart <i class="icon fas fa-plus-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="pagination-area mt-30">
                            {{ $products->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

@endsection

<!-- to app.blade.php, all the pages where "Add to Cart" button is placed -->
@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        // Use .off('click') to ensure the listener is only attached once
        $(document).off('click', '.addToCart').on('click', '.addToCart', function(e) {
            e.preventDefault();
            e.stopImmediatePropagation(); // Prevents the event from bubbling up

            var productId = $(this).data('id');
            var btn = $(this);

            // Optional: Disable button to prevent double-clicks
            btn.prop('disabled', true);

            $.ajax({
                url: "{{ route('cart.add') }}",
                method: "POST",
                data: {
                    product_id: productId,
                    quantity: 1,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    btn.prop('disabled', false); // Re-enable
                    if (response.status === 'success') {
                        $('.totalCountItem').text(response.cart_count);
                        $('.totalAmount').text('$' + response.total_price);
                        toastr.success('Product added to cart!', 'Success');
                    }
                },
                error: function() {
                    btn.prop('disabled', false);
                    toastr.error('Something went wrong!', 'Error');
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $(".productsByCategory").change(function() {
            let slug = $(this).val();
            if (slug) {
                let newUrl = "{{ url('/category') }}/" + slug;
                window.location.href = newUrl;
            }
        });
    });


    // brand filtering js
    $(document).ready(function() {
        $('.CheckBrand').on('change', function() {
            let selectedBrands = [];

            // Get all checked brand IDs
            $('.CheckBrand:checked').each(function() {
                selectedBrands.push($(this).val());
            });

            // Get existing query parameters
            let url = new URL(window.location.href);
            let params = new URLSearchParams(url.search);

            // Ensure default filters exist if not present
            if (!params.has('keywords')) params.set('keywords', '');
            if (!params.has('min_price')) params.set('min_price', '');
            if (!params.has('max_price')) params.set('max_price', '');

            // Manually construct the query string
            params.delete('brands'); // Remove existing brand param

            if (selectedBrands.length > 0) {
                let newParams = params.toString();
                let newUrl = url.origin + url.pathname + '?' + newParams + '&brands=' + selectedBrands.join(',');

                // Remove unnecessary '&' at the end
                newUrl = newUrl.replace(/[?&]$/, '');

                window.location.href = newUrl;
            } else {
                window.location.href = url.origin + url.pathname + '?' + params.toString();
            }
        });
    });
</script>
@endpush