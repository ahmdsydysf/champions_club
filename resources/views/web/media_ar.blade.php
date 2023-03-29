@extends('web.layout.app')

@section('content')
<section class="page-header">
    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ route('welcome') }}"> الصفحة الرئيسية </a> </li>

            <li class="breadcrumb-item active" aria-current="page"> ميديا</li>
        </ol>
        <h2> ميديا</h2>
        <p> بصفتك الشخص الذي يمتلك الحقوق القانونية للملكية الفكرية ، مؤلفًا. </p>
    </div>

</section>

<!-- end page-header -->
<section class="showcases">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeIn">
                <div class="section-title">
                    <h2> الوسائط </h2>
                    <h6> يسعدنا ان نقدم لكم مجموعة مميزة من الوسائط الخاصه بينا</h6>
                </div>

                <ol class="showcase-filter">
                    <li> <a href="javascript: void (0)؛" data-filter="*" class="current"> ALL </a> </li>
                    <li> <a href="javascript: void (0)؛" data-filter=". one"> الأعمال </a> </li>
                    <li> <a href="javascript: void (0)؛" data-filter=". two"> التنمية </a> </li>
                    <li> <a href="javascript: void (0)؛" data-filter=". three"> الاستراتيجية </a> </li>
                    <li> <a href="javascript: void (0)؛" data-filter=". four"> التدريب </a> </li>
                </ol>
            </div>

            <! - end col-12 ->
                <div class="col-12">
                    <ul class="masonry">
                        <li class="wow fadeIn one">
                            <figure> <a href="images/image01.jpg" data-fancybox> <img src="images/image01.jpg"
                                        alt="Image"> </a>
                                <figcaption>
                                    <h6> شركة ريدوود </h6>
                                    <small> تطوير الأعمال </small>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="wow fadeIn two">
                            <figure> <a href="images/slide01.jpg" data-fancybox> <img src="images/slide01.jpg"
                                        alt="Image"> </a>
                                <figcaption>
                                    <h6> شركة الجبل </h6>
                                    <small> تطوير الأعمال </small>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="double wow fadeIn three">
                            <figure> <a href="images/trophy-3.webp" data-fancybox> <img src="images/trophy-3.webp"
                                        alt="Image"> </a>
                                <figcaption>
                                    <h6> شركة POLLEN INC </h6>
                                    <small> تطوير الأعمال </small>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="double wow fadeIn four">
                            <figure> <a href="images/slide03.jpg" data-fancybox> <img src="images/slide03.jpg"
                                        alt="Image"> </a>
                                <figcaption>
                                    <h6> شركة SEEDS </h6>
                                    <small> تطوير الأعمال </small>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="double wow fadeIn one">
                            <figure> <a href="images/image15.jpg" data-fancybox> <img src="images/image15.jpg"
                                        alt="Image"> </a>
                                <figcaption>
                                    <h6> شركة SEEDS </h6>
                                    <small> تطوير الأعمال </small>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="double wow fadeIn two">
                            <figure> <a href="images/image14.jpg" data-fancybox> <img src="images/image14.jpg"
                                        alt="Image"> </a>
                                <figcaption>
                                    <h6> شركة POLLEN INC </h6>
                                    <small> تطوير الأعمال </small>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="wow fadeIn three">
                            <figure> <a href="images/image16.jpg" data-fancybox> <img src="images/image16.jpg"
                                        alt="Image"> </a>
                                <figcaption>
                                    <h6> شركة ريدوود </h6>
                                    <small> تطوير الأعمال </small>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="wow fadeIn four">
                            <figure> <a href="images/image17.jpg" data-fancybox> <img src="images/image17.jpg"
                                        alt="Image"> </a>
                                <figcaption>
                                    <h6> شركة الجبل </h6>
                                    <small> تطوير الأعمال </small>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="wow fadeIn phone">
                            <figure> <a href="images/image03.jpg" data-fancybox> <img src="images/image03.jpg"
                                        alt="Image"> </a>
                                <figcaption>
                                    <h6> شركة الجبل </h6>
                                    <small> تطوير الأعمال </small>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="double wow fadeIn two">
                            <figure> <a href="images/image19.jpg" data-fancybox> <img src="images/image19.jpg"
                                        alt="Image"> </a>
                                <figcaption>
                                    <h6> شركة SEEDS </h6>
                                    <small> تطوير الأعمال </small>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="wow fadeIn three">
                            <figure> <a href="images/trophy-5.jpg" data-fancybox> <img src="images/trophy-5.jpg"
                                        alt="Image"> </a>
                                <figcaption>
                                    <h6> شركة الجبل </h6>
                                    <small> تطوير الأعمال </small>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>

        </div>

    </div>

</section>
@endsection
