@extends('Layout.master')
@section('title', 'Menu')
@section('content')

    <!----------------------------------------------- Header ----------------------------------------------->

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Our Menu</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--///////////////////////////////////////// END Of Header //////////////////////////////////////////-->

    <!------------------------------------------- Drinks Section ------------------------------------------->

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="mb-5 pb-3">

                    <!-- Hot Drinks -->
                    <div class="row">
                        <h3 class="col-md-12 heading-pricing ftco-animate">Hot Drinks</h3><br>
                        @foreach ($hotDrinks as $hot)
                            <div class="col-md-6 pricing-entry d-flex ftco-animate">
                                <div class="img" style="background-image: url({{ asset($hot->image) }});"></div>
                                <div class="desc pl-3">
                                    <div class="d-flex text align-items-center">
                                        <h3><span>{{ $hot->name }}</span></h3>
                                        <span class="price">{{ $hot->price }} JOD</span>
                                    </div>
                                    <div class="d-block">
                                        <p>{{ $hot->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Cold Drinks -->
                    <div class="row">
                        <h3 class="col-md-12 heading-pricing ftco-animate">Cold Drinks</h3><br>
                        @foreach ($coldDrinks as $cold)
                            <div class="col-md-6 pricing-entry d-flex ftco-animate">
                                <div class="img" style="background-image: url({{ asset($cold->image) }});"></div>
                                <div class="desc pl-3">
                                    <div class="d-flex text align-items-center">
                                        <h3><span>{{ $cold->name }}</span></h3>
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

@endsection
