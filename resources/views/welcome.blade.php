@extends('web.layout.app')

@section('content')

<section class="slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-inner bg-image" data-background="{{ asset('web_assets/images/slide01.jpg')}}"
                    data-text="HOW WE Make<span>Body</span>">
                    <div class="container">
                        <h6 data-swiper-parallax="100">Gem</h6>
                        <h2 data-swiper-parallax="200"><span>.</span>Body Build</h2>
                        <p data-swiper-parallax="300">Even the most general definition of a gem has many exceptions.
                            Learn what
                            qualities have been used to identify gemstones both scientifically and popularly.</p>
                        <div class="clearfix"></div>
                        <a href="#" data-swiper-parallax="200">Discover More<span></span></a>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end slide-inner -->
            </div>
            <!-- end swiper-slide -->
            <div class="swiper-slide">
                <div class="slide-inner bg-image" data-background="{{ asset('web_assets/images/slide02.jpg')}}"
                    data-text="Swimming Pools<span>EQUIPMENTS</span>">
                    <div class="container">
                        <h6 data-swiper-parallax="100">Swimming Pools</h6>
                        <h2 data-swiper-parallax="200"><span>.</span>Olympic pools</h2>
                        <p data-swiper-parallax="300">With all the inconvenience associated with it, and, of course,
                            insurance
                            rates going up. With all these things going through your mind after an accident.</p>
                        <div class="clearfix"></div>
                        <a href="#" data-swiper-parallax="200">Discover More<span></span></a>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end slide-inner -->
            </div>
            <!-- end swiper-slide -->
            <div class="swiper-slide">
                <div class="slide-inner bg-image" data-background="{{ asset('web_assets/images/slide03.jpg')}}"
                    data-text="Be Like <span>Mo Salah</span>">
                    <div class="container">
                        <h6 data-swiper-parallax="100">Football</h6>
                        <h2 data-swiper-parallax="200"><span>.</span>Special Academy</h2>
                        <p data-swiper-parallax="300">It can be challenging to get everything in order. You can take
                            several steps
                            to ensure safety and reduce your potential losses after an accident.</p>
                        <div class="clearfix"></div>
                        <a href="#" data-swiper-parallax="200">Discover More<span></span></a>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end slide-inner -->
            </div>
            <!-- end swiper-slide -->
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
            <div class="content-box wow fadeIn"> <span></span>
                <h3>Personal Training</h3>
                <p>Many sports clubs offer one-on-one personal training sessions with certified trainers who can
                    help members
                    develop personalized workout plans </p>
                <a href="#"><img src="{{ asset('web_assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
            </div>
            <!-- end content-box -->
            <div class="content-box wow fadeIn"> <span></span>
                <h3>Group Fitness Classes</h3>
                <p>Group fitness classes are a popular way for members to stay motivated and engaged while
                    exercising</p>
                <a href="#"><img src="{{ asset('web_assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
            </div>
            <!-- end content-box -->
            <div class="content-box wow fadeIn"> <span></span>
                <h3>Sports Facilities</h3>
                <p>For many members, access to high-quality sports facilities is a key reason for joining a sports
                    club. These
                    facilities can include swimming pools, tennis courts, basketball courts, soccer fields, and more
                </p>
                <a href="#"><img src="{{ asset('web_assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
            </div>
            <!-- end content-box -->
        </div>
        <!-- end container -->
    </div>
    <!-- end content-wrapper -->

