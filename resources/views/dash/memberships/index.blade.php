@extends('dash.layouts.app')

@section('page_title' , 'Memberships')

@section('content')

<!--begin::sliders-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">

        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <!--begin::Add slider-->
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
                    <th class="text-end ">Member Id</th>
                    <th class="text-end ">Member Name</th>
                    <th class="text-end ">Sport</th>
                    <th class="text-end ">User Name</th>
                    <th class="text-end ">Invoice Date</th>
                    <th class="text-end ">Fees</th>

                    <th class="text-end ">Sport Days</th>
                    <th class="text-end ">Action </th>
                </tr>
                <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-bold text-gray-600">

                @foreach ( $rows as $row )

                <!--begin::Table row-->
                <tr>  <td class="text-end pe-0">

                        <!--begin::Thumbnail-->
                            <span class="fw-bolder">{{ $row->id ?? '' }}</span>


                </td>

                    <!--begin::Category=-->
                    <td class="text-end pe-0">

                            <!--begin::Thumbnail-->
                            <a href="{{ route('dashboard.memberships.show' ,$row->id ) }}" class="symbol symbol-50px">
                                <span class="fw-bolder">{{ $row->child->name ?? '' }}</span>
                            </a>


                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">{{$row->sport->sport_title_en ?? '' }}</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">{{$row->child->user->name ?? ''  }}</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">{{ $row->invoice->invoice_date ?? ''  }}</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">{{ $row->fees }}</span>
                    </td>
                    <!--end::SKU=-->


                     <!--begin::SKU=-->
                     <td class="text-end pe-0">
                        <span class="fw-bolder">{{ $row->sportDays->firstday->en_day ?? '' }} - {{ $row->sportDays->secondday->en_day ?? ''  }}</span>
                    </td>
                    <!--end::SKU=-->
                     <!--begin::Action=-->
                     <td class="text-end">
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
                                <a href="{{ route('dashboard.memberships.edit' ,$row->id ) }}"
                                    class="menu-link px-3">Attendance</a>
                            </div>



                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->

                @endforeach

            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
        <div class="row">

            {{-- {{ $rows->links() }} --}}

        </div>
    </div>
    <!--end::Card body-->
</div>
<!--end::sliders-->

@endsection
