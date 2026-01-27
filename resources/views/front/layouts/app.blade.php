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

    <!-- Header section Starts here -->
    @include('front.layouts.partials.header')
    <!-- Header section Ends here -->

    <div class="maincontent">
        @yield('content')
    </div>


    <!-- footer area start here -->
    @include('front.layouts.partials.footer')
</body>

</html>