@extends('Layout.master')
@section('title', 'Checkout')
@section('content')


    <!----------------------------------------------- Header ----------------------------------------------->

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(images/bg_3.jpg)" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Checkout</h1>
                        <p class="breadcrumbs">
                            <span class="mr-2"><a href="index.html">Home</a></span>
                            <span>Checout</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--///////////////////////////////////////// END Of Header //////////////////////////////////////////-->


    <!------------------------------------------- Payment Section ------------------------------------------->

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 ftco-animate">
                    @include('sweetalert::alert')
                    <form action="{{ route('submitCheckout') }}" method="POST"
                        class="col-lg-12 billing-form ftco-bg-dark p-3 p-md-5">
                        @csrf
                        <h3 class="mb-4 billing-heading">Payment Details</h3>
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">Firt Name</label>
                                    <input type="text" class="form-control" placeholder=""
                                        value="{{ Auth::user()->name }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country">Email Address</label>
                                    <input type="text" class="form-control" placeholder=""
                                        value="{{ Auth::user()->email }}" />
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="" name="mobile"
                                        value="{{ Auth::user()->mobile }}" required />
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="streetaddress">Address</label>
                                    <input type="text" class="form-control" placeholder="" name="address"
                                        value="{{ Auth::user()->address }}" required />
                                </div>
                            </div>
                            <div class="w-100"></div>
                            {{-- <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">Card Number</label>
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">CVV</label>
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailaddress">MM/YY</label>
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div> --}}
                        </div>

                        <!-- END -->

                        <div class="row mt-5 pt-3 d-flex">
                            <div class="col-md-12 d-flex">
                                <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                                    <h3 class="billing-heading mb-4">Cart Total</h3>
                                    <p class="d-flex">
                                        <span>Subtotal</span>
                                        <span></span>
                                        <span></span>
                                        <span>{{ Cart::subtotal() }} JOD</span>
                                    </p>
                                    <p class="d-flex">
                                        <span>Delivery</span>
                                        <span></span>
                                        <span></span>
                                        <span> JOD</span>
                                    </p>
                                    <p class="d-flex">
                                        <span>Discount</span>
                                        <span></span>
                                        <span></span>
                                        <span> JOD</span>
                                    </p>
                                    <hr />
                                    <p class="d-flex total-price">
                                        <span>Total</span>
                                        <span></span>
                                        <span></span>
                                        <span>{{ Cart::subtotal() }} JOD</span>
                                    </p>
                                    <p>
                                        <button href="" class="btn btn-primary py-3 px-4" type="submit">Place an
                                            order</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- .col-md-8 -->
            </div>
        </div>
    </section>

    <!--////////////////////////////////////// END Of Payment Section /////////////////////////////////////-->


@endsection
