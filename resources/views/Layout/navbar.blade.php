<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" type="image/png" href="../images/SClogo.png" />
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    {{-- <link rel="stylesheet" href="css/style2.css" /> --}}
    <!-- <style>
  .vsc-controller{
   white-space-collapse: collapse;
   text-warp: warp;
   user-select: none;
  }
  .beans-video-wrp video{
   position: absolute;
   top: 0;
   left: 0;
   right: 0;
   width: 100%;
   height: 100%;
   object-fit: cover;
   object-position: center;
  }
 </style> -->
</head>

<body>
    <!----------------------------------------------- NavBar ----------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"">Coffee<small>Blend</small></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @if (request()->is('/')) active @endif">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item @if (request()->is('menupage')) active @endif">
                        <a href="{{ url('/menupage') }}" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item @if (request()->is('services')) active @endif">
                        <a href="{{ url('/services') }}" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item @if (request()->is('shop')) active @endif">
                        <a href="{{ url('/shop') }}" class="nav-link">Shop</a>
                    </li>
                    <li class="nav-item @if (request()->is('about')) active @endif">
                        <a href="{{ url('/about') }}" class="nav-link">About</a>
                    </li>
                    <li class="nav-item @if (request()->is('contact')) active @endif">
                        <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item cart">
                        <a href="{{ route('cart') }}" class="nav-link">
                            <span class="icon icon-shopping_cart"></span>
                            @if (Cart::count() > 0)
                                <span class="bag d-flex justify-content-center align-items-center">
                                    <small>{{ Cart::count() }}</small>
                                </span>
                            @endif
                        </a>
                    </li>
                    @auth
                        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                                <li class="nav-item dropdown">
                                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                        data-bs-toggle="dropdown" aria-expanded="false"
                                        style="padding-top: 15px; padding-bottom: 15px">
                                        <img src="{{ Auth::user()->image }}" alt="Image" width="35" height="35"
                                            class="rounded-circle" style="background: white">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                        aria-labelledby="drop2">
                                        <div class="message-body">
                                            <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                                                <i class="ti ti-user fs-6"></i>
                                                <p class="mb-0 fs-3">{{ Auth::user()->name }}</p>
                                            </a>
                                            <a href="{{ url('myProfile') }}"
                                                class="d-flex align-items-center gap-2 dropdown-item">
                                                <i class="ti ti-user fs-6"></i>
                                                <p class="mb-0 fs-3">My Profile</p>
                                            </a>
                                            <a href="{{ route('logout') }}"
                                                class="btn btn-white btn-outline-white mx-3 mt-2 d-block">Logout
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    @else
                        <li>
                            <a href="{{ route('login') }}" class="btn btn-white btn-outline-white"
                                style="margin-top: 17px; margin-left: 5px">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!--//////////////////////////////////////////// END Of Nav ////////////////////////////////////////////-->
