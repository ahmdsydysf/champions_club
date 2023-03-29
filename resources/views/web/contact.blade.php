@extends('web.layout.app')

@section('content')
<section class="page-header">
    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>

            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
        <h2>CONTACT</h2>
        <p>As the person who owns the legal rights to intellectual property, an author.</p>
    </div>
    <!-- end container -->
</section>
<!-- end page-header -->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 wow fadeIn">
                <div class="section-title">
                    <h2>say hello</h2>
                    <h6>When the seeds reach maturity, the segments of the cone open up and release</h6>
                </div>
                <!-- end section-title -->
                <div class="map" id="map"></div>
                <!-- end map -->
            </div>
            <!-- end col-6 -->
            <div class="col-lg-7 col-md-12 wow fadeIn">
                <div class="row inner">
                    <div class="col-md-6">
                        <address>
                            <h6>address main</h6>
                            <p>Sky Center Bldg. 28 Mourad St<br>
                                2nd Floor, Apt. 209 - Egypt</p>

                            <p>p: +021256214515<br>
                                <a href="#">info@example.com</a>
                            </p>
                        </address>
                    </div>
                    <!-- end col-6 -->
                    <div class="col-md-6">
                        <address>
                            <h6>address main</h6>
                            <p>Sky Center Bldg. 28 Mourad St<br>
                                2nd Floor, Apt. 209 - Egypt</p>

                            <p>p: +021256214515<br>
                                <a href="#">info@example.com</a>
                            </p>
                        </address>
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row inner -->
                <form class="row" id="contact" name="contact" method="post">
                    <div class="form-group col-sm-6 col-12">
                        <label>Your name</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group col-sm-6 col-12">
                        <label>Your surname</label>
                        <input type="text" name="surname" id="surname" required>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group col-sm-6 col-12">
                        <label>Your e-mail</label>
                        <input type="text" name="email" id="email" required>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group col-sm-6 col-12">
                        <label>Your phone</label>
                        <input type="text" name="subject" id="subject" required>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group col-12">
                        <label>Your message</label>
                        <textarea name="message" id="message" required></textarea>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group col-12">
                        <input id="submit" type="submit" name="submit">
                    </div>
                    <!-- end form-group -->
                </form>
                <!-- end form -->
                <div class="row">
                    <div class="col-12">
                        <div id="map" style="position: relative; overflow: hidden;"> </div>
                        <script>
                            function initMap() {
                  var uluru = {
                    lat: -25.363,
                    lng: 131.044
                  };
                  var grayStyles = [{
                    featureType: "all",
                    stylers: [{
                      saturation: -90
                    },
                    {
                      lightness: 50
                    }
                    ]
                  },
                  {
                    elementType: 'labels.text.fill',
                    stylers: [{
                      color: '#ccdee9'
                    }]
                  }
                  ];
                  var map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                      lat: -31.197,
                      lng: 150.744
                    },
                    zoom: 9,
                    styles: grayStyles,
                    scrollwheel: false
                  });
                }
                        </script>
                        <script
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                        </script>
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row inner -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end contact -->

@endsection
