@extends('web.layout.app')

@section('custom_css')
    <script src="{{ asset('web_assets/js/jquery.min.js') }}"></script>
    <style>
        input:not('radio') {
            height: calc(2.25rem + 2px) !important;

        }

        input[type='text'] {
            height: calc(2.25rem + 2px) !important;

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

        button.submit-btn {
            border: none;
            background: #f65935;
            color: #fff;
            height: 54px;
            border: 1px solid #eaebee;
            padding: 0 40px;
            font-weight: 600;
        }

        button.submit-btn:hover {
            border: none;
            background: #405089;
            color: #f65935;
            height: 54px;
            border: 1px solid #405089;
            padding: 0 40px;
            font-weight: 600;
        }

        button.add-new {
            border: none;
            background: #405089;
            color: #f65935;
            height: 54px;
            border: 1px solid #405089;
            padding: 0 40px;
            font-weight: 600;
        }

        button.add-new:hover {
            border: none;
            background: #f65935;
            color: #fff;
            height: 54px;
            border: 1px solid #eaebee;
            padding: 0 40px;
            font-weight: 600;
        }

        .contact .add-new-player-form {
            border-radius: 5px;
            background: #fff;
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
    <section class="page-header mt-1">
        <div class="container">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Suggest Sport</li>
            </ol>
            <h2>Suggest Sport</h2>
            <p>Sports suggestion based on your personal data.</p>
        </div>
        <!-- end container -->
    </section>
    <!-- end page-header -->
    <section class="contact">
        <div class="container">
            @if ($errors->any())
                <div class="alert-danger">PLZ Check your Data carfully !! and Try Again</div>
            @endif
            <form id="suggest" action="">
                <div class="form-container">
                    <div class="row g-3 add-new-player-form p-5">
                        <div class="col-md-3 col-sm-4 col-12    gender-input">
                            <label for="inputAddress2" class="form-label">Gender</label>
                            <select id="gender" name="gender" class="form-control ">
                                <option value="1">Female</option>
                                <option value="2">Male</option>

                            </select>

                            @if ($errors->any())
                                @error('gender.' . $i)
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            @endif
                        </div>
                        <div class="col-md-3 col-sm-4 col-12    age-input">
                            <label for="inputAddress2" class="form-label">Age</label>
                            <input id="age" type="number" name="age" class="form-control important-input"
                                min="5" id="inputAddress2" placeholder="age">
                            @if ($errors->any())
                                @error('age.' . $i)
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            @endif
                        </div>
                        <div class="col-md-3 col-sm-4 col-12   height-input">
                            <label for="inputAddress" class="form-label">Height</label>
                            <input data-reset='on' id="height" type="number" name="Height" class="form-control important-input"
                                min="70"  placeholder="Height">
                            @if ($errors->any())
                                @error('hight.' . $i)
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            @endif
                        </div>
                        <div class="col-md-3 col-sm-4 col-12    weight-input">
                            <label for="inputAddress2" class="form-label">weight</label>
                            <input id="weight" type="number" name="weight" class="form-control important-input"
                                min="20" id="inputAddress2" placeholder="Weight">
                            @if ($errors->any())
                                @error('weight.' . $i)
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            @endif
                        </div>



                        <div class="col-md-6 col-sm-6 col-12  order-md-6  gender-input mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="disease1" value=""
                                    id="flexCheckDefault" checked />
                                <label class="form-check-label" for="flexCheckDefault">chest illness</label>
                            </div>

                            <!-- Checked checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="disease2" value=""
                                    id="flexCheckChecked" checked />
                                <label class="form-check-label" for="flexCheckChecked">chronic diseases</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="disease3" value=""
                                    id="flexCheckChecked" checked />
                                <label class="form-check-label" for="flexCheckChecked">bacterial infection</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12  order-md-6  gender-input mt-3">
                            <!-- Default radio -->
                            <div class="form-check">
                                <input class="form-check-input flexRadioDefault" type="radio" name="flexRadioDefault"
                                    value="1" id="flexRadioDefault1" />
                                <label class="form-check-label" for="flexRadioDefault1"> self child </label>
                            </div>

                            <!-- Default checked radio -->
                            <div class="form-check">
                                <input class="form-check-input flexRadioDefault" type="radio" name="flexRadioDefault"
                                    value="2" id="flexRadioDefault2" checked />
                                <label class="form-check-label" for="flexRadioDefault2"> social child </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input flexRadioDefault" type="radio" name="flexRadioDefault"
                                    value="3" id="flexRadioDefault2" checked />
                                <label class="form-check-label" for="flexRadioDefault2"> moving child </label>
                            </div>
                        </div>
                    </div>
                    <!-- Suggest btn-->
                    <div class="row">
                        <div class="col-6 my-5 ">
                            <button form="suggest" type="submit"
                                class="submit-btn btn btn-primary reg float-left">Suggest</button>
                        </div>

                    </div>

<div id="detail" style="display: none">
    <div   class="container col-12 order-12 sport-details my-3">
        <div class="row col-sm-12">
            <div class="card col-sm-12 full_sport_details">
                <div class="card-header sport_title">
                </div>
                <div class="card-body">
                    <h5 id="ajName" class="card-title sport_subtitle">.............</h5>
                    <p id="ajDesc" class="card-text sport_overview">.......................</p>

                </div>
            </div>

        </div>

    </div>
</div>

                </div>
                {{-- </div> --}}

            </form>




        </div>
    </section>
    <!-- end contact -->
@endsection
@section('custom_js')
    <script>
        $(document).ready(function() {


            $('#suggest').on('submit', function(e) {
                e.preventDefault();
                var height = $('#height').val();
                var gender = $('#gender').val();
                var age = $('#age').val();
                var weight = $('#weight').val();
                var flexRadioDefault = $(".flexRadioDefault:checked").val();
                var disease1 = new Array();
                $('input[name="disease1"]:checked').each(function() {
                    disease1.push(this.value);
                });
                var disease2 = new Array();
                $('input[name="disease2"]:checked').each(function() {
                    disease2.push(this.value);
                });
                var disease3 = new Array();
                $('input[name="disease3"]:checked').each(function() {
                    disease3.push(this.value);
                });
                $.ajax({
                    type: "get",
                    url: "{{ route('dynamicSuggest.fetch') }}",
                    data: {
                        height: height,
                        gender: gender,
                        age: age,
                        weight: weight,
                        flexRadioDefault: flexRadioDefault,
                        disease1: disease1,
                        disease2: disease2,
                        disease3: disease3,
                    },
                    success: function(data) {
                        // console.log(data);
                        // var result = $.parseJSON(data);

                        // for (var i = 0; i < result.length; i++) {
                        //     var obj = result[i];

                            // console.log(obj.arrivalTime);

                        // var result = $.parseJSON(msg);
                        $('#detail').html(data);
                        $("#detail").css("display", "block");

                        // $('#ajDesc').html(result[1]);

                    }
                });
            });
        });
    </script>
@endsection
