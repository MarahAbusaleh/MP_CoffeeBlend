<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coffee Blend - Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/SClogo.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body style="background-color: #fdebd1;">
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="../assets/images/logos/logo.png" width="180" alt="">
                                </a>
                                <p class="text-center">Access To Your Dashboard</p>

                                @if (Session::has('error'))
                                    <div id="vola_message" class="alert alert-warning">{{ session::get('error') }}</div>
                                @endif

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div class="mt-4 col-md-12">
                                        <div class="form-group">
                                            <x-input-label for="login" :value="__('Email/Name/Phone')" />
                                            <x-text-input id="login" class="form-control block mt-1 w-full"
                                                type="text" name="login" :value="old('login')" required autofocus
                                                autocomplete="username" />
                                            <x-input-error :messages="$errors->get('login')" class="mt-2 text-red-700" />
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4 col-md-12">
                                        <div class="form-group">
                                            <x-input-label for="password" :value="__('Password')" />

                                            <x-text-input id="password" class="block mt-1 w-full form-control"
                                                type="password" name="password" required
                                                autocomplete="current-password" />

                                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-700" />
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <center>
                                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            </center>
                                        @endif
                                        <br>
                                        <x-primary-button class="col-lg-12 btn btn-primary py-3 px-4">
                                            {{ __('Log in') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
