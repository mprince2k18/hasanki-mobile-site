<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Hasanik English</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/bootstrap.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/css/fontawesome-all.min.css') }}">
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
    {{-- mix --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<style>
    .team-card {
        background-size: contain;
        background-repeat: no-repeat;
    }

</style>

<body class="theme-light">
    <div id="app">

        {{-- preloader --}}
        <div id="preloader">
            <div class="spinner-border color-highlight" role="status"></div>
        </div>

        <div id="page">

            <div class="header header-fixed header-logo-center header-auto-show">
                <a href="{{ route('homepage') }}" class="header-title">Hasanik English</a>
                <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
                <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i
                        class="fas fa-sun"></i></a>
                <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i
                        class="fas fa-moon"></i></a>
            </div>
            <div id="footer-bar" class="footer-bar-6">
                <a href="{{ route('courses') }}" class="{{ request()->is('/courses') ? 'active-nav' : '' }}"><i
                        class="fa fa-file"></i><span>Courses</span></a>
                <a href="{{ route('blogs') }}" class=""><i class="fa fa-book"></i><span>Blogs</span></a>
                <a href="{{ route('homepage') }}" class="circle-nav {{ request()->is('/') ? 'active-nav' : '' }}"><i
                        class="fa fa-home"></i><span>Home</span></a>
                <a href="{{ route('enroll') }}" class="{{ request()->is('/enroll') ? 'active-nav' : '' }}"><i
                        class="fa fa-graduation-cap"></i><span>Enrollment</span></a>
                <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
            </div>



            <div class="page-title page-title-fixed">
                <h1>Hasanik English</h1>
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light"
                    data-toggle-theme><i class="fa fa-moon"></i></a>
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark"
                    data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>




                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main">
                    <i class="fa fa-bars"></i>
                </a>




            </div>

            <div class="page-title-clear"></div>


            @yield('content')
            {{-- Vue compo --}}
            {{-- <App></App> --}}
            {{-- Vue compo --}}
        </div>



        <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.html" data-menu-width="280"
            data-menu-active="nav-pages">
            <div class="list-group list-custom-small list-menu ml-0 mr-2">
                <a href="{{ route('homepage') }}" class="menu-active">
                    <i class="fa fa-home gradient-blue color-white"></i>
                    <span>Homepage</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#">
                    <i class="fa fa-exclamation-circle gradient-blue color-white"></i>
                    <span>About Us</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                
                <a href="{{ route('courses') }}">
                    <i class="fa fa-window-restore gradient-magenta color-white"></i>
                    <span>Courses</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="{{ route('blogs') }}">
                    <i class="fa fa-quote-left gradient-red color-white"></i>
                    <span>Blogs</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>





        <div id="menu-main-right" class="menu menu-box-right rounded-0" data-menu-load="menu-main.html"
            data-menu-width="280" data-menu-active="nav-pages"></div>
        <div id="menu-main-top" class="menu menu-box-top rounded-0" data-menu-load="menu-main.html"
            data-menu-width="100%" data-menu-height="100%" data-menu-active="nav-pages"></div>
        <div id="menu-main-bottom" class="menu menu-box-bottom menu-box-bottom-full rounded-0"
            data-menu-load="menu-main.html" data-menu-width="100%" data-menu-height="100%" data-menu-active="nav-pages">
        </div>
        <div id="menu-main-sheet" class="menu menu-box-bottom rounded-0 rounded-m" data-menu-load="menu-main.html"
            data-menu-width="100%" data-menu-height="500" data-menu-active="nav-pages"></div>
        <div id="menu-main-overlay" class="menu menu-box-modal rounded-0" data-menu-load="menu-main.html"
            data-menu-width="100%" data-menu-height="100%" data-menu-active="nav-pages"></div>
        <div id="menu-main-modal" class="menu menu-box-modal rounded-0 rounded-m" data-menu-load="menu-main.html"
            data-menu-width="350" data-menu-height="500" data-menu-active="nav-pages"></div>



        <div id="about-modal" class="menu menu-box-modal rounded-0 rounded-m" data-menu-load="menu-main.html"
            data-menu-width="800" data-menu-height="500" data-menu-active="nav-pages">
        <div>
             @php
         $about = App\Models\Page::where('type','about')->first();   
        @endphp

        {!! $about->desc  !!}
        </div>
       
        
        
        </div>


    </div>





    -
    {{-- js --}}
    <script type="text/javascript" src="{{ asset('frontend/scripts/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/scripts/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/scripts/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/scripts/main.js') }}"></script>
</body>
