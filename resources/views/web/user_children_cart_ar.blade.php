@extends('web.layout.app')

@section('custom_css_ar')
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

    .row .child-full-data {
        background-color: #dee2e6;
        border-radius: 5px;
        margin-bottom: 25px;
    }

    .card {

        border: none;
    }

    .card-header {
        padding: .5rem 1rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, .03);
        border-bottom: none;
    }

    .btn-light:focus {
        color: #212529;
        background-color: #e2e6ea;
        border-color: #dae0e5;
        box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, .5);
    }

    .form-control {

        height: 50px;
        border: 2px solid #eee;
        border-radius: 6px;
        font-size: 14px;
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #039be5;
        outline: 0;
        box-shadow: none;

    }

    .input {

        position: relative;
    }

    .input i {

        position: absolute;
        top: 16px;
        left: 11px;
        color: #989898;
    }

    .input input {

        text-indent: 25px;
    }

    .card-text {

        font-size: 13px;
        margin-left: 6px;
    }

    .certificate-text {

        font-size: 12px;
    }


    .billing {
        font-size: 11px;
    }

    .super-price {

        top: 0px;
        font-size: 22px;
    }

    .super-month {

        font-size: 11px;
    }


    .line {
        color: #bfbdbd;
    }

    .free-button {

        background: #1565c0;
        height: 52px;
        font-size: 15px;
        border-radius: 8px;
    }


    .payment-card-body {

        flex: 1 1 auto;
        padding: 24px 1rem !important;

    }
</style>
@endsection

@section('content')
<section class="page-header">
    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">الرئيسية</a></li>

            <li class="breadcrumb-item active" aria-current="page">رياضات الاطفال</li>
        </ol>
        <h2>معلومات الاطفال</h2>
        <p>هنا نوضح لك كل ماهو من بيانات الاطفال</p>
    </div>
    <!-- end container -->
