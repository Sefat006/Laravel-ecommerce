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
        });