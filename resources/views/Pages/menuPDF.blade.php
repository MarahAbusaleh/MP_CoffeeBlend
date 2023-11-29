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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ public_path('css/open-iconic-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ public_path('css/animate.css') }}" />

    <link rel="stylesheet" href="{{ public_path('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ public_path('css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ public_path('css/magnific-popup.css') }}" />

    <link rel="stylesheet" href="{{ public_path('css/aos.css') }}" />

    <link rel="stylesheet" href="{{ public_path('css/ionicons.min.css') }}" />

    <link rel="stylesheet" href="{{ public_path('css/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet" href="{{ public_path('css/jquery.timepicker.css') }}" />

    <link rel="stylesheet" href="{{ public_path('css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ public_path('css/icomoon.css') }}" />
    <link rel="stylesheet" href="{{ public_path('css/style.css') }}" />

</head>

<body>
    <!----------------------------------------------- NavBar ----------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Coffee<small>Blend</small></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @if (request()->is('/')) active @endif">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item @if (request()->is('menuPage')) active @endif">
                        <a href="{{ url('/menuPage') }}" class="nav-link">Menu</a>
                    </li>
                    {{-- <li class="nav-item @if (request()->is('services')) active @endif">
                        <a href="{{ url('/services') }}" class="nav-link">Services</a>
                    </li> --}}
                    <li class="nav-item @if (request()->is('showProducts/1')) active @endif">
                        <a href="{{ route('showProducts', 1) }}" class="nav-link">Shop</a>
                    </li>
                    <li class="nav-item @if (request()->is('about')) active @endif">
                        <a href="{{ url('/about') }}" class="nav-link">About</a>
                    </li>
                    <li class="nav-item @if (request()->is('contact_us')) active @endif">
                        <a href="{{ url('/contact_us') }}" class="nav-link">Contact</a>
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
                                        <img src="{{ asset(Auth::user()->image) }}" alt="Image" width="35"
                                            height="35" class="rounded-circle" style="background: white">
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

    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Coffee Blend</span>
            <h2 class="mb-4">Our Menu</h2>
        </div>
    </div>
    <!------------------------------------------- Drinks Section ------------------------------------------->

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="mb-5 pb-3">

                    @php
                        use Illuminate\Support\Str;
                    @endphp

                    <!-- Hot Drinks -->
                    <div class="row">
                        <h3 class="col-md-12 heading-pricing ftco-animate">Hot Drinks</h3><br>
                        @foreach ($hotDrinks as $hot)
                            <div class="col-md-6 pricing-entry d-flex ftco-animate">
                                <a href="{{ route('itemDetails', $hot->id) }}">
                                    <div class="img" style="background-image: url({{ asset($hot->image) }});">
                                    </div>
                                </a>

                                <div class="desc pl-3">
                                    <div class="d-flex text align-items-center">
                                        <h3>
                                            <span>
                                                <a href="{{ route('itemDetails', $hot->id) }}"
                                                    style="color: white">{{ $hot->name }}</a>
                                            </span>
                                        </h3>
                                        <span class="price">{{ $hot->price }} JOD</span>
                                    </div>
                                    <div class="d-block">
                                        <p>{{ Str::limit($hot->description, 53) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <br>
                    <br>

                    <!-- Cold Drinks -->
                    <div class="row">
                        <h3 class="col-md-12 heading-pricing ftco-animate">Cold Drinks</h3><br>
                        @foreach ($coldDrinks as $cold)
                            <div class="col-md-6 pricing-entry d-flex ftco-animate">
                                <a href="{{ route('itemDetails', $cold->id) }}">
                                    <div class="img" style="background-image: url({{ asset($cold->image) }});">
                                    </div>
                                </a>

                                <div class="desc pl-3">
                                    <div class="d-flex text align-items-center">
                                        <h3>
                                            <span>
                                                <a href="{{ route('itemDetails', $cold->id) }}"
                                                    style="color: white">{{ $cold->name }}</a>
                                            </span>
                                        </h3>
                                        <span class="price">{{ $cold->price }} JOD</span>
                                    </div>
                                    <div class="d-block">
                                        <p>{{ $cold->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
    </section>

    <!--///////////////////////////////////////// END Of Drinks///////////////////////////////////////////-->

    <hr style="border-top: 1px solid gray;">

    <!----------------------------------------------- Footer ----------------------------------------------->
    <footer class="footer" id="footer">
        <div class="containerf">
            <div class="row">
                <div class="footer-col col-lg-2 col-md-6 col-sm-6">
                    <h4>Our Location</h4>
                    <ul>
                        <li><a href="#">Jordan</a></li>
                        <li><a href="#">Irbid</a></li>
                        <li><a href="#">Abd-Alhamed Sharaf Street</a></li>
                    </ul>
                </div>
                <div class="footer-col col-lg-2 col-md-6 col-sm-6">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Order status</a></li>
                        <li><a href="#">Payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col col-lg-3 col-md-4 col-sm-6">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href="#">marah.abusaleh12@gmail.com</a></li>
                        <li><a href="#">+962 7 9987 6142</a></li>
                    </ul>
                </div>
                <div class="footer-col col-lg-2 col-md-4 col-sm-6">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"> <i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-facebook'></i></i></a>
                        <a href="#"><i class='bx bxl-linkedin'></i></i></a>
                        <a href="#"><i class='bx bxl-github'></i></i></i></a>
                        <a href="#"><i class='bx bxl-discord'></i></i></i></a>
                    </div>
                </div>
                <div class="footer-col col-lg-3 col-md-4 col-sm-6">
                    <img class="imgfoot" src="{{ asset('./images/footerimage.png') }}" alt="">
                </div>
            </div>
        </div>
    </footer>
    <!--///////////////////////////////////////// END Of Footer /////////////////////////////////////////-->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

    <!----------------------------------------------- Script ----------------------------------------------->
    <script src="{{ public_path('js/jquery.min.js') }}"></script>
    <script src="{{ public_path('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ public_path('js/popper.min.js') }}"></script>
    <script src="{{ public_path('js/bootstrap.min.js') }}"></script>
    <script src="{{ public_path('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ public_path('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ public_path('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ public_path('js/owl.carousel.min.js') }}"></script>
    <script src="{{ public_path('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ public_path('js/aos.js') }}"></script>
    <script src="{{ public_path('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ public_path('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ public_path('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ public_path('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=false"></script>
    <script src="{{ public_path('js/google-map.js') }}"></script>
    <script src="{{ public_path('js/main.js') }}"></script>
    {{-- <script src="{{ asset('css/paypal.js') }}"></script> --}}

    {{-- <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/main2.js"></script> --}}


    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }

                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

    <script>
        $(document).ready(function() {


            if ($('.bbb_viewed_slider').length) {
                var viewedSlider = $('.bbb_viewed_slider');

                viewedSlider.owlCarousel({
                    loop: true,
                    margin: 30,
                    autoplay: true,
                    autoplayTimeout: 6000,
                    nav: false,
                    dots: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        575: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        991: {
                            items: 4
                        },
                        1199: {
                            items: 6
                        }
                    }
                });

                if ($('.bbb_viewed_prev').length) {
                    var prev = $('.bbb_viewed_prev');
                    prev.on('click', function() {
                        viewedSlider.trigger('prev.owl.carousel');
                    });
                }

                if ($('.bbb_viewed_next').length) {
                    var next = $('.bbb_viewed_next');
                    next.on('click', function() {
                        viewedSlider.trigger('next.owl.carousel');
                    });
                }
            }


        });
    </script>
    <script>
        $(document).ready(function() {
            var quantitiy = 0;
            $(".quantity-right-plus").click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($("#quantity").val());

                // If is not undefined

                $("#quantity").val(quantity + 1);

                // Increment
            });

            $(".quantity-left-minus").click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($("#quantity").val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $("#quantity").val(quantity - 1);
                }
            });
        });
    </script>
</body>

</html>
