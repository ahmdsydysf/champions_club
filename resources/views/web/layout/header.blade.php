{{-- @if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    @endif
    @endauth
</div>
@endif --}}


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Champion's Academy </title>
    <meta name="description" content="Champion's Academy">
    <meta name="keywords" content="businesscarousel, parallax, office, team">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="Champion's Academy">


    <!-- FAVICON FILES -->
    <link href="{{ asset('web_assets/ico/apple-touch-icon-144-precomposed.png')}}" rel="apple-touch-icon"
        sizes="144x144">
    <link href="{{ asset('web_assets/ico/apple-touch-icon-114-precomposed.png')}}" rel="apple-touch-icon"
        sizes="114x114">
    <link href="{{ asset('web_assets/ico/apple-touch-icon-72-precomposed.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('web_assets/ico/apple-touch-icon-57-precomposed.png')}}" rel="apple-touch-icon">
    <link href="{{ asset('web_assets/ico/favicon.png')}}" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('web_assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('web_assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('web_assets/css/flipbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('web_assets/css/timeline.css')}}">
    <link rel="stylesheet" href="{{ asset('web_assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{ asset('web_assets/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('web_assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('web_assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('web_assets/css/owl.theme.default.min.css')}}">

    @if (LaravelLocalization::getCurrentLocale() == 'ar')
    {{-- arabic links --}}
    <link rel="stylesheet" href="{{ asset('web_assets/css/bootstrap-ar.min.css')}}">
    <link rel="stylesheet" href="{{ asset('web_assets/css/style-ar.css')}}">
    @else

    <link rel="stylesheet" href="{{ asset('web_assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('web_assets/css/style.css')}}">

    @endif
</head>

<body>

    @if (LaravelLocalization::getCurrentLocale() == 'en')
    <header class="header">
        <div class="topbar">
            <div class="container">
                <div class="tagline"> Push your limits, achieve your goals, and be a part of something great <u>with our
                        sport
                        club.</u></div>
                <!-- end tagline -->
                <ul class="social-media">
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i
                                class="fa fa-facebook"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i
                                class="fa fa-twitter"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i
                                class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i
                                class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i
                                class="fa fa-youtube-play"></i></a></li>
                </ul>
                <!-- end social-media -->
                <div class="phone"><img src="{{ asset('web_assets/images/icon-phone.png')}}" alt="Image">
                    <span><b>EG</b> +0201231231255</span>
                </div>
                <!-- end phone -->
            </div>
            <!-- end container -->
        </div>
        <!-- end topbar -->
        <nav class="navbar">
            <div class="container">
                <div class="logo"> <a href="{{ url('/') }}"> <img src="{{ asset('web_assets/images/logo.png')}}"
                            alt="Image"> </a>
                </div>
                <!-- end logo -->
                <ul class="nav-menu">
                    <li><a href="{{ url('/') }}" class="active">Home</a></li>
                    <li><a href="#">Sports</a>
                        <ul class="dropdown">
                            <li><a href="#">Football</a></li>
                            <li><a href="#">Handball</a></li>
                            <li><a href="#">Basketball</a></li>
                            <li><a href="#">Tennis</a></li>
                            <li><a href="#">Swimming</a></li>
                            <li><a href="#">Body Building</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">News and Events</a>
                    </li>
                    <li>
                        <a href="#">Media</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
                <!-- end nav-menu -->
                <ul class="language">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>

                        <a rel="alternate"
                            class="{{ $localeCode == LaravelLocalization::getCurrentLocale() ? 'active' : '' }}"
                            hreflang="{{ $localeCode }}"
                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ strtoupper($localeCode) }}
                        </a>
                    </li>
                    @endforeach

                </ul>
                <!-- end language -->
                @auth
                <div class="search-btn font-weight-bold">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class=" logout-btn">LogOut</button>
                    </form>
                </div>
                <!-- end search-btn -->
                <div class="search-btn font-weight-bold"> <a href="{{ route('profile.edit') }}">Profile</a> </div>
                <!-- end sandwich-btn -->
                @else
                <div class="search-btn font-weight-bold"> <a href="{{ route('web.login') }}">Sign In</a> </div>
                <!-- end search-btn -->
                <div class="search-btn font-weight-bold"> <a href="{{ route('register') }}">Sign Up</a> </div>
                <!-- end sandwich-btn -->
                @endauth

                <div class="bottom-bar"></div>
                <!-- end bottom-bar -->
            </div>
            <!-- end container -->
        </nav>
        <!-- end navbar -->
    </header>
    <!-- end header -->
    @else
    <header class="header">
        <div class="topbar">
            <div class="container">
                <div class="tagline"> تخطى حدودك وحقق أهدافك وكن جزءًا من شيء عظيم
                    <u>مع رياضتنا
                        النادي.</u>
                </div>
                <!-- end tagline -->
                <ul class="social-media">
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i
                                class="fa fa-facebook"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i
                                class="fa fa-twitter"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i
                                class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i
                                class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i
                                class="fa fa-youtube-play"></i></a></li>
                </ul>
                <!-- end social-media -->
                <div class="phone"><img src="{{ asset('web_assets/images/icon-phone.png') }}" alt="Image">
                    <span><b>EG</b> +0201231231255</span>
                </div>
                <!-- end phone -->
            </div>
            <!-- end container -->
        </div>
        <!-- end topbar -->
        <nav class="navbar">
            <div class="container">
                <div class="logo"> <a href="{{ url('/') }}"> <img src="{{ asset('web_assets/images/logo.png')}}"
                            alt="Image"> </a>
                </div>
                <!-- end logo -->
                <ul class="nav-menu">
                    <li><a href="{{ url('/') }}">الرئيسية</a></li>
                    <li><a href="#">رياضات</a>
                        <ul class="dropdown">
                            <li><a href="#">كرة قدم</a></li>
                            <li><a href="#">كرة يد</a></li>
                            <li><a href="#">كرة سلة</a></li>
                            <li><a href="#">تنس</a></li>
                            <li><a href="#">سباحة</a></li>
                            <li><a href="#">كمال الاجسام</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">أخبار وأحداث</a>
                    </li>
                    <li>
                        <a href="#">ميديا</a>
                    </li>
                    <li>
                        <a href="contact.html">تواصل معنا</a>
                    </li>
                </ul>
                <!-- end nav-menu -->endforeach
                <ul class="language">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a rel="alternate"
                            class="{{ $localeCode == LaravelLocalization::getCurrentLocale() ? 'active' : '' }}"
                            hreflang="{{ $localeCode }}"
                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ strtoupper($localeCode) }}
                        </a>
                    </li>
                    @endforeach
                </ul>
                <!-- end language -->
                @auth
                <div class="search-btn font-weight-bold">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="logout-btn">تسجيل خروج</button>
                    </form>
                </div>
                <!-- end search-btn -->
                <div class="search-btn font-weight-bold"> <a href="{{ route('profile.edit') }}">بياناتي</a> </div>
                <!-- end sandwich-btn -->
                @else
                <div class="search-btn font-weight-bold"> <a href="{{ route('web.login') }}">تسجيل دخول </a> </div>
                <!-- end search-btn -->
                <div class="search-btn font-weight-bold"> <a href="{{ route('register') }}"> تسجيل جديد </a> </div>
                <!-- end sandwich-btn -->
                @endauth

                <div class="bottom-bar"></div>
                <!-- end bottom-bar -->
            </div>
            <!-- end container -->
        </nav>
        <!-- end navbar -->
    </header>
    <!-- end header -->
    @endif