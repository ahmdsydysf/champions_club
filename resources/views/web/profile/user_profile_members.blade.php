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

                            <li class="{{ Request::segment(3) == 'Userdata' ? 'active' : '' }}"><a
                                    href="{{ route('profile.edit') }}">Profile
                                    Info</a>
                            </li>
                            <li class="{{ Request::segment(3) == 'Members' ? 'active' : '' }}"><a
                                    href="{{ route('profile.members') }}">Relatives
                                    Members</a></li>
                            <li class="{{ Request::segment(3) == 'Membership' ? 'active' : '' }}"><a
                                    href="{{ route('profile.membership') }}">Your
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
                <section class="blog">
                    <div class="container">

                        {{-- @dd($child->name) --}}
                        <div class="row justify-content-center">
                            <div class="child-full-data row">
                                @foreach ($user_data->Children as $child )
                                <div class="col-md-6 col-12 ">
                                    <aside class="sidebar post-content"
                                        style="max-width: 100%;position:relative !important">
                                        <div class="widget categories">
                                            <h4 class="widget-title">Child Data For <span>{{ $child->name
                                                    }}</span></h4>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="content-box wow fadeIn col-12"
                                                        style="visibility: visible; animation-name: fadeIn;">
                                                        <figure><img style="height: 250px;width:100%"
                                                                src="{{ asset('uploads/children_data/' . $child->personal_image) }}"
                                                                alt="Image">
                                                        </figure>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <h5 class="widget-title col-6">Birthdate :
                                                        <span>{{ $child->birthdate}}</span>
                                                    </h5>
                                                    <h5 class="widget-title col-6">Hight :
                                                        <span>{{ $child->height }}</span>
                                                    </h5>
                                                    <h5 class="widget-title col-6">Weight : <span>
                                                            {{ $child->width}}</span>
                                                    </h5>
                                                    <h5 class="widget-title col-6">Level :
                                                        <span>{{ $child->level }}
                                                        </span>
                                                    </h5>
                                                </div>
                                            </div>
                                            <!-- end side-menu -->
                                            @foreach($member_ship_details as $membership)
                                            @if($membership->child_id == $child->id)


                                            <div class="container">
                                                <div class="row">
                                                    <h5 class="widget-title col-12">Sport :
                                                        <span>{{ $membership->sport->sport_title_en }}</span>
                                                    </h5>
                                                    <h5 class="widget-title col-6">Start :
                                                        <span>{{ $membership->start_date }}</span>
                                                    </h5>
                                                    <h5 class="widget-title col-6">End : <span>
                                                            {{ $membership->end_date }}</span>
                                                    </h5>

                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                            <!-- end side-menu -->
                                        </div>

                                    </aside>
                                    <!-- end side-bar -->
                                </div>
                                @endforeach

                                <!-- end col-4 -->
                                {{-- <div class="col-md-6 col-12">
                                    <aside class="sidebar" style="max-width: 100%;position:relative !important">
                                        <div class="widget categories">
                                            <h4 class="widget-title">Sport Data For <span>{{ $childrenIds[$i]->name
                                                    }}</span></h4>

                                            <h4 class="widget-title">{{ $membershipDetails[$i]->sport->sport_title_en }}
                                            </h4>
                                            <div class="container">
                                                <div class="row">
                                                    <h5 class="widget-title col-6">
                                                        start at : <span>{{$membershipDetails[$i]->start_date}}
                                                        </span></h5>
                                                    <h5 class="widget-title col-6">ends at : <span>
                                                            {{$membershipDetails[$i]->end_date }}</span></h5>
                                                    <blockquote>
                                                        <h5 class="widget-title" style="color:#fff !important">Comments
                                                        </h5>
                                                        <p>{{ $membershipDetails[$i]->user_comment }}</p>
                                                    </blockquote>
                                                    <div class="widget download-box">
                                                        <i class="fa fa-dollar"></i> <a href="#">
                                                            {{ $membershipDetails[$i]->fees}} LE</a>
                                                        <small>Sport Cost</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end side-menu -->
                                        </div>

                                    </aside>
                                    <!-- end side-bar -->
                                </div> --}}
                            </div>
                        </div>
                        <!-- end col-8 -->
                    </div>
                    <!-- end row -->
            </div>
            <!-- end container -->

</section>
@endsection