@extends('web.layout.app')

@section('content')
<section class="slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach ($sliderData as $row)
            <div class="swiper-slide">
                <div class="slide-inner bg-image" data-background="{{ asset('uploads/slider') }}/{{ $row->image }}"
                    data-text="{{ $row->subtitle_en }}<span>{{ $row->title_en }}</span>">
                    <div class="container">

                        <h6 data-swiper-parallax="100">{{ $row->title_en }}</h6>
                        <h2 data-swiper-parallax="200"><span>.</span>{{ $row->subtitle_en }}</h2>
                        <p data-swiper-parallax="300">{{ $row->overview_en }}</p>
                        <div class="clearfix"></div>
                        <a href="#" data-swiper-parallax="200">Discover More<span></span></a>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end slide-inner -->
            </div>
            @endforeach

        </div>
        <!-- end swiper-wrapper -->
        <div class="swiper-custom-pagination"></div>
        <!-- end swiper-custom-pagination -->
    </div>
    <!-- end swiper-container -->
</section>
<!-- end slider -->
<section class="featured-services">
    <div class="content-wrapper">
        <div class="container">
            @foreach ($general_service as $row)
            <div class="content-box wow fadeIn"> <span></span>
                <h3>{{ $row->service_en }}</h3>
                <p>{{ $row->overview_en }}</p>
                <a href="#"><img src="{{ asset('web_assets/images/icon-right-arrow.svg') }}" alt="Image"></a>
            </div>
            @endforeach

        </div>
        <!-- end container -->
    </div>
    <!-- end content-wrapper -->

</section>


<!-- end featured-services -->
<section class="side-image-content moved-space" id="counter">
    <div class="sides bg-image wow fadeIn" data-background="{{ asset('web_assets/images/side-image01.jpg') }}">
        <div class="video">
            <video src="{{ $aboutUs->about_video ?? '' }}" loop autoplay muted></video>
        </div>
        <!-- end video -->
        <a href="{{ $aboutUs->about_video ?? '' }}" class="play-btn" data-fancybox>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 104 104" enable-background="new 0 0 104 104" xml:space="preserve">
                <path fill="none" stroke="#FFFFFF" stroke-width="5" stroke-miterlimit="10" d="M26,35h52L52,81L26,35z" />
                <circle class="video-play-circle" fill="none" stroke="#fff" stroke-width="5" stroke-miterlimit="10"
                    cx="52" cy="52" r="50" />
            </svg>
            <span class="video-play-outline"></span> </a>
    </div>
    <!-- end sides -->
    <div class="sides bg-color wow fadeIn" data-background="#405089">
        <div class="inner">
            <div class="section-title light">
                <h2>About Us</h2>
                <h6>{{ $aboutUs->about_master_en ?? '' }}</h6>
            </div>
            <!-- end section-title -->
            <ul class="counter">
                @foreach ($counter as $coun)
                <li> <span class="odometer" id="{{ $coun->id }}"></span> <small>{{ $coun->text_en }}</small>
                </li>
                @endforeach
            </ul>
            <p>{{ $aboutUs->about_details_en ?? '' }}</p>

        </div>
        <!-- end inner -->
    </div>
    <!-- end sides -->
</section>
<!-- end side-image-content -->


<section class="image-content-over-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-title wow fadeIn">
                    <h2>{{ $aboutUs->sports_title_en ?? '' }}</h2>
                    <h6>{{ $aboutUs->sports_text_en ?? '' }}</h6>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-3 -->

            <div class="col-lg-8">
                <div class="swiper-carousel wow fadeIn">
                    <div class="swiper-wrapper">
                        @foreach ($sports as $row)
                        <div class="swiper-slide">
                            <figure> <img src="{{ asset('uploads/sport/' . $row->sport_image) }}" alt="Image">
                                <figcaption>
                                    <h4>{{ $row->sport_title_en }}</h4>
                                    <small>{{ $row->sport_subtitle_en }}</small>
                                </figcaption>
                            </figure>
                        </div>
                        @endforeach

                    </div>
                    <!--end swiper-wrapper -->
                    <div class="swiper-button-next"><img src="{{ asset('web_assets/images/icon-right-arrow.svg') }}"
                            alt="Image"></div>
                    <div class="swiper-button-prev"><img src="{{ asset('web_assets/images/icon-right-arrow.svg') }}"
                            alt="Image"></div>
                </div>
                <!-- end swiper-carousel -->
            </div>
            <!-- end col-6 -->
        </div>
    </div>
    <!-- end container -->
