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
    @yield('custom_css_ar')
    @else

    <link rel="stylesheet" href="{{ asset('web_assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('web_assets/css/style.css')}}">
    @yield('custom_css')

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
                    <li><a href="{{ url('/') }}" class="{{ Request::segment(2) == null ? 'active' : '' }}">Home</a></li>
                    <li><a href="" class="{{ Request::segment(2) == 'sport' ? 'active' : '' }}">Sports</a>
                        <ul class="dropdown">
                            @foreach ($sports as $sport )

                            <li><a href="{{ url('/sport/' . $sport->id) }}">{{ $sport->sport_title_en }}</a></li>


                            @endforeach

                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('allNews') }}"
                            class="{{ Request::segment(2) == 'news' ? 'active' : '' }}">News and Events</a>
                    </li>
                    <li>
                        <a href="{{ route('media') }}"
                            class="{{ Request::segment(2) == 'media' ? 'active' : '' }}">Media</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="{{ Request::segment(2) == 'contact' ? 'active' : '' }}">Contact Us</a>
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
                <div class="search-btn font-weight-bold"> <a href="{{ route('profile.edit') }}">{{ Auth::user()->name
                        }}</a> </div>
                <!-- end sandwich-btn -->
                @else
                <div class="search-btn font-weight-bold"> <a href="{{ route('login') }}">Sign In</a> </div>
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
                    <li><a href="{{ url('/') }}" class="{{ Request::segment(2) == null ? 'active' : '' }}">الرئيسية</a>
                    </li>
                    <li><a href="" class="{{ Request::segment(2) == 'sport' ? 'active' : '' }}">رياضات</a>
                        <ul class="dropdown">
                            @foreach ($sports as $sport )


                            <li><a href="{{ url('/sport/' . $sport->id) }}">{{ $sport->sport_title_ar }}</a></li>



                            @endforeach

                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('allNews') }}"
                            class="{{ Request::segment(2) == 'news' ? 'active' : '' }}">أخبار وأحداث</a>
                    </li>
                    <li>
                        <a href="{{ route('media') }}"
                            class="{{ Request::segment(2) == 'media' ? 'active' : '' }}">ميديا</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="{{ Request::segment(2) == 'contact' ? 'active' : '' }}">تواصل معنا</a>
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
                        <button class="logout-btn">تسجيل خروج</button>
                    </form>
                </div>
                <!-- end search-btn -->
                <div class="search-btn font-weight-bold"> <a href="{{ route('profile.edit') }}">{{ Auth::user()->name
                        }}</a> </div>
                <!-- end sandwich-btn -->
                @else
                <div class="search-btn font-weight-bold"> <a href="{{ route('login') }}">تسجيل دخول </a> </div>
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