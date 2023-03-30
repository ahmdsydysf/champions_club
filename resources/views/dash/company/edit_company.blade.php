@extends('dash.layouts.app')

@section('page_title' , 'Edit Company')

@section('content')


<div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div class="container-xxl">
        <!--begin::Form-->
        <form id="kt_ecommerce_add_product_form"
            class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
            action="{{ route('dashboard.company.update' , ['company' => 1]) }}">
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
                                        <label class="required form-label">about master en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="about_master_en" class="form-control mb-2"
                                            placeholder="about master en" value="{{ $company->about_master_en }}">
                                        <!--end::Input-->
                                        @error('about_master_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">about master ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="about_master_ar" class="form-control mb-2"
                                            placeholder="about master ar" value="{{ $company->about_master_ar }}">
                                        <!--end::Input-->
                                        @error('about_master_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">about details en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="about_details_en" class="form-control mb-2"
                                            placeholder="about details en" value="{{ $company->about_details_en }}">
                                        <!--end::Input-->
                                        @error('about_details_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">about details ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="about_details_ar" class="form-control mb-2"
                                            placeholder="about details ar" value="{{ $company->about_details_ar }}">
                                        <!--end::Input-->
                                        @error('about_details_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">about video</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="about_video" class="form-control mb-2"
                                            placeholder="about video" value="{{ $company->about_video }}">
                                        <!--end::Input-->
                                        @error('about_video')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">sports title en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="sports_title_en" class="form-control mb-2"
                                            placeholder="sports title en" value="{{ $company->sports_title_en }}">
                                        <!--end::Input-->
                                        @error('sports_title_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">sports title ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="sports_title_ar" class="form-control mb-2"
                                            placeholder="sports title ar" value="{{ $company->sports_title_ar }}">
                                        <!--end::Input-->
                                        @error('sports_title_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">sports text en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="sports_text_en" class="form-control mb-2"
                                            placeholder="sports_text_en" value="{{ $company->sports_text_en }}">
                                        <!--end::Input-->
                                        @error('sports_text_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">sports text ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="sports_text_ar" class="form-control mb-2"
                                            placeholder="sports text ar" value="{{ $company->sports_text_ar }}">
                                        <!--end::Input-->
                                        @error('sports_text_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">services text en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="services_text_en" class="form-control mb-2"
                                            placeholder="services text en" value="{{ $company->services_text_en }}">
                                        <!--end::Input-->
                                        @error('services_text_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">services text ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="services_text_ar" class="form-control mb-2"
                                            placeholder="services_text_ar" value="{{ $company->services_text_ar }}">
                                        <!--end::Input-->
                                        @error('services_text_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">services_title_en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="services_title_en" class="form-control mb-2"
                                            placeholder="services_title_en" value="{{ $company->services_title_en }}">
                                        <!--end::Input-->
                                        @error('services_title_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">services_title_ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="services_title_ar" class="form-control mb-2"
                                            placeholder="services_title_ar" value="{{ $company->services_title_ar }}">
                                        <!--end::Input-->
                                        @error('services_title_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">membership_text_en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="membership_text_en" class="form-control mb-2"
                                            placeholder="membership_text_en" value="{{ $company->membership_text_en }}">
                                        <!--end::Input-->
                                        @error('membership_text_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">membership_text_ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="membership_text_ar" class="form-control mb-2"
                                            placeholder="membership_text_ar" value="{{ $company->membership_text_ar }}">
                                        <!--end::Input-->
                                        @error('membership_text_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">membership_title_en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="membership_title_en" class="form-control mb-2"
                                            placeholder="membership_title_en"
                                            value="{{ $company->membership_title_en }}">
                                        <!--end::Input-->
                                        @error('membership_title_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">membership_title_ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="membership_title_ar" class="form-control mb-2"
                                            placeholder="membership_title_ar"
                                            value="{{ $company->membership_title_ar }}">
                                        <!--end::Input-->
                                        @error('membership_title_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">news_text_en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="news_text_en" class="form-control mb-2"
                                            placeholder="news_text_en" value="{{ $company->news_text_en }}">
                                        <!--end::Input-->
                                        @error('news_text_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">news_text_ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="news_text_ar" class="form-control mb-2"
                                            placeholder="news_text_ar" value="{{ $company->news_text_ar }}">
                                        <!--end::Input-->
                                        @error('news_text_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">news_title_en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="news_title_en" class="form-control mb-2"
                                            placeholder="news_title_en" value="{{ $company->news_title_en }}">
                                        <!--end::Input-->
                                        @error('news_title_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">news_title_ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="news_title_ar" class="form-control mb-2"
                                            placeholder="news_title_ar" value="{{ $company->news_title_ar }}">
                                        <!--end::Input-->
                                        @error('news_title_ar')
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