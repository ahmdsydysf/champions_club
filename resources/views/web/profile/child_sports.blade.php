@extends('web.layout.app')
@section('custom_css')
<style>
    button.submit-btn.reg {
        border: none;
        background: #f65935;
        color: #fff;
        height: 54px;
        border: 1px solid #eaebee;
        padding: 0 40px;
        font-weight: 600;
    }

    button.submit-btn.reg:hover {
        border: none;
        background: #405089;
        color: #fff;
        height: 54px;
        border: 1px solid #405089;
        padding: 0 40px;
        font-weight: 600;
    }

    .post-content {
        background-color: #dee2e6;
        border-radius: 5px;
        margin-bottom: 25px;
        padding: 35px;
    }

    h4 span,
    h5 span {
        color: #526199;
    }

    .table td,
    .table th {
        vertical-align: inherit !important;
    }

    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .custom-select {
        display: inline-block;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem 1.75rem .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        vertical-align: middle;
        background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right .75rem center/8px 10px no-repeat;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .contact .add-new-player-form {
        border-radius: 5px;
        background: #c9c9c9;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1), 0 8px 30px rgba(0, 0, 0, 0.1);

    }

    .sport-details {
        position: relative;
        padding: 30px;
        border: 1px solid gainsboro;
        border-radius: 10px;
    }

    .form-container .add-new-player-form span button.cls-form {
        height: 40px;
        line-height: 40px;
        display: inline-block;
        background: #f65935;
        color: #fff;
        padding: 0 20px;
        font-weight: 600;
        font-size: 12px;
        position: absolute;
        top: 0;
        right: 0;
        z-index: 12;
        border: none;
        border-top-right-radius: 5px;
        cursor: pointer;
    }

    .form-container .add-new-player-form span button.cls-form:hover {
        background: #405089;
        text-decoration: none;
    }

    .add-new-player-form {
        position: relative;
    }
</style>
@endsection
@section('content')
<section class="page-header">
    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('main.Home') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('main.Child Sports') }}</li>
        </ol>
        <h2>{{ __('main.Child Profile') }}</h2>
        <p>{{ __('main.Profile title') }}</p>
    </div>
    <!-- end container -->
