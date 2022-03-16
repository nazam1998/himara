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
                <h1>GALLERY</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Gallery</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ========== MAIN ========== -->
    <main class="gallery-page">
        <!-- FILTERS -->
        <div class="container">
            <div class="gallery-filters">
                <a href="#" data-filter="*" class="filter active">ALL</a>
                <a href="#" data-filter=".filter-restaurnat" class="filter">RESTAURANT</a>
                <a href="#" data-filter=".filter-swimmingpool" class="filter">SWIMMING POOL</a>
                <a href="#" data-filter=".filter-spa" class="filter">SPA</a>
                <a href="#" data-filter=".filter-roomview" class="filter">ROOM VIEW</a>
            </div>
        </div>
        <!-- GALLERY -->
        <div class="container">
            <div class="grid image-gallery row">
                <!-- ITEM -->
                <div class="gallery-item filter-swimmingpool col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery1.jpg">
                            <img src="images/gallery/gallery1.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Swimming Pool</figcaption>
                    </figure>
                </div>
                <!-- ITEM -->
                <div class="gallery-item filter-roomview col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery2.jpg">
                            <img src="images/gallery/gallery2.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Room View</figcaption>
                    </figure>
                </div>
                <!-- ITEM -->
                <div class="gallery-item col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery3.jpg">
                            <img src="images/gallery/gallery3.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Cocktail</figcaption>
                    </figure>
                </div>
                <!-- ITEM -->
                <div class="gallery-item filter-restaurnat col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery4.jpg">
                            <img src="images/gallery/gallery4.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Breakfast</figcaption>
                    </figure>
                </div>
                <!-- ITEM -->
                <div class="gallery-item col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery5.jpg">
                            <img src="images/gallery/gallery5.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Playground</figcaption>
                    </figure>
                </div>
                <!-- ITEM -->
                <div class="gallery-item filter-restaurnat col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery6.jpg">
                            <img src="images/gallery/gallery6.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Restaurant</figcaption>
                    </figure>
                </div>
                <!-- ITEM -->
                <div class="gallery-item col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery7.jpg">
                            <img src="images/gallery/gallery7.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Wedding Ceremony</figcaption>
                    </figure>
                </div>
                <!-- ITEM -->
                <div class="gallery-item filter-roomview col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery8.jpg">
                            <img src="images/gallery/gallery8.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Beach</figcaption>
                    </figure>
                </div>
                <!-- ITEM -->
                <div class="gallery-item col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery9.jpg">
                            <img src="images/gallery/gallery9.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Honeymoon Room</figcaption>
                    </figure>
                </div>
                <!-- ITEM -->
                <div class="gallery-item filter-roomview col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery10.jpg">
                            <img src="images/gallery/gallery10.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Sea</figcaption>
                    </figure>
                </div>
                <!-- ITEM -->
                <div class="gallery-item filter-spa col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery11.jpg">
                            <img src="images/gallery/gallery11.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Spa Therapy</figcaption>
                    </figure>
                </div>
                <!-- ITEM -->
                <div class="gallery-item filter-restaurnat col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery12.jpg">
                            <img src="images/gallery/gallery12.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Restaurant</figcaption>
                    </figure>
                </div>
                <!-- ITEM -->
                <div class="gallery-item filter-roomview filter-restaurnat col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery13.jpg">
                            <img src="images/gallery/gallery13.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Restaurant</figcaption>
                    </figure>
                </div>
                <!-- ITEM -->
                <div class="gallery-item col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery14.jpg">
                            <img src="images/gallery/gallery14.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Sea</figcaption>
                    </figure>
                </div>
                <!-- ITEM -->
                <div class="gallery-item filter-restaurnat col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery15.jpg">
                            <img src="images/gallery/gallery15.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Restaurant</figcaption>
                    </figure>
                </div>
                <!-- ITEM -->
                <div class="gallery-item filter-roomview col-md-3">
                    <figure class="gradient-overlay image-icon">
                        <a href="images/gallery/gallery16.jpg">
                            <img src="images/gallery/gallery16.jpg" class="img-fluid" alt="Image">
                        </a>
                        <figcaption>Room View</figcaption>
                    </figure>
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
