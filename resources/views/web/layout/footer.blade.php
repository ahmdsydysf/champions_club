@if (LaravelLocalization::getCurrentLocale() == 'en')
<footer class="footer">
    <div class="contact-wrapper">
        <div class="container">
            <div class="content-box wow fadeIn"> <img src="{{ asset('web_assets/images/footer-icon01.png')}}"
                    alt="Image">
                <h3>Address Info</h3>
                <p>Sky Center Bldg. 28 Mourad St., 2nd Floor, Apt. 209 - Egypt</p>
            </div>
            <!-- end content-box -->
            <div class="content-box wow fadeIn"> <img src="{{ asset('web_assets/images/footer-icon02.png')}}"
                    alt="Image">
                <h3>working hours</h3>
                <p>Monday to Friday 09:00 to 18:30 and Saturday we work until 15:30</p>
            </div>
            <!-- end content-box -->
            <div class="content-box wow fadeIn"> <img src="{{ asset('web_assets/images/footer-icon03.png')}}"
                    alt="Image">
                <h3>support center</h3>
                <p>Champion's call-center is your trusted call service that you can <a href="#">call</a> or <a
                        href="#">e-mail</a> us anytime
                </p>
            </div>
            <!-- end content-box -->
        </div>
        <!-- end container -->
    </div>
    <!-- end contact-wrapper -->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 wow fadeIn"> <img src="{{ asset('web_assets/images/logo-w.png')}}" alt="Image"
                        class="logo">
                    <p>Our sport club is more than just a place to work out - it's a community that inspires,
                        motivates, and
                        empowers its members to be their best selves.</p>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-2 col-md-6 wow fadeIn">
                    <ul class="footer-menu">
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="{{ url('/sport/1') }}">Sports</a></li>
                        <li><a href="{{ route('allNews') }}">News and Events</a></li>
                        <li><a href="{{ route('media') }}">Media</a></li>
                        <li><a href="{{ route('contact') }}">Contact us</a></li>
                    </ul>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-2 col-md-6 wow fadeIn">
                    <ul class="footer-menu">
                        @foreach ($sports as $sport)
                        <li><a href="{{ url('/sport/' . $sport->id) }}">{{ $sport->sport_title_en }}</a></li>
                        @endforeach

                    </ul>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-4 wow fadeIn">
                    <div class="contact-box">
                        <h5>CALL US</h5>
                        <h3>+0201231231255</h3>
                        <p>E-mail <a href="#">info@example.com</a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                    <!-- end contact-box -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end content-wrapper -->
    <div class="sub-footer wow fadeIn">
        <div class="container"> <span class="copyright">© for us as programmers and developers </span> <span
                class="creation">Site created by <a href="#">our design</a></span> </div>
        <!-- end container -->
    </div>
    <!-- end sub-footer -->
</footer>
<!-- end footer -->
@else
<footer class="footer">
    <div class="contact-wrapper">
        <div class="container">
            <div class="content-box wow fadeIn"> <img src="{{ asset('web_assets/images/footer-icon01.png')}}"
                    alt="Image">
                <h3>العنـــــوان</h3>
                <p>مبنى سكاي سنتر. 28 شارع مراد ، الطابق الثاني ، شقة. 209- مصر</p>
            </div>
            <!-- end content-box -->
            <div class="content-box wow fadeIn"> <img src="{{ asset('web_assets/images/footer-icon02.png')}}"
                    alt="Image">
                <h3>مواعيد العمل</h3>
                <p>من الاثنين إلى الجمعة ، من الساعة 9 صباحًا حتى الساعة 18:30 مساءً ، والسبت حتى الساعة 15:30</p>
            </div>
            <!-- end content-box -->
            <div class="content-box wow fadeIn"> <img src="{{ asset('web_assets/images/footer-icon03.png')}}"
                    alt="Image">
                <h3>مركز الدعم</h3>
                <p>مركز اتصال Champion هو خدمة مكالمات موثوقة يمكنك <a href="#"> الاتصال بها </a> أو <a href="#"> أرسل
                        لنا
                    </a> بريدًا إلكترونيًا في أي وقت
                </p>
            </div>
            <!-- end content-box -->
        </div>
        <!-- end container -->
    </div>
    <!-- end contact-wrapper -->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 wow fadeIn"> <img src="{{ asset('web_assets/images/logo-w.png')}}" alt="Image"
                        class="logo">
                    <p>نادينا الرياضي هو أكثر من مجرد مكان للتمرين - إنه مجتمع يلهم ، ويحفز ، و
                        تمكن أعضائها من أن يكونوا أفضل ما لديهم.</p>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-2 col-md-6 wow fadeIn">
                    <ul class="footer-menu">
                        <li><a <a href="{{ route('welcome')}}">الرئيسية</a></li>
                        <li><a <a href="{{ url('/sport/1') }}">الرياضات</a></li>
                        <li><a <a href="{{ route('allNews')}}">أخبار وأحداث</a></li>
                        <li><a <a href="{{ route('media') }}">ميديا</a></li>
                        <li><a <a href="{{ route('contact')}}">تواصل معنا</a></li>
                    </ul>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-2 col-md-6 wow fadeIn">
                    <ul class="footer-menu">
                        @foreach ($sports as $sport)
                        <li><a href="{{ url('/sport/' . $sport->id) }}">{{ $sport->sport_title_ar }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-4 wow fadeIn">
                    <div class="contact-box">
                        <h5>اتصل بنا</h5>
                        <h3>+0201231231255</h3>
                        <p>البريد <a href="#">info@example.com</a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                    <!-- end contact-box -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end content-wrapper -->
    <div class="sub-footer wow fadeIn">
        <div class="container"> <span class="copyright">© بالنسبة لنا كمبرمجين ومطورين </ span> <span class="create">
                    موقع
                    تم إنشاؤه بواسطة <a href="#"> تصميمنا </a> </span> </div>
        <!-- end container -->
    </div>
    <!-- end sub-footer -->
</footer>
<!-- end footer -->
@endif


<a href="#" class="scrollup"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>

<!-- JS FILES -->
<script src="{{ asset('web_assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('web_assets/js/popper.min.js') }}"></script>
<script src="{{ asset('web_assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('web_assets/js/fancybox.min.js') }}"></script>
<script src="{{ asset('web_assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('web_assets/js/timeline.js') }}"></script>
<script src="{{ asset('web_assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('web_assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('web_assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('web_assets/js/wow.min.js') }}"></script>
<script src="{{ asset('web_assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('web_assets/js/scripts.js') }}"></script>

@yield('custom_js')
</body>

</html>