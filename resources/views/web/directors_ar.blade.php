@extends('web.layout.app')

@section('content')
<!-- end header -->
<section class="page-header">
    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ route('welcome') }}"> الصفحة الرئيسية </a> </li>

            <li class="breadcrumb-item active" aria-current="page"> اعضاء مجلس الادارة</li>
        </ol>
        <h2> اعضاء مجلس الادارة</h2>
        <p> بصفتك الشخص الذي يمتلك الحقوق القانونية للملكية الفكرية ، مؤلفًا. </p>
    </div>

</section>

<section class="team-members">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeIn">
                <div class="section-title">
                    <h2> مجلس الإدارة </h2>
                    <h6> عندما تصل البذور إلى مرحلة النضج ، تنفتح أجزاء <br> المخروط وتتحرر </h6>
                </div>

            </div>

        </div>

    </div>

    <div class="content-wrapper">
        <figure class="member wow fadeIn"> <img src="{{ asset('web_assets/images/team01.jpg') }}" alt="Image"
                class="fist-image"> <img src="{{ asset('web_assets/images/team01h.jpg') }}" alt="صورة"
                class="second-image">
            <figcaption>
                <h5> أحمد الجندي </h5>
                <small> الرئيس التنفيذي وعضو مجلس الإدارة الممتاز </small>
                <ul>
                    <li> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-linkedin"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-google-plus"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-youtube-play"> </i> </a> </li>
                </ul>
            </figcaption>
        </figure>

        <figure class="member wow fadeIn"> <img src="{{ asset('web_assets/images/team02.jpg') }}" alt="Image"
                class="fist-image"> <img src="{{ asset('web_assets/images/team02h.jpg') }}" alt="Image"
                class="second-image">
            <figcaption>
                <h5> أحمد الجندي </h5>
                <small> الرئيس التنفيذي وعضو مجلس الإدارة الممتاز </small>
                <ul>
                    <li> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-linkedin"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-google-plus"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-youtube-play"> </i> </a> </li>
                </ul>
            </figcaption>
        </figure>

        <figure class="member wow fadeIn"> <img src="{{ asset('web_assets/images/team03.jpg') }}" alt="Image"
                class="fist-image"> <img src="{{ asset('web_assets/images/team03h.jpg') }}" alt="Image"
                class="second-image">
            <figcaption>
                <h5> أحمد الجندي </h5>
                <small> الرئيس التنفيذي وعضو مجلس الإدارة الممتاز </small>
                <ul>
                    <li> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-linkedin"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-google-plus"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-youtube-play"> </i> </a> </li>
                </ul>
            </figcaption>
        </figure>

        <figure class="member wow fadeIn"> <img src="{{ asset('web_assets/images/team04.jpg') }}" alt="Image"
                class="fist-image"> <img src="{{ asset('web_assets/images/team04h.jpg') }}" alt="Image"
                class="second-image">
            <figcaption>
                <h5> أحمد الجندي </h5>
                <small> الرئيس التنفيذي وعضو مجلس الإدارة الممتاز </small>
                <ul>
                    <li> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-linkedin"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-google-plus"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-youtube-play"> </i> </a> </li>
                </ul>
            </figcaption>
        </figure>

        <figure class="member wow fadeIn"> <img src="{{ asset('web_assets/images/team05.jpg') }}" alt="Image"
                class="fist-image"> <img src="{{ asset('web_assets/images/team05h.jpg') }}" alt="Image"
                class="second-image">
            <figcaption>
                <h5> أحمد الجندي </h5>
                <small> الرئيس التنفيذي وعضو مجلس الإدارة الممتاز </small>
                <ul>
                    <li> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-linkedin"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-google-plus"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-youtube-play"> </i> </a> </li>
                </ul>
            </figcaption>
        </figure>
        <figure class="member wow fadeIn"> <img src="{{ asset('web_assets/images/team06.jpg') }}" alt="Image"
                class="fist-image"> <img src="{{ asset('web_assets/images/team06h.jpg') }}" alt="Image"
                class="second-image">
            <figcaption>
                <h5> أحمد الجندي </h5>
                <small> الرئيس التنفيذي وعضو مجلس الإدارة الممتاز </small>
                <ul>
                    <li> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-linkedin"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-google-plus"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-youtube-play"> </i> </a> </li>
                </ul>
            </figcaption>
        </figure>

        <figure class="member wow fadeIn"> <img src="{{ asset('web_assets/images/team05.jpg') }}" alt="Image"
                class="fist-image"> <img src="{{ asset('web_assets/images/team05h.jpg') }}" alt="Image"
                class="second-image">
            <figcaption>
                <h5> أحمد الجندي </h5>
                <small> الرئيس التنفيذي وعضو مجلس الإدارة الممتاز </small>
                <ul>
                    <li> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-linkedin"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-google-plus"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-youtube-play"> </i> </a> </li>
                </ul>
            </figcaption>
        </figure>

        <figure class="member wow fadeIn"> <img src="{{ asset('web_assets/images/team07.jpg') }}" alt="Image"
                class="fist-image"> <img src="{{ asset('web_assets/images/team07h.jpg') }}" alt="Image"
                class="second-image">
            <figcaption>
                <h5> أحمد الجندي </h5>
                <small> الرئيس التنفيذي وعضو مجلس الإدارة الممتاز </small>
                <ul>
                    <li> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-linkedin"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-google-plus"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-youtube-play"> </i> </a> </li>
                </ul>
            </figcaption>
        </figure>

        <figure class="member wow fadeIn"> <img src="{{ asset('web_assets/images/team01.jpg') }}" alt="Image"
                class="fist-image"> <img src="{{ asset('web_assets/images/team01h.jpg') }}" alt="صورة"
                class="second-image">
            <figcaption>
                <h5> أحمد الجندي </h5>
                <small> الرئيس التنفيذي وعضو مجلس الإدارة الممتاز </small>
                <ul>
                    <li> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-linkedin"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-google-plus"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-youtube-play"> </i> </a> </li>
                </ul>
            </figcaption>
        </figure>

        <figure class="member wow fadeIn"> <img src="{{ asset('web_assets/images/team08.jpg') }}" alt="Image"
                class="fist-image"> <img src="{{ asset('web_assets/images/team08h.jpg') }}" alt="Image"
                class="second-image">
            <figcaption>
                <h5> أحمد الجندي </h5>
                <small> الرئيس التنفيذي وعضو مجلس الإدارة الممتاز </small>
                <ul>
                    <li> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-linkedin"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-google-plus"> </i> </a> </li>
                    <li> <a href="#"> <i class="fa fa-youtube-play"> </i> </a> </li>
                </ul>
            </figcaption>
        </figure>

    </div>

</section>
@endsection
