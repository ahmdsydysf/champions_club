@extends('dash.layouts.app')

@section('page_title', 'Edit Sport')

@section('content')


<div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div class="container-xxl">
        <!--begin::Form-->
        <form id="kt_ecommerce_add_product_form"
            class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
            data-kt-redirect="{{ route('dashboard.sport.index') }}" method="POST" enctype="multipart/form-data"
            action="{{ route('dashboard.sport.update', ['sport' => $sport->id]) }}">
            @csrf
            @method('PUT')
            <!--begin::Aside column-->
            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                <!--begin::Thumbnail settings-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Sport Image</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body text-center pt-0">
                        <!--begin::Image input-->
                        <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                            style="background-image: url('{{ asset('uploads/sport/' . $sport->sport_image) }}')">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-150px h-150px"></div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="Change avatar">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <!--begin::Inputs-->
                                <input type="file" name="sport_image">
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
                        @error('sport_image')
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
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                            href="#kt_ecommerce_add_days_advanced">Days</a>
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
                                        <h2>General Option</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">sport_title_en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="sport_title_en" class="form-control mb-2"
                                            placeholder="sport_title_en" value="{{ $sport->sport_title_en }}">
                                        <!--end::Input-->
                                        @error('sport_title_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">sport_title_ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="sport_title_ar" class="form-control mb-2"
                                            placeholder="sport_title_ar" value="{{ $sport->sport_title_ar }}">
                                        <!--end::Input-->
                                        @error('sport_title_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">sport_subtitle_en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="sport_subtitle_en" class="form-control mb-2"
                                            placeholder="sport_subtitle_en" value="{{ $sport->sport_subtitle_en }}">
                                        <!--end::Input-->
                                        @error('sport_subtitle_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">sport_subtitle_ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="sport_subtitle_ar" class="form-control mb-2"
                                            placeholder="sport_subtitle_ar" value="{{ $sport->sport_subtitle_ar }}">
                                        <!--end::Input-->
                                        @error('sport_subtitle_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">sport_overview_en</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="sport_overview_en" class="form-control mb-2"
                                            placeholder="sport_overview_en" value="{{ $sport->sport_overview_en }}">
                                        <!--end::Input-->
                                        @error('sport_overview_en')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">sport_overview_ar</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="sport_overview_ar" class="form-control mb-2"
                                            placeholder="sport_overview_ar" value="{{ $sport->sport_overview_ar }}">
                                        <!--end::Input-->
                                        @error('sport_overview_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">membership_fees</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="membership_fees" class="form-control mb-2"
                                            placeholder="membership_fees" value="{{ $sport->membership_fees }}">
                                        <!--end::Input-->
                                        @error('membership_fees')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">membership_en_notes</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="membership_en_notes" class="form-control mb-2"
                                            placeholder="membership_en_notes" value="{{ $sport->membership_en_notes }}">
                                        <!--end::Input-->
                                        @error('membership_en_notes')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">membership_ar_notes</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="membership_ar_notes" class="form-control mb-2"
                                            placeholder="membership_ar_notes" value="{{ $sport->membership_ar_notes }}">
                                        <!--end::Input-->
                                        @error('membership_ar_notes')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->

                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">feed recommend</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea class="ckeditor form-control" name="feed_recommend">
                                                {{ $sport->feed_recommend }}
                                            </textarea>
                                        <!--end::Input-->
                                        @error('feed_recommend')
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
                                            @foreach ($days as $day)
                                            <option value="{{ $day->id }}" @foreach ($sportDays as $sublist) {{
                                                $sublist->firstday_id == $day->id ? 'selected' : '' }}
                                                @endforeach >
                                                {{ $day->en_day }}</option>
                                            @endforeach
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
                                            @foreach ($days as $day)

                                            <option value="{{ $day->id }}" @foreach ($sportDays as $sublist) {{
                                                $sublist->secondday_id == $day->id ? 'selected' : '' }}
                                                @endforeach >
                                                {{ $day->en_day }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required form-label">sport time</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->

                                        <input class="form-control  form-control-solid tPick" name="sport_time"
                                            @isset($sportDays[0]) value="{{ $sportDays[0]->sport_time }}" @endisset />

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
@section('custome_js')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
<script>
    $(".dPick").flatpickr();
        $(".tPick").flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
        });


</script>
@endsection
