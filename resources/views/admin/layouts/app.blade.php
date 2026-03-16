<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Fashionwave</title>

    <!-- Favicon included -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Apple touch icon included -->
    <link rel="apple-touch-icon" href="{{ asset('admin/assets/images/favicon.png') }}">

    <!-- All CSS files included here -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link href="{{ asset('admin/assets/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/summernote/summernote-bs4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/select2/css/select2-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/image-preview.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/styles/main.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/summernote.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/summernote-lite.min.css') }}">
    <link href="{{ asset('admin/assets/vendor/css/admin/extra.css" rel="stylesheet') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/cookie-consent.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/toastr.min.css') }}">
</head>


<body class="direction-ltr">

    <!-- Sidebar section Starts here -->
    @include('admin.layouts.partials.sidebar')
    <!-- Sidebar section Ends here -->


    <div class="main-content">
        @include('admin.layouts.partials.header')

    <div class="page-content-wrap">
    <div class="page-content">
        @yield('content')


        <!-- footer area start here -->
        @include('admin.layouts.partials.footer')
    </div>
    </div>

    <script src="{{ asset('admin/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/js/admin/summernote-init.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/data-table-page.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/image-preview.js') }}"></script>
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
    <script src="{{ asset('admin/assets/js/summernote-lite.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/toastr.min.js') }}"></script>

    <script src="assets/vendor/plugins/chart.min.js"></script>
    <script src="assets/vendor/js/admin/dashboard.js"></script>

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
            @if($errors -> any())
            @foreach($errors -> all() as $error)
            toastr.error("{{ $error }}", 'Validation Error');
            @endforeach
            @endif
        </script>
        @stack('scripts') <!-- From welcome.blade.php -->
</body>

</html>