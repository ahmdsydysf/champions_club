@extends('dash.layouts.app')

@section('page_title', 'Annual Memberships')

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

                        <th class="text-end ">start date</th>
                        <th class="text-end ">end Date</th>
                        <th class="text-end ">Fees</th>

                        <th class="text-end ">Approved</th>
                        <th class="text-end ">Action </th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">

                    @foreach ($rows as $row)
                        <!--begin::Table row-->
                        <tr>
                            <td class="text-end pe-0">

                                <!--begin::Thumbnail-->
                                <span class="fw-bolder">{{ $row->id ?? '' }}</span>


                            </td>

                            <!--begin::Category=-->
                            <td class="text-end pe-0">

                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="fw-bolder">{{ $row->user->name ?? '' }}</span>
                                </a>


                            </td>
                            <!--end::Category=-->

                            <!--begin::SKU=-->
                            <td class="text-end pe-0">
                                <span class="fw-bolder">{{ $row->start_date ?? '' }}</span>
                            </td>
                            <!--end::SKU=-->
                            <!--begin::SKU=-->
                            <td class="text-end pe-0">
                                <span class="fw-bolder">{{ $row->end_date ?? '' }}</span>
                            </td>
                            <!--end::SKU=-->
                            <!--begin::SKU=-->
                            <td class="text-end pe-0">
                                <span class="fw-bolder">{{ $row->fees_paid }}</span>
                            </td>
                            <!--end::SKU=-->


                            <!--begin::SKU=-->
                            <td class="text-end pe-0">
                                <span class="fw-bolder">
                                    @if ($row->approved == 0)
                                        @if (app()->getLocale() == 'ar')
                                            قيد الانتظار
                                        @else
                                            pending
                                        @endif
                                    @endif

                                    @if ($row->approved == 1)
                                        @if (app()->getLocale() == 'ar')
                                            موافقة
                                        @else
                                            approved
                                        @endif
                                    @endif


                                    @if ($row->approved == 2)
                                        @if (app()->getLocale() == 'ar')
                                            رفض
                                        @else
                                            Cancelled
                                        @endif
                                    @endif
                                </span>
                            </td>
                            <!--end::SKU=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="{{ route('dashboard.annual-members.edit', $row->id) }}"
                                    class="btn btn-sm btn-light-success btn-active-light-info" title="approved"><i class="fa fa-check"></i></a>

                                    <a href="{{ route('dashboard.annual-members.show', $row->id) }}"
                                        class="btn btn-sm btn-light-danger btn-active-light-info" title="cancelled" >x</a>


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
