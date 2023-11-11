@extends('Layout.master')
@section('title', 'Profile')
@section('header title', 'User Profile')
@section('header', 'Profile')
@section('content')

    <!-------------------------------------------- User Profile -------------------------------------------->

    <section class="ftco-section ftco-cart">
        <div class="container rounded">
            <div class="row">
                <div class="col-lg-4 col-md-3">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img id="showImage" class="rounded-circle" width="300px" src="{{ asset(Auth::user()->image) }}">
                    </div>
                    <center>
                        <div>
                            <button id="updateButton" type="submit" href="#" class="btn btn-primary py-3 px-4"
                                style="color: black !important">
                                Update Password
                                <span class="icon icon-edit"
                                    style="color: black;
                            font-size: 20px"></span>
                            </button>
                        </div>
                    </center>
                </div>
                @include('sweetalert::alert')

                <div class="col-lg-8 col-md-5">
                    <form action="{{ route('editMyProfile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}
                        <div class="p-3 py-5">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <label class="labels">Name</label>
                                    <input type="text" class="form-control" placeholder="" name="name"
                                        value="{{ Auth::user()->name }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Email</label>
                                    <input type="text" class="form-control" placeholder="" name="email"
                                        value="{{ Auth::user()->email }}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="labels">Address</label>
                                    <input type="text" class="form-control" name="address"
                                        value="{{ Auth::user()->address }}" placeholder="Enter Your Address">
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Phone Number"
                                        name="mobile" value="{{ Auth::user()->mobile }}">
                                    @if ($errors->has('mobile'))
                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Image</label>
                                    <input type="file" class="form-control" name="image" id="image">
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                            </div>
                            <br><br>
                            <center>
                                <div>
                                    <button type="submit" href="#" class="btn btn-primary py-3 px-4"
                                        style="color: black !important">Save
                                        Profile</button>
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="container update-pass" style="display: none;">
            @include('../profile/partials/update-password-form')
        </div>
        <br>
        <br>
        <br>

        <div class="billing_form container" data-aos="fade-up" data-aos-duration="2000" style="padding-top: 35px;">
            <h3 class="form_title mb_30">Your Orders</h3>
            <div class="form_wrap">
                <div class="checkout_table table-responsive">
                    <table class="table text-center mb_50">
                        <thead class="text-uppercase text-uppercase">
                            <tr>
                                <th>Order Number</th>
                                <th>Order Address</th>
                                <th>Order Status</th>
                                <th>Order Total Price</th>
                                <th>View More Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $order->address }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->total }}</td>
                                    <td>
                                        <a href="{{ route('myOrders', $order->id) }}" class="nav-link">
                                            <span class="icon icon-list"></span>
                                            <span
                                                class=" d-flex justify-content-center align-items-center"><small></small></span>
                                        </a>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!--/////////////////////////////////////// END Of User Profile //////////////////////////////////////-->
    <hr style="border-top: 1px solid gray;">
    <script>
        const updateButton = document.getElementById('updateButton');
        const updatePassSection = document.querySelector('.update-pass');

        updateButton.addEventListener('click', function() {
            if (updatePassSection.style.display === 'none') {
                updatePassSection.style.display = 'block';
            } else {
                updatePassSection.style.display = 'none';
            }
        });
    </script>



@endsection
