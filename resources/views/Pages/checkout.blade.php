@extends('Layout.master')
@section('title', 'Checkout')
@section('header title', 'Checkout')
@section('header', 'Checkout')
@section('content')
    <style>
        .paypal-mark:last-child {
            display: none;
        }
    </style>
    <!------------------------------------------- Payment Section ------------------------------------------->

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 ftco-animate">
                    @include('sweetalert::alert')
                    <form action="{{ route('submitCheckout', $discount) }}" method="POST"
                        class="col-lg-12 billing-form ftco-bg-dark p-3 p-md-5" id="checkoutForm">
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

                                    <label>
                                        <input type="radio" name="payment-option" value="cash" id="cashOption" checked>
                                        Cash on delivery
                                    </label>
                                    <br>
                                    <label style="display: inline-block;">
                                        <input type="radio" name="payment-option" value="paypal" id="paypalOption"
                                            style="display: inline-block;">
                                        <div id="paypal-marks-container" style="display: inline-block;"></div>
                                    </label>


                                    <div id="alternate-button-container">
                                        <button class="btn btn-primary py-3 px-4" type="button"
                                            onclick="submitCash()">Place an order</button>
                                    </div>

                                    <div id="paypal-buttons-container">
                                        <button class="py-1 px-4 col-lg-12" type="button"
                                            style="background-color: #fec43a; border-radius: 15px; border:#fec43a"
                                            onclick="submitPayPal()"><i class="fab fa-paypal"
                                                style="color: #002f86;font-size:20px;font-style: italic;"></i>&nbsp;<span
                                                style="color: #002f86; font-size:20px; font-weight:bold;font-style: italic;">Pay</span><span
                                                style="color: #009cde; font-size:20px; font-weight:bold;font-style: italic;">Pal</span></button>
                                    </div>
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
    {{-- <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script> --}}
    <script src="https://www.paypal.com/sdk/js?client-id=test&components=buttons,marks"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Marks().render('#paypal-marks-container');

        // paypal.Buttons().render('#paypal-buttons-container');

        // Listen for changes to the radio buttons
        document.querySelectorAll('input[name=payment-option]')
            .forEach(function(el) {
                el.addEventListener('change', function(event) {

                    // If PayPal is selected, show the PayPal button
                    if (event.target.value === 'paypal') {
                        document.body.querySelector('#alternate-button-container')
                            .style.display = 'none';
                        document.body.querySelector('#paypal-buttons-container')
                            .style.display = 'block';
                    }

                    // If alternate funding is selected, show a different button
                    if (event.target.value === 'cash') {
                        document.body.querySelector('#alternate-button-container')
                            .style.display = 'block';
                        document.body.querySelector('#paypal-buttons-container')
                            .style.display = 'none';
                    }
                });
            });

        // Hide non-PayPal button by default
        document.body.querySelector('#alternate-button-container')
            .style.display = 'none';



        // Function to submit cash option
        function submitCash() {
            document.getElementById('checkoutForm').action = "{{ route('submitCash', $discount) }}";
            document.getElementById('checkoutForm').submit();
        }

        // Function to submit PayPal option
        function submitPayPal() {
            document.getElementById('checkoutForm').action = "{{ route('submitCheckout', $discount) }}";
            document.getElementById('checkoutForm').submit();
        }
    </script>
@endsection
