@extends('web.layout.app')

@section('custom_css')
    <style>
        .career .job-list li span:first-child {
            width: 20% !important;
        }

        .career .job-list li span {
            width: 20% !important;
            float: left;
        }

        .total {
            width: 100%;
            line-height: 20px;
            margin: 0;
            padding: 0 30px;
            list-style: none;
            border-bottom: 1px solid #eaebee;
            font-weight: 600;
            color: #526199;
            background: #eaebee;
        }


        h4 span,
        h5 span {
            color: #526199;
        }

        blockquote {
            width: 100%;
            display: block;
            background: #405089;
            padding: 20px;
            color: #fff;
        }

        thead {
            width: 100% !important;
            margin: 0;
            padding: 0 30px;
            list-style: none;
            border-bottom: 1px solid #eaebee;
            font-weight: 600;
            color: #fff;
            background: #526199;
        }

        tbody tr td:last-child {
            height: 40px;
            line-height: 40px;
            display: inline-block;
            background: #f65935;
            color: #fff;
            padding: 0 20px;
            font-weight: 800;
            font-size: 14px;
        }

        .total-price {

            color: #f65935;


            font-weight: 800;
            font-size: 20px;
        }

        tfoot tr td {
            text-align: start;
            font-size: 20px
        }

        button.submit-btn {
            border: none;
            background: #f65935;
            color: #fff;
            height: 54px;
            border: 1px solid #eaebee;
            padding: 0 40px;
            font-weight: 600;
        }

        button.submit-btn:hover {
            border: none;
            background: #405089;
            color: #fff;
            height: 54px;
            border: 1px solid #405089;
            padding: 0 40px;
            font-weight: 600;
        }

        .row .child-full-data {
            background-color: #dee2e6;
            border-radius: 5px;
            margin-bottom: 25px;
        }
    </style>
@endsection

@section('content')
    <section class="page-header">
        <div class="container">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('main.Home') }}</a></li>

                <li class="breadcrumb-item active" aria-current="page">{{ __('main.Annual Membership') }}</li>
            </ol>
            <h2>{{ __('main.Annual Membership') }}</h2>
            <p>{{ __('main.Annual desc') }}</p>
        </div>
        <!-- end container -->
    </section>
    <!-- end page-header -->
    <section class="blog">
        <div class="container">

            <section class="career" style="padding-top:10px !important">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                @if (app()->getLocale() == 'ar')
                                    <h2>تجديد العضوية السنوية</h2>
                                @else
                                    <h2>Renew Annual Membership</h2>
                                @endif
                            </div>
                            <!-- end section-title -->
                        </div>
                        <!-- end col-12 -->
                        <form action="{{ route('storeAnnual') }}" style="max-width: 100% !important;" method="post">
                            @csrf
                            <input type="hidden" value="{{ Auth::user()->id }} name="user_id">

                            <div class="col-12">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">{{ __('main.Name') }}</th>
                                            <th scope="col">{{ __('main.Birthdate') }}</th>
                                            <th scope="col">{{ __('main.Start Date') }}</th>
                                            <th scope="col">{{ __('main.End Date') }}</th>
                                            <th scope="col">{{ __('main.Cost') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <th scope="row">{{ Auth::user()->name }}</th>
                                            <td>{{ Auth::user()->email }}</td>

                                            <td>
                                                {{ now()->format('Y-m-d') }}
                                            </td>
                                            <td>
                                                @php

                                                    $date = now()->format('Y-m-d');
                                                    $enddate = date('Y-m-d', strtotime($date . ' + 1 years'));
                                                @endphp
                                                {{ $enddate }}
                                            </td>


                                            <td>
                                                @php
                                                    $vat = $company->club_member_fees * 0.14;
                                                    $NewTotal = $company->club_member_fees + $vat;
                                                @endphp
                                                {{ $company->club_member_fees }} {{ __('main.LE') }}
                                            </td>
                                        </tr>




                                    </tbody>
                                    <tfoot>
                                        <tr class='total'>
                                            <td></td>
                                            <td></td>

                                            <td></td>
                                            <td></td>
                                            <td>{{ __('main.Vat') }}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>

                                            <td></td>
                                            <td></td>
                                            <td class="total-price">{{ $NewTotal }}
                                                {{ __('main.LE') }}</td>
                                        </tr>
                                    </tfoot>
                                </table>

                                <div class="row">
                                    <div class="col-12 row justify-content-center">

                                        <input type="hidden" name="start_date" value="{{ $date }}">
                                        <input type="hidden" name="end_date" value="{{ $enddate }}">
                                        <input type="hidden" name="fees_paid" value=" {{ $NewTotal }}">


                                    </div>

                                </div>

                            </div>

                            <button type="submit" class="submit-btn btn btn-primary reg float-left">
                                {{ __('main.Renew') }}</button>
                        </form>
                        <!-- end col-12 -->


                    </div>

                </div>


    </section>

    </div>
    </div>

    </div>

    </section>
@endsection
