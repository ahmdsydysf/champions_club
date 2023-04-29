@extends('dash.layouts.app')

@section('page_title', 'show member')

@section('content')


    <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div class="container-xxl">
            <!--begin::Form-->
            <form id="kt_ecommerce_add_product_form"
                class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"

                <!--begin::Aside column-->
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                    <!--begin::Thumbnail settings-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>personal Image</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                                style="background-image: url('{{ asset('uploads/sport/' . $row->personal_image) }}')">
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

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Thumbnail settings-->
                    <!--begin::Thumbnail settings-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>birth Image</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                                style="background-image: url('{{ asset('uploads/sport/' . $row->birth_image) }}')">
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
                                href="#kt_ecommerce_add_product_general">General Data</a>
                        </li>
                        <!--end:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_days_advanced">Attendance</a>
                        </li>
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
                                            <h2>General Data</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div style="border:1px solid #ccc"> <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required form-label">Member name</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="name" class="form-control mb-2"
                                                placeholder="name" value="{{ $row->child->name ?? ''  }}">
                                            <!--end::Input-->



                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required form-label">bithdate</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="bithdate" class="form-control mb-2"
                                                placeholder="bithdate" value="{{ $row->child->bithdate ?? '' }}">
                                            <!--end::Input-->

                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required form-label">height</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="height" class="form-control mb-2"
                                                placeholder="height" value="{{ $row->child->height ?? '' }}">
                                            <!--end::Input-->

                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required form-label">width</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="width" class="form-control mb-2"
                                                placeholder="width" value="{{ $row->child->width ?? '' }}">
                                            <!--end::Input-->

                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required form-label">level</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="level" class="form-control mb-2"
                                                placeholder="level" value="{{ $row->child->level ?? '' }}">
                                            <!--end::Input-->

                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required form-label">User</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="user_id " class="form-control mb-2"
                                                placeholder="user_id " value="{{ $row->child->user->name ?? '' }}">
                                            <!--end::Input-->

                                        </div>
                                        <!--end::Input group-->
                                         <!--begin::Input group-->
                                         <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required form-label">user_relationship</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="user_relationship" class="form-control mb-2"
                                                placeholder="user_relationship" value="{{ $row->child->user_relationship ?? '' }}">
                                            <!--end::Input-->

                                        </div>
                                        <!--end::Input group-->

</div>


                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::General options-->

                            </div>
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="kt_ecommerce_add_days_advanced" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">

                                <!--begin::Variations-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Days</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->

                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <!--begin::Input group-->

                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required form-label">First Day</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select" name="firstday_id"
                                                data-placeholder="Select a variation"
                                                data-kt-ecommerce-catalog-add-product="product_option">
                                                <option></option>
                                                {{-- @foreach ($days as $day)
                                                    <option value="{{ $day->id }}"
                                                        @foreach ($sportDays as $sublist)
                                                        {{ $sublist->firstday_id  == $day->id ? 'selected' : '' }}
                                                         @endforeach >
                                                        {{ $day->en_day }}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>

                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required form-label">second Day</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select" name="secondday_id"
                                                data-placeholder="Select a variation"
                                                data-kt-ecommerce-catalog-add-product="product_option">
                                                <option></option>
                                                {{-- @foreach ($days as $day)

                                                    <option value="{{ $day->id }}"
                                                        @foreach ($sportDays as $sublist)
                                                        {{ $sublist->secondday_id  == $day->id ? 'selected' : '' }}
                                                         @endforeach >
                                                        {{ $day->en_day }}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required form-label">sport time</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->

                                            <input
                                            class="form-control  form-control-solid tPick"
                                            name="sport_time"
                                            {{-- @isset($sportDays[0])
                                            value="{{ $sportDays[0]->sport_time }}"
                                            @endisset --}}
                                             />

                                        </div>
                                        <!--end::Input group-->
                                    </div>

                                    {{-- end body --}}
                                </div>
                            </div>
                        </div>
                        {{-- end tab --}}
                    </div>
                    <!--end::Tab content-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('dashboard.sport.index') }}" id="kt_ecommerce_add_product_cancel"
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

