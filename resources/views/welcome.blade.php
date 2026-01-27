<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home | Fashionwave - Ecommerce Website</title>
    <meta name="description" content="Fashionwave - Ecommerce Website" />
    <meta name="keywords"
        content="business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive" />
    <meta name="author" content="liveprojectacademy" />
    <meta name="csrf-token" content="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">

    <!-- fonts file -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- css file  -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/extra.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/cookie-consent.css') }}">


    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('front/assets/images/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('front/admin/css/toastr.min.css') }}">

</head>

<body class="direction-ltr">
    <!-- Preloader Area Start -->
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('front/assets/images/preloader.svg')}}" alt="img" />
        </div>
    </div>
    <!-- Preloader Area End -->

    <!-- header component start here  -->
    <div>
        <header class="header-area d-none d-lg-block">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="header-top-left">
                                <a href="tel:+777 2345 7886">
                                    <p class="contact-info">
                                        <i class="icon flaticon-phone"></i>
                                        Call Us:
                                        +123 2587 7886
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="header-top-right">
                                <div class="top-bar-menu">
                                    <ul class="menu-list">
                                        <li class="menu-item"><a class="menu-link" href="javascript:void(0)"
                                                data-bs-toggle="modal" data-bs-target="#trackOrderModal">Track Order</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="switcher-lang-currency">
                                    <div class="lang-switcher">
                                        <span class="flag"><img src="{{ asset('front/assets/images/language/en.png') }}"
                                                alt="united-states" /></span>
                                        <a href="javascript:void(0)" class="lang">
                                            English
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="lang-list">
                                            <li class="single-lang"><span class="flag"><img
                                                        src="{{ asset('front/assets/images/language/fr.png') }}" alt="india"></span><a
                                                    class="lang-text" href="/locale/fr">German</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="account-switcher">
                                    <span class="flag"><img src="{{ asset('front/assets/images/user-avatar11.png')}}"
                                            alt="fashionwave"></span>
                                    <a href="signin.html" class="lang">My Account</a>
                                    <!-- <span class="flag">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAGmUlEQVR4nO2dW2wUVRjH/zOzl267tHTbagNN5SJBBJRyMUWD4gX0QSVKREiML5AYE16IiYnhyRd5IISExChP6hMJPkIiqWBjVBCqNhIRsQRIJb1AW6At3evM+NAMdLdz5rI7c+bM9vslfenezny/+b7vnLnsSrqugxCHSNADcEvk+H3Xe1BhR53kx1j8QBI5Q8oJvlNElSSUED8F2CGKICGEBCmilKDFBCZEJAksgpDDXUgYRJTCU4zM64OAcMoA+I6bS4aEVYQZfmeLr0KqSUQpfonxRUg1iyjFazFcewhhj6cZMpcyoxSvMsWzDJnLMgDvtt8TIXNdhoEXcahYCMkoptJ4VCSEZJhTSVzKFkIyrCk3PmUJIRnOKCdOroWQDHe4jRctDAXD8cKQMqNynCweKUMEw5EQyg5vcBJHyhDBsBVC2eEtdvGkDBEMSyGUHf5gFVemEJLhL6z4UskSDFMhlB18MIszZYhgkBDBmCWEyhVfSuNNGSIYRUIoO4JhZtwpQwSD6z2Gm5pldL+UmPX/V39M48ywVvS/hiiwZ0kUbyxQsKpBRjICTKnAyQEV75/P2n7WwoSEra0KXmhRsKpBQnN8+g8A7uZ0XLuv4487Gr4bVHF6WIUqSG0Q4qbPzpRSJGR7m4Iv1sWRihefz6mXgaTNiJfPk/DJihh2tiuIyObng1oTEloTwLPNCvYui+LmlIbDV/I40ldA0F4elKwg+8eGpoeVc/+KKI5tnC3DYCTLHubuxRH0bk3gvUURpgwz2mplHOqIo2dLDRYHdEebEX8hesgzKQUA8MHSCD5dHYMssYMykjMX8tlTURzdEEdMKT+gaxoVnHslgdUNwd1mKISQR2okvLVQwcGnY7bPvZ2ZLWRXu4KPn7B/rROa4xJObKpBS9yTt3ONEEIA4NvnalAbsd8zR0r6eUscOLrePnpDaQ2/jan4656Gybx1dW6rlXG4IxgjQjR1FgVNx9/jOm5ldOQ0Hc1xCQOZ4tnYvuVRS5E/31axrzeH3rsPX6dIwNttCg6viaE1Yb5P7myP4NA/+aLX8UDSdZ1bQ2dNe0u5OqHhwOU8jv9XQFplPy8uA4PbalEfNRfy66iKF7szyDNiuiwpoWdLAknG67++nseenpzteL1EmJJlcHKggI6uNL65YS0DADqbZKYMAPioN8eUAQB9kzqO9OWZj7+5IALe7V0oIVcnNLx7NmsrwuD5FoX52LVJDefH7MvNsf4C87FUXMLaRr4hEkrIgct5ZF2U7JUN7OFfcCADAC6P65ZN/sn6OSzk5AB7bzUjFWMXlGuTzs3emGILaavlW7SEETKZ1zHqsn+mLJYe9124HbfIkHlRFwPyAHGEFNxP9KxW9O7eh/1Yge+sVxwh5WAl0c2enbRYx9xhHKrxi1AL6beo/UvqnG/aIos+UXpkwG9CLeTSPXY96Wxytmkr6yXmwhAALlp8hh+EWsgPw+wFS3udjE3N9pu36zH20aO7OR1/cj50Emoh58c03JxiB+zgmhjiFlu4NClh7+PsZtM15HCF6iGhFgIAn/ex57frUwq+31yDjvnFmykB2LZQwZnNNZbl6tAV9mEVv3hwjyGPA4xWBxeH0hraTqRdv2dCAS69lkC7TRMfSGvon9IRk6cb/nyLRSUAnBos4PWf+Hb0wo46KfQZklaB3T1ZFDTr/WlBQkZnk4K1jYqtjKG0ht2cj/IahF4IAHTf0vDh7zloHnzV1Hhexztnsxg2OTPJg6oQAgBfXS9g+y9ZjFlcBGHHvxMaNp5O49wo5+X5DKpGCACcGFCx8tQUvryaR8bFhVYjWR37L+awriuNKxPBXghU9MUBfjd2P5o6i8bY9Ammlx+dvtCuvVZCMgJk1OkrV4YyOi6Maui+paJrSHV12N8PjC8V4CqEYGMIqaqSVQ2QEMEoEhL0LwPMVWbGnTJEMGYJoSzhS2m8KUMEg4QIhqkQKlt8MIszZYhgMIVQlvgLK76WGUJS/MEqrlSyBMNWCGWJt9jFkzJEMBwJoSzxBvoi5RDi+jeo6CSWe9xUGMoQwXAthPqJO9zGq6wMISnOKCdOZZcskmJNufGpqIeQFHMqiUvFTZ2kFFNpPDyZZZGUabyIg2fT3rkuxavtp5/vrhD6+e4qx5cMMajmTPGrRPsqxKCaxPjdK7kIMQizGF6TFq49JKwzMZ7j5pohMwlDtgSxAwUmZCYiyQk6i4UQYhCkmKBFGAglpBQ/BYkioBShhZhRjiRRg2/G/+T0lZ3psvX/AAAAAElFTkSuQmCC"
                                            alt="Fashionwave">
                                    </span>

                                    <a href="javascript:void(0)" class="lang">rony <i class="fas fa-angle-down"></i></a>
                                    <ul class="account-list">
                                        <li class="single-lang"><a class="lang-text"
                                                href="/user/profile">Profile</a>
                                        </li>
                                        <li class="single-lang"><a class="lang-text"
                                                href="/user/logout">Logout</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="header-middle-wrap">
                        <div class="brand-area">
                            <a class="brand-logo" href="index.html"><img class="brand-image"
                                    src="{{ asset('front/assets/images/logo.png')}}" alt="Fashionwave" /></a>
                        </div>
                        <div class="search-area">
                            <form action="#" method="get">
                                <div class="search-wrap">
                                    <select class="form-select" name="category">
                                        <option value="" selected>Categories</option>
                                        <option value="1">
                                            Health Category
                                        </option>
                                        <option value="2">
                                            Women Fashion
                                        </option>
                                        <option value="3">
                                            Men Fashion
                                        </option>
                                        <option value="4">
                                            Electronic
                                        </option>
                                    </select>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="search" name="search"
                                            placeholder="Search Here" />
                                        <button type="submit" class="search-btn"><i
                                                class="flaticon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="header-right">

                            <div class="wishlist single-btn">
                                <a href="wishlist.html" class="wishlist-btn header-btn">
                                    <div class="btn-left">
                                        <i class="btn-icon flaticon-like"></i>
                                        <span class="count wishListCuntFromController">0</span>
                                    </div>
                                    <div class="btn-right">
                                        <span class="btn-text">Wishlist</span>
                                        <span class="item-count wishListCuntFromController">0
                                            items</span>
                                    </div>
                                </a>
                            </div>
                            <div class="compare single-btn">
                                <a href="compare.html" class="compare-btn header-btn">
                                    <div class="btn-left">
                                        <i class="btn-icon flaticon-bar-chart"></i>
                                        <span class="count CompareCuntFromController">0</span>
                                    </div>
                                    <div class="btn-right">
                                        <span class="btn-text">Compare</span>
                                        <span class="item-count CompareCuntFromController">0
                                            items</span>
                                    </div>
                                </a>
                            </div>

                            <div class="cart single-btn">
                                <a data-bs-toggle="offcanvas" href="#cartOffcanvasSidebar" role="button"
                                    aria-controls="cartOffcanvasSidebar" class="cart-btn header-btn">
                                    <div class="btn-left">
                                        <i class="btn-icon flaticon-shopping-bag"></i>
                                        <span class="count totalCountItem">2</span>
                                    </div>
                                    <div class="btn-right">
                                        <span class="btn-text">Your Cart</span>
                                        <span class="price totalAmount">
                                            $ 540</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <nav class="menu-area">
                    <ul class="main-menu">
                        <li class="menu-item menu-item-has-children active">
                            <a class="menu-link" href="index.html">Home</a>
                        </li>
                        <li class="menu-item "><a class="menu-link" href="shop.html">Shop</a>
                        </li>

                        <li class="menu-item "><a class="menu-link" href="about-us.html">About Us</a>
                        </li>
                        <li class="menu-item ">
                            <a class="menu-link" href="contact.html">Contact</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </header>
    </div>
    <!-- header component end here  -->

    <!-- mobile-header-area area start here  -->
    <div>
        <div class="mobile-header-area d-block d-lg-none">
            <div class="container">
                <div class="menu-wrap">
                    <div class="header-left">
                        <a class="brand-logo" href="http://127.0.0.1:8000"><img class="brand-image"
                                src="{{ asset('front/assets/images/logo.png')}}" alt="Fashionwave" /></a>
                    </div>
                    <div class="header-right">
                        <a href="wishlist.html" class="wishlist-btn header-btn">
                            <div class="btn-left">
                                <i class="btn-icon flaticon-like"></i>
                                <span class="count wishListCuntFromController">0</span>
                            </div>
                        </a>
                        <a href="compare.html" class="compare-btn header-btn">
                            <div class="btn-left">
                                <i class="btn-icon flaticon-bar-chart"></i>
                                <span class="count CompareCuntFromController">0</span>
                            </div>
                        </a>
                        <a data-bs-toggle="offcanvas" href="#cartOffcanvasSidebar" role="button"
                            aria-controls="cartOffcanvasSidebar" class="cart-btn header-btn">
                            <div class="btn-left">
                                <i class="btn-icon flaticon-shopping-bag"></i>
                                <span class="count totalCountItem">2</span>
                            </div>
                        </a>
                        <button class="menu-bar" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasMobileMenu" aria-controls="offcanvasMobileMenu"><i
                                class="fas fa-bars"></i></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- mobile-header-area area end here  -->

    <!-- mobile-menu-area area start here  -->
    <div class="offcanvas offcanvas-start menu-offcanvas" tabindex="-1" id="offcanvasMobileMenu">
        <div class="mobile-menu-area">
            <div class="offcanvas-header">
                <a class="brand-logo" href="http://127.0.0.1:8000"><img class="brand-image" src="{{ asset('front/assets/images/logo.png')}}"
                        alt="Fashionwave" /></a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="menu-search-form">
                <form>
                    <div class="search-wrap">
                        <select class="form-select">
                            <option selected>Categories</option>
                            <option value="/product/category/1">
                                Health Category</option>
                            <option value="/product/category/2">
                                Women Fashion</option>
                            <option value="/product/category/3">
                                Men Fashion</option>
                            <option value="/product/category/4">
                                Electronic</option>
                        </select>
                        <div class="form-group">
                            <input type="text" class="form-control" id="mobilesearch" name="search"
                                placeholder="Search Here" />
                            <button type="button" class="search-btn"><i class="flaticon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <nav class="main-menu">
                <ul class="menu-list">
                    <li class="menu-item"><a class="menu-link" href="index.html">Home</a></li>
                    <li class="menu-item"><a class="menu-link" href="shop.html">Shop</a>
                    </li>
                    <li class="menu-item"><a class="menu-link" href="about-us.html">Categories</a></li>
                    <li class="menu-item"><a class="menu-link" href="about-us.html">About Us</a></li>
                    <li class="menu-item"><a class="menu-link" href="/contact-us">Contact</a></li>

                </ul>
            </nav>
            <div class="menu-bottom">
                <a class="account-btn mb-3" href="/user/profile"><i class="user-icon flaticon-user"></i> Profile</a>
                <a class="account-btn mb-3" href="/user/logout"><i class="user-icon flaticon-user"></i>
                    Logout</a>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area area end here  -->

    <!-- Cart Offcanvas Sidebar Menu area Start here  -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvasSidebar"
        aria-labelledby="cartOffcanvasSidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="cartOffcanvasSidebarLabel">Shopping Cart</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="cart-product-list" id="bodyData">

                <!-- Product item start -->
                <div class="product-item cart-product-item">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="javascript:void(0)"><img class="product-thumbnal"
                                    src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="cart"></a>
                        </div>
                        <div class="product-info">
                            <div class="product-name-part">
                                <h3 class="product-name"><a class="product-link" href="javascript:void(0)">Plaid Cotton
                                        Shirt</a></h3>
                                <div class="cart-quantity input-group">
                                    <div class="increase-btn dec qtybutton btn qty_decrease"
                                        data-id="877875226d30b89ecef4738c7e2e9378">-</div>
                                    <input class="qty-input cart-plus-minus-box qty_value" type="text" name="qtybutton"
                                        id="qty_value" value="1" readonly />
                                    <div class="increase-btn inc qtybutton btn qty_increase"
                                        data-id="877875226d30b89ecef4738c7e2e9378">+</div>
                                </div>
                                <button class="cart-remove-btn deleteItem"
                                    data-id="877875226d30b89ecef4738c7e2e9378">Remove</button>
                            </div>
                            <div class="product-price">
                                <span class="regular-price me-0">
                                    $ 100
                                </span>
                                <span class="price">
                                    $ 90
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product item end -->
                <!-- Product item start -->
                <div class="product-item cart-product-item">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="javascript:void(0)"><img class="product-thumbnal"
                                    src="{{ asset('front/assets/images/products/tshirt.png') }}" alt="cart"></a>
                        </div>
                        <div class="product-info">
                            <div class="product-name-part">
                                <h3 class="product-name"><a class="product-link" href="javascript:void(0)">Rosmo
                                        Namino</a></h3>
                                <div class="cart-quantity input-group">
                                    <div class="increase-btn dec qtybutton btn qty_decrease"
                                        data-id="5fe6269ce66b4dd14584eb9b1b633eeb">-</div>
                                    <input class="qty-input cart-plus-minus-box qty_value" type="text" name="qtybutton"
                                        id="qty_value" value="1" readonly />
                                    <div class="increase-btn inc qtybutton btn qty_increase"
                                        data-id="5fe6269ce66b4dd14584eb9b1b633eeb">+</div>
                                </div>
                                <button class="cart-remove-btn deleteItem"
                                    data-id="5fe6269ce66b4dd14584eb9b1b633eeb">Remove</button>
                            </div>
                            <div class="product-price">
                                <span class="regular-price me-0">
                                    $ 500
                                </span>
                                <span class="price">
                                    $ 450
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product item end -->

            </div>

            <div class="total-bottom-part">
                <div class="total-count d-flex">
                    <h3>Total</h3>
                    <h4 class="totalAmount"> $ 540</h4>
                </div>
                <a href="checkout.html" class="proceed-to-btn d-block text-center">
                    Proceed To Checkout
                </a>
                <div class="view-cart-go">
                    <a href="cart.html">View Cart</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Offcanvas Sidebar Menu area end here  -->
    <div id="CartDeleteFromSession" data-url="/cart/delete"></div>
    <div id="CartIncrementFromSession" data-url="/cart/increase"></div>
    <div id="CartDecrementFromSession" data-url="/cart/decrease"></div>

    <!-- hero-section area start here  -->
    <div class="hero-section">
        <div class="hero-slider">
            <div class="signle-slide"
                style="background-image: url('http://localhost/projects/ecom/frontend/assets/images/slider/slider.jpg');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6 mb-5">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">
                                    New Collection</h2>
                                <h1 class="slider-title">
                                    The New autmn
                                </h1>
                                <p class="slider-text">
                                    Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna
                                    justo, lacinia eget consectetur sed</p>
                                <div class="slider-btn">
                                    <a href="/product/all" class="secondary-btn">See Colections
                                        <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="signle-slide"
                style="background-image: url('http://localhost/projects/ecom/frontend/assets/images/slider/slider.jpg');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6 mb-5">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">
                                    Summer Sale</h2>
                                <h1 class="slider-title">
                                    The Summer!!
                                </h1>
                                <p class="slider-text">
                                    Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna
                                    justo, lacinia eget consectetur sed</p>
                                <div class="slider-btn">
                                    <a href="/product/all" class="secondary-btn">See Colections
                                        <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="signle-slide"
                style="background-image: url('http://localhost/projects/ecom/frontend/assets/images/slider/slider.jpg');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6 mb-5">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">
                                    New Collection</h2>
                                <h1 class="slider-title">
                                    The Winter!!
                                </h1>
                                <p class="slider-text">
                                    Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna
                                    justo, lacinia eget consectetur sed</p>
                                <div class="slider-btn">
                                    <a href="/product/all" class="secondary-btn">See Colections
                                        <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                <div class="single-story-box">
                    <img src="{{ asset('front/assets/images/avatar.jpg') }}" class="avatar" alt="Testimonial">
                    <h3 class="story-title">Rony <span class="story-year">Engineer</span>
                    </h3>
                    <p class="story-content">I recently discovered FashionWave, and I must say it's become my go-to for
                        all things fashion! From trendy tops to chic dresses, the site offers a fantastic variety of
                        clothing that feels both high-quality and reasonably priced. </p>
                </div>
                <div class="single-story-box">
                    <img src="{{ asset('front/assets/images/avatar2.jpg') }}" class="avatar" alt="Testimonial">
                    <h3 class="story-title">Dholi <span class="story-year">IT Officer</span>
                    </h3>
                    <p class="story-content">I recently discovered FashionWave, and I must say it's become my go-to for
                        all things fashion! From trendy tops to chic dresses, the site offers a fantastic variety of
                        clothing that feels both high-quality and reasonably priced. </p>
                </div>
                <div class="single-story-box">
                    <img src="{{ asset('front/assets/images/avatar.jpg') }}" class="avatar" alt="Testimonial">
                    <h3 class="story-title">Jakir <span class="story-year">CEO</span>
                    </h3>
                    <p class="story-content">I recently discovered FashionWave, and I must say it's become my go-to for
                        all things fashion! From trendy tops to chic dresses, the site offers a fantastic variety of
                        clothing that feels both high-quality and reasonably priced. </p>
                </div>
                <div class="single-story-box">
                    <img src="{{ asset('front/assets/images/avatar2.jpg') }}" class="avatar" alt="Testimonial">
                    <h3 class="story-title">Nahar <span class="story-year">Programmer</span>
                    </h3>
                    <p class="story-content">I recently discovered FashionWave, and I must say it's become my go-to for
                        all things fashion! From trendy tops to chic dresses, the site offers a fantastic variety of
                        clothing that feels both high-quality and reasonably priced. </p>
                </div>
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

    <!-- footer area start here -->
    <!-- footer area start here -->
    <footer class="footer-area">
        <div class="footer-widget-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4">
                        <div class="single-widget about-widget">
                            <a href="http://127.0.0.1:8000" class="footer-brand-logo mb-25"><img
                                    src="{{ asset('front/assets/images/logo.png') }}" alt="footer-logo" /></a>
                            <p class="address-text">
                                House 24, Road 17 <br />
                                Banani, <br />
                                Dhaka
                            </p>
                            <div class="block-content mb-30">
                                <p class="contact">Call us: +123 2587 4521</p>
                                <p class="contact">Email: support@fashionwave.com</p>
                            </div>
                            <ul class="social-media">
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link" href="www.facebook.com">
                                        <i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link" href="www.twitter.com">
                                        <i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link" href="www.linkedin.com">
                                        <i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link" href="www.instagram.com">
                                        <i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-8 col-sm-8">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-widget">
                                    <h3 class="widget-title">Categories</h3>
                                    <ul class="widget-menu show">
                                        <li class="menu-item"><a class="menu-link" href="#">Health Category</a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="#">Women Fashion</a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="#">Men Fashion</a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="#">Electronic</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-widget">
                                    <h3 class="widget-title">Brands</h3>
                                    <ul class="widget-menu">
                                        <li class="menu-item"><a class="menu-link" href="#">Circle</a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="#">CodeLab</a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="#">HEXLAB</a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="#">Kanba</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-widget">
                                    <h3 class="widget-title">Quick Links</h3>
                                    <ul class="widget-menu">
                                        <li class="menu-item"><a class="menu-link" href="faq.html">Help
                                                &amp; FAQ</a></li>
                                        <li class="menu-item"><a class="menu-link" href="terms.html">Terms of
                                                Conditions</a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="privacy.html">Privacy
                                                Policy</a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="contact.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-widget newsletter-widget">
                            <h3 class="widget-title">Subscribe for Newsletter</h3>
                            <p class="newsletter-text">
                                Receive our latest updates about our <br> products and promotions.
                            </p>
                            <div class="newsletter-form mb-40">
                                <form id="subscribe_form" name="subscribe_form" method="POST">
                                    <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                                    <div class="form-group">
                                        <input type="email" class="form-control subscribe" id="subscribe"
                                            name="subscribe" placeholder="Email" required />
                                        <button type="button" class="subscribe-btn subscribe_btn">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container-fluid">
                <div class="footer-bottom-wrap">
                    Designed &amp; Developed By liveprojectacademy.com
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end here -->
    <!-- footer area end here -->
    <div id="DoNotSubscribe" data-url="/do_not_subscribe"></div>
    <div id="SubscribeStore" data-url="/subscribe/store"></div>
    <div class="modal fade common-modal" id="trackOrderModal" tabindex="-1" aria-labelledby="trackOrderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Track Order</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="public-order-track.html" method="POST">
                        <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Order Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="order_number"
                                placeholder="Enter order number">
                        </div>
                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">Track</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade common-modal" id="trackOrderModal" tabindex="-1" aria-labelledby="trackOrderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Track Order</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="public-order-track.html" method="POST">
                        <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Order Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" name="order_number"
                                placeholder="Enter order number">
                        </div>
                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">Track</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade common-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="">Login</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/user/login-modal" method="POST">
                        <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                        </div>

                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="DoNotSubscribe" data-url="/do_not_subscribe"></div>
    <div id="SubscribeStore" data-url="/subscribe/store"></div>

    <!-- Js file  -->
    <script src="{{ asset('front/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/main.js') }}"></script>
    <script src="{{ asset('front/assets/js/front/custom.js') }}"></script>
    <script src="{{ asset('front/assets/js/front/extra.js') }}"></script>
    <script src="{{ asset('front/assets/js/front/sweat_aleart.js') }}"></script>
    <script src="{{ asset('front/assets/js/common.js') }}"></script>


    <script src="{{ asset('front/admin/js/toastr.min.js') }}"></script>

    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>

    <script>
        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36)
                    .substring(7);
                tag.parentNode.insertBefore(script, tag);
            };
            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>
    <script src="{{ asset('front/assets/js/pages/home.js')}}"></script>
    <script src="{{ asset('front/assets/js/pages/cart.js')}}"></script>

</body>

</html>