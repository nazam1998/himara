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
                <h1>Blog</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Blog</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ========== MAIN ========== -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <!-- POSTS -->
                    <div class="blog-posts">
                        <!-- POST -->
                        @foreach ($articles as $article)
                            <article class="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-thumbnail">
                                            <figure class="gradient-overlay-hover link-icon">
                                                <a href="#">
                                                    <img src="{{asset($article->img)}}" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-details">
                                            <h2 class="post-title">
                                                <a href="blog-post.html">{{$article->title}}</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="author">
                                                    <a href="#"><img src="images/users/admin.jpg" width="16"
                                                            alt="Image">{{$article->author->nom}}</a>
                                                </span>
                                                <span class="date">
                                                    <a href="#">
                                                        <i class="fa fa-clock-o"></i>{{$article->created_at}}</a>
                                                </span>
                                                <span class="comments">
                                                    <a href="#">
                                                        <i class="fa fa-commenting-o"></i>1 Comment</a>
                                                </span>
                                                <span class="category">
                                                    <i class="fa fa-folder-open-o"></i>IN
                                                    @foreach($article->tags as $tag)
                                                    <a href="#">{{$tag->nom}}</a>@if($loop->last)@else,@endif
                                                    @endforeach
                                                </span>
                                            </div>
                                            <p>{{Str::limit($article->desc, 20, ' (...)')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <!-- ========== PAGINATION ========== -->
                    <nav class="pagination">
                        <ul>
                            <li class="prev-pagination">
                                <a href="#">
                                    &nbsp;<i class="fa fa-angle-left"></i>
                                    Previous &nbsp;</a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>...</li>
                            <li>
                                <a href="#">18</a>
                            </li>
                            <li>
                                <a href="#">19</a>
                            </li>
                            <li>
                                <a href="#">20</a>
                            </li>
                            <li class="next_pagination">
                                <a href="#">
                                    &nbsp; Next
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- SIDEBAR -->
                <div class="col-lg-3 col-12">
                    <div class="sidebar">
                        <aside class="widget noborder">
                            <div class="search">
                                <form class="widget-search">
                                    <input type="search" placeholder="Search">
                                    <button class="btn-search" id="searchsubmit" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">CATEGORIES</h4>
                            <ul class="categories">
                                @foreach ($categories as $category)
                                <li>
                                    <a href="#">{{$category->nom}}<span class="posts-num">{{count($category->articles)}}</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">Latest Posts</h4>
                            <div class="latest-posts">
                                <!-- ITEM -->
                                <div class="latest-post-item">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure class="gradient-overlay-hover link-icon sm">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post1.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="post-details">
                                                <h6 class="post-title">
                                                    <a href="blog-post.html">10 Tips for Holiday Travel</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ITEM -->
                                <div class="latest-post-item">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure class="gradient-overlay-hover link-icon sm">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post2.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="post-details">
                                                <h6 class="post-title">
                                                    <a href="blog-post.html">Are you ready to enjoy your holidays</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ITEM -->
                                <div class="latest-post-item">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure class="gradient-overlay-hover link-icon sm">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post3.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="post-details">
                                                <h6 class="post-title">
                                                    <a href="blog-post.html">Honeymoon in Hotel Himara</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ITEM -->
                                <div class="latest-post-item">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure class="gradient-overlay-hover link-icon sm">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post4.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="post-details">
                                                <h6 class="post-title">
                                                    <a href="blog-post.html">Travel Gift Ideas for Every Type of
                                                        Traveler</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ITEM -->
                                <div class="latest-post-item">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure class="gradient-overlay-hover link-icon sm">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post5.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="post-details">
                                                <h6 class="post-title">
                                                    <a href="blog-post.html">Breakfast with coffee and orange juic</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                <a href="#">
                                    <span class="tag">Party</span></a>
                                <a href="#">
                                    <span class="tag">Travel</span></a>
                                <a href="#">
                                    <span class="tag">Wedding</span></a>
                                <a href="#">
                                    <span class="tag">Food</span></a>
                                <a href="#">
                                    <span class="tag">Music</span></a>
                                <a href="#">
                                    <span class="tag">City</span></a>
                                <a href="#">
                                    <span class="tag">Image</span></a>
                                <a href="#">
                                    <span class="tag">Hotel</span></a>
                            </div>
                        </aside>
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
