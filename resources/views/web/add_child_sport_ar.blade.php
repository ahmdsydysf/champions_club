@extends('web.layout.app')

@section('custom_css_ar')
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
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">ألرئيسية</a></li>
            <li class="breadcrumb-item active" aria-current="page">رياضة الاطفال</li>
        </ol>
        <h2>رياضة الاطفال</h2>
        <p>بصفته الشخص الذي يمتلك الحقوق القانونية للملكية الفكرية ، فهو مؤلف.</p>
    </div>
    <!-- end container -->
</section>
<!-- end page-header -->
<section class="contact">
    <div class="container">
        @if($errors->any())
        <div class="alert-danger">برجاء تحقق من بياناتك بعناية !! وحاول مرة أخرى</div>
        @endif
        <form id="add-player" action="{{ route('addChildSport') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-container">
                <div class="row g-3 add-new-player-form p-5">

                    <div class="col-md-3 col-sm-4 col-12 order-md-1 order-1 username-input">
                        <label for="inputEmail4" class="form-label">الاسم</label>
                        <input data-reset='on' type="text" name="name[0]" class="form-control important-input"
                            id="inputEmail4" placeholder="الاسم بالكامل">
                        @if($errors->any())
                        @error('name.'.$i)
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @endif
                        {{-- @error('name[0]')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="col-md-3 col-sm-4 col-12  order-md-2 order-2 birthdate-input">
                        <label for="inputPassword4" class="form-label">تاريخ الميلاد</label>
                        <input data-reset='on' type="date" name="birthdate[0]" class="form-control important-input"
                            id="inputPassword4">
                        @if($errors->any())
                        @error('birthdate.'.$i)
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @endif
                    </div>
                    <div class="col-md-3 col-sm-4 col-12  order-md-3 order-3 height-input">
                        <label for="inputAddress" class="form-label">الطول</label>
                        <input data-reset='on' type="number" name="hight[0]" class="form-control important-input"
                            min="100" id="inputAddress" placeholder="الطول">
                        @if($errors->any())
                        @error('hight.'.$i)
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @endif
                    </div>
                    <div class="col-md-3 col-sm-4 col-12  order-md-4 order-4 weight-input">
                        <label for="inputAddress2" class="form-label">الوزن</label>
                        <input data-reset='on' type="number" name="weight[0]" class="form-control important-input"
                            min="35" id="inputAddress2" placeholder="الوزن">
                        @if($errors->any())

                        @error('weight.'.$i)
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @endif
                    </div>
                    <div class="col-md-3 col-sm-4 col-12 my-md-3  order-md-5 order-5 personal-photo">
                        <label for="formFile" class="form-label">صورة شخصية</label>
                        <input data-reset='on' required class="form-control important-input" name="personal_image[0]"
                            type="file" id="formFile">
                        @if($errors->any())

                        @error('personal_image.'.$i)
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @endif
                    </div>
                    <div class="col-md-3 col-sm-4 col-12 my-md-3  order-md-6 order-6 birth-certificate">
                        <label for="formFile2" class="form-label">شهادة الميلاد</label>
                        <input data-reset='on' required class="form-control important-input" name="birth_image[0]"
                            type="file" id="formFile2">
                        @if($errors->any())

                        @error('birth_image.'.$i)
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @endif
                    </div>
                    <div class="col-md-3 col-sm-4 col-12 my-md-3  order-md-7 order-7 select-sport">
                        <label for="inputState" class="form-label">اختر رياضة</label>
                        <select id="inputState" onchange="handleSportChange($(this))" name="select_sport[0]"
                            class="form-control custom-select allSports important-input">
                            <option value="" selected>اختر رياضة</option>


                            @foreach ($sports as $sport)

                            <option value="{{ $sport->id }}">{{ $sport->sport_title_ar }}</option>

                            @endforeach


                        </select>
                        @if($errors->any())
                        @error('select_sport.'.$i)
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @endif

                    </div>
                    <div class="col-md-3 col-sm-4 col-12 my-md-3  order-md-8 order-8 trainer-level">
                        <label for="inputState1" class="form-label">مستوي المتدرب</label>
                        <select id="inputState1" name="level[0]" class="form-control custom-select important-input">
                            <option value="1" selected>هاوي</option>
                            <option value="2">متوسط المستوي</option>
                            <option value="3">محترف</option>
                        </select>
                        @if($errors->any())

                        @error('level.'.$i)
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @endif

                    </div>
                    <div class="col-md-3 col-sm-4 my-md-3  col-12  order-md-9 order-9 trainer-days row">
                        <label for="inputState12" class="form-label col-4">اختر الايام</label>
                        <select data-reset='clear' id="inputState12" name="select_days[0]"
                            class="form-control custom-select selected-days important-input col-8">
                            <option selected>الايام من هنا</option>
                        </select>
                        @if($errors->any())

                        @error('select_days.'.$i)
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @endif

                    </div>
                    <div class="col-md-5 my-md-3  order-md-10 order-sm-11 order-10 start-end-date">
                        <div class="form-group row">
                            <label for="start-date" class="col-2">تاريخ البدأ</label>
                            <input type="date" required class="startDate form-control col-4 important-date"
                                name="start_date[0]" id="start-date" onchange="adjustDate(this)">
                            <label for="end-date" class="col-2">تاريخ الانتهاء</label>
                            <input type="date" required class="endDate form-control col-4 important-date"
                                name="end_date[0]" id="end-date" disabled>
                        </div>
                        @if($errors->any())

                        @error('start_date.'.$i)
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @endif

                    </div>
                    <fieldset
                        class="col-md-4 col-sm-4 row align-items-baseline trained-before order-md-11 order-sm-10 order-11">
                        <label for="" class="col-6">هل سبق التدريب</label>

                        <div class="col-6 row my-3">
                            <div class="custom-control custom-radio col">
                                <input id="credit" value="1" name="paymentMethod[0]" type="radio"
                                    class="custom-control-input important-radio" checked="" required="">
                                <label class="custom-control-label" for="credit">نعم</label>
                            </div>
                            <div class="custom-control custom-radio col">
                                <input id="debit" value="0" name="paymentMethod[0]" type="radio"
                                    class="custom-control-input important-radio" required="">
                                <label class="custom-control-label" for="debit">لا</label>
                            </div>
                            @if($errors->any())

                            @error('paymentMethod.'.$i)
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @endif

                        </div>
                    </fieldset>
                    <div class="container col-12 order-12 sport-details my-3">
                        <div class="row col-sm-12">
                            <div class="card col-sm-6 full_sport_details">
                                <div class="card-header sport_title">
                                    .......... تفاصيل
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title sport_subtitle">.............</h5>
                                    <p class="card-text sport_overview">.......................</p>
                                    <h5 class="card-title">تكلفة الرياضة</h5>
                                    <p class="card-text membership_fees">...... جنيه</p>
                                </div>
                            </div>
                            <div class="form-floating col-sm-6">
                                <textarea data-reset="textarea" class="form-control h-100 important-input"
                                    placeholder="اترك اي تعليق تريد" id="floatingTextarea2"
                                    name="user_comments[0]"></textarea>
                                <label for="floatingTextarea2">تعليق</label>
                                @if($errors->any())

                                @error('user_comments.'.$i)
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                @endif

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-6 my-5 ">
                <button form="add-player" class="submit-btn btn btn-primary reg float-left">تسجيل</button>
            </div>
            <div class="col-6 my-5 ">
                <button type="button" class="btn btn-primary add-new float-right">اضافة طفل</button>
            </div>
        </div>

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

            // Get the "Add New" button and the submit button
            const addNewBtn = document.querySelector('.add-new');
            const submitBtn = document.querySelector('.reg');
            const addNewPlayerForm = document.querySelector('.add-new-player-form');
            const formContainer = document.querySelector('.form-container');
            let cloneCount = 1;
            let counter = 1;

            // Add an event listener to the "Add New" button
            addNewBtn.addEventListener('click', function () {


                const newFormGroup = document.createElement('div');
                const newcloseFormBTN = document.createElement('span');
                newcloseFormBTN.innerHTML = `
                <span>
                    <button type="button" onclick='del_form(this)' class="cls-form">
                    <i class="fa fa-remove"></i>
                    </button>
                </span>` ;

                newFormGroup.classList.add('form-group', 'row', 'p-5', 'add-new-player-form', 'g-3', 'mt-5');

                newFormGroup.appendChild(newcloseFormBTN);
                addNewPlayerForm.insertAdjacentElement('afterend', newFormGroup)


                // Get the input fields from the register form
                function cloneAndClearInputFields(inputClass) {
                    const nameInput = document.querySelector(inputClass);
                    const newNameInput = nameInput.cloneNode(true);

                    const elementsInsideDiv = newNameInput.querySelectorAll('.important-input'); // select all elements within the div
                    elementsInsideDiv.forEach((element) => {
                        const oldid = element.getAttribute('id'); // get the id attribute of the element
                        const newId = oldid + '_' + cloneCount; // generate unique ID
                        element.setAttribute('id', newId); // set the new ID
                        newNameInput.value = '';
                        cloneCount++;
                    });

                    const radioInsideDiv = newNameInput.querySelectorAll('.important-radio'); // select all radio within the div
                    radioInsideDiv.forEach((element) => {
                        const oldid = element.getAttribute('id'); // get the id attribute of the element
                        const newId = oldid + '_' + cloneCount; // generate unique ID
                        element.setAttribute('id', newId); // set the new ID
                        element.nextElementSibling.setAttribute('for', newId)
                        newNameInput.value = '';
                        cloneCount++;

                    });
                    const dateInsideDiv = newNameInput.querySelectorAll('.important-date'); // select   within the div
                    dateInsideDiv.forEach((element) => {
                        const oldid = element.getAttribute('id'); // get the id attribute of the element
                        const newId = oldid + '_' + cloneCount; // generate unique ID
                        element.setAttribute('id', newId); // set the new ID
                        cloneCount++;
                    });
                    const allInputsNames = newNameInput.querySelectorAll('[name]');

                    allInputsNames.forEach((element) => {
                        const oldName = element.getAttribute('name'); // get the id attribute of the element
                        const newName = oldName.replace('[0]', '[' + counter + ']'); // generate unique ID
                        element.setAttribute('name', newName); // set the new ID

                        // element.value = ''; // clear the input value
                        if (element.getAttribute('data-reset') == 'on') {
                            element.value = '';
                        }
                        if (element.getAttribute('data-reset') == 'clear') {
                            element.innerHTML = `<option selected>اختر يوم التدريب</option>`;
                        }

                    });

                    if (inputClass == '.sport-details') {
                        newNameInput.innerHTML = `
                        <div class="row col-sm-12">
                            <div class="card col-sm-6 full_sport_details">
                                <div class="card-header sport_title">
                                    .......... تفاصيل
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title sport_subtitle">.............</h5>
                                    <p class="card-text sport_overview">.......................</p>
                                    <h5 class="card-title">تكلفة الرياضة</h5>
                                    <p class="card-text membership_fees">...... جنيه</p>
                                </div>
                            </div>
                            <div class="form-floating col-sm-6">
                                <textarea name="user_comments[${counter}]" class="form-control h-100 important-input"
                                    placeholder="اترك تعليق" id="floatingTextarea2"></textarea>
                                <label for="floatingTextarea2">تعليق</label>
                            </div>
                        </div>

                        `
                    }
                    newFormGroup.appendChild(newNameInput);
                }

                inputsArray = ['.username-input', '.birthdate-input', '.height-input', '.weight-input', '.personal-photo', '.birth-certificate', '.select-sport', '.trainer-level', '.trainer-days', '.start-end-date', '.trained-before', '.sport-details']

                // Call the function with the input classes
                inputsArray.forEach(function (elem) {
                    cloneAndClearInputFields(elem);

                });

                counter++;
            });

            function del_form(dv) {
                dv.parentElement.parentElement.parentElement.remove();
            }


            const form = document.querySelector('form#add-player');

            form.addEventListener('submit', (event) => {
                event.preventDefault();

                const disabledInputs = document.querySelectorAll('input[disabled]');
                disabledInputs.forEach(element => {
                    element.removeAttribute('disabled');
                });
                // Submit the form using JavaScript
                form.submit();
            });


            // ajax to get sport selected data
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

    </div>
</section>
<!-- end contact -->

@endsection