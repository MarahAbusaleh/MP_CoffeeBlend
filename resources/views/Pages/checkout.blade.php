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
                                        value="{{ Auth::user()->name }}" readonly />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country">Email Address</label>
                                    <input type="text" class="form-control" placeholder=""
                                        value="{{ Auth::user()->email }}" readonly />
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
                                        <span>1 JOD</span>
                                    </p>
                                    @if ($discount)
                                        <p class="d-flex">
                                            <span>Discount</span>
                                            <span></span>
                                            <span></span>
                                            <span>{{ $discount }} JOD</span>
                                        </p>
                                    @endif
                                    <hr />
                                    <p class="d-flex total-price">
                                        <span>Total</span>
                                        <span></span>
                                        <span></span>
                                        <span>{{ Cart::subtotal() + 1 - $discount }} JOD</span>
                                    </p>
                                    <br>
                                    <br>
                                    <!-- Set up a container element for the button -->
                                    <div class="col-lg-12" id="paypal-button-container"></div>
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

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Call your server to set up the transaction
            createOrder: function(data, actions) {
                return fetch('/demo/checkout/api/paypal/order/create/', {
                    method: 'post'
                }).then(function(res) {
                    return res.json();
                }).then(function(orderData) {
                    return orderData.id;
                });
            },

            // Call your server to finalize the transaction
            onApprove: function(data, actions) {
                return fetch('/demo/checkout/api/paypal/order/' + data.orderID + '/capture/', {
                    method: 'post'
                }).then(function(res) {
                    return res.json();
                }).then(function(orderData) {
                    // Three cases to handle:
                    //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                    //   (2) Other non-recoverable errors -> Show a failure message
                    //   (3) Successful transaction -> Show confirmation or thank you

                    // This example reads a v2/checkout/orders capture response, propagated from the server
                    // You could use a different API or structure for your 'orderData'
                    var errorDetail = Array.isArray(orderData.details) && orderData.details[0];

                    if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
                        return actions.restart(); // Recoverable state, per:
                        // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/
                    }

                    if (errorDetail) {
                        var msg = 'Sorry, your transaction could not be processed.';
                        if (errorDetail.description) msg += '\n\n' + errorDetail.description;
                        if (orderData.debug_id) msg += ' (' + orderData.debug_id + ')';
                        return alert(
                            msg
                        ); // Show a failure message (try to avoid alerts in production environments)
                    }

                    // Successful capture! For demo purposes:
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    var transaction = orderData.purchase_units[0].payments.captures[0];
                    alert('Transaction ' + transaction.status + ': ' + transaction.id +
                        '\n\nSee console for all available details');

                    // Replace the above to show a success message within this page, e.g.
                    // const element = document.getElementById('paypal-button-container');
                    // element.innerHTML = '';
                    // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                    // Or go to another URL:  actions.redirect('thank_you.html');
                });
            }

        }).render('#paypal-button-container');
    </script>
@endsection
