@extends('web.layout.app')
@section('custom_css')
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
        color: #fff;
        height: 54px;
        border: 1px solid #405089;
        padding: 0 40px;
        font-weight: 600;
    }

    .post-content {
        background-color: #dee2e6;
        border-radius: 5px;
        margin-bottom: 25px;
        padding: 35px;
    }

    .main-title h4 {
        display: block;
        font-weight: 600;
        font-family: "Playfair Display", serif;
        font-size: 29px;
        line-height: 38px;
        color: #f65935;
    }

    .colr-or {
        color: #f65935;
        font-size: 21px;

    }

    h4 span,
    h5 span {
        color: #526199;
    }

    .child-full-data {
        margin-top: -125px;
    }
</style>
@endsection
@section('content')
<section class="page-header">
    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('main.Home') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('main.Profile') }}</li>
        </ol>
        <h2>{{ __('main.Child Profile') }}</h2>
        <p>{{ __('main.Profile title') }}</p>
    </div>
    <!-- end container -->
</section>
<!-- end page-header -->
<section class="blog">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                <aside class="sidebar pull-left">
                    <div class="widget categories">
                        <h4 class="widget-title">{{ __('main.Profile') }}</h4>
                        <ul>

                            <li class="{{ Request::segment(3) == 'childProfile' ? 'active' : '' }}"><a
                                    href="{{ route('childProfile' , $child->id ) }}">{{ __('main.Profile Info') }}</a>
                            </li>
                            <li class="{{ Request::segment(3) == 'mySports' ? 'active' : '' }}"><a
                                    href="{{ route('childSports', $child->id) }}">{{ __('main.My Sports') }}</a></li>
                            <li class="{{ Request::segment(3) == 'sportsDiet' ? 'active' : '' }}">
                                <a href="{{ route('childSportDiet' , ['child_id'=>$child->id]) }}">
                                    {{ __('main.Your diet plan') }}
                                </a>
                            </li>
                        </ul>
                        <!-- end side-menu -->
                    </div>
                    <!-- end widget -->
                </aside>
                <!-- end side-bar -->
            </div>
            <!-- end col-4 -->
            <div class="col-md-8 col-12">
                <section class="blog">
                    <div class="container">

                        {{-- @dd($child->name) --}}
                        <div class="row justify-content-center">
                            <div class="child-full-data row">
                                <div class="main-title">

                                    <h4>

                                        {{ __('main.diet title') }}

                                    </h4>
                                </div>
                                {{-- هذا النظام الغذائى المقترك لك بناءاً على وصف الجسم والرياضة المشترك بها--}}
                                <h4 class="widget-title"></h4>
                                {{-- @if ($invo->invoice_status == 1) --}}
                                @foreach ( $child->memberships as $mem )
                                <div class="col-12 ">
                                    <aside class="sidebar post-content"
                                        style="max-width: 100%;position:relative !important">
                                        <div class="post-content">
                                            @if (app()->getLocale() == 'ar')
                                            <h4>

                                                {{ $mem->sport->sport_subtitle_ar }}

                                            </h4>
                                            @else
                                            <h4>

                                                {{ $mem->sport->sport_subtitle_en }}

                                            </h4>
                                            @endif
                                            <span class="colr-or">{{ __('main.diet sys') }}</span>
                                            <small>{{ date('d-m-Y') }}</small>

                                            <p>
                                                {!! html_entity_decode($mem->sport->feed_recommend) !!}
                                            </p>
                                            <h5 class="colr-or">
                                                {{ __('main.diet links') }}
                                            </h5>
                                            <blockquote>
                                                <p>
                                                    @foreach ( $mem->sport->SportDietLinks as $link )
                                                    <a href="{{ $link->url }}">
                                                        @if (app()->getLocale() == 'ar')
                                                        <h4>
                                                            {{ $link->link_title_ar }}
                                                        </h4>
                                                        @else
                                                        <h4>
                                                            {{ $link->link_title_en }}
                                                        </h4>
                                                        @endif
                                                    </a>
                                                    @endforeach
                                                </p>

                                            </blockquote>


                                        </div>






                                        <!-- end side-menu -->
                                </div>

                                @endforeach
                                </aside>
                                <!-- end side-bar -->
                            </div>


                        </div>
                    </div>
                    <!-- end col-8 -->
            </div>
            <!-- end row -->


</section>
</div>
</div>
</div>
</section>
@endsection