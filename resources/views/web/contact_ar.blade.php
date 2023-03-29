@extends('web.layout.app')

@section('content')
<!-- end header -->
<section class="page-header">
    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ route('welcome') }}"> الصفحة الرئيسية </a> </li>

            <li class="breadcrumb-item active" aria-current="page">تواصل معنا</li>
        </ol>
        <h2> تواصل معنا</h2>
        <p> يسعدنا ان يتم التواصل معنا من خلال وسائل التواصل المتاحه </p>
    </div>

</section>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 wow fadeIn">
                <div class="section-title">
                    <h2> قل مرحبًا! </h2>
                    <h6> يسعدنا ان يتم التواصل معنا من خلال وسائل التواصل المتاحه</h6>
                </div>

                <div class="map" id="map"> </div>

            </div>

            <div class="col-lg-7 col-md-12 wow fadeIn">
                <div class="row inner">
                    <div class="col-md-6">
                        <address>
                            <h6> العنوان الرئيسي </h6>
                            <p> مبنى سكاي سنتر. 28 ش مراد <br>
                                2nd Floor، Apt. 209- مصر </p>

                            <p> ص: +021256214515 <br>
                                <a href="#"> info@example.com </a>
                            </p>
                        </address>
                    </div>

                    <div class="col-md-6">
                        <address>
                            <h6> العنوان الرئيسي </h6>
                            <p> مبنى سكاي سنتر. 28 ش مراد <br>
                                2nd Floor، Apt. 209- مصر </p>

                            <p> ص: +021256214515 <br>
                                <a href="#"> info@example.com </a>
                            </p>
                        </address>
                    </div>

                </div>

                <form class="row" id="contact" name="contact" method="post">
                    <div class="form-group col-sm-6 col-12">
                        <label> اسمك </label>
                        <input type="text" name="name" id="name" required>
                    </div>

                    <div class="form-group col-sm-6 col-12">
                        <label> لقبك </label>
                        <input type="text" name="لقب" id="لقب" required>
                    </div>

                    <div class="form-group col-sm-6 col-12">
                        <label> بريدك الإلكتروني </label>
                        <input type="text" name="email" id="email" required>
                    </div>

                    <div class="form-group col-sm-6 col-12">
                        <label> هاتفك </label>
                        <input type="text" name="subject" id="subject" required>
                    </div>

                    <div class="form-group col-12">
                        <label> رسالتك </label>
                        <textarea name="message" id="message" required> </textarea>
                    </div>

                    <div class="form-group col-12">
                        <input id="submit" type="submit" name="submit">
                    </div>

                </form>
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

        </div>

    </div>

    </div>

</section>
@endsection