</section>
<!-- end image-content-over-box -->
<section class="icon-content-box">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeIn">
                <div class="section-title">
                    <h2>Cups and achievements</h2>
                    <h6>You should at least attempt to protect the<br> accident scene however you can.</h6>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-12 -->
            <div class="col-12 " style="overflow: hidden !important;">
                <div class="col-lg-12">
                    <div class="swiper-carousel2 wow fadeIn">
                        <div class="swiper-wrapper ">
                            @foreach ($cups as $row)
                            <div class="swiper-slide">
                                <div class="flip-box" data-flip-direction="horizontal-to-left" data-h_text_align="left"
                                    data-v_text_align="center">
                                    <div class="flip-box-front" data-bg-overlay="true" data-text-color="light">
                                        <div class="inner">
                                            <figure> <img src="{{ asset('uploads/cups/' . $row->image) }}" alt="Image">
                                            </figure>
                                        </div>
                                        <!-- end inner -->
                                    </div>
                                    <!-- end flip-box-front -->
                                    <div class="flip-box-back">
                                        <div class="inner">
                                            <h4>{{ $row->title_en }}</h4>
                                            <p>{{ $row->brief_en }}</p>
                                        </div>
                                        <!-- end inner -->
                                    </div>
                                    <!-- end end flip-box-back -->
                                </div>
                                <!-- end flip-box -->
                            </div>
                            @endforeach

                        </div>
                        <!--end swiper-wrapper -->

                    </div>
                    <!-- end swiper-carousel -->
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end icon-content-box -->
<section class="image-content-box serv" style="background: #405089;">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <div class="section-title">
                    <a href="allnews.html">
                        <h2 style="color: white;">{{ $aboutUs->services_title_en }}</h2>
                        <h6 style="color: white;">{{ $aboutUs->services_text_en }}</h6>
                    </a>
                </div>

            </div>

            <div id="owl-en" class="owl-carousel">
                @foreach ($services as $row)
                <div class="content-box service-container">

                    <figure><img src="{{ asset('uploads/service/' . $row->image) }}" alt="Image"></figure>
                    <h4 style="color:#fff">{{ $row->title_en }}</h4>
                    <p style="color:#fff">{{ $row->brief_en }}</p>
                    <a class="dis-btn-service" href="#" data-swiper-parallax="200">Discover
                        More<span></span></a>
                </div>
                @endforeach


            </div>

        </div>

    </div>

</section>

<!-- end image-content-box -->

<section class="latest-news">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeIn">
                <div class="section-title">
                    <h2>{{ $aboutUs->news_title_en }}</h2>
                    <h6>{{ $aboutUs->news_text_en }}</h6>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-12 -->
            <div class="col-12 blogs-data">
                @foreach ($news as $row)
                <div class="content-box wow fadeIn">
                    <span>{{ $row->title_en }}</span>
                    <img class="blog-main-img" src="{{ asset('uploads/event/' . $row->image) }}" alt="" srcset="">
                    <h4>{{ $row->title_en }}</h4>
                    <small>{{ $row->date }}</small>
                    <p>{{ $row->brief_en }}</p>
                    <a href="#"><img src="{{ asset('web_assets/images/icon-right-arrow.svg') }}" alt="Image"></a>
                </div>
                @endforeach

            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end latest-news -->
<section class="info-box">
    <div class="container ">
        <h3>{{ $aboutUs->membership_title_en }}</h3>
        <h6>{{ $aboutUs->membership_text_en }}</p>
            <img class="w-100" src="{{ asset('web_assets/images/team-sports.jpg') }}" alt="Image">



            <style>
                button.submit-btn.reg {
                    border: none;
                    background: #f65935;
                    color: #fff;
                    height: 54px;
                    border: 1px solid #eaebee;
                    padding: 0 40px;
                    font-weight: 400;
                }

                button.submit-btn.reg:hover {
                    border: none;
                    background: #405089;
                    color: #fff;
                    height: 54px;
                    border: 1px solid #405089;
                    padding: 0 40px;
                    font-weight: 400;
                }
            </style>
             @auth
            <div class="row">
                <div class="col-12">
                    <div class="col-6 my-5 ">
                        <form id="goToAdd" action="{{ route('childSport') }}" method="get">
                            @csrf
                        </form>

                        <button form='goToAdd' class="submit-btn reg">Add Child</button>

                    </div>

                    <div class="col-6 my-5 ">
                        <form id="goToComm" action="{{ route('completeChildSport', ['id' => Auth::user()->id]) }}"
                            method="get">
                            @csrf

                        </form>

                        <button form='goToComm' class="submit-btn  reg">Complete
                            Register</button>

                    </div>

                </div>
            </div>



                    @else
                    <div class="row">
                        <div class="col-12">
                        <a style="width: 100%;" href="{{ route('register') }}" class="join-us btn">Join Our
                            Club<span> Now</span></a>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>

    </div>
</section>
<!-- end info-box -->
<section class="request-form">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 sponsers">
                <div class="logos wow fadeIn">

                    <ul class="row justify-content-between owl-carousel">
                        @foreach ($sponsors as $row)
                        <li><img src="{{ asset('uploads/sponsor/' . $row->image) }}" alt="Image"></li>
                        @endforeach

                    </ul>

                </div>
                <!-- end logos -->
            </div>
            <!-- end col-7 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end consultation-form -->
@endsection
