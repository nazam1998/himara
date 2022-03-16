@extends('layouts.index')
@section('css')
    <!-- ========== STYLESHEETS ========== -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('revolution/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
@endsection
@section('content')
    <!-- ========== PAGE TITLE ========== -->
    <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
            background-size: cover;">
        <div class="container">
            <div class="inner">
                <h1>OUR STAFF</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Our Staff</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ========== MAIN ========== -->
    <main class="location-page">
        <div class="container">
            <div class="row">
                <!-- ITEM -->
                <div class="col-lg-3 col-md-6">
                    <div class="staff-item">
                        <figure>
                            <img src="images/staff/staff1.jpg" class="img-fluid" alt="Image">
                            <div class="position">Housekeeper</div>
                        </figure>
                        <div class="details">
                            <h5>Jeanette Owens</h5>
                            <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="col-lg-3 col-md-6">
                    <div class="staff-item">
                        <figure>
                            <img src="images/staff/staff2.jpg" class="img-fluid" alt="Image">
                            <div class="position">Receptionist</div>
                        </figure>
                        <div class="details">
                            <h5>Henry Garrett</h5>
                            <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="col-lg-3 col-md-6">
                    <div class="staff-item">
                        <figure>
                            <img src="images/staff/staff3.jpg" class="img-fluid" alt="Image">
                            <div class="position">Chef</div>
                        </figure>
                        <div class="details">
                            <h5>Tommy Alexander</h5>
                            <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                        </div>
                    </div>
                </div>
                <!-- ITEM <-->
                <div class="col-lg-3 col-md-6">
                    <div class="staff-item">
                        <figure>
                            <img src="images/staff/staff4.jpg" class="img-fluid" alt="Image">
                            <div class="position">Hotel Manager</div>
                        </figure>
                        <div class="details">
                            <h5>Penny Soto</h5>
                            <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                        </div>
                    </div>
                </div>
                <!-- ITEM <-->
                <div class="col-lg-3 col-md-6">
                    <div class="staff-item">
                        <figure>
                            <img src="images/staff/staff5.jpg" class="img-fluid" alt="Image">
                            <div class="position">Room Service</div>
                        </figure>
                        <div class="details">
                            <h5>Alex Cox</h5>
                            <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                        </div>
                    </div>
                </div>
                <!-- ITEM <-->
                <div class="col-lg-3 col-md-6">
                    <div class="staff-item">
                        <figure>
                            <img src="images/staff/staff6.jpg" class="img-fluid" alt="Image">
                            <div class="position">Hotel Manager</div>
                        </figure>
                        <div class="details">
                            <h5>Alfredo Romero</h5>
                            <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                        </div>
                    </div>
                </div>
                <!-- ITEM <-->
                <div class="col-lg-3 col-md-6">
                    <div class="staff-item">
                        <figure>
                            <img src="images/staff/staff7.jpg" class="img-fluid" alt="Image">
                            <div class="position">Marketing Advisor</div>
                        </figure>
                        <div class="details">
                            <h5>Glenda Gilbert</h5>
                            <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                        </div>
                    </div>
                </div>
                <!-- ITEM <-->
                <div class="col-lg-3 col-md-6">
                    <div class="staff-item">
                        <figure>
                            <img src="images/staff/staff8.jpg" class="img-fluid" alt="Image">
                            <div class="position">Hotel Manager</div>
                        </figure>
                        <div class="details">
                            <h5>Sheila Carter</h5>
                            <p>Lorem Ipsum which looks many web sites pass websites is therefore always.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
    <!-- ========== JAVASCRIPT ========== -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mmenu.js') }}"></script>
    <script src="{{ asset('js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.thumbs.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/countup.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.min.js') }}"></script>
    <script src="{{ asset('js/instafeed.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- ========== REVOLUTION SLIDER ========== -->
    <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
@endsection
