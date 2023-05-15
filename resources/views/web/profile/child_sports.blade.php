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

    h4 span,
    h5 span {
        color: #526199;
    }

    .table td,
    .table th {
        vertical-align: inherit !important;
    }
</style>
@endsection
@section('content')
<section class="page-header">
    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('main.Home') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('main.Child Sports') }}</li>
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
                                    href="{{ route('childProfile' , $child->id ) }}">{{
                                    __('main.Profile Info') }}</a>
                            </li>
                            <li class="{{ Request::segment(3) == 'mySports' ? 'active' : '' }}"><a
                                    href="{{ route('childSports', $child->id) }}">{{ __('main.My Sports') }}</a></li>
                            <li class="{{ Request::segment(3) == 'Membership' ? 'active' : '' }}">
                                <a href="#">{{ __('main.Your diet plan') }}</a>
                            </li>
                        </ul>
                        <!-- end side-menu -->
                    </div>
                    <!-- end widget -->

                    <style>

                    </style>

                </aside>
                <!-- end side-bar -->
            </div>
            <!-- end col-4 -->
            <div class="col-md-8 col-12">
                <section class="career" style="padding-top:10px !important">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h2>{{ __('main.Child All Sports') }}</h2>
                                </div>
                                <!-- end section-title -->
                            </div>
                            <!-- end col-12 -->
                            <div class="col-12">
                                <table class="table table-hover"
                                    dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
                                    <thead>
                                        <tr>

                                            <th scope="col">{{ __('main.Sport Name') }}</th>
                                            <th scope="col">{{ __('main.Start Date') }}</th>
                                            <th scope="col">{{ __('main.End Date') }}</th>
                                            <th scope="col">{{ __('main.Attendance Days') }}</th>
                                            <th scope="col">{{ __('main.Absent Days') }}</th>
                                            <th scope="col">{{ __('main.Level') }}</th>
                                            <th scope="col">{{ __('main.Renew') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ( $child_mem_details as $mem)
                                        @if (app()->getLocale() == 'ar')
                                        <td>{{ $mem->sport->sport_title_ar}}</td>
                                        @else
                                        <td>{{ $mem->sport->sport_title_en}}</td>
                                        @endif
                                        <td>{{ $mem->start_date}}</td>
                                        <td>{{ $mem->end_date}}</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>{{ $child->level}}</td>
                                        <td>
                                            @if ($mem->end_date > now()->format('Y-m-d'))
                                            <button type="button" class="btn btn-lg submit-btn reg" disabled>{{
                                                __('main.Renew') }}</button>
                                            @else
                                            <form action="{{ route('renewSport') }}" method="get">
                                                @csrf
                                                <input type="hidden" value="{{ $child->id }}" name="child_id">
                                                <input type="hidden" value="{{ $mem->sport->id }}" name="sport_id">
                                                <button type="submit" class="btn btn-lg submit-btn reg">{{
                                                    __('main.Renew') }}</button>
                                            </form>
                                            @endif
                                        </td>

                                        @endforeach


                                    </tbody>

                                </table>



                            </div>


                            <!-- end col-12 -->


                        </div>

                    </div>

            </div>
</section>
</div>
<!-- end col-8 -->
</div>
<!-- end row -->
</div>
<!-- end container -->

</section>
@endsection