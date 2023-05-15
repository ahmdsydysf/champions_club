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
                            <li class="{{ Request::segment(3) == 'Membership' ? 'active' : '' }}"><a href="{{ route('profile.user_membership') }}">Your
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
    <section class="career" style="padding-top:10px !important">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        @if (app()->getLocale() == 'ar')
                        <h2>العضوية السنوية</h2>
                        @else
                        <h2>Annual Membership</h2>
                        @endif

                    <!-- end section-title -->
                    @if ($lastMem)
                    @if ($lastMem->end_date > now()->format('Y-m-d'))
                    <button type="button" class="btn btn-lg submit-btn reg" disabled>{{
                        __('main.Renew') }}</button>
                    @else
                    <form action="{{ route('renewAnuual') }}" method="get">

                        {{-- <input type="hidden" value="{{ $child->id }}" name="child_id">
                        <input type="hidden" value="{{ $mem->sport->id }}" name="sport_id"> --}}
                        <button type="submit" class="btn btn-lg submit-btn reg">{{
                            __('main.Renew') }}</button>
                    </form>
                    @endif
                     @else
                     <form action="{{ route('renewAnuual') }}" method="get">

                        {{-- <input type="hidden" value="{{ $child->id }}" name="child_id">
                        <input type="hidden" value="{{ $mem->sport->id }}" name="sport_id"> --}}
                        <button type="submit" class="btn btn-lg submit-btn reg">{{
                            __('main.Renew') }}</button>
                    </form>
                    @endif
                </div>
                </div>
                <!-- end col-12 -->
                <div class="col-12">
                    <table class="table table-hover"
                        dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
                        <thead>
                            <tr>


                                <th scope="col">{{ __('main.Start Date') }}</th>
                                <th scope="col">{{ __('main.End Date') }}</th>

                                <th scope="col">{{ __('main.Cost') }}</th>
                                <th scope="col">{{ __('main.approved') }}</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ( $mem_details as $mem)

                            <td>{{ $mem->start_date}}</td>
                            <td>{{ $mem->end_date}}</td>

                            <td>
                                {{ $mem->fees_paid}}
                            </td>
                            <td>
                                @if($mem->approved==0)
                                @if (app()->getLocale() == 'ar')

قيد الانتظار
                        @else
                       pending
                        @endif
                                @endif

                                @if($mem->approved==1)
                                @if (app()->getLocale() == 'ar')

                                موافقة
                        @else
                        approved
                        @endif
                                @endif


                                @if($mem->approved==2)
                                @if (app()->getLocale() == 'ar')

                                رفض
                        @else
                            Cancelled
                        @endif
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


</div>
<!-- end row -->
</div>
<!-- end container -->

</section>
@endsection
