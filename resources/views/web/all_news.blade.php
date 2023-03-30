@extends('web.layout.app')

@section('content')

<section class="page-header">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">News</li>
        </ol>
        <h2>NEWS</h2>
        <p>As the person who owns the legal rights to intellectual property, an author.</p>
    </div>
    <!-- end container -->
</section>
<!-- end page-header -->
<section class="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-12">
                <div class="post wow fadeIn">
                    <figure class="post-image"> <img src="{{ asset('web_assets/images/news01.jpg') }}" alt="Image">
                    </figure>
                    <div class="post-content">
                        <span>news sport club 1</span>
                        <h4>How to develope sport with us</h4>
                        <small>February 21,2018</small>
                        <p>Legally recognized as the only person who is authorized to copy their work, or grant
                            permission to
                            others who want to copy it for various purposes. In any case, the legal side of copyrights
                            can be
                            complex,</p>
                        <a href="{{ route('singleNews') }}"><img
                                src="{{ asset('web_assets/images/icon-right-arrow.svg') }}" alt="Image"></a>
                    </div>
                    <!-- end post-content -->
                </div>
                <!-- end post -->
                <div class="post wow fadeIn">
                    <figure class="post-image"> <img src="{{ asset('web_assets/images/news02.jpg') }}" alt="Image">
                    </figure>
                    <div class="post-content">
                        <span>news sport club 2</span>
                        <h4>How to develope sport with us</h4>
                        <small>February 21,2018</small>
                        <p>Legally recognized as the only person who is authorized to copy their work, or grant
                            permission to
                            others who want to copy it for various purposes. In any case, the legal side of copyrights
                            can be
                            complex,</p>
                        <a href="{{ route('singleNews') }}"><img
                                src="{{ asset('web_assets/images/icon-right-arrow.svg') }}" alt="Image"></a>
                    </div>
                    <!-- end post-content -->
                </div>
                <!-- end post -->
                <div class="post wow fadeIn">
                    <figure class="post-image"> <img src="{{ asset('web_assets/images/news03.jpg') }}" alt="Image">
                    </figure>
                    <div class="post-content">
                        <span>news sport club 3</span>
                        <h4>How to develope sport with us</h4>
                        <small>February 21,2018</small>
                        <p>Legally recognized as the only person who is authorized to copy their work, or grant
                            permission to
                            others who want to copy it for various purposes. In any case, the legal side of copyrights
                            can be
                            complex,</p>
                        <a href="{{ route('singleNews') }}"><img
                                src="{{ asset('web_assets/images/icon-right-arrow.svg') }}" alt="Image"></a>
                    </div>
                    <!-- end post-content -->
                </div>
                <!-- end post -->
                <div class="post wow fadeIn">
                    <figure class="post-image"> <img src="{{ asset('web_assets/images/news04.jpg') }}" alt="Image">
                    </figure>
                    <div class="post-content">
                        <span>news sport club 4</span>
                        <h4>How to develope sport with us</h4>
                        <small>February 21,2018</small>
                        <p>Legally recognized as the only person who is authorized to copy their work, or grant
                            permission to
                            others who want to copy it for various purposes. In any case, the legal side of copyrights
                            can be
                            complex,</p>
                        <a href="{{ route('singleNews') }}"><img
                                src="{{ asset('web_assets/images/icon-right-arrow.svg') }}" alt="Image"></a>
                    </div>
                    <!-- end post-content -->
                </div>
                <!-- end post -->
                <div class="post wow fadeIn">
                    <figure class="post-image"> <img src="{{ asset('web_assets/images/news05.jpg') }}" alt="Image">
                    </figure>
                    <div class="post-content">
                        <span>news sport club 5</span>
                        <h4>How to develope sport with us</h4>
                        <small>February 21,2018</small>
                        <p>Legally recognized as the only person who is authorized to copy their work, or grant
                            permission to
                            others who want to copy it for various purposes. In any case, the legal side of copyrights
                            can be
                            complex,</p>
                        <a href="{{ route('singleNews') }}"><img
                                src="{{ asset('web_assets/images/icon-right-arrow.svg') }}" alt="Image"></a>
                    </div>
                    <!-- end post-content -->
                </div>
                <!-- end post -->
                <ul class="pagination wow fadeIn">
                    <li class="page-item">
                        <a class="page-link" href="#" tabindex="-1">PREV</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">NEXT</a>
                    </li>
                </ul>
            </div>
            <!-- end col-8 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end blog -->



@endsection