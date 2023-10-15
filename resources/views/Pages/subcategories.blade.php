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
                        <h1 class="mb-3 mt-5 bread">Order Online</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Shop</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--////////////////////////////////////////// END Of Header //////////////////////////////////////////-->

    <!---------------------------------------------- Categories --------------------------------------------->

    <section class="ftco-menu mb-5 pb-5">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-lg-12 ftco-animate p-md-5">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical" style="width: 110%; margin-right: 50px; margin-left: -50px;">
                                @foreach ($categories as $category)
                                    <a class="nav-link" id="v-pills-0-tab" data-toggle="pill" href="#v-pills-0"
                                        role="tab" aria-controls="v-pills-0"
                                        aria-selected="true">{{ $category->name }}</a>
                                    {{-- <a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                        role="tab" aria-controls="v-pills-1" aria-selected="false">MACHINES</a>
                                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                        role="tab" aria-controls="v-pills-2" aria-selected="false">CUPS & MUGS</a>
                                    <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3"
                                        role="tab" aria-controls="v-pills-3" aria-selected="false">EQUIPMENT</a>
                                    <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4"
                                        role="tab" aria-controls="v-pills-4" aria-selected="false">PERSONAL --}}
                                    {{-- ACCESSORIES</a> --}}
                                @endforeach
                            </div>
                        </div>

                        <div class="col-md-12 d-flex align-items-center">
                            <div class="tab-content ftco-animate" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-0" role="tabpanel"
                                    aria-labelledby="v-pills-0-tab">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            <div class="col-lg-4 col-md-6 text-center">
                                                <div class="menu-wrap">

                                                    {{-- <img src="{{ asset($product->image) }}" class="menu-img img"> --}}
                                                    <a href="{{ route('productDetails', [$product->category_id, $product->id]) }}"
                                                        class="menu-img img mb-4"
                                                        style="background-image: url('{{ asset($product->image) }}');"></a>
                                                    <div class="text">
                                                        <h3><a href="product-single.html">{{ $product->name }}</a></h3>
                                                        @if ($product->category->name == 'Coffee Beans')
                                                            <p><span style="color: red;">*</span>Select</p>
                                                            <div class="dropdown">
                                                                <button
                                                                    class="btn btn-primary btn-outline-primary dropdown-toggle"
                                                                    type="button" id="weightDropdown"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    Weight
                                                                </button>
                                                                <div class="dropdown-menu weigthdm"
                                                                    aria-labelledby="weightDropdown">
                                                                    <a class="dropdown-item weightdi" href="#">0.25
                                                                        kg</a>
                                                                    <a class="dropdown-item weightdi" href="#">0.5
                                                                        kg</a>
                                                                    <a class="dropdown-item weightdi" href="#">1
                                                                        kg</a>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <p>{{ $product->description }}</p>
                                                        <p class="price" style="margin-top: 15px;">
                                                            <span>{{ $product->price }} JOD</span>
                                                        </p>
                                                        <p><a href="{{ route('addProductToCart', $product->id) }}"
                                                                class="btn btn-primary">Add to Cart</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                {{-- --------------------------------------------------------------------------------------------------------------------- --}}
                                <div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="menu-wrap">
                                                <center><a href="#" class="menu-img img mb-4"
                                                        style="background-image: url(images/machien1.png); height: 400px; width: 255px;"></a>
                                                </center>
                                                <div class="text">
                                                    <h3><a href="product-single.html">American Coffee Machine</a></h3>
                                                    <p>Experience the perfect balance of convenience and flavor with our
                                                        American 5-cup coffeemaker, delivering rich and aromatic coffee with
                                                        every brew.</p>
                                                    <p class="price"><span>25 JOD</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="menu-wrap">
                                                <center><a href="#" class="menu-img img mb-4"
                                                        style="background-image: url(images/machien2.png); height: 400px; width: 255px;"></a>
                                                </center>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Turkish Coffee Machine</a></h3>
                                                    <p>Experience the fusion of modern convenience and authentic taste
                                                        Automatic Turkish Coffee Maker, crafting 5 cups of rich delight in
                                                        Black/Copper.</p>
                                                    <p class="price"><span>50 JOD</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="menu-wrap">
                                                <center><a href="#" class="menu-img img mb-4"
                                                        style="background-image: url(images/machien3.png); height: 400px; width: 260px;"></a>
                                                </center>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Coffee Espresso and Cappuccino
                                                            Machine</a></h3>
                                                    <p>Indulge in barista-quality espressos and cappuccinos with the Mr.
                                                        Coffee Espresso and Cappuccino Machine.</p>
                                                    <p class="price"><span>90 JOD</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                    aria-labelledby="v-pills-2-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4"
                                                    style="background-image: url(images/cup1.jpeg);"></a>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Earthen Pottery Mug</a></h3>
                                                    <p>Sip serenity from an Earthen Pottery Mug, connecting you with rustic
                                                        elegance.</p>
                                                    <p class="price"><span>6 JOD</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4"
                                                    style="background-image: url(images/cup2.jpeg);"></a>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Marble Mug</a></h3>
                                                    <p>Elevate your sipping experience with the elegance of a Marble Cup.
                                                    </p>
                                                    <p class="price"><span>6 JOD</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4"
                                                    style="background-image: url(images/cup3.jpeg);"></a>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Blue Ceramic Cup and Saucer</a></h3>
                                                    <p>Experience elegance in every sip with our exquisite ceramic cup and
                                                        saucer set.</p>
                                                    <p class="price"><span>8 JOD</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4"
                                                    style="background-image: url(images/cup4.jpeg);"></a>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Candle Mug</a></h3>
                                                    <p>Infuse warmth and ambiance into your surroundings with our
                                                        captivating candle.</p>
                                                    <p class="price"><span>6 JOD</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4"
                                                    style="background-image: url(images/cup5.jpeg);"></a>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Rotary Mug</a></h3>
                                                    <p>Discover innovation in motion with our rotary cup, designed in modern
                                                        style.</p>
                                                    <p class="price"><span>7 JOD</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="menu-wrap">
                                                <center><a href="#" class="menu-img img mb-4"
                                                        style="background-image: url(images/cup6.jpeg);"></a></center>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Beige Ceramic Cup and Saucer</a></h3>
                                                    <p>Crafted with exquisite attention to detail, our ceramic cup
                                                        seamlessly combines.</p>
                                                    <p class="price"><span>8 JOD</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                    aria-labelledby="v-pills-3-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="menu-wrap">
                                                <center><a href="#" class="menu-img img mb-4"
                                                        style="background-image: url(images/eqq1.png); height: 300px; width: 300px;"></a>
                                                </center>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Storage Drawer Holder for
                                                            Capsules</a></h3>
                                                    <p>Organize your Nespresso OriginalLine capsules in style with the
                                                        DecoBros Crystal Tempered Glass Storage Drawer Holder, combining.
                                                    </p>
                                                    <p class="price"><span>15 JOD</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="menu-wrap">
                                                <center><a href="#" class="menu-img img mb-4"
                                                        style="background-image: url(images/eqq2.png); height: 300px; width: 300px;"></a>
                                                </center>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Black Espresso Steaming Pitcher</a>
                                                    </h3>
                                                    <p>Achieve barista-level perfection with the Apexstone 20 oz Black
                                                        Espresso Steaming Pitcher, designed for expert milk frothing and
                                                        frothing.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="menu-wrap">
                                                <center><a href="#" class="menu-img img mb-4"
                                                        style="background-image: url(images/eqq3.png); height: 300px; width: 300px;"></a>
                                                </center>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Disposable Coffee Paper
                                                            <br>Filter</a></h3>
                                                    <p>Simplify your brewing routine with Disposable Coffee Paper Filters,
                                                        ensuring a smooth and mess-free coffee experience every time.</p>
                                                    <p class="price"><span>5 JOD</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="menu-wrap">
                                                <center><a href="#" class="menu-img img mb-4"
                                                        style="background-image: url(images/eqq4.png); height: 300px; width: 300px;"></a>
                                                </center>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Coffee Capsule</a></h3>
                                                    <p>Indulge in the rich harmony of flavors with Nescafé Dolce Gusto
                                                        Cortado Espresso Macchiato Coffee Capsules, a fusion of espresso.
                                                    </p>
                                                    <p class="price"><span>20 JOD</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="menu-wrap">
                                                <center><a href="#" class="menu-img img mb-4"
                                                        style="background-image: url(images/eqq5.png); height: 300px; width: 300px;"></a>
                                                </center>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Coffee Mat</a></h3>
                                                    <p>Elevate your coffee setup and keep your space tidy with a Coffee Mat,
                                                        designed to add functionality and style to your brewing station.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                    aria-labelledby="v-pills-2-tab">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4"
                                                    style="background-image: url(images/drink-1.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Lemonade Juice</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries
                                                        Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4"
                                                    style="background-image: url(images/drink-2.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Pineapple Juice</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries
                                                        Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4"
                                                    style="background-image: url(images/drink-3.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Soda Drinks</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries
                                                        Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4"
                                                    style="background-image: url(images/drink-4.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Lemonade Juice</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries
                                                        Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4"
                                                    style="background-image: url(images/drink-5.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Pineapple Juice</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries
                                                        Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <a href="#" class="menu-img img mb-4"
                                                    style="background-image: url(images/drink-6.jpg);"></a>
                                                <div class="text">
                                                    <h3><a href="product-single.html">Soda Drinks</a></h3>
                                                    <p>Far far away, behind the word mountains, far from the countries
                                                        Vokalia and Consonantia.</p>
                                                    <p class="price"><span>$2.90</span></p>
                                                    <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add
                                                            to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--//////////////////////////////////////// END Of Categories /////////////////////////////////////////-->

    <hr style="border-top: 1px solid gray;">

@endsection
