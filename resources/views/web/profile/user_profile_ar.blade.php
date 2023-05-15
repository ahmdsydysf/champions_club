@extends('web.layout.app')
@section('custom_css_ar')
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
</style>
@endsection
@section('content')
<section class="page-header">
    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">الرئيسية</a></li>

            <li class="breadcrumb-item active" aria-current="page">الملف الشخصي</li>
        </ol>
        <h2>ملف المستخدم</h2>
        <p>بصفته الشخص الذي يمتلك الحقوق القانونية للملكية الفكرية ، فهو مؤلف.</p>
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
                        <h4 class="widget-title">بيانات الملف</h4>
                        <ul>
                            <li class="{{ Request::segment(3) == 'Userdata' ? 'active' : '' }}"><a
                                    href="{{ route('profile.edit') }}">بياناتي</a>
                            </li>
                            <li class="{{ Request::segment(3) == 'Members' ? 'active' : '' }}"><a
                                    href="{{ route('profile.members') }}">الاعضاء التابعين</a></li>
                            <li class="{{ Request::segment(3) == 'Membership' ? 'active' : '' }}"><a
                                    href="{{ route('profile.user_membership') }}">اشتراكاتك</a></li>
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
                <div class="post no-margin">

                    <div class="post-content">
                        <h4>تحديث بياناتك</h4>
                        <small>{{ date('F j, Y') }}</small>

                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="content-box wow fadeIn"
                                        style="visibility: visible; animation-name: fadeIn;">
                                        <figure class="text-center"><img id="img-preview"
                                                style="height: 250px;width:50%;border-radius:5px" class="img-thumbnail"
                                                src="{{ asset('uploads/user/' . Auth::user()->image) }}" alt="Image">
                                        </figure>
                                        <form action="{{ route('user.image' , Auth::user()->id) }}"
                                            enctype="multipart/form-data" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <div>
                                                <label for="formFileLg" class="form-label">تغيير الصوره</label>
                                                <input onchange="showPreview(event)"
                                                    class="form-control form-control-lg" name="image" id="formFileLg"
                                                    type="file">
                                            </div>
                                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                            <x-primary-button>@lang('main.Change')</x-primary-button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-6">
                                    @include('profile.partials.update-profile-information-form')
                                </div>
                                <div class="col-6">
                                    @include('profile.partials.update-password-form')
                                </div>
                            </div>
                        </div>







                    </div>
                    <!-- end post-content -->
                </div>
                <!-- end post -->
            </div>
            <!-- end col-8 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
@endsection

@section('custom_js_ar')
<script>
    function showPreview(event){
        if(event.target.files.length > 0){
            let src = URL.createObjectURL(event.target.files[0]);
            let preview = document.getElementById('img-preview');
            preview.src = src;
        }
    }
</script>
@endsection
