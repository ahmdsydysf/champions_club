@extends('dash.layouts.app')

@section('page_title' , 'All Sponsors')

@section('content')



<!--begin::Toolbar-->
<div class="d-flex flex-wrap flex-stack my-5">
    <!--begin::Heading-->
    <h2 class="fs-2 fw-bold my-2">Sponsors
        <span class="fs-6 text-gray-400 ms-1">Card listed</span>
    </h2>
    <!--end::Heading-->
</div>
<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
    <!--begin::Add slider-->
    <button class="btn btn-large btn-primary btn-active-primary" data-bs-toggle="modal"
        data-bs-target="#kt_modal_new_card_sponsor">Add New</button>
    <!--end::Add slider-->
</div>
<!--end::Toolbar-->
<!--begin::Row-->

<div class="row g-6 g-xl-9">
    @foreach ($data as $row )
    <!--begin::Col-->
    <div class="col-md-6 col-xl-4">
        <!--begin::Card-->
        <!--begin::Card header-->
        <div class="card-header border-0 pt-9">
            <!--begin::Card toolbar-->
            <div class="row justify-content-around">

                <button class="btn btn-sm btn-light btn-active-light-primary col-2 " data-bs-toggle="modal"
                    data-bs-target="#kt_modal_new_card_sponsor_edit_{{ $row->id }}">Edit</button>



                <button type="button" class="btn btn-sm btn-light btn-active-light-danger col-2 " data-bs-toggle="modal"
                    data-bs-target="#kt_modal_{{ $row->id }}_del">
                    delete
                </button>

            </div>
            <!--end::Card toolbar-->
            <div class="card-body p-9">
                <div class="overlay-wrapper bgi-no-repeat
                 bgi-position-center bgi-size-contain card-rounded min-h-175px"
                    style="background-image:url('{{ asset('uploads/sponsor/' . $row->image )}}')">
                </div>
            </div>
        </div>
        <!--end:: Card header-->
        <!--begin:: Card body-->

        <!--end:: Card body-->
        <!--end::Card-->
    </div>
    <!--end::Col-->

    <div class="modal fade" id="kt_modal_new_card_sponsor_edit_{{ $row->id }}" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Edit Sponsor</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
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
                    <form id="kt_modal_new_card_form_{{ $row->id }}" method="post" enctype="multipart/form-data"
                        class="form text-center"
                        action="{{ route('dashboard.sponsor.update' , ['sponsor' => $row->id ]) }}">
                        @csrf
                        @method('PUT')
                        <div class="image-input image-input-outline" data-kt-image-input="true"
                            style="background-image: url('{{ asset('uploads/sponsor/' . $row->image) }}')">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-100px h-100px"
                                style="background-image: url('{{ asset('uploads/sponsor/' . $row->image) }}')">
                            </div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Edit-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="Change avatar">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <!--begin::Inputs-->
                                <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                <input type="hidden" name="avatar_remove">
                                <!--end::Inputs-->
                            </label>
                            <!--end::Edit-->
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black">
                            </rect>
                            <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black">
                            </rect>
                            <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black">
                            </rect>
                        </svg>
                    </span>
                    <p>This is sponsor</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline btn-outline-danger btn-active-danger m-2"
                        data-bs-dismiss="modal">Close</button>
                    <form id="kt_modal_{{ $row->id }}_del_form"
                        action="{{ route('dashboard.sponsor.destroy' , ['sponsor' => $row->id ]) }}" method="post">
                        @csrf
                        @method('DELETE')

                    </form>
                    <button type="submit" form="kt_modal_{{ $row->id }}_del_form" class="btn btn-danger m-2">Save
                        changes</button>

                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!--end::Row-->
<!--begin::Pagination-->
<div class="d-flex flex-stack flex-wrap pt-10">
    {{ $data->links() }}
</div>
<!--end::Pagination-->

{{-- add new --}}

<!--begin::Modal - New Card-->
<div class="modal fade" id="kt_modal_new_card_sponsor" tabindex="-1" aria-hidden="true">
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
                    action="{{ route('dashboard.sponsor.store') }}">
                    @csrf
                    <div class="image-input image-input-outline" data-kt-image-input="true"
                        style="background-image: url('{{ asset('uploads/sponsor/default_sponsor.png') }}')">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-100px h-100px"
                            style="background-image: url('{{ asset('uploads/sponsor/default_sponsor.png') }}')"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Edit-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                            data-bs-original-title="Change avatar">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--begin::Inputs-->
                            <input type="file" name="image" accept=".png, .jpg, .jpeg">
                            <input type="hidden" name="avatar_remove">
                            <!--end::Inputs-->
                        </label>
                        <!--end::Edit-->
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
