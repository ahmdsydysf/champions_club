@extends('dash.layouts.app')

@section('page_title' , 'Add Slider Images')

@section('content')


<div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div class="container-xxl">
        <!--begin::Form-->
        <form id="kt_ecommerce_add_product_form"
            class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
            data-kt-redirect="{{ route('dashboard.slider_image.index') }}" method="POST" enctype="multipart/form-data"
            action="{{ route('dashboard.slider_image.store') }}">
            @csrf
            <!--begin::Aside column-->
            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                <!--begin::Thumbnail settings-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Slider Image</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body text-center pt-0">
                        <!--begin::Image input-->
                        <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                            style="background-image: url({{ asset('uploads/slider/default_slider.jpg') }})">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-150px h-150px"></div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="Change avatar">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <!--begin::Inputs-->
                                <input type="file" name="image">
                                <input type="hidden" name="avatar_remove">
                                <!--end::Inputs-->
                            </label>

                            <!--end::Label-->
                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="Cancel avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Cancel-->
                            <!--begin::Remove-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="Remove avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set the thumbnail image. Only *.png, *.jpg and *.jpeg
                            images are accepted</div>
                        <!--end::Description-->
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Thumbnail settings-->
            </div>
            <!--end::Aside column-->
            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                            href="#kt_ecommerce_add_product_general">General Setting</a>
                    </li>
                    <!--end:::Tab item-->

                </ul>
                <!--end:::Tabs-->
                <!--begin::Tab content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade active show" id="kt_ecommerce_add_product_general" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>General Option</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">Slider EN Title</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="title_en" class="form-control mb-2"
                                            placeholder="Slider EN Title" value="{{ old('title_en') }}">
                                        <!--end::Input-->
                                        @error('title_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">A Slider EN Title is required and recommended to be
                                            unique.</div>
                                        <!--end::Description-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">Slider AR Title</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="title_ar" class="form-control mb-2"
                                            placeholder="Slider AR Title" value="{{ old('title_ar') }}">
                                        <!--end::Input-->
                                        @error('title_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">A Slider AR Title is required and recommended to be
                                            unique.</div>
                                        <!--end::Description-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">Slider EN Sub-Title</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="subtitle_en" class="form-control mb-2"
                                            placeholder="Slider EN Sub-Title" value="{{ old('subtitle_en') }}">
                                        <!--end::Input-->
                                        @error('title_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">A Slider EN Sub-Title is required and recommended
                                            to be
                                            unique.</div>
                                        <!--end::Description-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">Slider AR Sub-Title</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="subtitle_ar" class="form-control mb-2"
                                            placeholder="Slider AR Sub-Title" value="{{ old('subtitle_ar') }}">
                                        <!--end::Input-->
                                        @error('title_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">A Slider AR Sub-Title is required and recommended
                                            to be
                                            unique.</div>
                                        <!--end::Description-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">Slider EN Nav-Title</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="nav_title_en" class="form-control mb-2"
                                            placeholder="Slider EN Nav-Title" value="{{ old('nav_title_en') }}">
                                        <!--end::Input-->
                                        @error('nav_title_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">A Slider EN Nav-Title is required and recommended
                                            to be
                                            unique.</div>
                                        <!--end::Description-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">Slider AR Nav-Title</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="nav_title_ar" class="form-control mb-2"
                                            placeholder="Slider AR Nav-Title" value="{{ old('nav_title_ar') }}">
                                        <!--end::Input-->
                                        @error('nav_title_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">A Slider AR Nav-Title is required and recommended
                                            to be
                                            unique.</div>
                                        <!--end::Description-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">Slider EN Nav-SubTitle</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="nav_subtitle_en" class="form-control mb-2"
                                            placeholder="Slider EN Nav-SubTitle" value="{{ old('nav_subtitle_en') }}">
                                        <!--end::Input-->
                                        @error('nav_subtitle_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">A Slider EN Nav-SubTitle is required and
                                            recommended to
                                            be
                                            unique.</div>
                                        <!--end::Description-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">Slider AR Nav-SubTitle</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="nav_subtitle_ar" class="form-control mb-2"
                                            placeholder="Slider EN Nav-SubTitle" value="{{ old('nav_subtitle_ar') }}">
                                        <!--end::Input-->
                                        @error('nav_subtitle_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">A Slider EN Nav-SubTitle is required and
                                            recommended to
                                            be
                                            unique.</div>
                                        <!--end::Description-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">Slider EN Overview</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="overview_en" class="form-control mb-2"
                                            placeholder="Slider EN Nav-SubTitle" value="{{ old('overview_en') }}">
                                        <!--end::Input-->
                                        @error('overview_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">A Slider EN Overview is required and
                                            recommended to
                                            be
                                            unique.</div>
                                        <!--end::Description-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">Slider AR Overview</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="overview_ar" class="form-control mb-2"
                                            placeholder="Slider EN Nav-SubTitle" value="{{ old('overview_ar') }}">
                                        <!--end::Input-->
                                        @error('overview_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">A Slider ar Overview is required and
                                            recommended to
                                            be
                                            unique.</div>
                                        <!--end::Description-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->

                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->

                        </div>
                    </div>
                    <!--end::Tab pane-->

                </div>
                <!--end::Tab content-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href="{{ route('dashboard.slider_image.index') }}" id="kt_ecommerce_add_product_cancel"
                        class="btn btn-light me-5">Cancel</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                        <span class="indicator-label">Save Changes</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Main column-->
            <div></div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Container-->
</div>



@endsection