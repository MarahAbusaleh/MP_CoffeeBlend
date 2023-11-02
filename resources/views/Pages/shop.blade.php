@extends('Layout.master')
@section('title', 'Shop')
@section('content')

    <!----------------------------------------------- Header ----------------------------------------------->

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Order Online</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Shop</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--////////////////////////////////////////// END Of Header //////////////////////////////////////////-->

    <!--------------------------------------------- Categories ---------------------------------------------->

    <section class="ftco-menu mb-5 pb-5">
        <div class="container">
            <div class="row" style=" margin-right: 0px;">
                @foreach ($categories as $category)
                    <div class="col-lg-4" style="border: 1px solid gray; margin: 0px;">
                        <div class="">
                            <div class="text text-center pt-4">
                                <div>
                                    <img src="{{ asset($category->image1) }}" height="360px" width="100%">
                                </div>
                                <p style="margin-top: 120px;"><a href="{{ route('showProducts', $category->id) }}"
                                        class="btn btn-primary"
                                        style="height: fit-content; width: fit-content; font-size: 15px;">{{ $category->name }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!--//////////////////////////////////////// END Of Categories ////////////////////////////////////////-->

    <hr style="border-top: 1px solid gray;">

@endsection
