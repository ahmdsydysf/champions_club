@extends('dash.layouts.app')

@section('page_title' , 'All General Services')

@section('content')

<!--begin::sliders-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">

        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <!--begin::Add slider-->
            <button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal"
                data-bs-target="#kt_modal_new_general_service">Add New</button>
            <!--end::Add slider-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5 table-striped-columns"
            id="kt_ecommerce_sliders_table">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0 ">

                    <th class="text-center ">service_en</th>
                    <th class="text-center ">service_ar</th>
                    <th class="text-center ">overview_en</th>
                    <th class="text-center ">overview_ar</th>

                    <th class="text-center ">Actions</th>
                </tr>
                <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-bold text-gray-600">

                @foreach ( $data as $row )

                <!--begin::Table row-->
                <tr>


                    <!--begin::SKU=-->
                    <td class="text-center pe-0">
                        <span class="fw-bolder">{{ $row->service_en }}</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::SKU=-->
                    <td class="text-center pe-0">
                        <span class="fw-bolder">{{ $row->service_ar }}</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::SKU=-->
                    <td class="text-center pe-0">
                        <span class="fw-bolder">{{ $row->overview_ar }}</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::SKU=-->
                    <td class="text-center pe-0">
                        <span class="fw-bolder">{{ $row->overview_en }}</span>
                    </td>
                    <!--end::SKU=-->



                    <!--begin::Action=-->
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-light-success btn-active-light-info"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <button class="btn btn-sm btn-light btn-active-light-primary w-100"
                                    data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_new_general_service_edit_{{ $row->id }}">Edit</button>
                            </div>

                            <div class="menu-item px-3">
                                <button type="button" class="btn btn-sm btn-light btn-active-light-danger w-100"
                                    data-bs-toggle="modal" data-bs-target="#kt_modal_{{ $row->id }}_del">
                                    delete
                                </button>
                            </div>



                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!-- Modal -->

                {{-- edit model --}}
                <!--begin::Modal - New Card-->
                <div class="modal fade" id="kt_modal_new_general_service_edit_{{ $row->id }}" tabindex="-1"
                    aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2>Edit Event</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                transform="rotate(-45 6 17.3137)" fill="black" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                transform="rotate(45 7.41422 6)" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                <!--begin::Form-->
                                <form id="kt_modal_new_card_form_{{ $row->id }}" method="post"
                                    enctype="multipart/form-data" class="form text-center"
                                    action="{{ route('dashboard.general_service.update' , ['general_service' => $row->id ]) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold form-label mb-2">service EN</label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Enter service EN" name="service_en"
                                                value="{{ $row->service_en }}" />
                                            <!--end::Input-->

                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold form-label mb-2">service AR</label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Enter service AR" name="service_ar"
                                                value="{{ $row->service_ar }}" />
                                            <!--end::Input-->

                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold form-label mb-2">overview EN</label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Enter overview EN" name="overview_en"
                                                value="{{ $row->overview_en }}" />
                                            <!--end::Input-->

                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold form-label mb-2">overview AR</label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Enter overview AR" name="overview_ar"
                                                value="{{ $row->overview_ar }}" />
                                            <!--end::Input-->

                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>

                                    <!--end::Input group-->


                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" data-bs-dismiss="modal"
                                            id="kt_modal_new_card_form_{{ $row->id }}_cancel"
                                            class="btn btn-light me-3">Discard</button>
                                        <button type="submit" id="kt_modal_new_card_form_{{ $row->id }}_submit"
                                            class="btn btn-primary">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - New Card-->

                {{-- edit model --}}
                <div class="modal fade " tabindex="-1" id="kt_modal_{{ $row->id }}_del">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div
                            class="modal-content text-center alert alert-dismissible bg-light-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10">
                            <div class="modal-header">
                                <h5 class="modal-title">Are You Sure You want to Delete This Data</h5>


                            </div>

                            <div class="modal-body">
                                <span class="svg-icon svg-icon-5tx svg-icon-danger mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black">
                                        </rect>
                                        <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)"
                                            fill="black"></rect>
                                        <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)"
                                            fill="black"></rect>
                                    </svg>
                                </span>
                                <p>This is {{ $row->service_en }} - general service</p>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline btn-outline-danger btn-active-danger m-2"
                                    data-bs-dismiss="modal">Close</button>
                                <form id="kt_modal_{{ $row->id }}_del_form"
                                    action="{{ route('dashboard.general_service.destroy' , ['general_service' => $row->id ]) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')

                                </form>
                                <button type="submit" form="kt_modal_{{ $row->id }}_del_form"
                                    class="btn btn-danger m-2">Save changes</button>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
        <div class="row">

            {{ $data->links() }}

        </div>
    </div>
    <!--end::Card body-->
</div>
<!--end::sliders-->

<!--begin::Modal - New Card-->
<div class="modal fade" id="kt_modal_new_general_service" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Add New</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_new_card_form" method="post" enctype="multipart/form-data" class="form text-center"
                    action="{{ route('dashboard.general_service.store') }}">
                    @csrf

                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-bold form-label mb-2">service EN</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="Enter service EN"
                                name="service_en" value="{{ old('service_en') }}" />
                            <!--end::Input-->

                        </div>
                        <!--end::Input wrapper-->
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-bold form-label mb-2">service AR</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="Enter service AR"
                                name="service_ar" value="{{ old('service_ar') }}" />
                            <!--end::Input-->

                        </div>
                        <!--end::Input wrapper-->
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-bold form-label mb-2">overview EN</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="Enter overview EN"
                                name="overview_en" value="{{ old('overview_en') }}" />
                            <!--end::Input-->

                        </div>
                        <!--end::Input wrapper-->
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-bold form-label mb-2">overview AR</label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="Enter overview AR"
                                name="overview_ar" value="{{ old('overview_ar') }}" />
                            <!--end::Input-->

                        </div>
                        <!--end::Input wrapper-->
                    </div>



                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Card-->

@endsection
