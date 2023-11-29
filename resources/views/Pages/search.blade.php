@extends('Layout.master')
@section('title', 'Shop')
@section('header title', 'Shop')
@section('header', 'Shop')
@section('content')

    <!---------------------------------------------- Categories --------------------------------------------->

    <section class="ftco-menu mb-5 pb-5">
        <div class="container">
            @include('sweetalert::alert')
            <div class="row d-md-flex">
                <div class="col-lg-12 ftco-animate p-md-5" style="margin-bottom: 0px !important">
                    <div class="row" style="justify-content: end !important;">
                        <form role="search" action="{{ route('search') }}" method="GET" class="contact-form">
                            <div class="form-group" style="display: flex;">
                                <input type="search" name="search" class="form-control"
                                    value="{{ Request::get('search') }}" placeholder="Search Product">
                                <button type="submit" style="margin-left: 5px;"
                                    class="btn btn-primary btn-outline-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical"
                                style="width: 110%; margin-right: 50px; margin-left: -50px; margin-bottom: 0px !important">
                                <a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
                                    aria-controls="v-pills-1" aria-selected="false">COFFEE BEANS</a>
                                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                    aria-controls="v-pills-2" aria-selected="false">CUPS & MUGS</a>
                                <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                                    aria-controls="v-pills-3" aria-selected="false">EQUIPMENT</a>
                                <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab"
                                    aria-controls="v-pills-4" aria-selected="false">MACHINES</a>
                            </div>
                        </div>

                        <div class="col-md-12 d-flex align-items-center">
                            <div class="tab-content ftco-animate" id="v-pills-tabContent"
                                style="margin-bottom: 0px !important">
                                <div class="tab-pane fade show active" id="v-pills-0" role="tabpanel"
                                    aria-labelledby="v-pills-0-tab">
                                    <div class="row">
                                        @foreach ($searchProduct as $product)
                                            <div class="col-lg-4 col-md-6 text-center">
                                                <div class="menu-wrap">
                                                    {{-- <img src="{{ asset($product->image) }}" class="menu-img img"> --}}
                                                    <a href="{{ route('productDetails', [$product->category_id, $product->id]) }}"
                                                        class="menu-img img mb-4"
                                                        style="background-image: url('{{ asset($product->image) }}');"></a>
                                                    <div class="text">
                                                        <h3><a href="product-single.html">{{ $product->name }}</a></h3>
                                                        @if ($product->category->name == 'COFFEE BEANS')
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
                                {{-- ----------------------Coffee Beans---------------------- --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <center>
        <div style="padding-bottom: 10px; font-size: 14px; text-align: center; display: flex; justify-content: center;">
            {{ $searchProduct->appends(request()->input())->links() }}
        </div>
    </center>

    <!--//////////////////////////////////////// END Of Categories /////////////////////////////////////////-->

    <hr style="border-top: 1px solid gray;">

@endsection
