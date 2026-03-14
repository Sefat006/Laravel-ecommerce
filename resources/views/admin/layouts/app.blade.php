<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Fashionwave</title>

    <!-- Favicon included -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Apple touch icon included -->
    <link rel="apple-touch-icon" href="assets/images/favicon.png">

    <!-- All CSS files included here -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="assets/vendor/summernote/summernote-bs4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/vendor/select2/css/select2-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu.min.css">
    <link rel="stylesheet" href="assets/css/image-preview.css">
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/css/summernote.min.css">
    <link rel="stylesheet" href="assets/css/summernote-lite.min.css">
    <link href="assets/vendor/css/admin/extra.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/cookie-consent.css">
    <link rel="stylesheet" href="assets/css/toastr.min.css">
</head>


<body class="direction-ltr">

    <!-- Sidebar section Starts here -->
    @include('admin.layouts.partials.sidebar')
    <!-- Sidebar section Ends here -->


    <div class="main-content">
        @include('admin.layouts.partials.header')

    <div class="page-content-wrap">
        @yield('content')
    </div>


        <!-- footer area start here -->
        @include('admin.layouts.partials.footer')

        <!-- toastr script, after connecting custom toastr css('front/assets/css/toastr.css') and js(footer) -->
        <script>
            // Toastr for Session Messages
            @if(session('success'))
            toastr.success("{{ session('success') }}", 'Success');
            @endif

            @if(session('error'))
            toastr.error("{{ session('error') }}", 'error');
            @endif

            // Toastr for Validation Errors
            @if($errors - > any())
            @foreach($errors - > all() as $error)
            toastr.error("{{ $error }}", 'Validation Error');
            @endforeach
            @endif
        </script>
        @stack('scripts') <!-- From welcome.blade.php -->
</body>

</html>