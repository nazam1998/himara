<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- ========== SEO ========== -->
    <title>Hotel Himara - Hotel HTML Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png" />
    <link rel="icon" href="images/favicon.png">
    <!-- ========== STYLESHEETS ========== -->
    @yield('css')
    <!-- ========== ICON FONTS ========== -->
    <link href="fonts/font-awesome.min.css" rel="stylesheet">
    <link href="fonts/flaticon.css" rel="stylesheet">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700"
        rel="stylesheet">
</head>

<body>
    <!-- ========== PRELOADER ========== -->
    <div class="loader loader3">
        <div class="loader-inner">
            <div class="spin">
                <span></span>
                <img src="images/logo.svg" alt="Hotel Himara">
            </div>
        </div>
    </div>
    <!-- ========== MOBILE MENU ========== -->
    <nav id="mobile-menu"></nav>
    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
        <!-- ========== FOOTER ========== -->
        @include('partials.header')

        <!-- ========== CONTENT ========== -->
        @yield('content')
        
        <!-- ========== CONTACT NOTIFICATION ========== -->
        <div id="contact-notification" class="notification fixed"></div>
        <!-- ========== BACK TO TOP ========== -->
        <div class="back-to-top">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </div>

        <!-- ========== FOOTER ========== -->
        @include('partials.footer')
        <!-- ========== JAVASCRIPT ========== -->
        @yield('js')
</body>

</html>
