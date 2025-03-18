<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.awaikenthemes.com/html-preview/inspaire/index-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2025 18:59:32 GMT -->

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>Inspaire - Architecture and Interior Design HTML Template</title>
    @include('frontend.layouts.header-script')
</head>

<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('/') }}images/loader.svg" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start -->
    @include('frontend.layouts.header')
    <!-- Header End -->

    @yield('content')

    <!-- Footer Start -->
    @include('frontend.layouts.footer')
    <!-- Footer End -->
    @include('frontend.layouts.footer-script')
   
</body>

<!-- Mirrored from demo.awaikenthemes.com/html-preview/inspaire/index-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2025 18:59:32 GMT -->

</html>
