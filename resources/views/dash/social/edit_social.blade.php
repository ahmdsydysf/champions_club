@extends('dash.layouts.app')

@section('page_title' , 'Edit Social')

@section('content')


<div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div class="container-xxl">
        <!--begin::Form-->
        <form id="kt_ecommerce_add_product_form"
            class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
            action="{{ route('dashboard.social.update' , ['social' => $socialLink->id]) }}">
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
                                        <label class="required form-label">facebook</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="facebook" class="form-control mb-2"
                                            placeholder="facebook" value="{{ $socialLink->facebook }}">
                                        <!--end::Input-->
                                        @error('facebook')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">twitter</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="twitter" class="form-control mb-2"
                                            placeholder="twitter" value="{{ $socialLink->twitter }}">
                                        <!--end::Input-->
                                        @error('twitter')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">instgram</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="instgram" class="form-control mb-2"
                                            placeholder="instgram" value="{{ $socialLink->instgram }}">
                                        <!--end::Input-->
                                        @error('instgram')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">youtube</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="youtube" class="form-control mb-2"
                                            placeholder="youtube" value="{{ $socialLink->youtube }}">
                                        <!--end::Input-->
                                        @error('youtube')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">linkedin</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="linkedin" class="form-control mb-2"
                                            placeholder="linkedin" value="{{ $socialLink->linkedin }}">
                                        <!--end::Input-->
                                        @error('linkedin')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

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
