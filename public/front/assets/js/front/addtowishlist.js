$(document).ready(function() {
        $('.addtoWishlist').on('click', function() {
            var productId = $(this).data('id');

            if (confirm("Are you sure you want to add this product on your wishlist?")) {
                $.ajax({
                    url: '/wishlist/add',
                    type: 'post',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "product_id": productId,
                    },
                    success: function(response) {
                        if (response.success) {
                            // Remove the entire product column
                            var colIndex = $('a[data-id="' + productId + '"]').closest('td').index();
                            $('#compareListTable tr').each(function() {
                                $(this).find('td').eq(colIndex).remove();
                            });

                            toastr.success(response.message, 'Success');
                        } else {
                            toastr.error(response.message, 'Error');
                        }
                    },
                    error: function(xhr, status, error) {
                         console.log(xhr.responseText); // 
                        alert('An error occurred. Please try again.');
                    }
                });
            }
        });
    });