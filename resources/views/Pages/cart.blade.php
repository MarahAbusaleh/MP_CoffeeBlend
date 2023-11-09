@extends('Layout.master')
@section('title', 'Cart')
@section('content')

    <!----------------------------------------------- Header ----------------------------------------------->

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('{{ asset('images/bg_3.jpg') }}');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Cart</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--///////////////////////////////////////// END Of Header //////////////////////////////////////////-->

    <!-------------------------------------------- Cart Section -------------------------------------------->

    <section class="ftco-section ftco-cart">
        @if (Cart::count() > 0)
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="cart-list" style="overflow-x: hidden;">
                            @include('sweetalert::alert')

                            <table class="table col-lg-8">
                                <thead class="thead-primary">
                                    <tr class="text-center">
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::content() as $CartElement)
                                        <tr class="text-center">
                                            <td class="product-remove"><a
                                                    href="{{ route('removeFromCart', $CartElement->rowId) }}"><span
                                                        class="icon-close"></span></a>
                                            </td>

                                            <td class="image-prod">
                                                <div class="img"
                                                    style="background-image:url('{{ asset($CartElement->options->image) }}');">
                                                </div>
                                            </td>

                                            <td class="product-name">
                                                <h3>{{ $CartElement->name }}</h3>
                                            </td>

                                            <td class="price">{{ $CartElement->price }} JOD</td>

                                            <td class="quantity">
                                                <div class="input-group mb-3">
                                                    <button style="width: 20%"><a
                                                            href="{{ route('qtyDec', $CartElement->rowId) }}">-</a></button>

                                                    <input type="number" name="quantity"
                                                        class="quantity form-control input-number"
                                                        value="{{ $CartElement->qty }}" min="1" max="100">

                                                    <button style="width: 20%"><a
                                                            href="{{ route('qtyInc', $CartElement->rowId) }}">+</a></button>
                                                </div>
                                            </td>

                                            <td class="total">{{ $CartElement->price * $CartElement->qty }} JOD</td>
                                        </tr><!-- END TR-->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Cart Totals Details -->
                <div class="row" style="margin-left: 0px, margin-right: 0px; margin: 0px !important">

                    <form action="{{ route('handleCoupon') }}" method="POST" style="margin-left: 0px" class="col-lg-6">
                        @csrf
                        <div class="row col-lg-12 mt-5 " style="margin-left: 0px">
                            <input type="text" name="coupon" class="coupon form-control input-number col-lg-8"
                                min="0" max="100" style="margin-right: 5px">
                            <p>
                                <button href="" class="btn btn-primary py-3 px-1 col-lg-12" type="submit">
                                    Apply Coupon
                                </button>
                            </p>
                        </div>
                    </form>

                    <div class="col col-lg-6 col-md-12 mt-5 cart-wrap ftco-animate">
                        <div class="cart-total mb-3">
                            <h3>Cart Totals</h3>
                            <p class="d-flex">
                                <span>Subtotal</span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span>{{ Cart::subtotal() }} JOD</span>
                            </p>
                            <p class="d-flex">
                                <span>Delivery</span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span>1 JOD</span>
                            </p>
                            @if ($discount)
                                <p class="d-flex">
                                    <span>Discount</span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span>{{ $discount }} JOD</span>
                                </p>
                            @endif
                            <hr>
                            <p class="d-flex total-price">
                                <span>Total</span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span>{{ $totalPrice + 1 }} JOD</span>
                            </p>
                        </div>
                        <p class="text-center"><a href="{{ route('checkout', +$discount) }}"
                                class="btn btn-primary py-3 px-4">Proceed
                                to
                                Checkout</a>
                        </p>
                    </div>
                </div>
            </div>
        @else
            <center>
                <div class="container">
                    <h2>
                        The Cart is empty
                    </h2>
                    <br>
                    <a href="{{ route('shop') }}" class="btn btn-primary py-3 px-4">
                        Shop Now
                    </a>
                </div>
            </center>
        @endif
    </section>

    <!--////////////////////////////////////// END Of Cart Section ///////////////////////////////////////-->

    <hr style="border-top: 1px solid gray;">

@endsection
