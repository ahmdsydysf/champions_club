@extends('web.layout.app')

@section('content')

<!-- end header -->
<section class="slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-inner bg-image" data-background="{{ asset('web_assets/images/slide01.jpg')}}"
                    data-text="كيف تهتم<span>بصحتك العضلية</span>">
                    <div class="container">
                        <h6 data-swiper-parallax="100">جـيم</h6>
                        <h2 data-swiper-parallax="200"><span>.</span>بناء الجسم</h2>
                        <p data-swiper-parallax="300">حتى التعريف الأكثر عمومية للجوهرة له العديد من الاستثناءات. تعلم
                            ماذا
                            تم استخدام الصفات لتحديد الأحجار الكريمة علميا وشعبيا.</p>
                        <div class="clearfix"></div>
                        <a href="#" data-swiper-parallax="200">اكتشف اكثر<span></span></a>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end slide-inner -->
            </div>
            <!-- end swiper-slide -->
            <div class="swiper-slide">
                <div class="slide-inner bg-image" data-background="{{ asset('web_assets/images/slide02.jpg')}}"
                    data-text="حمامات سباحة<span>معدات</span>">
                    <div class="container">
                        <h6 data-swiper-parallax="100">حوض سباحة</h6>
                        <h2 data-swiper-parallax="200"><span>.</span>حمامات أولمبية</h2>
                        <p data-swiper-parallax="300">مع كل المضايقات المصاحبة لها وبالطبع التأمين
                            ارتفاع معدلات. مع كل هذه الأشياء التي تدور في ذهنك بعد وقوع حادث.</p>
                        <div class="clearfix"></div>
                        <a href="#" data-swiper-parallax="200">اكتشف اكثر<span></span></a>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end slide-inner -->
            </div>
            <!-- end swiper-slide -->
            <div class="swiper-slide">
                <div class="slide-inner bg-image" data-background="{{ asset('web_assets/images/slide03.jpg')}}"
                    data-text="كن مثل <span>محمد صلاح</span>">
                    <div class="container">
                        <h6 data-swiper-parallax="100">كرة قدم</h6>
                        <h2 data-swiper-parallax="200"><span>.</span>اكاديمية متخصصة</h2>
                        <p data-swiper-parallax="300">قد يكون من الصعب ترتيب كل شيء. يمكنك اتخاذ عدة خطوات
                            لضمان السلامة وتقليل الخسائر المحتملة بعد وقوع حادث.</p>
                        <div class="clearfix"></div>
                        <a href="#" data-swiper-parallax="200">اكتشف اكثر<span></span></a>
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
                <h3>تمرين شخصي</h3>
                <p>تقدم العديد من النوادي الرياضية جلسات تدريب شخصية فردية مع مدربين معتمدين يمكنهم مساعدة الأعضاء
                    تطوير خطط تمرين شخصية </p>
                <a href="#"><img src="{{ asset('web_assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
            </div>
            <!-- end content-box -->
            <div class="content-box wow fadeIn"> <span></span>
                <h3>فصول لياقة جماعية</h3>
                <p>تعتبر فصول اللياقة الجماعية طريقة شائعة للأعضاء للبقاء متحفزين ومشاركين أثناء ممارسة الرياضة</p>
                <a href="#"><img src="{{ asset('web_assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
            </div>
            <!-- end content-box -->
            <div class="content-box wow fadeIn"> <span></span>
                <h3>المنشآت الرياضية</h3>
                <p>بالنسبة للعديد من الأعضاء ، يعد الوصول إلى المرافق الرياضية عالية الجودة سببًا رئيسيًا للانضمام إلى
                    النادي
                    الرياضي. هؤلاء
                    يمكن أن تشمل المرافق حمامات السباحة وملاعب التنس وملاعب كرة السلة وملاعب كرة القدم والمزيد</p>
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
        <a href="{{ asset('web_assets/videos/video.mp4')}}" class="play-btn" data-fancybox>
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
                <h2>تعرف علينا</h2>
                <h6>من أهم مميزات النادي الرياضي هذه النقطة وخصوصاً إذا ما كنت مبتدئ في ممارسة التمارين فتحتاج إلى
                    ممارسة
                    التمارين بطريقة صحيحة . بإمكانك البحث على الإنترنت عن فيديوهات تختص بالرياضة ولكنك تحتاج للتوجيه
                    للقيام
                    بالتمارين بشكل صحيح . فأدائك للتمرين داخل النادي الرياضي يضمن سلامة أدائك للتمارين الرياضة بالشكل
                    الصحيح
                    لوجود مدربين و أخصائيين تغذية وأجهزة حديثة </h6>
            </div>
            <!-- end section-title -->
            <ul class="counter">
                <li> <span class="odometer" id="1"></span><span class="symbol">+</span> <small>عضو جديد</small> </li>
                <li> <span class="odometer" id="2"></span><span class="symbol">k</span> <small>أعضاء</small> </li>
                <li> <span class="odometer" id="3"></span><span class="symbol">%</span> <small>الرضاء</small> </li>
            </ul>
            <p>إذا كنت لا تستخدم بنشاط <strong> Facebook </strong> و <strong> Twitter </strong> ووسائل التواصل الاجتماعي
                الأخرى
                المنصات ، خذ الوقت الكافي للقيام بذلك. اعتد على تحديث صفحة عملك أو <u> التغريدات </u> في
                نفس الوقت كل يوم. </p>
            <p> استفد من <u> البرنامج </u> الذي يمكن أن يساعد في تحويل مدوناتك إلى تغريدات ومعرفة الوقت المناسب
                من اليوم هو التواصل مع قاعدتك.</p>

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
                    <h2>الرياضات</h2>
                    <h6>كما يلزمك تمارين رياضية لتقوية عضلاتك تحتاج أيضا إلى غذاء يتناسب مع طبيعة هذه التمارين. لذلك
                        يتواجد أفضل
                        خبراء التغذية لتقديم النصائح التي تهمك وعمل جدول غذائي خاص بك وتقديم كل ما يلزم لتحصل على الغذاء
                        المناسب
                        من بروتين وألياف وأغذية أخرى بشكل متوازن. هذا الأمر يعتبر من احدى مميزات النادي الرياضي.

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
                                    <h4>كرة قدم</h4>
                                    <small>استشارات الأعمال</small>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end swiper-slide -->
                        <div class="swiper-slide">
                            <figure> <img src="{{ asset('web_assets/images/image05.jpg')}}" alt="Image">
                                <figcaption>
                                    <h4>تنس</h4>
                                    <small>استشارات التنمية</small>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end swiper-slide -->
                        <div class="swiper-slide">
                            <figure> <img src="{{ asset('web_assets/images/image06.jpg')}}" alt="Image">
                                <figcaption>
                                    <h4>سباحة</h4>
                                    <small>استشارة تدريبية</small>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end swiper-slide -->
                        <div class="swiper-slide">
                            <figure> <img src="{{ asset('web_assets/images/image07.jpg')}}" alt="Image">
                                <figcaption>
                                    <h4>كرة سلة</h4>
                                    <small>استشارات محاسبية</small>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end swiper-slide -->
                        <div class="swiper-slide">
                            <figure> <img src="{{ asset('web_assets/images/image08.jpg')}}" alt="Image">
                                <figcaption>
                                    <h4>بناء الجسم</h4>
                                    <small>استشارات التحفيز</small>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end swiper-slide -->
                        <div class="swiper-slide">
                            <figure> <img src="{{ asset('web_assets/images/image09.jpg')}}" alt="Image">
                                <figcaption>
                                    <h4>كرة يد</h4>
                                    <small>استشارات الأعمال</small>
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
                    <h2>الكؤوس والإنجازات</h2>
                    <h6>يجب أن تحاول على الأقل حماية <br> موقع الحادث مهما أمكنك ذلك.</h6>
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
                                            <h4>كأس التنس</h4>
                                            <p>بدلاً من الاستسلام فورًا ، لا داعي للعودة إلى الرسم. عليا العمل اكثر
                                                لتحقيق بطولات اكثر
                                                واستمرار النجاح</p>
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
                                            <h4>كأس كرة القدم</h4>
                                            <p>بدلاً من الاستسلام فورًا ، لا داعي للعودة إلى الرسم. عليا العمل اكثر
                                                لتحقيق بطولات اكثر
                                                واستمرار النجاح</p>
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
                                                    alt="Image">
                                            </figure>
                                        </div>
                                        <!-- end inner -->
                                    </div>
                                    <!-- end flip-box-front -->
                                    <div class="flip-box-back">
                                        <div class="inner">
                                            <h4>كأس كرة اليد</h4>
                                            <p>بدلاً من الاستسلام فورًا ، لا داعي للعودة إلى الرسم. عليا العمل اكثر
                                                لتحقيق بطولات اكثر
                                                واستمرار النجاح</p>
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
                                            <h4>كأس السباحة</h4>
                                            <p>بدلاً من الاستسلام فورًا ، لا داعي للعودة إلى الرسم. عليا العمل اكثر
                                                لتحقيق بطولات اكثر
                                                واستمرار النجاح</p>
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
                                            <h4>المركز الاول</h4>
                                            <p>بدلاً من الاستسلام فورًا ، لا داعي للعودة إلى الرسم. عليا العمل اكثر
                                                لتحقيق بطولات اكثر
                                                واستمرار النجاح</p>
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
                    <a href="allnews-ar.html">
                        <h2>خدمـــاتنا</h2>
                        <h6 style="color: white;">من مميزات النادي الرياضي فكرة النادي الرياضي تتعدى فكرة لعب الرياضة
                            فقط، بل في
                            النادي تزيد معرفتك في
                            الناس وتتعرف على أشخاص آخرين وتكوين صداقات جديدة تعزز من حياتك الاجتماعية </h6>
                    </a>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-12 -->
            <div class="col-12 owl-carousel">
                <div class="content-box wow fadeIn">
                    <figure><img src="{{ asset('web_assets/images/image01.jpg') }}" alt="Image"></figure>
                    <h4>تدريبات خاصة</h4>
                    <p>يعد التدريب الشخصي خدمة رائعة لتقديمها لأنها تتيح للأعضاء العمل بشكل فردي مع اللياقة البدنية
                        محترف يمكنه أولئك الذين لديهم احتياجات أو أولئك الذين لديهم احتياجات أو إنشاء خطط تمرين مخصصة
                        وتقديم
                        التوجيه والتحفيز الشخصي.
                        يمكن أن تكون هذه الخدمة مفيدة بشكل خاص للمبتدئين أو أولئك الذين لديهم احتياجات أو أهداف لياقة
                        معينة.</p>
                    <a class="dis-btn-service" href="single-news-ar.html" data-swiper-parallax="200">تعرف
                        اكثر<span></span></a>
                </div>
                <!-- end content-box -->
                <div class="content-box wow fadeIn">
                    <figure><img src="{{ asset('web_assets/images/image02.jpg.webp') }}" alt="Image"></figure>
                    <h4>فصول لياقة جماعية</h4>
                    <p>تعتبر فصول اللياقة الجماعية طريقة شائعة للأعضاء للبقاء متحفزين ومشاركين أثناء ممارسة الرياضة.
                        هؤلاء
                        يمكن أن تشمل الفصول الدراسية مجموعة واسعة من الأنشطة مثل اليوجا والبيلاتس والغزل والزومبا
                        والمزيد. بواسطة
                        تقدم الأندية الرياضية مجموعة متنوعة من الفصول ، ويمكن أن تروق للأعضاء ذوي الاهتمامات واللياقة
                        البدنية
                        ا</p>
                    <a class="dis-btn-service" href="single-news-ar.html" data-swiper-parallax="200">تعرف
                        اكثر<span></span></a>

                </div>
                <!-- end content-box -->
                <div class="content-box wow fadeIn">
                    <figure><img src="{{ asset('web_assets/images/image03.jpg') }}" alt="Image"></figure>
                    <h4>المنشآت الرياضية</h4>
                    <p>بالنسبة للعديد من الأعضاء ، يعد الوصول إلى المرافق الرياضية عالية الجودة سببًا رئيسيًا للانضمام
                        إلى نادٍ
                        رياضي.
                        يمكن أن تشمل هذه المرافق حمامات السباحة وملاعب التنس وملاعب كرة السلة وملاعب كرة القدم والمزيد.
                        بواسطة
                        من خلال توفير مرافق من الدرجة الأولى ، يمكن للأندية الرياضية جذب الأعضاء الجادين بشأن رياضتهم
                        والذين
                        يرغبون في ذلك
                        للتدريب في بيئة مهنية.</p>
                    <a class="dis-btn-service" href="single-news-ar.html" data-swiper-parallax="200">تعرف
                        اكثر<span></span></a>

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
                    <h2>مدوناتنا</h2>
                    <h6>عندما تسقط البذرة على الأرض ، تطفو على طول التيارات الهوائية بسبب جناحها</h6>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-12 -->

            <div class="col-12 blogs-data">
                <div class="content-box wow fadeIn">
                    <span>الأعمال ، نصائح ،
                        حساب</span>
                    <img class="blog-main-img" src="{{ asset('web_assets/images/blog.jpg')}}" alt="" srcset="">
                    <h4>كيفية تطوير عنصر للغابات</h4>
                    <small>21 فبراير 2018</small>
                    <p>توقف عن إضاعة الوقت والمال على التكنولوجيا</p>
                    <a href="#"><img src="{{ asset('web_assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
                </div>
                <!-- end content-box -->
                <div class="content-box wow fadeIn"> <span>نصائح ، تقنية ، تطوير</span>
                    <img class="blog-main-img" src="{{ asset('web_assets/images/blog2.jpg')}}" alt="" srcset="">
                    <h4>سألنا بعض سيدات الأعمال الرائدات</h4>
                    <small>21 فبراير 2018</small>
                    <p>المخاريط الذكور الأصغر تطلق حبوب اللقاح</p>
                    <a href="#"><img src="{{ asset('web_assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
                </div>
                <!-- end content-box -->
                <div class="content-box wow fadeIn"> <span>استراتيجية التنمية</span>
                    <img class="blog-main-img" src="{{ asset('web_assets/images/blog3.jpg')}}" alt="" srcset="">
                    <h4>كيفية تطوير عنصر لسوقنا</h4>
                    <small>21 فبراير 2018</small>
                    <p>لدينا استراتيجيات قوية ومحللين اداء ومستوي علي اعلي الامكانيات</p>
                    <a href="#"><img src="{{ asset('web_assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
                </div>
                <!-- end content-box -->
                <div class="content-box wow fadeIn"> <span>التكنولوجيا ، والأعمال التجارية ، والشراكة</span>
                    <img class="blog-main-img" src="{{ asset('web_assets/images/blog4.jpg')}}" alt="" srcset="">
                    <h4>لا تقلل أبدًا من قوة وسائل التواصل الاجتماعي</h4>
                    <small>21 فبراير 2018</small>
                    <p>دائما علي تواصل مباشر ومتاحينا علطول</p>
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
            عن العضوية</h3>
        <h6>لنتعرف علي اهم المميزات في الاشتراكات معانا</h6>
        <p>ويرجع السبب في ذلك عدم وجود دافع للالتزام و الكسل، و لتخلص من هذا الأمر يأتي دور مميزات النادي الرياضي حيث
            يعطيك الشعور بالالتزام وتنظيم وقتك. فتكون أيام التمرين بمعدل ستة أو خمسة أيام في الأسبوع،</p>
        <img src="{{ asset('web_assets/images/team-sports.jpg')}}" alt="Image">
        <a href="#" class="join-us btn">اشترك معـــنا<span> الان</span></a>
    </div>
</section>
<!-- end info-box -->
<section class="request-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 wow fadeIn">
                <div class="section-title light">
                    <h2>الرعاة</h2>
                    <h6>وفقًا لشركة Statista ، بلغت قيمة سوق الرعاية الرياضية العالمية 57 مليار دولار في عام 2020 وهي
                        كذلك
                        من المتوقع أن يرتفع إلى 90 مليار دولار أمريكي بحلول عام 2027. ويتم إنشاء أكثر من ثلث هذا المبلغ
                        في أمريكا
                        الشمالية
                        كميات</h6>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-5 -->

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
