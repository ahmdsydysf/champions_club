@extends('web.layout.app')
@section('custom_css_ar')
<style>
    .error-page .container .row img {
        height: 470px !important;
        background-color: #405089;
    }
</style>
@endsection
@section('content')

<section class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeIn">
                <img src="{{ asset('web_assets/images/congrate.png') }}" alt="Image">
                <h2>تهانينا ... لنبدأ التدريب معا</h2>
                <a href="{{ route('welcome') }}">الرجوع للصفحة الرئيسية</a>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>


@endsection