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
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>

            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
        <h2>User Profiles</h2>
        <p>As the person who owns the legal rights to intellectual property, an author.</p>
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
                        <h4 class="widget-title">Profile</h4>
                        <ul>

                            <li class="{{ Request::segment(2) == 'Userdata' ? 'active' : '' }}"><a
                                    href="{{ route('profile.data') }}">Profile
                                    Info</a>
                            </li>
                            <li class="{{ Request::segment(2) == 'Members' ? 'active' : '' }}"><a
                                    href="{{ route('profile.members') }}">Relatives
                                    Members</a></li>
                            <li class="{{ Request::segment(2) == 'Membership' ? 'active' : '' }}"><a href="{{ route('profile.user_membership') }}">Your
                                    Membership</a></li>

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
                <div class="post no-margin">
                    <figure class="post-image"> <img src="{{ asset('uploads/sport/' . $thisSport->sport_image) }}"
                            alt="{{ $thisSport->sport_image }}">
                    </figure>
                    <div class="post-content">

                        <h4>How to develope item for</h4>
                        <small>{{ date('F j, Y') }}</small>

                        <p>{{ $thisSport->sport_overview_en }}</p>
                        <blockquote>
                            <p>

                                {{ $thisSport->sport_subtitle_en }}

                            </p>
                            <h5>Admin</h5>
                        </blockquote>
                        <p>{{ $thisSport->sport_overview_en }}</p>

                        <p> Cooperative: Often referred to as a "co-op", a cooperative is a limited-liability business
                        <div class="row">
                            <form id="goToAdd" action="{{ route('childSport') }}" method="get">
                                @csrf
                            </form>
                            <div class="col-6 my-5 ">
                                <button form="goToAdd" class="submit-btn btn btn-primary reg float-left">Add
                                    Your
                                    Children Now</button>
                            </div>

                        </div>
                    </div>
                    <!-- end post-content -->
                </div>
                <!-- end post -->
            </div>
            <!-- end col-8 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
@endsection
