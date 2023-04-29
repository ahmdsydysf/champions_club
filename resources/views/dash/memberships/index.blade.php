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
