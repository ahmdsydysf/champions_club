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
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">الرئيسية</a></li>

            <li class="breadcrumb-item active" aria-current="page">ملفي</li>
        </ol>
        <h2>الاعضاء التابعيين</h2>
        <p>بصفته الشخص الذي يمتلك الحقوق القانونية للملكية الفكرية ، فهو مؤلف.</p>

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
                        <h4 class="widget-title">ملفي الشخصي</h4>
                        <ul>

                            <li class="{{ Request::segment(3) == 'Userdata' ? 'active' : '' }}"><a
                                    href="{{ route('profile.edit') }}">بياناتي</a>
                            </li>
                            <li class="{{ Request::segment(3) == 'Members' ? 'active' : '' }}"><a
                                    href="{{ route('profile.members') }}">الاعضاء التابعين</a></li>
                            <li class="{{ Request::segment(3) == 'Membership' ? 'active' : '' }}"><a
                                    href="{{ route('profile.user_membership') }}">اشتراكاتك</a></li>
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
                                @if(count($user_data->Children)>0)
                                @foreach ($user_data->Children as $child )

                                @foreach ($child->memberships as $member)
                                @if ($member->invoice->invoice_status == 1 )
                                <div class="col-md-6 col-12 ">
                                    <aside class="sidebar post-content"
                                        style="max-width: 100%;position:relative !important">
                                        <div class="widget categories">
                                            <a href="{{ route('childProfile' , $child->id ) }}">
                                                <h4 class="widget-title"><span>{{ $child->name
                                                        }}</span></h4>
                                            </a>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="content-box wow fadeIn col-6"
                                                        style="visibility: visible; animation-name: fadeIn;">
                                                        <figure><img style="height: 250px;width:100%"
                                                                src="{{ asset('uploads/children_data/' . $child->personal_image) }}"
                                                                alt="Image">
                                                        </figure>

                                                    </div>
                                                    <div class="content-box wow fadeIn col-6"
                                                        style="visibility: visible; animation-name: fadeIn;">
                                                        <figure><img style="height: 250px;width:100%"
                                                                src="{{ asset('uploads/children_data/' . $child->birth_image) }}"
                                                                alt="Image">
                                                        </figure>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <h5 class="widget-title col-6">تاريخ الميلاد :
                                                        <span>{{ $child->birthdate}}</span>
                                                    </h5>
                                                    <h5 class="widget-title col-6">الطول :
                                                        <span>{{ $child->height }}</span>
                                                    </h5>
                                                    <h5 class="widget-title col-6">الوزن : <span>
                                                            {{ $child->width}}</span>
                                                    </h5>

                                                </div>
                                            </div>
                                            <!-- end side-menu -->

                                            <!-- end side-menu -->
                                        </div>

                                    </aside>
                                    <!-- end side-bar -->
                                </div>
                                @endif
                                @endforeach
                                @endforeach

                                @else
                                <form id="goToAdd" action="{{ route('childSport') }}" method="get">

                                </form>
                                <div class="col-6 my-5 ">
                                    <button form="goToAdd" class="submit-btn btn btn-primary reg float-left">Add
                                        Your
                                        Children Now</button>
                                </div>
                                @endif

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
