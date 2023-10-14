@extends('Layout.master')
@section('title', '')
@section('content')

    <!----------------------------------------------- Header ----------------------------------------------->

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('{{ asset('images/bg_3.jpg') }}');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Product Detail</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Product
                                Detail</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--////////////////////////////////////////// END Of Header /////////////////////////////////////////-->

    <!--------------------------------------- Product Detail Section --------------------------------------->

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="images/black coffee.jpg" class="image-popup"><img src="{{ asset($Item->image) }}"
                            class="img-fluid" alt="{{ $Item->name }}"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{ $Item->name }}</h3>
                    <p class="price"><span>{{ $Item->price }} JOD</span></p>
                    <p>
                        {{ $Item->description }}
                    </p>
                    <div class="form-check mt-2">
                        <input type="checkbox" class="form-check-input" id="writeNameOnCup">
                        <label class="form-check-label" for="writeNameOnCup">Write my name on the cup</label>
                    </div>
                    <br>
                    <p><a href="{{ route('addItemToCart', $Item->id) }}" class="btn btn-primary py-3 px-5">Add to Cart</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--////////////////////////////////// END Of Product Detail Section /////////////////////////////////-->

    <!------------------------------------------ Related Product ------------------------------------------->

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Coffee Blend</span>
                    <h2 class="mb-4">Related Products</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($Items as $Item)
                    <div class="col-md-3">
                        <div class="menu-entry">
                            <a href="#" class="img" style="background-image: url('{{ asset($Item->image) }}')"></a>
                            <div class="text text-center pt-4">
                                <h3><a href="#">{{ $Item->name }}</a></h3>
                                <p>
                                    {{ $Item->description }}
                                </p>
                                <p class="price"><span>{{ $Item->price }} JOD</span></p>
                                <p>
                                    <a href="{{ route('addItemToCart', $Item->id) }}"
                                        class="btn btn-primary btn-outline-primary">Add to Cart</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--///////////////////////////////////// END Of Related Product /////////////////////////////////////-->

    <hr style="border-top: 1px solid gray;">

@endsection
