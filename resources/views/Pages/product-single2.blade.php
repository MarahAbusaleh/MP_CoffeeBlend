@extends('Layout.master')
@section('title', '')
@section('content')

    <!----------------------------------------------- Header ----------------------------------------------->

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({{ asset('images/bg_3.jpg') }});"
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

    <!--///////////////////////////////////////// END Of Header //////////////////////////////////////////-->

    <!--------------------------------------- Product Detail Section --------------------------------------->

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="images/Dark Coffee.png" class="image-popup"><img src="{{ asset($product->image) }}"
                            class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <br><br>
                    <h3>{{ $product->name }}</h3>
                    <p class="price"><span>{{ $product->price }} JOD</span></p>
                    <p>
                        {{ $product->description }}
                    </p>
                    <div class="row mt-4">
                        @if ($product->category->name == 'Coffee Beans')
                            <div class="col-md-6">
                                <div class="form-group d-flex">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">0.25 kg</option>
                                            <option value="">0.5 kg</option>
                                            <option value="">1.0 kg</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="w-100"></div>

                    </div>
                    <br>
                    <p><a href="{{ route('addProductToCart', $product->id) }}" class="btn btn-primary py-3 px-5">Add to
                            Cart</a></p>
                </div>
            </div>
        </div>
    </section>

    <!--///////////////////////////////// END Of Product Detail Section //////////////////////////////////-->

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
                @foreach ($Items as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="menu-entry">
                            <a href="#" class="img"
                                style="background-image: url('{{ asset($item->image) }}');"></a>
                            <div class="text text-center pt-4">
                                <h3><a href="product-single.html">{{ $item->name }}</a></h3>
                                @if ($item->category->name == 'Coffee Beans')
                                    <p><span style="color: red;">*</span>Select</p>
                                    <div class="dropdown">
                                        <button class="btn btn-primary btn-outline-primary dropdown-toggle" type="button"
                                            id="weightDropdown" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Weight
                                        </button>
                                        <div class="dropdown-menu weigthdm" aria-labelledby="weightDropdown">
                                            <a class="dropdown-item weightdi" href="#">0.25 kg</a>
                                            <a class="dropdown-item weightdi" href="#">0.5 kg</a>
                                            <a class="dropdown-item weightdi" href="#">1 kg</a>
                                        </div>
                                    </div>
                                @endif
                                <p class="price" style="margin-top: 15px;"><span>{{ $item->price }} JOD</span></p>
                                <p><a href="{{ route('addProductToCart', $item->id) }}" class="btn btn-primary">Add to
                                        Cart</a></p>
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
