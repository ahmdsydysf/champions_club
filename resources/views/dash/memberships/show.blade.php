@extends('dash.layouts.app')

@section('page_title', 'show member')

@section('content')


    <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div class="container-xxl">
            <!--begin::Form-->
            <form id="kt_ecommerce_add_product_form"
                class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" <!--begin::Aside
                column-->
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
                                            <h2>Membership Data</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <div>
                                            <div class="d-flex flex-wrap gap-5">

                                            <div class="fv-row w-100 flex-md-root">                                                <!--begin::Label-->
                                                <label class="required form-label">Member name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="name" class="form-control mb-2"
                                                    placeholder="name" value="{{ $row->child->name ?? '' }}">
                                                <!--end::Input-->



                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">                                                <!--begin::Label-->
                                                <label class="required form-label">bithdate</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="bithdate" class="form-control mb-2"
                                                    placeholder="bithdate" value="{{ $row->child->bithdate ?? '' }}">
                                                <!--end::Input-->

                                            </div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-wrap gap-5">

                                                <div class="fv-row w-100 flex-md-root">                                                <!--begin::Label-->
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
                                            <div class="fv-row w-100 flex-md-root">                                                <!--begin::Label-->
                                                <!--begin::Label-->
                                                <label class="required form-label">width</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="width" class="form-control mb-2"
                                                    placeholder="width" value="{{ $row->child->width ?? '' }}">
                                                <!--end::Input-->

                                            </div>
                                            </div>
                                            <!--end::Input group-->
                                            <div class="d-flex flex-wrap gap-5">
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">                                                <!--begin::Label-->

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
                                            <div class="fv-row w-100 flex-md-root">                                                <!--begin::Label-->

                                                <!--begin::Label-->
                                                <label class="required form-label">User</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="user_id " class="form-control mb-2"
                                                    placeholder="user_id " value="{{ $row->child->user->name ?? '' }}">
                                                <!--end::Input-->

                                            </div>
                                        </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required form-label">user_relationship</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="user_relationship" class="form-control mb-2"
                                                    placeholder="user_relationship"
                                                    value="{{ $row->child->user_relationship ?? '' }}">
                                                <!--end::Input-->

                                            </div>
                                            <!--end::Input group-->

                                        </div>
<hr>
<div class="card-header">
    <div class="card-title">
        <h2>Sport Data</h2>
    </div>
</div>
<div>
    <div class="mb-10 fv-row fv-plugins-icon-container" style="margin-top: 20px">
        <!--begin::Label-->
        <label class="required form-label">sport name</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" name="name" class="form-control mb-2"
            placeholder="name" value="{{$row->sport->sport_title_en ?? '' }}">
        <!--end::Input-->



    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="mb-10 fv-row fv-plugins-icon-container">
        <!--begin::Label-->
        <label class="required form-label">Member Fees</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" name="bithdate" class="form-control mb-2"
            placeholder="bithdate" value="{{ $row->sport->membership_fees ?? '' }}">
        <!--end::Input-->

    </div>
    <!--end::Input group-->
      <!--begin::Input group-->
      <div class="mb-10 fv-row fv-plugins-icon-container">
        <!--begin::Label-->
        <label class="required form-label">Sport Days</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="text" name="bithdate" class="form-control mb-2"
            placeholder="bithdate" value="{{ $row->sportDays->firstday->en_day ?? '' }} - {{ $row->sportDays->secondday->en_day ?? ''  }}">
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
                                            <h2>Attendance - {{ $row->child->name ?? '' }} ({{ $row->start_date ?? '' }} - {{ $row->end_date ?? '' }}) </h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->

                                    <div class="card-body pt-0">
                                        <!--begin::Input group-->
                                        <!--begin::Input group-->
@foreach ($attendance as $attend)


                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required form-label">Session Date</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="bithdate" class="form-control mb-2"
                                            placeholder="bithdate" value="{{ $attend->session_date ?? '' }}">
                                        </div>

                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required form-label">Session no</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="bithdate" class="form-control mb-2"
                                            placeholder="bithdate" value="{{ $attend->session_no ?? '' }}">
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="required form-label">attend</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->

                                            <div class="form-group">
                                                <div class="icheck-success d-inline">
                                                    <input type="radio" name="is_atend{{ $counter }}"
                                                        onchange="func({{ $counter }})" value="1"
                                                        @if ($attend->attend == 1) checked @endif id="radioSuccess1">
                                                    <label for="radioSuccess1">
                                                        حضور
                                                    </label>
                                                </div>
                                                <div class="icheck-danger d-inline">
                                                    <input type="radio" name="is_atend{{ $counter }}"
                                                        onchange="func({{ $counter }})"
                                                        @if ($attend->attend == 0) checked @endif value="2"
                                                        id="radioSuccess2">
                                                    <label for="radioSuccess2">
                                                        غياب
                                                    </label>
                                                </div>

                                        </div>
                                        <!--end::Input group-->
                                    </div>

                                    {{-- end body --}}
                                </div>

                                @endforeach
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
