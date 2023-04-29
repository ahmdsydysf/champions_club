@extends('dash.layouts.app')

@section('page_title' , 'Attendance')

@section('content')


<div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div class="container-xxl">
        <!--begin::Form-->

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
                                        <h2>Attendance -[{{ $row->start_date ?? '' }} - {{ $row->end_date ?? '' }}]  </h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">

                                    <div class="box-body">
                                        <?php

                                        $counter = 1;

                                        ?>
                                        <?php
                                        $counterrrr = 1;
                                        ?>
                                        <form action="#" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 table-striped-columns"
            id="kt_ecommerce_sliders_table">  <thead>
                                                    <tr>
                                                        <th data-field="state" data-checkbox="false"></th>
                                                        <th data-field="id">#</th>
                                                        <th> Member Name</th>
                                                        <th> Absent/ Attend </th>
                                                        <th> Session Date</th>
                                                        <th> Session no</th>

                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    @foreach ($attendance as $index=>$attend)

                                                        <tr>
                                                            <td></td>
                                                            <td>{{ $index + 1 }}</td>
                                                            <td>

                                                                <input type="hidden" name="session_id" value="{{ $attend->session_id }}">

                                                                {{ $row->child->name ?? '' }}
                                                            </td>
                                                            <td width="15%">
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
                                                                            @if ( $attend->attend == 0) checked @endif value="2"
                                                                            id="radioSuccess2">
                                                                        <label for="radioSuccess2">
                                                                            غياب
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input type="text" name="room_rent_fees{{ $counter }}" readonly
                                                                    value="{{ $attend->session_date ?? '' }}" class="form-control"
                                                                    id="room_rent_fees{{ $counter }}"
                                                                    placeholder="{{ $attend->session_date ?? '' }}">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="room_rent_paid{{ $counter }}"
                                                                    value="{{ $attend->session_no ?? '' }}" class="form-control"
                                                                    id="room_rent_paid{{ $counter }}" placeholder="25">
                                                            </td>


                                                            <td>
                                                                <input type="text" name="notes{{ $counter }}" value="{{ $attend->notes }}"
                                                                    class="form-control" id="" placeholder="ملاحظات">
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        ++$counter;

                                                        if ($counter > count($attendance)) {
                                                        ?>
                                                    @break

                                                    <?php }
                                                        $counterrrr++;

                                                        ?>
                                                @endforeach

                                                <!-- Delete Modal -->



                                            </tbody>
                                        </table>
                                        <input type="hidden" name="counter" value="{{ $counterrrr }}">


                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">حفظ</button>
                                            {{-- <button type="button" class="btn btn-danger">إلغاء</button> --}}
                                        </div>
                                    </form>
                                </div>
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->

                        </div>
                    </div>
                    <!--end::Tab pane-->

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
