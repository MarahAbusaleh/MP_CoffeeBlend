@extends('Layout.master')
@section('title', 'Order Details')
@section('header title', 'Your Order')
@section('header', 'Your Order')
@section('content')

    <!--------------------------------------------- Order Details  -------------------------------------------->

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list" style="overflow-x: hidden;">
                        <table class="table col-lg-8">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orderdetails as $orderdetail)
                                    @if ($orderdetail->product_id)
                                        <tr class="text-center">
                                            <td class="image-prod">
                                                <div class="img"
                                                    style="background-image:url('{{ asset($orderdetail->product->image) }}');">
                                                </div>
                                            </td>
                                            <td class="product-name">
                                                <h3>{{ $orderdetail->product->name }}</h3>
                                            </td>
                                            <td class="price">{{ $orderdetail->product->price }} JOD</td>
                                            <td class="price">{{ $orderdetail->quantity }}</td>
                                            <td class="total">{{ $orderdetail->product->price * $orderdetail->quantity }}
                                                JOD</td>
                                        </tr><!-- END TR-->
                                    @else
                                        <tr class="text-center">
                                            <td class="image-prod">
                                                <div class="img"
                                                    style="background-image:url('{{ asset($orderdetail->menu->image) }}');">
                                                </div>
                                            </td>
                                            <td class="product-name">
                                                <h3>{{ $orderdetail->menu->name }}</h3>
                                            </td>
                                            <td class="price">{{ $orderdetail->menu->price }} JOD</td>
                                            <td class="price">{{ $orderdetail->quantity }}</td>
                                            <td class="total">{{ $orderdetail->menu->price * $orderdetail->quantity }}
                                                JOD</td>
                                        </tr><!-- END TR-->
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        <h3 class="mb-3 mt-5 bread" style="text-align: right">Total Price :</h3>
                        <h5 class="mb-3 bread" style="text-align: right">{{ $orderTotal }} JOD</h5>
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--//////////////////////////////////////// END Of Order Details ///////////////////////////////////////-->
    <hr style="border-top: 1px solid gray;">

@endsection
