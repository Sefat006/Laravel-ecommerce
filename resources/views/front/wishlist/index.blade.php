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
                                @foreach($wishlistProducts as $wishlist)
                                <tr>
                                    {{-- Product Image --}}
                                    <td>
                                        <div class="product-image">
                                            <a href="{{ url('/product/single/' . $wishlist->product->slug) }}">
                                                <img class="product-thumbnal"
                                                    src="{{ asset('front/assets/images/products/' . $wishlist->product->thumb) }}"
                                                    alt="{{ $wishlist->product->en_name }}" />
                                            </a>
                                            <div class="product-flags">
                                                @if($wishlist->product->is_onsale)
                                                <span class="product-flag sale">HOT</span>
                                                <span class="product-flag discount">-{{ $wishlist->product->discount }}%</span>
                                                @endif
                                            </div>
                                        </div>
                                    </td>

                                    {{-- Product Info --}}
                                    <td>
                                        <div class="product-info text-center">
                                            <h3 class="product-name">
                                                <a class="product-link" href="{{ url('/product/single/' . $wishlist->product->slug) }}">
                                                    {{ $wishlist->product->en_name }}
                                                </a>
                                            </h3>

                                            <!-- {{-- Product Review (static stars for now) --}}
                                            <ul class="product-review">
                                                @for($i=0; $i<5; $i++)
                                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                                    @endfor
                                            </ul> -->

                                            <div class="variable-single-item color-switch">
                                                <div class="product-variable-color">
                                                    <input type="hidden" name="quantity" value="1" id="product_quantity">
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    {{-- Product Price --}}
                                    <td>
                                        <div class="product-price text-center">
                                            <span class="regular-price">${{ number_format($wishlist->product->price, 2) }}</span>
                                            @if($wishlist->product->discount > 0)
                                            <span class="price">${{ number_format($wishlist->product->discounted_price, 2) }}</span>
                                            @else
                                            <span class="price">${{ number_format($wishlist->product->price, 2) }}</span>
                                            @endif
                                        </div>
                                    </td>

                                    {{-- Add to Cart --}}
                                    <td>
                                        <div class="action-area">
                                            <a href="javascript:void(0)" title="Add To Cart"
                                                data-id="{{ $wishlist->product->id }}"
                                                class="add-cart addToCart action-btn">
                                                Add To Cart <i class="icon fas fa-plus-circle"></i>
                                            </a>
                                        </div>
                                    </td>

                                    {{-- Delete from Wishlist --}}
                                    <td>
                                        <button class="delet-btn deleteWishlist"
                                            data-id="{{ $wishlist->product->id }}"
                                            title="Delete Item">
                                            <img src="{{ asset('front/assets/images/close.svg')}}" alt="close" />
                                        </button>
                                    </td>
                                </tr>
                                @endforeach

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

@push('scripts') <!-- to app.blade.php, all the pages where "Add to Cart" button is placed -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.addToCart').on('click', function(e) {
            e.preventDefault();
            var productId = $(this).data('id');

            $.ajax({
                url: "{{ route('cart.add') }}",
                method: "POST",
                data: {
                    product_id: productId,
                    quantity: 1,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.status === 'success') {
                        // ✅ Update cart icon number
                        $('.totalCountItem').text(response.cart_count);

                        // ✅ Update total cart amount
                        $('.totalAmount').text('$' + response.total_price);

                        // ✅ Show success message using Toastr
                        toastr.success('Product added to cart!', 'Success');
                    } else {
                        toastr.error(response.message, 'Error');
                    }
                },
                error: function() {
                    toastr.error('Something went wrong!', 'Error');
                }
            });
        });


        // remove deleteWishlist list
        $('.deleteWishlist').on('click', function() {
            var productId = $(this).data('id');

            if (confirm("Are you sure you want to remove this product from your wishlist?")) {
                $.ajax({
                    url: '/wishlist/remove/' + productId,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.success) {
                            // Remove the entire product column
                            var colIndex = $('button[data-id="' + productId + '"]').closest('td').index();
                            $('#compareListTable tr').each(function() {
                                $(this).find('td').eq(colIndex).remove();
                            });

                            toastr.success(response.message, 'Success');
                        } else {
                            toastr.error(response.message, 'Error');
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred. Please try again.');
                    }
                });
            }
        });
    });
</script>

@endpush