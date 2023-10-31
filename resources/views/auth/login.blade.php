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
    {{-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Coffee<small>Blend</small></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>
            </button>
        </div>
    </nav> --}}
    <!--//////////////////////////////////////////// END Of Nav ////////////////////////////////////////////-->

    <!------------------------------------------------- Login ------------------------------------------------->

    {{-- <x-guest-layout> --}}
    <!-- Session Status -->
    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg.png)"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="centered container" style="margin-top: -60px">
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
                                <hr style="border-top: 3px solid balack;">
                                <p>Or Login With</p>

                                <a href="{{ route('google-auth') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35"
                                        height="35" viewBox="0 0 48 48">
                                        <path fill="#fbc02d"
                                            d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                        </path>
                                        <path fill="#e53935"
                                            d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                        </path>
                                        <path fill="#4caf50"
                                            d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                        </path>
                                        <path fill="#1565c0"
                                            d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                        </path>
                                    </svg>
                                    </i>
                                </a>
                                <a href="{{ route('facebook-auth') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35"
                                        height="35" viewBox="0 0 48 48">
                                        <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993"
                                            x2="40.615" y1="9.993" y2="40.615"
                                            gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#2aa4f4"></stop>
                                            <stop offset="1" stop-color="#007ad9"></stop>
                                        </linearGradient>
                                        <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)"
                                            d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z">
                                        </path>
                                        <path fill="#fff"
                                            d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z">
                                        </path>
                                    </svg>
                                    </i>
                                </a>
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
