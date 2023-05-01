@extends('web.layout.app')

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

        .download-box {
            width: 100%;
            border: none;
            background: #f65935;
            color: #fff;
            padding: 20px;
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
                            <ul class="job-list">
                                <li><span>Position</span><span>Code</span><span>Location</span><span> </span></li>
                                <li><span>UI-UX Designer &amp; Front-End Dev</span><span>WEBDSN001</span><span>Kiev -
                                        Ukraine</span><span><a href="#">APPLY</a> </span></li>
                                <li><span>UI-UX Designer &amp; Front-End Dev</span><span>WEBDSN001</span><span>Kiev -
                                        Ukraine</span><span><a href="#">APPLY</a> </span></li>

                            </ul>
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