</section>
<!-- end page-header -->
<section class="blog">
    <div class="container">

        <div class="row justify-content-center">
            @if(session('childrenIds') && session('membershipDetails'))
            @for($i = 0 ; $i < count(session('childrenIds')) ; $i++) <div class="child-full-data row">
                <div class="col-md-6 col-12">
                    <aside class="sidebar" style="max-width: 100%;position:relative !important">
                        <div class="widget categories">
                            <h4 class="widget-title"><span>{{ session('childrenIds')[$i]->name }}</span>
                            </h4>
                            <div class="container">
                                <div class="row">
                                    <div class="content-box wow fadeIn col-6"
                                        style="visibility: visible; animation-name: fadeIn;">
                                        <figure><img style="height: 250px;width:100%"
                                                src="{{ asset('uploads/children_data/' . session('childrenIds')[$i]->personal_image) }}"
                                                alt="Image">
                                        </figure>
                                        <h4>الصورة الشخصية</h4>
                                    </div>
                                    <div class="content-box wow fadeIn col-6"
                                        style="visibility: visible; animation-name: fadeIn;">
                                        <figure><img style="height: 250px;width:100%"
                                                src="{{ asset('uploads/children_data/' . session('childrenIds')[$i]->birth_image) }}"
                                                alt="Image">
                                        </figure>
                                        <h4>شهادة الميلاد</h4>
                                    </div>

                                </div>
                            </div>
                            <h4 class="widget-title">معلومات شخصية</h4>
                            <div class="container">
                                <div class="row">
                                    <h5 class="widget-title col-6">تاريخ الميلاد :
                                        <span>{{ session('childrenIds')[$i]->birthdate}}</span>
                                    </h5>
                                    <h5 class="widget-title col-6">الطول :
                                        <span>{{ session('childrenIds')[$i]->height }}</span>
                                    </h5>
                                    <h5 class="widget-title col-6">الوزن : <span>
                                            {{ session('childrenIds')[$i]->width}}</span>
                                    </h5>
                                    <h5 class="widget-title col-6">المستوي :
                                        <span>{{ session('childrenIds')[$i]->level }}
                                        </span>
                                    </h5>
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
                            <h4 class="widget-title"><span>{{ session('childrenIds')[$i]->name }}</span>
                            </h4>

                            <h4 class="widget-title">{{ session('membershipDetails')[$i]->sport->sport_title_ar }}</h4>
                            <div class="container">
                                <div class="row">
                                    <h5 class="widget-title col-6">
                                        يبدأ في : <span>{{ session('membershipDetails')[$i]->start_date}}
                                        </span></h5>
                                    <h5 class="widget-title col-6">ينتهي في : <span>
                                            {{ session('membershipDetails')[$i]->end_date }}</span></h5>
                                    <blockquote>
                                        <h5 class="widget-title" style="color:#fff !important">تعليقات</h5>
                                        <p>{{ session('membershipDetails')[$i]->user_comment }}</p>
                                    </blockquote>
                                    <div class="widget download-box">
                                        <i class="fa fa-money"></i> <a href="#">
                                            {{ session('membershipDetails')[$i]->fees}} جنيه</a>
                                        <small>تكلفة الرياضة</small>
                                    </div>
                                </div>
                            </div>
                            <!-- end side-menu -->
                        </div>

                    </aside>
                    <!-- end side-bar -->
                </div>
        </div>
        @endfor
        @endif


        <section class="career" style="padding-top:10px !important">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>كل معلومات الاضافه</h2>
                        </div>
                        <!-- end section-title -->
                        <div class="row g-3 m-3">

                            <div class="col-12">
                                <div class="section-title">
                                    <h2>{{ __('main.Payment') }}</h2>
                                </div>
                                <div class="card">

                                    <div class="accordion" id="accordionExample">

                                        <div class="card">
                                            <div class="card-header p-0" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <button
                                                        class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom"
                                                        type="button" data-toggle="collapse" data-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <div class="d-flex align-items-center justify-content-between">

                                                            <span>Paypal</span>
                                                            <img src="{{ asset('web_assets/images/7kQEsHU.png') }}"
                                                                width="30">

                                                        </div>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <input type="text" class="form-control" placeholder="Paypal email">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header p-0">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-light btn-block text-left p-3 rounded-0"
                                                        data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="d-flex align-items-center justify-content-between">

                                                            <span>{{ __('main.Credit card') }}</span>
                                                            <div class="icons">
                                                                <img src="{{ asset('web_assets/images/2ISgYja.png') }}"
                                                                    width="30">
                                                                <img src="{{ asset('web_assets/images/W1vtnOV.png') }}"
                                                                    width="30">
                                                                <img src="{{ asset('web_assets/images/35tC99g.png') }}"
                                                                    width="30">
                                                                <img src="{{ asset('web_assets/images/2ISgYja.png') }}"
                                                                    width="30">
                                                            </div>

                                                        </div>
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body payment-card-body">

                                                    <span class="font-weight-normal card-text">{{ __('main.card number')
                                                        }}</span>
                                                    <div class="input">

                                                        <i class="fa fa-credit-card"></i>
                                                        <input type="text" class="form-control"
                                                            placeholder="0000 0000 0000 0000">

                                                    </div>

                                                    <div class="row mt-3 mb-3">

                                                        <div class="col-md-6">

                                                            <span class="font-weight-normal card-text">
                                                                {{ __('main.Expiry Date') }}</span>
                                                            <div class="input">

                                                                <i class="fa fa-calendar"></i>
                                                                <input type="text" class="form-control"
                                                                    placeholder="MM/YY">

                                                            </div>

                                                        </div>


                                                        <div class="col-md-6">

                                                            <span class="font-weight-normal card-text">CVC/CVV</span>
                                                            <div class="input">

                                                                <i class="fa fa-lock"></i>
                                                                <input type="text" class="form-control"
                                                                    placeholder="000">

                                                            </div>

                                                        </div>


                                                    </div>

                                                    <span class="text-muted certificate-text"><i class="fa fa-lock"></i>
                                                        {{ __('main.ssl') }}</span>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col-12 -->
                    <div class="col-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">الاسم</th>
                                    <th scope="col">الرياضة</th>
                                    <th scope="col">تبدأ</th>
                                    <th scope="col">تنتهي</th>
                                    <th scope="col">التكلفة</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(session('childrenIds') && session('membershipDetails'))
                                @for($i = 0 ; $i < count(session('childrenIds')) ; $i++) <tr>
                                    <th scope="row">{{ session('childrenIds')[$i]->name }}</th>
                                    <td>{{ session('membershipDetails')[$i]->sport->sport_title_ar }}</td>
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
                                    <td>الاجمالي بعد اضافة 14% ضريبه</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="total-price">{{ session('membershipDetails')[0]->invoice->order_total }}
                                        جنيه</td>
                                </tr>
                            </tfoot>
                        </table>

                        <div class="row">
                            <div class="col-12 row justify-content-center">
                                <form action="{{ route('changeCartStatus') }}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ session('membershipDetails')[0]->invoice_id }}"
                                        name="invoice_status">
                                    <button type="submit" class="submit-btn btn btn-primary reg float-left">تأكيد
                                        الاشتراكات</button>
                                </form>
                                <form action="{{ route('discardCartChanges') }}" method="post">
                                    @csrf
                                    <button type="submit" class="submit-btn btn btn-primary reg float-left">
                                        الرجوع</button>
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
</div>

</div>

</section>
@endsection