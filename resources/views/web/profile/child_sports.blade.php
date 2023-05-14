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
                                    href="{{ route('childProfile' , $child->id ) }}">{{ __('main.Profile Info') }}</a>
                            </li>
                            <li class="{{ Request::segment(3) == 'mySports' ? 'active' : '' }}"><a
                                    href="{{ route('childSports', $child->id) }}">{{ __('main.My Sports') }}</a></li>
                            <li class="{{ Request::segment(3) == 'Membership' ? 'active' : '' }}">
                                <a href="#">{{ __('main.Your Membership') }}</a>
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
                                    <h2>{{ __('Child All Sports') }}</h2>
                                </div>
                                <!-- end section-title -->
                            </div>
                            <!-- end col-12 -->
                            <div class="col-12">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>

                                            <th scope="col">{{ __('Sport Name') }}</th>
                                            <th scope="col">{{ __('Start Date') }}</th>
                                            <th scope="col">{{ __('End Date') }}</th>
                                            <th scope="col">{{ __('Attendance Days') }}</th>
                                            <th scope="col">{{ __('Absent Days') }}</th>
                                            <th scope="col">{{ __('Level') }}</th>
                                            <th scope="col">{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(session('childrenIds') && session('membershipDetails'))
                                        @for($i = 0 ; $i < count(session('childrenIds')) ; $i++) <tr>
                                            <th scope="row">{{ session('childrenIds')[$i]->name }}</th>
                                            <td>{{ session('membershipDetails')[$i]->sport->sport_title_en }}</td>
                                            <td>
                                                {{session('membershipDetails')[$i]->start_date }}
                                            </td>
                                            <td>
                                                {{session('membershipDetails')[$i]->end_date }}</td>
                                            <td>
                                                {{ session('membershipDetails')[$i]->fees}} LE
                                            </td>
                                            </tr>
                                            @endfor



                                    </tbody>
                                    <tfoot>
                                        <tr class='total'>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="total-price">{{
                                                session('membershipDetails')[0]->invoice->order_total }}
                                                LE</td>
                                        </tr>
                                    </tfoot>
                                </table>

                                <div class="row">
                                    <div class="col-12 row justify-content-center">
                                        <form action="{{ route('changeCartStatus') }}" method="post">
                                            @csrf
                                            <input type="hidden"
                                                value="{{ session('membershipDetails')[0]->invoice_id }}"
                                                name="invoice_status">
                                            <button type="submit"
                                                class="submit-btn btn btn-primary reg float-left">Confirm
                                                Data</button>
                                        </form>
                                        <form action="{{ route('discardCartChanges') }}" method="post">
                                            @csrf
                                            <button type="submit" class="submit-btn btn btn-primary reg float-left">
                                                Back</button>
                                        </form>
                                    </div>

                                </div>

                            </div>

                            @endif
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