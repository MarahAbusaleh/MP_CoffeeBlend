@extends('Layout.master')
@section('title', 'Profile')
@section('content')

    <!----------------------------------------------- Header ----------------------------------------------->

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">User Profile</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span><span>Services</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--///////////////////////////////////////// END Of Header //////////////////////////////////////////-->

    <!-------------------------------------------- User Profile -------------------------------------------->

    <section class="ftco-section ftco-cart">
        <div class="container rounded">
            <div class="row">
                <div class="col-lg-4 col-md-3">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle" width="300px" src="{{ asset(Auth::user()->image) }}">
                    </div>
                </div>
                <div class="col-lg-8 col-md-5">
                    <div class="p-3 py-5">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Name</label>
                                <input type="text" class="form-control" placeholder="" name="name"
                                    value="{{ Auth::user()->name }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Email</label>
                                <input type="text" class="form-control" placeholder="" name="email"
                                    value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="labels">Address</label>
                                <input type="text" class="form-control" name="address"
                                    value="{{ Auth::user()->address }}" placeholder="Enter Your Address">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Enter Your Phone Number"
                                    name="mobile" value="{{ Auth::user()->mobile }}">
                            </div>
                        </div>
                        <br><br>
                        <center>
                            <div>
                                <p class="col-lg-4 text-center"><a href="#" class="btn btn-primary py-3 px-4">Save
                                        Profile</a></p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        <div class="billing_form container" data-aos="fade-up" data-aos-duration="2000" style="padding-top: 35px;">
            <h3 class="form_title mb_30">Your Orders</h3>
            <div class="form_wrap">
                <div class="checkout_table table-responsive">
                    <table class="table text-center mb_50">
                        <thead class="text-uppercase text-uppercase">
                            <tr>
                                <th>Order Number</th>
                                <th>Order Address</th>
                                <th>Order Status</th>
                                <th>Order Total Price</th>
                                <th>View More Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Irbid</td>
                                <td>Done</td>
                                <td>23.0 JOD</td>
                                <td>
                                    <a href="order-detalis.html" class="nav-link">
                                        <span class="icon icon-list"></span>
                                        <span
                                            class=" d-flex justify-content-center align-items-center"><small></small></span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!--/////////////////////////////////////// END Of User Profile //////////////////////////////////////-->
    <hr style="border-top: 1px solid gray;">

@endsection
