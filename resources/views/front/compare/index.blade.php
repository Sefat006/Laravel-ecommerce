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
                        @if( $comparedProduct->isNotEmpty() )
                        <table class="table">
                            <tbody>

                                {{-- Product Row --}}
                                <tr>
                                    <td class="first-column">Product</td>
                                    @foreach($comparedProduct as $compare)
                                    <td class="product-image-title">
                                        <div class="product-top">
                                            <a href="{{ route('product.details', $compare->product->slug) }}" class="image">
                                                <img src="{{ asset('front/assets/images/products/'.$compare->product->thumb) }}" alt="Compare Product">
                                            </a>
                                        </div>
                                        <div>
                                            <h5>
                                                <a href="{{ route('product.details', $compare->product->slug) }}" class="title">
                                                    {{ $compare->product->en_name }}
                                                </a>
                                            </h5>
                                        </div>
                                    </td>
                                    @endforeach
                                </tr>

                                {{-- Description Row --}}
                                <tr>
                                    <td class="first-column">Description</td>
                                    @foreach($comparedProduct as $compare)
                                    <td class="pro-desc">
                                        <p>{{ $compare->product->en_desc }}</p>
                                    </td>
                                    @endforeach
                                </tr>

                                {{-- Price Row --}}
                                <tr>
                                    <td class="first-column">Price</td>
                                    @foreach($comparedProduct as $compare)
                                    <td class="pro-price">
                                        $ {{ $compare->product->discounted_price ?? $compare->product->price }}
                                    </td>
                                    @endforeach
                                </tr>

                                <!-- {{-- Color Row --}}
                                <tr>
                                    <td class="first-column">Color</td>
                                    @foreach($comparedProduct as $compare)
                                    <td class="pro-color">
                                        {{ $compare->product->color ?? '' }}
                                    </td>
                                    @endforeach
                                </tr> -->

                                <!-- {{-- Stock Row --}}
                                <tr>
                                    <td class="first-column">Stock</td>
                                    <input type="hidden" name="quantity" value="1" id="product_quantity">
                                    @foreach($comparedProduct as $compare)
                                    <td class="pro-stock">
                                        {{ $compare->product->stock > 0 ? 'In Stock' : 'Out of Stock' }}
                                    </td>
                                    @endforeach
                                </tr> -->

                                {{-- Add To Cart Row --}}
                                <tr>
                                    <td class="first-column">Add To Cart</td>
                                    @foreach($comparedProduct as $compare)
                                    <td class="pro-addtocart">
                                        <a href="javascript:void(0)" title="Add To Cart"
                                            data-id="{{ $compare->product->id }}"
                                            class="add-cart addToCart action-btn addCart primary-btn">Add To Cart</a>
                                    </td>
                                    @endforeach
                                </tr>

                                {{-- Delete Row --}}
                                <tr>
                                    <td class="first-column">Delete</td>
                                    @foreach($comparedProduct as $compare)
                                    <td class="pro-remove">
                                        <button class="bg-transparent border-0 deleteCompareList"
                                            data-id="{{ $compare->product->id }}" title="Delete Item">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </td>
                                    @endforeach
                                </tr>

                                <!-- {{-- Rating Row --}}
                                <tr>
                                    <td class="first-column">Rating</td>
                                    @foreach($comparedProduct as $compare)
                                    <td class="pro-ratting">
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                    </td>
                                    @endforeach
                                </tr> -->

                            </tbody>
                        </table>
                        @else
                            <p>There is not Compared Product</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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


        // remove compare list
        $('.deleteCompareList').on('click', function() {
            var productId = $(this).data('id');

            if (confirm("Are you sure you want to remove this product from your comparison?")) {
                $.ajax({
                    url: '/compare/remove/' + productId,
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