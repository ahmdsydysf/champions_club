@extends('dash.layouts.app')

@section('page_title' , 'Edit feedRecommend')

@section('content')


<div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div class="container-xxl">
        <!--begin::Form-->
        <form id="kt_ecommerce_add_product_form"
            class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
            data-kt-redirect="{{ route('dashboard.feedRecommend.index') }}" method="POST"
            action="{{ route('dashboard.feedRecommend.update' , ['feedRecommend' => $sportDietLink->id]) }}">
            @csrf
            @method('PUT')


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
                                        <label class="required form-label">link_title_en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="link_title_en" class="form-control mb-2"
                                            placeholder="link_title_en" value="{{ $sportDietLink->link_title_en }}">
                                        <!--end::Input-->
                                        @error('link_title_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">link_title_ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="link_title_ar" class="form-control mb-2"
                                            placeholder="link_title_ar" value="{{ $sportDietLink->link_title_ar }}">
                                        <!--end::Input-->
                                        @error('link_title_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">Sports</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select" name="sport_id"
                                            data-placeholder="Select a variation"
                                            data-kt-ecommerce-catalog-add-product="product_option">
                                            <option></option>
                                            @foreach ($sports as $sport )

                                            <option {{ $sportDietLink->sport_id == $sport->id ? 'selected' : '' }}
                                                value="{{ $sport->id }}">
                                                {{ $sport->sport_subtitle_en }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">url</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="url" class="form-control mb-2" placeholder="url"
                                            value="{{ $sportDietLink->url }}">
                                        <!--end::Input-->
                                        @error('url')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>




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
                    <a href="{{ route('dashboard.feedRecommend.index') }}" id="kt_ecommerce_add_product_cancel"
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