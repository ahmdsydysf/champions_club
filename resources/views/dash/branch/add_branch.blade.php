@extends('dash.layouts.app')

@section('page_title' , 'Add New Branch')

@section('content')


<div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div class="container-xxl">
        <!--begin::Form-->
        <form id="kt_ecommerce_add_product_form"
            class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
            data-kt-redirect="{{ route('dashboard.branch.index') }}" method="POST"
            action="{{ route('dashboard.branch.store') }}">
            @csrf

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
                                        <label class="required form-label">branch_en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="branch_en" class="form-control mb-2"
                                            placeholder="branch_en" value="{{ old('branch_en') }}">
                                        <!--end::Input-->
                                        @error('branch_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">branch_ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="branch_ar" class="form-control mb-2"
                                            placeholder="branch_ar" value="{{ old('branch_ar') }}">
                                        <!--end::Input-->
                                        @error('branch_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">address_en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="address_en" class="form-control mb-2"
                                            placeholder="address_en" value="{{ old('address_en') }}">
                                        <!--end::Input-->
                                        @error('address_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">address_ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="address_ar" class="form-control mb-2"
                                            placeholder="address_ar" value="{{ old('address_ar') }}">
                                        <!--end::Input-->
                                        @error('address_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">phone</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="phone" class="form-control mb-2" placeholder="phone"
                                            value="{{ old('phone') }}">
                                        <!--end::Input-->
                                        @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">whatsapp</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="whatsapp" class="form-control mb-2"
                                            placeholder="whatsapp" value="{{ old('whatsapp') }}">
                                        <!--end::Input-->
                                        @error('whatsapp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">email</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="email" class="form-control mb-2" placeholder="email"
                                            value="{{ old('email') }}">
                                        <!--end::Input-->
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">google_map</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="google_map" class="form-control mb-2"
                                            placeholder="google_map" value="{{ old('google_map') }}">
                                        <!--end::Input-->
                                        @error('google_map')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">master_branch</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="master_branch" class="form-control mb-2"
                                            placeholder="master_branch" value="{{ old('master_branch') }}">
                                        <!--end::Input-->
                                        @error('master_branch')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">working_hours_en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="working_hours_en" class="form-control mb-2"
                                            placeholder="working_hours_en" value="{{ old('working_hours_en') }}">
                                        <!--end::Input-->
                                        @error('working_hours_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="required form-label">working_hours_ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="working_hours_ar" class="form-control mb-2"
                                            placeholder="working_hours_ar" value="{{ old('working_hours_ar') }}">
                                        <!--end::Input-->
                                        @error('working_hours_ar')
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
                    <a href="{{ route('dashboard.branch.index') }}" id="kt_ecommerce_add_product_cancel"
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
