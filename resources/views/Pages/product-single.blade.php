@extends('Layout.master')
@section('title', 'Product Detail')
@section('header title', 'Product Detail')
@section('header', 'Product Detail')
@section('content')

    <!--------------------------------------- Product Detail Section --------------------------------------->

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="images/black coffee.jpg" class="image-popup"><img src="{{ asset($Item->image) }}" class="img-fluid"
                            alt="{{ $Item->name }}"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{ $Item->name }}</h3>
                    <p class="price"><span>{{ $Item->price }} JOD</span></p>
                    <p>
                        {{ $Item->description }}
                    </p>
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
            @php
                use Illuminate\Support\Str;
            @endphp
            <div class="row">
                @foreach ($Items as $Item)
                    <div class="col-md-3">
                        <div class="menu-entry">
                            <a href="#" class="img" style="background-image: url('{{ asset($Item->image) }}')"></a>
                            <div class="text text-center pt-4">
                                <h3><a href="#">{{ Str::limit($Item->name, 15) }}</a></h3>
                                <p>
                                    {{ Str::limit($Item->description, 50) }}
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
