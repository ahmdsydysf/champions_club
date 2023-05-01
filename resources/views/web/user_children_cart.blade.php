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
        width: 100%;
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

            <li class="breadcrumb-item active" aria-current="page">Children Sport</li>
        </ol>
        <h2>Children Data</h2>
        <p>As the person who owns the legal rights to intellectual property, an author.</p>
    </div>
    <!-- end container -->
</section>
<!-- end page-header -->
<section class="blog">
    <style>
        .row .child-full-data {
            background-color: #dee2e6;
            border-radius: 5px;
            margin-bottom: 25px;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="child-full-data row">
                <div class="col-md-6 col-12">
                    <aside class="sidebar" style="max-width: 100%;position:relative !important">
                        <div class="widget categories">
                            <h4 class="widget-title">Child Data For <span>Ahmed Sayed</span></h4>
                            <div class="container">
                                <div class="row">
                                    <div class="content-box wow fadeIn col-6"
                                        style="visibility: visible; animation-name: fadeIn;">
                                        <figure><img style="height: 250px;width:100%"
                                                src="{{ asset('web_assets/images/blog2.jpg') }}" alt="Image">
                                        </figure>
                                        <h4>Personal Image</h4>
                                    </div>
                                    <div class="content-box wow fadeIn col-6"
                                        style="visibility: visible; animation-name: fadeIn;">
                                        <figure><img style="height: 250px;width:100%"
                                                src="{{ asset('web_assets/images/team01.jpg') }}" alt="Image">
                                        </figure>
                                        <h4>Birthdate Certificate</h4>
                                    </div>

                                </div>
                            </div>
                            <h4 class="widget-title">Personal Data</h4>
                            <div class="container">
                                <div class="row">
                                    <h5 class="widget-title col-6">Birthdate : <span>01-01-2023</span></h5>
                                    <h5 class="widget-title col-6">Hight : <span>130</span></h5>
                                    <h5 class="widget-title col-6">Weight : <span>60</span></h5>
                                    <h5 class="widget-title col-6">Level : <span>Profisional</span></h5>
                                </div>
                            </div>
                            <!-- end side-menu -->
                        </div>

                    </aside>
                    <!-- end side-bar -->
                </div>
                <!-- end col-4 -->
                <div class="col-md-6 col-12">
                    <aside class="sidebar" style="max-width: 100%;position:relative !important">
                        <div class="widget categories">
                            <h4 class="widget-title">Sport Data For <span>Ahmed Sayed</span></h4>

                            <h4 class="widget-title">Football</h4>
                            <div class="container">
                                <div class="row">
                                    <h5 class="widget-title col-6">start at : <span>01-01-2023</span></h5>
                                    <h5 class="widget-title col-6">ends at : <span>01-01-2023</span></h5>
                                    <blockquote>
                                        <h5 class="widget-title" style="color:#fff !important">Comments</h5>
                                        <p>Weighing in at a whopping 3310g and measuring 38cm in length, the Sigma 500mm
                                            f/4
                                            DG OS HSM Sports is an incredibly big and heavy lens indeed, although that
                                            does
                                            include the non-removable tripod collar.</p>
                                    </blockquote>
                                    <div class="widget download-box">
                                        <i class="fa fa-dollar"></i> <a href="#">1500 LE</a> <small>Sport
                                            Cost</small>
                                    </div>
                                </div>
                            </div>
                            <!-- end side-menu -->
                        </div>

                    </aside>
                    <!-- end side-bar -->
                </div>
            </div>
            <div class="child-full-data row">
                <div class="col-md-6 col-12">
                    <aside class="sidebar" style="max-width: 100%;position:relative !important">
                        <div class="widget categories">
                            <h4 class="widget-title">Child Data For <span>Ahmed Sayed</span></h4>
                            <div class="container">
                                <div class="row">
                                    <div class="content-box wow fadeIn col-6"
                                        style="visibility: visible; animation-name: fadeIn;">
                                        <figure><img style="height: 250px;width:100%"
                                                src="{{ asset('web_assets/images/blog2.jpg') }}" alt="Image">
                                        </figure>
                                        <h4>Personal Image</h4>
                                    </div>
                                    <div class="content-box wow fadeIn col-6"
                                        style="visibility: visible; animation-name: fadeIn;">
                                        <figure><img style="height: 250px;width:100%"
                                                src="{{ asset('web_assets/images/team01.jpg') }}" alt="Image">
                                        </figure>
                                        <h4>Birthdate Certificate</h4>
                                    </div>

                                </div>
                            </div>
                            <h4 class="widget-title">Personal Data</h4>
                            <div class="container">
                                <div class="row">
                                    <h5 class="widget-title col-6">Birthdate : <span>01-01-2023</span></h5>
                                    <h5 class="widget-title col-6">Hight : <span>130</span></h5>
                                    <h5 class="widget-title col-6">Weight : <span>60</span></h5>
                                    <h5 class="widget-title col-6">Level : <span>Profisional</span></h5>
                                </div>
                            </div>
                            <!-- end side-menu -->
                        </div>

                    </aside>
                    <!-- end side-bar -->
                </div>
                <!-- end col-4 -->
                <div class="col-md-6 col-12">
                    <aside class="sidebar" style="max-width: 100%;position:relative !important">
                        <div class="widget categories">
                            <h4 class="widget-title">Sport Data For <span>Ahmed Sayed</span></h4>

                            <h4 class="widget-title">Football</h4>
                            <div class="container">
                                <div class="row">
                                    <h5 class="widget-title col-6">start at : <span>01-01-2023</span></h5>
                                    <h5 class="widget-title col-6">ends at : <span>01-01-2023</span></h5>
                                    <blockquote>
                                        <h5 class="widget-title" style="color:#fff !important">Comments</h5>
                                        <p>Weighing in at a whopping 3310g and measuring 38cm in length, the Sigma 500mm
                                            f/4
                                            DG OS HSM Sports is an incredibly big and heavy lens indeed, although that
                                            does
                                            include the non-removable tripod collar.</p>
                                    </blockquote>
                                    <div class="widget download-box">
                                        <i class="fa fa-dollar"></i> <a href="#">1500 LE</a> <small>Sport
                                            Cost</small>
                                    </div>
                                </div>
                            </div>
                            <!-- end side-menu -->
                        </div>

                    </aside>
                    <!-- end side-bar -->
                </div>
            </div>

            <section class="career" style="padding-top:10px !important">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h2>Cart Full Data</h2>
                            </div>
                            <!-- end section-title -->
                        </div>
                        <!-- end col-12 -->
                        <div class="col-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">name</th>
                                        <th scope="col">sport</th>
                                        <th scope="col">start</th>
                                        <th scope="col">end</th>
                                        <th scope="col">cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Ahmed sayed</th>
                                        <td>Football</td>
                                        <td>20-02-2000</td>
                                        <td>20-03-2000</td>
                                        <td>1300 LE</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ahmed sayed</th>
                                        <td>Football</td>
                                        <td>20-02-2000</td>
                                        <td>20-03-2000</td>
                                        <td>1300 LE</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ahmed sayed</th>
                                        <td>Football</td>
                                        <td>20-02-2000</td>
                                        <td>20-03-2000</td>
                                        <td>1300 LE</td>
                                    </tr>

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
                                        <td class="total-price">3900 LE</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="row">
                                <div class="col-12 row justify-content-center">
                                    <button form="add-player" class="submit-btn btn btn-primary reg float-left">Confirm
                                        Data</button>
                                </div>

                            </div>

                        </div>

                        <!-- end col-12 -->


                    </div>

                </div>

        </div>
</section>

</div>
</div>

</div>

</section>
@endsection