</section>
<!-- end featured-services -->
<section class="side-image-content moved-space" id="counter">
    <div class="sides bg-image wow fadeIn" data-background="{{ asset('web_assets/images/side-image01.jpg')}}">
        <div class="video">
            <video src="{{ asset('web_assets/videos/video.mp4')}}" loop autoplay muted></video>
        </div>
        <!-- end video -->
        <a href="videos/video.mp4" class="play-btn" data-fancybox>
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
                <h6>Do this for both directions of traffic if it’s<br> necessary. In busy traffic, this</h6>
            </div>
            <!-- end section-title -->
            <ul class="counter">
                <li> <span class="odometer" id="1"></span><span class="symbol">+</span> <small>New Member</small>
                </li>
                <li> <span class="odometer" id="2"></span><span class="symbol">k</span> <small>Members</small> </li>
                <li> <span class="odometer" id="3"></span><span class="symbol">%</span> <small>Satisfaction</small>
                </li>
            </ul>
            <p>If you are not actively using <strong>Facebook</strong>, <strong>Twitter</strong> and other social
                media
                platforms, take the time to do so. Get into the habit of updating your business page or
                <u>tweets</u> at the
                same time every day.
            </p>
            <p>Take advantage of the <u>software</u> that can help turn your blogs into tweets and know when the
                best time
                of day is to connect with your base.</p>

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
                    <h2>Sports</h2>
                    <h6>You will likely need proof to show your insurance company
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at eos sint corporis
                        libero amet
                        perferendis facilis perspiciatis illo. Eos, delectus culpa? Inventore.

                    </h6>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-3 -->

            <div class="col-lg-8">
                <div class="swiper-carousel wow fadeIn">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure> <img src="{{ asset('web_assets/images/image04.jpg')}}" alt="Image">
                                <figcaption>
                                    <h4>Football</h4>
                                    <small>Business Constultation</small>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end swiper-slide -->
                        <div class="swiper-slide">
                            <figure> <img src="{{ asset('web_assets/images/image05.jpg')}}" alt="Image">
                                <figcaption>
                                    <h4>Tennis</h4>
                                    <small>Development Constultation</small>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end swiper-slide -->
                        <div class="swiper-slide">
                            <figure> <img src="{{ asset('web_assets/images/image06.jpg')}}" alt="Image">
                                <figcaption>
                                    <h4>swimming</h4>
                                    <small>Training Constultation</small>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end swiper-slide -->
                        <div class="swiper-slide">
                            <figure> <img src="{{ asset('web_assets/images/image07.jpg')}}" alt="Image">
                                <figcaption>
                                    <h4>Basket Ball</h4>
                                    <small>Accounting Constultation</small>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end swiper-slide -->
                        <div class="swiper-slide">
                            <figure> <img src="{{ asset('web_assets/images/image08.jpg')}}" alt="Image">
                                <figcaption>
                                    <h4>Body Building</h4>
                                    <small>Motivation Constultation</small>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end swiper-slide -->
                        <div class="swiper-slide">
                            <figure> <img src="{{ asset('web_assets/images/image09.jpg')}}" alt="Image">
                                <figcaption>
                                    <h4>Hand Ball</h4>
                                    <small>Business Constultation</small>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end swiper-slide -->
                    </div>
                    <!--end swiper-wrapper -->
                    <div class="swiper-button-next"><img src="{{ asset('web_assets/images/icon-right-arrow.svg')}}"
                            alt="Image"></div>
                    <div class="swiper-button-prev"><img src="{{ asset('web_assets/images/icon-right-arrow.svg')}}"
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
                            <div class="swiper-slide">
                                <div class="flip-box" data-flip-direction="horizontal-to-left" data-h_text_align="left"
                                    data-v_text_align="center">
                                    <div class="flip-box-front" data-bg-overlay="true" data-text-color="light">
                                        <div class="inner">
                                            <figure> <img src="{{ asset('web_assets/images/trophy-1.jpg')}}"
                                                    alt="Image"> </figure>
                                        </div>
                                        <!-- end inner -->
                                    </div>
                                    <!-- end flip-box-front -->
                                    <div class="flip-box-back">
                                        <div class="inner">
                                            <h4>Tennis Cup</h4>
                                            <p>Instead of giving up immediately, go back to the drawing doesn't
                                                something need.</p>
                                        </div>
                                        <!-- end inner -->
                                    </div>
                                    <!-- end end flip-box-back -->
                                </div>
                                <!-- end flip-box -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="flip-box" data-flip-direction="horizontal-to-left" data-h_text_align="left"
                                    data-v_text_align="center">
                                    <div class="flip-box-front" data-bg-overlay="true" data-text-color="light">
                                        <div class="inner">
                                            <figure> <img src="{{ asset('web_assets/images/trophy-2.jpg')}}"
                                                    alt="Image"> </figure>
                                        </div>
                                        <!-- end inner -->
                                    </div>
                                    <!-- end flip-box-front -->
                                    <div class="flip-box-back">
                                        <div class="inner">
                                            <h4>Footbal Cup</h4>
                                            <p>Instead of giving up immediately, go back to the drawing doesn't
                                                something need.</p>
                                        </div>
                                        <!-- end inner -->
                                    </div>
                                    <!-- end end flip-box-back -->
                                </div>
                                <!-- end flip-box -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="flip-box" data-flip-direction="horizontal-to-left" data-h_text_align="left"
                                    data-v_text_align="center">
                                    <div class="flip-box-front" data-bg-overlay="true" data-text-color="light">
                                        <div class="inner">
                                            <figure> <img src="{{ asset('web_assets/images/trophy-3.webp')}}"
                                                    alt="Image"> </figure>
                                        </div>
                                        <!-- end inner -->
                                    </div>
                                    <!-- end flip-box-front -->
                                    <div class="flip-box-back">
                                        <div class="inner">
                                            <h4>Handball Cup</h4>
                                            <p>Instead of giving up immediately, go back to the drawing doesn't
                                                something need.</p>
                                        </div>
                                        <!-- end inner -->
                                    </div>
                                    <!-- end end flip-box-back -->
                                </div>
                                <!-- end flip-box -->
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <div class="flip-box" data-flip-direction="horizontal-to-left" data-h_text_align="left"
                                    data-v_text_align="center">
                                    <div class="flip-box-front" data-bg-overlay="true" data-text-color="light">
                                        <div class="inner">
                                            <figure> <img src="{{ asset('web_assets/images/trophy-4.jpg')}}"
                                                    alt="Image"> </figure>
                                        </div>
                                        <!-- end inner -->
                                    </div>
                                    <!-- end flip-box-front -->
                                    <div class="flip-box-back">
                                        <div class="inner">
                                            <h4>Swemming Cup</h4>
                                            <p>Instead of giving up immediately, go back to the drawing doesn't
                                                something need.</p>
                                        </div>
                                        <!-- end inner -->
                                    </div>
                                    <!-- end end flip-box-back -->
                                </div>
                                <!-- end flip-box -->
                            </div>
                            <!-- end swiper-slide -->

                            <div class="swiper-slide">
                                <div class="flip-box" data-flip-direction="horizontal-to-left" data-h_text_align="left"
                                    data-v_text_align="center">
                                    <div class="flip-box-front" data-bg-overlay="true" data-text-color="light">
                                        <div class="inner">
                                            <figure> <img src="{{ asset('web_assets/images/trophy-6.jpg')}}"
                                                    alt="Image"> </figure>
                                        </div>
                                        <!-- end inner -->
                                    </div>
                                    <!-- end flip-box-front -->
                                    <div class="flip-box-back">
                                        <div class="inner">
                                            <h4>1st Place</h4>
                                            <p>Instead of giving up immediately, go back to the drawing doesn't
                                                something need.</p>
                                        </div>
                                        <!-- end inner -->
                                    </div>
                                    <!-- end end flip-box-back -->
                                </div>
                                <!-- end flip-box -->
                            </div>
                            <!-- end swiper-slide -->
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
<section class="image-content-box" style="background: #405089;">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeIn">
                <div class="section-title">
                    <a href="allnews.html">
                        <h2>Our services</h2>
                        <h6 style="color: white;">Because they may falsely report what happened wither<br> knowingly or
                            simply due
                            to confusion</h6>
                    </a>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-12 -->
            <div class="col-12 owl-carousel">
                <div class="content-box service-container wow fadeIn">
                    <figure><img src="{{ asset('web_assets/images/image01.jpg') }}" alt="Image"></figure>
                    <h4>Personal Training</h4>
                    <p>Personal training is a great service to offer as it allows members to work one-on-one with a
                        fitness
                        professional who can create customized workout plans and provide personalized guidance and
                        motivation.
                        This service can be especially beneficial for beginners or those with specific fitness needs or
                        goals.</p>
                    <a class="dis-btn-service" href="single-news.html" data-swiper-parallax="200">Discover
                        More<span></span></a>
                </div>
                <!-- end content-box -->
                <div class="content-box service-container wow fadeIn">
                    <figure><img src="{{ asset('web_assets/images/image02.jpg.webp') }}" alt="Image"></figure>
                    <h4>Group Fitness Classes</h4>
                    <p>Group fitness classes are a popular way for members to stay motivated and engaged while
                        exercising. These
                        classes can include a wide range of activities such as yoga, Pilates, spinning, Zumba, and more.
                        By
                        offering a variety of classes, sport clubs can appeal to members with different interests and
                        fitness
                        levels.</p>
                    <a class="dis-btn-service" href="single-news.html" data-swiper-parallax="200">Discover
                        More<span></span></a>

                </div>
                <!-- end content-box -->
                <div class="content-box service-container wow fadeIn">
                    <figure><img src="{{ asset('web_assets/images/image03.jpg') }}" alt="Image"></figure>
                    <h4>Sports Facilities</h4>
                    <p>For many members, access to high-quality sports facilities is a key reason for joining a sport
                        club.
                        These facilities can include swimming pools, tennis courts, basketball courts, soccer fields,
                        and more. By
                        providing top-notch facilities, sport clubs can attract members who are serious about their
                        sport and want
                        to train in a profession.</p>
                    <a class="dis-btn-service" href="single-news.html" data-swiper-parallax="200">Discover
                        More<span></span></a>

                </div>
                <!-- end content-box -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end image-content-box -->

