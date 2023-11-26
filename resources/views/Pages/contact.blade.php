@extends('Layout.master')
@section('title', 'Contact Us')
@section('header title', 'Contact Us')
@section('header', 'Contact')
@section('content')

    <!--------------------------------------------- Contact Info ---------------------------------------------->

    <section class="ftco-section contact-section">
        <div class="container mt-5">
            <div class="row block-9">
                <div class="col-md-4 contact-info ftco-animate">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 class="h4">Contact Information</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Address:</span> Irbid Abd Alhameed Sharaf Street</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Phone:</span> <a href="tel://1234567920">+962 7 9987 6142</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">coffee.blend@gmail.com</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Website:</span> <a href="#">MarahAbusaleh.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 ftco-animate">
                    <form action="{{ route('store.contact') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" name="name"
                                        value="{{ old('name') }}"">
                                    <span class="text-danger small">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email" name="email"
                                        value="{{ old('email') }}">
                                    <span class="text-danger small">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" nama="subject">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message">{{ old('message') }}</textarea>
                        </div>
                        <span class="text-danger small">
                            @error('date')
                                {{ $message }}
                            @enderror
                        </span>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--///////////////////////////////////////// END Of Contact Info /////////////////////////////////////////-->

    <!--------------------------------------------------- Map --------------------------------------------------->

    <!-- <div id="map" style="background-image: url(images/map.PNG);"></div> -->

    <!--////////////////////////////////////////////// END Of Map /////////////////////////////////////////////-->

    <hr style="border-top: 1px solid gray;">

@endsection
