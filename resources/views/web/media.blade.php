@extends('web.layout.app')

@section('content')
<section class="page-header">
    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>

            <li class="breadcrumb-item active" aria-current="page">Media</li>
        </ol>
        <h2>Media</h2>
        <p>As the person who owns the legal rights to intellectual property, an author.</p>
    </div>
    <!-- end container -->
</section>
<!-- end page-header -->
<section class="showcases">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeIn">
                <div class="section-title">
                    <h2>Media</h2>
                    <h6>The smaller male cones release pollen, <br>which fertilizes the female </h6>
                </div>
                <!-- end section-title -->
                <ol class="showcase-filter">
                    <li><a href="javascript:void(0);" data-filter="*" class="current">ALL</a></li>
                    <li><a href="javascript:void(0);" data-filter=".one">BUSINESS</a></li>
                    <li><a href="javascript:void(0);" data-filter=".two">DEVELOPMENT</a></li>
                    <li><a href="javascript:void(0);" data-filter=".three">STRATEGY</a></li>
                    <li><a href="javascript:void(0);" data-filter=".four">TRAINING</a></li>
                </ol>
            </div>

            <!-- end col-12 -->
            <div class="col-12">
                <ul class="masonry">
                    <li class="wow fadeIn one">
                        <figure><a href="images/image01.jpg') }}" data-fancybox><img
                                    src="{{ asset('web_assets/images/image01.jpg') }}" alt="Image"></a>
                            <figcaption>
                                <h6>REDWOOD INC</h6>
                                <small>Business Development</small>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="wow fadeIn two">
                        <figure><a href="images/slide01.jpg') }}" data-fancybox><img
                                    src="{{ asset('web_assets/images/slide01.jpg') }}" alt="Image"></a>
                            <figcaption>
                                <h6>MOUNTAIN INC</h6>
                                <small>Business Development</small>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="double wow fadeIn three">
                        <figure><a href="images/trophy-3.webp" data-fancybox><img
                                    src="{{ asset('web_assets/images/trophy-3.webp" alt="Image"></a>
                            <figcaption>
                                <h6>POLLEN INC</h6>
                                <small>Business Development</small>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="double wow fadeIn four">
                        <figure><a href="images/slide03.jpg') }}" data-fancybox><img
                                    src="{{ asset('web_assets/images/slide03.jpg') }}" alt="Image"></a>
                            <figcaption>
                                <h6>SEEDS INC</h6>
                                <small>Business Development</small>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="double wow fadeIn one">
                        <figure><a href="images/image15.jpg') }}" data-fancybox><img
                                    src="{{ asset('web_assets/images/image15.jpg') }}" alt="Image"></a>
                            <figcaption>
                                <h6>SEEDS INC</h6>
                                <small>Business Development</small>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="double wow fadeIn two">
                        <figure><a href="images/image14.jpg') }}" data-fancybox><img
                                    src="{{ asset('web_assets/images/image14.jpg') }}" alt="Image"></a>
                            <figcaption>
                                <h6>POLLEN INC</h6>
                                <small>Business Development</small>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="wow fadeIn three">
                        <figure><a href="images/image16.jpg') }}" data-fancybox><img
                                    src="{{ asset('web_assets/images/image16.jpg') }}" alt="Image"></a>
                            <figcaption>
                                <h6>REDWOOD INC</h6>
                                <small>Business Development</small>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="wow fadeIn four">
                        <figure><a href="images/image17.jpg') }}" data-fancybox><img
                                    src="{{ asset('web_assets/images/image17.jpg') }}" alt="Image"></a>
                            <figcaption>
                                <h6>MOUNTAIN INC</h6>
                                <small>Business Development</small>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="wow fadeIn phone">
                        <figure><a href="images/image03.jpg') }}" data-fancybox><img
                                    src="{{ asset('web_assets/images/image03.jpg') }}" alt="Image"></a>
                            <figcaption>
                                <h6>MOUNTAIN INC</h6>
                                <small>Business Development</small>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="double wow fadeIn two">
                        <figure><a href="images/image19.jpg') }}" data-fancybox><img
                                    src="{{ asset('web_assets/images/image19.jpg') }}" alt="Image"></a>
                            <figcaption>
                                <h6>SEEDS INC</h6>
                                <small>Business Development</small>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="wow fadeIn three">
                        <figure><a href="images/trophy-5.jpg') }}" data-fancybox><img
                                    src="{{ asset('web_assets/images/trophy-5.jpg') }}" alt="Image"></a>
                            <figcaption>
                                <h6>MOUNTAIN INC</h6>
                                <small>Business Development</small>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end showcases -->

@endsection