<section class="latest-news">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeIn">
                <div class="section-title">
                    <h2>News and Events</h2>
                    <h6>As the seed falls to the ground, it floats <br>along air currents due to its wing</h6>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-12 -->

            <div class="col-12 blogs-data">
                <div class="content-box wow fadeIn">
                    <span>Business, Tips,
                        Account</span>
                    <img class="blog-main-img" src="{{ asset('web_assets/images/blog.jpg')}}" alt="" srcset="">
                    <h4>How to develope item for themeforest</h4>
                    <small>February 21,2018</small>
                    <p>Stop wasting time and money on technology</p>
                    <a href="#"><img src="{{ asset('web_assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
                </div>
                <!-- end content-box -->
                <div class="content-box wow fadeIn"> <span>Tips, Tech, Development</span>
                    <img class="blog-main-img" src="{{ asset('web_assets/images/blog2.jpg')}}" alt="" srcset="">
                    <h4>We asked some of the leading business women</h4>
                    <small>February 21,2018</small>
                    <p>The smaller mate cones release pollen</p>
                    <a href="#"><img src="{{ asset('web_assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
                </div>
                <!-- end content-box -->
                <div class="content-box wow fadeIn"> <span>Development, Strategy</span>
                    <img class="blog-main-img" src="{{ asset('web_assets/images/blog3.jpg')}}" alt="" srcset="">
                    <h4>How to develope item for our marketplace</h4>
                    <small>February 21,2018</small>
                    <p>Which fertilizes the femate cones’ ovula.</p>
                    <a href="#"><img src="{{ asset('web_assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
                </div>
                <!-- end content-box -->
                <div class="content-box wow fadeIn"> <span>Tech, Business, Parnership</span>
                    <img class="blog-main-img" src="{{ asset('web_assets/images/blog4.jpg')}}" alt="" srcset="">
                    <h4>Never underestimate the power of social media</h4>
                    <small>February 21,2018</small>
                    <p>After this pollen release, mate cones</p>
                    <a href="#"><img src="{{ asset('web_assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
                </div>
                <!-- end content-box -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end latest-news -->
