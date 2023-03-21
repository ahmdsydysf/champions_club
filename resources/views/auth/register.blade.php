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
    <title> Sign up </title>
</head>

<body>

    <!-- start of nav bar  and mega menu -->


    <div class="row mx-0">
        <div class="col-sm-12 col-md-6">
            <div class="slider_section slider_details ">
                <h1> the best way <br> to plan your future you need us</h1>
                <p>there are endless posibilities when planning your next <br> step so we are waiting for you to join
                    champion's</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class=" slider_details side_right_details">
                <div class="mb-5">
                    <img style="width:150px !important;height:150px !important"
                        src="{{ asset('web_assets/ico/favicon.png') }}" alt="" srcset="">
                    <h5 class="text-center">Sign up Now</h5>
                    <a href="{{ route('login') }}"> {{ __('Already registered?') }} </a>

                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <x-text-input id="name" class="form-control" placeholder="Enter Username" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                    <x-text-input id="email" class="form-control" placeholder="Enter Email" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <x-text-input id="password" class="form-control" placeholder="Enter Password" type="password"
                        name="password" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <x-text-input id="password_confirmation" placeholder="Enter Confirm-Password" class="form-control"
                        type="password" name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                    <x-primary-button class="btn sign_button">
                        {{ __('Register') }}
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