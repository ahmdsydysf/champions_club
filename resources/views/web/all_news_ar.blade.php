@extends('web.layout.app')

@section('content')

<section class="page-header">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ route('welcome') }}"> الصفحة الرئيسية </a> </li>
            <li class="breadcrumb-item active" aria-current="page"> أخبار </li>
        </ol>
        <h2> أخبار </h2>
        <p> بصفتك الشخص الذي يمتلك الحقوق القانونية للملكية الفكرية ، مؤلفًا. </p>
    </div>

</section>

<section class="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-12">
                <div class="post wow fadeIn">
                    <figure class="post-image"> <img src="{{ asset('web_assets/images/news01.jpg') }}" alt="صورة">
                    </figure>
                    <div class="post-content">
                        <span> النادي الإخباري الرياضي 1 </span>
                        <h4> كيف تطور الرياضة معنا </h4>
                        <small> 21 فبراير ، 2018 </small>
                        <p> المعترف به قانونيًا باعتباره الشخص الوحيد المخول له نسخ أعماله أو منح الإذن بذلك
                            الآخرين الذين يريدون نسخه لأغراض مختلفة. في أي حال ، يمكن أن يكون الجانب القانوني لحقوق
                            التأليف
                            والنشر
                            معقدة ، </p>
                        <a href="news-single.html"> <img src="{{ asset('web_assets/images/icon-right-arrow.svg') }}"
                                alt="Image"> </a>
                    </div>

                </div>

                <div class="post wow fadeIn">
                    <figure class="post-image"> <img src="{{ asset('web_assets/images/news02.jpg') }}" alt="صورة">
                    </figure>
                    <div class="post-content">
                        <span> النادي الإخباري الرياضي 2 </span>
                        <h4> كيف تطور الرياضة معنا </h4>
                        <small> 21 فبراير ، 2018 </small>
                        <p> المعترف به قانونيًا باعتباره الشخص الوحيد المخول له نسخ أعماله أو منح الإذن بذلك
                            الآخرين الذين يريدون نسخه لأغراض مختلفة. في أي حال ، يمكن أن يكون الجانب القانوني لحقوق
                            التأليف
                            والنشر
                            معقدة ، </p>
                        <a href="news-single.html"> <img src="{{ asset('web_assets/images/icon-right-arrow.svg') }}"
                                alt="Image"> </a>
                    </div>

                </div>

                <div class="post wow fadeIn">
                    <figure class="post-image"> <img src="{{ asset('web_assets/images/news03.jpg') }}" alt="صورة">
                    </figure>
                    <div class="post-content">
                        <span> النادي الإخباري الرياضي 3 </span>
                        <h4> كيف تطور الرياضة معنا </h4>
                        <small> 21 فبراير ، 2018 </small>
                        <p> المعترف به قانونيًا باعتباره الشخص الوحيد المخول له نسخ أعماله أو منح الإذن بذلك
                            الآخرين الذين يريدون نسخه لأغراض مختلفة. في أي حال ، يمكن أن يكون الجانب القانوني لحقوق
                            التأليف والنشر
                            معقدة ، </p>
                        <a href="news-single.html"> <img src="{{ asset('web_assets/images/icon-right-arrow.svg') }}"
                                alt="Image"> </a>
                    </div>

                </div>

                <div class="post wow fadeIn">
                    <figure class="post-image"> <img src="{{ asset('web_assets/images/news04.jpg') }}" alt="صورة">
                    </figure>
                    <div class="post-content">
                        <span> النادي الإخباري الرياضي 4 </span>
                        <h4> كيف تطور الرياضة معنا </h4>
                        <small> 21 فبراير ، 2018 </small>
                        <p> المعترف به قانونيًا باعتباره الشخص الوحيد المخول له نسخ أعماله أو منح الإذن بذلك
                            الآخرين الذين يريدون نسخه لأغراض مختلفة. في أي حال ، يمكن أن يكون الجانب القانوني لحقوق
                            التأليف والنشر
                            معقدة ، </p>
                        <a href="news-single.html"> <img src="{{ asset('web_assets/images/icon-right-arrow.svg') }}"
                                alt="Image"> </a>
                    </div>

                </div>

                <div class="post wow fadeIn">
                    <figure class="post-image"> <img src="{{ asset('web_assets/images/news05.jpg') }}" alt="صورة">
                    </figure>
                    <div class="post-content">
                        <span> النادي الإخباري الرياضي 5 </span>
                        <h4> كيف تطور الرياضة معنا </h4>
                        <small> 21 فبراير ، 2018 </small>
                        <p> المعترف به قانونيًا باعتباره الشخص الوحيد المخول له نسخ أعماله أو منح الإذن بذلك
                            الآخرين الذين يريدون نسخه لأغراض مختلفة. في أي حال ، يمكن أن يكون الجانب القانوني لحقوق
                            التأليف والنشر
                            معقدة ، </p>
                        <a href="news-single.html"> <img src="{{ asset('web_assets/images/icon-right-arrow.svg') }}"
                                alt="Image"> </a>
                    </div>

                </div>

                <ul class="pagination wow fadeIn">
                    <li class="page-item">
                        <a class="page-link" href="#" tabindex="-1"> السابق </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> التالي </a>
                    </li>
                </ul>
            </div>

        </div>

    </div>

</section>






@endsection
