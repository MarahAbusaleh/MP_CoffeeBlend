<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coffee Blend - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="../images/SClogo.png" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="overflow-y: hidden">
    <!----------------------------------------------- NavBar ----------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Coffee<small>Blend</small></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>
            </button>
        </div>
    </nav>
    <!--//////////////////////////////////////////// END Of Nav ////////////////////////////////////////////-->

    <!------------------------------------------------- Login ------------------------------------------------->

    {{-- <x-guest-layout> --}}
    <!-- Session Status -->
    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg.png)"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="centered container">
            <div class="row justify-content-center;margin-top: 10px">
                <div class="col-md-12">
                    <center><img src="images/logo.png" alt="Coffee Blend Logo" style="width: 50%; margin-top: -40px"
                            class="col-md-10">
                    </center>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <center>
                        <h3 class="mb-4 billing-heading" style="color: black; margin-top: -10px">Login to Your Account
                        </h3>
                    </center>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mt-4 col-md-12">
                            <div class="form-group">
                                <x-input-label for="login" :value="__('Email/Name/Phone')" style="color: black; font-size: 17px" />
                                <x-text-input id="login" class="form-control2 block mt-1 w-full" type="text"
                                    name="login" :value="old('login')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('login')" class="mt-2" />

                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mt-4 col-md-12">
                            <div class="form-group">
                                <x-input-label for="password" :value="__('Password')" style="color: black; font-size: 17px" />
                                <x-text-input id="password" class="block mt-1 w-full form-control2" type="password"
                                    name="password" required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <center><a href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a></center><br>
                            @endif

                            <center>
                                <x-primary-button class="col-md-10 btn btn-primary py-3 px-4" style="font-size: 17px;">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </center>
                            <p style=" text-align: center; color:black">
                                Don't have an account? <a href="{{ route('register') }}"
                                    style="text-decoration: underline;">Register Now</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- </x-guest-layout> --}}
    <!--/////////////////////////////////////////// END Of Login ///////////////////////////////////////////-->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
