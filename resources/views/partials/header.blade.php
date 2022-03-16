<!-- ========== TOP MENU ========== -->
<div class="topbar">
    <div class="container">
        <div class="welcome-mssg">
            Welcome to Hotel Himara.
        </div>
        <div class="top-right-menu">
            <ul class="top-menu">
                <li class="d-none d-md-inline">
                    <a href="tel:+18881234567">
                        <i class="fa fa-phone"></i>+1 888 123 4567
                    </a>
                </li>
                <li class="d-none d-md-inline">
                    <a href="mailto:contact@hotelhimara.com">
                        <i class="fa fa-envelope-o "></i>contact@hotelhimara.com</a>
                </li>
                <li class="language-menu">
                    <a href="#" class="active-language"><img src="images/icons/flags/gb.png" alt="Image">English</a>
                    <ul class="languages">
                        <li class="language">
                            <a href="#"><img src="images/icons/flags/it.png" alt="Image">Italiano</a>
                        </li>
                        <li class="language">
                            <a href="#"><img src="images/icons/flags/gr.png" alt="Image">Ελληνικα</a>
                        </li>
                        <li class="language">
                            <a href="#"><img src="images/icons/flags/al.png" alt="Image">Shqip</a>
                        </li>
                        <li class="language">
                            <a href="#"><img src="images/icons/flags/fr.png" alt="Image">Français</a>
                        </li>
                        <li class="language">
                            <a href="#"><img src="images/icons/flags/es.png" alt="Image">Español</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ========== HEADER ========== -->
<header class="horizontal-header sticky-header" data-menutoggle="991">
    <div class="container">
        <!-- BRAND -->
        <div class="brand">
            <div class="logo">
                <a href="index.html">
                    <img src="images/logo.svg" alt="Hotel Himara">
                </a>
            </div>
        </div>
        <!-- MOBILE MENU BUTTON -->
        <div id="toggle-menu-button" class="toggle-menu-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
        <!-- MAIN MENU -->
        <nav id="main-menu" class="main-menu">
            <ul class="menu">
                <li class="menu-item dropdown @if(request()->is('/'))active @endif">
                    <a href="/">HOME</a>
                </li>
                <li class="menu-item dropdown @if(request()->is('rooms'))active @endif">
                    <a href="/rooms">ROOMS</a>
                </li>
                <li class="menu-item dropdown @if(request()->is('team'))active @endif">
                    <a href="/team">TEAM</a>
                </li>
                <li class="menu-item dropdown @if(request()->is('gallery'))active @endif">
                    <a href="/gallery">GALLERY</a>
                </li>
                <li class="menu-item @if(request()->is('blog'))active @endif">
                    <a href="/blog">BLOG</a>
                </li>

                <li class="menu-item @if(request()->is('contact'))active @endif">
                    <a href="/contact">CONTACT US</a>
                </li>
                @auth
                <li class="menu-item menu-btn">
                    <a href="{{route('dashboard')}}" class="btn">
                        {{-- <i class="fa fa-user"></i> --}}
                        Dashboard</a>
                </li>   
                @else
                <li class="menu-item menu-btn">
                    <a href="{{route('login')}}" class="btn">
                        <i class="fa fa-user"></i>
                        LOG IN</a>
                </li>
                <li class="menu-item menu-btn mx-2">
                    <a href="{{route('register')}}" class="btn btn-dark">
                        <i class="fa fa-pencil"></i>
                        REGISTER</a>
                </li>
                @endauth
            </ul>
        </nav>
    </div>
</header>