<section class="info-box">
    <div class="container wow fadeIn">
        <h3>
            About Membership</h3>
        <h6>The pollinated femate cones remain attached to the branches?</h6>
        <p>The climate of coastal California and Oregon creates the ideal environment<br> for the trees a redwood
            tree
            needs </p>
        <img src="{{ asset('web_assets/images/team-sports.jpg')}}" alt="Image">
        <a href="#" class="join-us btn">Join Us<span> Now</span></a>
    </div>
</section>
<!-- end info-box -->
<section class="request-form">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 sponsers">
                <div class="logos wow fadeIn">

                    <ul class="row justify-content-between owl-carousel">
                        <li><img src="{{ asset('web_assets/images/logo01.png')}}" alt="Image"></li>
                        <li><img src="{{ asset('web_assets/images/logo02.png')}}" alt="Image"></li>
                        <li><img src="{{ asset('web_assets/images/logo03.png')}}" alt="Image"></li>
                        <li><img src="{{ asset('web_assets/images/logo04.png')}}" alt="Image"></li>
                        <li><img src="{{ asset('web_assets/images/logo05.png')}}" alt="Image"></li>
                        <li><img src="{{ asset('web_assets/images/logo06.png')}}" alt="Image"></li>
                        <li><img src="{{ asset('web_assets/images/logo07.png')}}" alt="Image"></li>
                        <li><img src="{{ asset('web_assets/images/logo08.png')}}" alt="Image"></li>
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