</section>
<!-- end page-header -->
<section class="blog">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                <aside class="sidebar pull-left">
                    <div class="widget categories">
                        <h4 class="widget-title">{{ __('main.Profile') }}</h4>
                        <ul>

                            <li class="{{ Request::segment(3) == 'childProfile' ? 'active' : '' }}"><a
                                    href="{{ route('childProfile' , $child->id ) }}">{{
                                    __('main.Profile Info') }}</a>
                            </li>
                            <li class="{{ Request::segment(3) == 'mySports' ? 'active' : '' }}"><a
                                    href="{{ route('childSports', $child->id) }}">{{ __('main.My Sports') }}</a></li>
                            <li class="{{ Request::segment(3) == 'sportsDiet' ? 'active' : '' }}">
                                <a href="{{ route('childSportDiet' , ['child_id'=>$child->id]) }}">
                                    {{ __('main.Your diet plan') }}
                                </a>
                            </li>
                        </ul>
                        <!-- end side-menu -->
                    </div>
                    <!-- end widget -->

                    <style>

                    </style>

                </aside>
                <!-- end side-bar -->
            </div>
            <!-- end col-4 -->
            <div class="col-md-8 col-12">
                <section class="" style="padding-top:10px !important">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h2>{{ __('main.Child All Sports') }}</h2>
                                </div>
                                <!-- end section-title -->
                            </div>
                            <!-- end col-12 -->
                            <div class="col-12">
                                <table class="table table-hover"
                                    dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
                                    <thead>
                                        <tr>

                                            <th scope="col">{{ __('main.Sport Name') }}</th>
                                            <th scope="col">{{ __('main.Start Date') }}</th>
                                            <th scope="col">{{ __('main.End Date') }}</th>
                                            <th scope="col">{{ __('main.Attendance Days') }}</th>
                                            <th scope="col">{{ __('main.Absent Days') }}</th>
                                            <th scope="col">{{ __('main.Level') }}</th>
                                            <th scope="col">{{ __('main.Renew') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ( $child_mem_details as $mem)
                                        <tr>
                                            @if (app()->getLocale() == 'ar')
                                            <td>{{ $mem->sport->sport_title_ar}}</td>
                                            @else
                                            <td>{{ $mem->sport->sport_title_en}}</td>
                                            @endif
                                            <td>{{ $mem->start_date}}</td>
                                            <td>{{ $mem->end_date}}</td>
                                            <td>
                                                <?php
$attend=App\Models\Attendance::where('membership_details_id',$mem)->where('child_id',$child->id)->where('attend',1)->get();
$Absent=App\Models\Attendance::where('membership_details_id',$mem)->where('child_id',$child->id)->where('attend',0)->get();

                                               ?>
                                               {{   $attend->count() }}</td>
                                            <td>{{  $Absent->count() }}</td>
                                            <td>{{ $child->level}}</td>
                                            <td>
                                                @if ($mem->end_date > now()->format('Y-m-d'))
                                                <button type="button" class="btn btn-lg submit-btn reg" disabled>{{
                                                    __('main.Renew') }}</button>
                                                @else
                                                <form action="{{ route('renewSport') }}" method="get">
                                                    @csrf
                                                    <input type="hidden" value="{{ $child->id }}" name="child_id">
                                                    <input type="hidden" value="{{ $mem->sport->id }}" name="sport_id">
                                                    <button type="submit" class="btn btn-lg submit-btn reg">{{
                                                        __('main.Renew') }}</button>
                                                </form>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>

                                </table>



                            </div>


                            <!-- end col-12 -->


                        </div>

                    </div>
                    <div class="container my-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h2>{{ __('main.Add New Sport') }}</h2>
                                </div>
                                <form id="add-player"
                                    action="{{ route('addAnotherChildSport' , ['child_id'=> $child->id]) }}"
                                    method="POST">
                                    @csrf
                                    <div class="form-container">
                                        <div class="row g-3 add-new-player-form p-5">
                                            <div class="col-6 select-sport">
                                                <label for="inputState" class="form-label">{{ __('main.Select Sport')
                                                    }}</label>
                                                <select id="inputState" onchange="handleSportChange($(this))"
                                                    name="select_sport"
                                                    class="form-control custom-select allSports important-input">
                                                    <option value="" selected>{{ __('main.Select Sport') }}</option>


                                                    @foreach ($sport as $spo)
                                                    @if (app()->getLocale() == 'en')

                                                    <option value="{{ $spo->id }}">{{ $spo->sport_title_en }}</option>
                                                    @else
                                                    <option value="{{ $spo->id }}">{{ $spo->sport_title_ar }}</option>

                                                    @endif

                                                    @endforeach


                                                </select>
                                                @error('select_sport')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-6 trainer-days">
                                                <label for="inputState12" class="form-label">{{ __('main.Select Days')
                                                    }}</label>
                                                <select data-reset='clear' id="inputState12" name="select_days"
                                                    class="form-control custom-select selected-days important-input">
                                                    <option selected>{{ __('main.Days From Here') }}</option>
                                                </select>

                                            </div>
                                            <div class="col-12 start-end-date">
                                                <div class="form-group ">
                                                    <label for="start-date" class="form-label mt-2">
                                                        {{ __('main.Start Date')}}
                                                    </label>
                                                    <input type="date" required
                                                        class="startDate form-control important-date" name="start_date"
                                                        id="start-date" onchange="adjustDate(this)">
                                                    <label for="end-date" class="form-label mt-2">{{ __('main.End Date')
                                                        }}</label>
                                                    <input type="date" required
                                                        class="endDate form-control important-date" name="end_date"
                                                        id="end-date" disabled>
                                                </div>


                                            </div>
                                            {{-- <div class="col-6 trainer-level">
                                                <label for="inputState1" class="form-label">{{ __('main.Level')
                                                    }}</label>
                                                <select id="inputState1" name="level"
                                                    class="form-control custom-select important-input">
                                                    <option value="1" selected>{{
                                                        __('main.Amateur') }}</option>
                                                    <option value="2">{{
                                                        __('main.Mid level') }}</option>
                                                    <option value="3">{{
                                                        __('main.Professional') }}</option>
                                                </select>
                                            </div> --}}
                                            <div class="col-6 row justify-content-end align-content-end">
                                                <button form="add-player"
                                                    class="submit-btn btn btn-primary reg col-12 ">{{
                                                    __('main.Register') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
            </div>
</section>
</div>
<!-- end col-8 -->
</div>
<!-- end row -->
</div>
<!-- end container -->

</section>
@endsection
@section('custom_js')
<script>
    let tomorrow = new Date();
            tomorrow.setDate(tomorrow.getDate() + 1);
            // Set the default start date to tomorrow
            document.getElementById("start-date").valueAsDate = tomorrow;


            let startDate = new Date(document.getElementById("start-date").value);
            let endDate = new Date(startDate);
            endDate.setMonth(endDate.getMonth() + 1);
            document.getElementById("end-date").valueAsDate = endDate;

            function adjustDate(event) {
                event.setAttribute('data-status', 'on');
                var targetDiv = document.querySelector('input[data-status]');
                if (document.contains(targetDiv)) {
                    // Get tomorrow's date
                    function updateEndDate() {
                        let startDate = new Date(targetDiv.value);
                        let selectedDate = new Date(targetDiv.value);
                        if (selectedDate < tomorrow) {
                            targetDiv.valueAsDate = tomorrow;
                        } else {

                            let endDate = new Date(startDate);
                            endDate.setMonth(endDate.getMonth() + 1);
                            targetDiv.nextElementSibling.nextElementSibling.valueAsDate = endDate;
                        }
                    }

                    // Function to update the end date when the start date is changed

                    updateEndDate();
                    event.removeAttribute('data-status');
                }
            }
    function handleSportChange(trigger) {
    let sportId = trigger.val();
    let _token = $('input[name="_token"]').val();
    $.ajax({
        url: '{{ route('childSportData') }}',
        type: 'POST',
        data: { sport_id: sportId, _token: _token },
        success: function (response) {
            console.log(response);
            trigger.parent().parent().find('.full_sport_details').html(response.data);
            trigger.parent().parent().find('.selected-days').html(`<option selected value='${response.dayid}'>${response.firstday} & ${response.secondday}</option>`);
        },
        error: function (xhr, status, error) {
            var err = eval('(' + xhr.responseText + ')');
            alert(err.Message);
        }
    });
}
</script>
@endsection
