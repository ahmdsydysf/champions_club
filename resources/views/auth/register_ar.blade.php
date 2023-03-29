<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Champion's Academy" />
    <meta name="image" content="{{ asset('web_assets/ico/favicon.png') }}" />

    <!-- fontawesome  -->
    <link rel="stylesheet" href="{{ asset('web_assets/loginandout/all.min.css') }}">
    <!-- fonts google -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('web_assets/loginandout/bootstrap.min.css') }}">
    <!-- normalize -->
    <link rel="stylesheet" href="{{ asset('web_assets/loginandout/normalize.css') }}">
    <!-- stylesheet  -->

    <link rel="stylesheet" href="{{ asset('web_assets/loginandout/sign-in.css') }}">
    <!-- icon -->
    <link rel="icon" href="{{ asset('web_assets/ico/favicon.png') }}">
    <title> تسجيل جديد </title>
</head>

<body>

    <!-- start of nav bar  and mega menu -->


    <div class="row mx-0">
        <div class="col-sm-12 col-md-6">
            <div class="slider_section slider_details ">
                <h1> أفضل طريقة <br> للتخطيط لمستقبلك تحتاج إلينا </h1>
                <p> هناك إمكانات لا حصر لها عند التخطيط لخطوتك <br> التالية ، لذا نحن في انتظار انضمامك
                    البطل </p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class=" slider_details side_right_details">
                <div class="mb-5">
                    <img style="width:150px !important;height:150px !important"
                        src="{{ asset('web_assets/ico/favicon.png') }}" alt="" srcset="">
                    <h5 class="text-center">تسجيل جديد</h5>
                    <a href="{{ route('login') }}"> {{ 'لدي حساب بالفعل '}} </a>

                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <x-text-input id="name" class="form-control" placeholder="اسم المستخدم" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                    <x-text-input id="email" class="form-control" placeholder="الايميل" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <x-text-input id="password" class="form-control" placeholder="الباسوورد" type="password"
                        name="password" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <x-text-input id="password_confirmation" placeholder="تأكيد الباسوورد" class="form-control"
                        type="password" name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                    <x-primary-button class="btn sign_button">
                        {{ 'تسجيل' }}
                    </x-primary-button>


                </form>


            </div>
        </div>
    </div>


    <!-- javascripts links -->
    <!-- bootstrap 5.0v scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="{{ asset('web_assets/loginandout/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
