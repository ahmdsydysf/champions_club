@extends('web.layout.app')
@section('custom_css_ar')
<style>
    button.submit-btn.reg {
        border: none;
        background: #f65935;
        color: #fff;
        height: 54px;
        border: 1px solid #eaebee;
        padding: 0 40px;
        font-weight: 600;
    }

    button.submit-btn.reg:hover {
        border: none;
        background: #405089;
        color: #f65935;
        height: 54px;
        border: 1px solid #405089;
        padding: 0 40px;
        font-weight: 600;
    }
</style>
@endsection
@section('content')
<section class="page-header">
    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ route('welcome') }}"> الصفحة الرئيسية </a> </li>
            <li class="breadcrumb-item active" aria-current="page"> الرياضة </li>
        </ol>
        <h2> رياضة </h2>
        <p> بصفتك الشخص الذي يمتلك الحقوق القانونية للملكية الفكرية ، مؤلفًا. </p>
    </div>

</section>

<section class="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                <aside class="sidebar pull-left">
                    <div class="widget categories">
                        <h4 class="widget-title"> الرياضة </h4>
                        <ul>
                            @foreach ($sportData as $row )
                            <li class="{{ $thisSport->id == $row->id ? 'active' : '' }}"><a
                                    href="{{ url('/sport/' . $row->id) }}">{{ $row->sport_title_ar }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </aside>

            </div>
            <!-- end col-4 -->
            <div class="col-md-8 col-12">
                <div class="post no-margin">
                    <figure class="post-image"> <img src="{{ asset('uploads/sport/' . $thisSport->sport_image) }}"
                            alt="{{ $thisSport->sport_image }}">
                    </figure>
                    <div class="post-content">
                        <h4> {{ $thisSport->sport_title_ar }}</h4>
                        <small>{{ date('j F, Y', strtotime($thisSport->created_at)) }}</small>

                        <p>{!! $thisSport->sport_overview_ar !!}</p>

                        {{-- <p>{{ $thisSport->sport_overview_ar }}</p>
                        <blockquote>
                            <p>

                                {{ $thisSport->sport_subtitle_ar }}

                            </p>
                            <h5>رئيس مجلس الادارة</h5>
                        </blockquote>
                        <p>{{ $thisSport->sport_overview_ar }}</p> --}}


                    </div>
                    <div class="row">
                        <div class=" col-12">


                        <div class="col-6 ">
                            <form id="goToAdd" action="{{ route('childSport') }}" method="get">
                            </form>
                            <button form="goToAdd" class="submit-btn btn btn-primary reg float-right">اضف اطفالك
                                الان</button>
                        </div>

                        <div class="col-6 ">
                            <form id="goToReg" action="{{ route('profile.members') }}" method="get">

                            </form>
                            <button form="goToReg" class="submit-btn btn btn-primary reg float-left">
                                طفل سابق تسجيله</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- end col-8 -->
        </div>
        <!-- end row -->
    </div>
</section>
@endsection
