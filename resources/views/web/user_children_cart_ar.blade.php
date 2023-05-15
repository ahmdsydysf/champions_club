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
                            <h4 class="widget-title"><span>{{ session('childrenIds')[$i]->name }}</span>بيانات الطفل :
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
                                        <span>{{ session('childrenIds')[$i]->bithdate}}</span>
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
                            <h4 class="widget-title">معلومات الرياضة <span>{{ session('childrenIds')[$i]->name }}</span>
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
                                        <i class="fa fa-dollar"></i> <a href="#">
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