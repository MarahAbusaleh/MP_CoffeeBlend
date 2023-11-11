@extends('Layout.master')
@section('title', 'Menu')
@section('header title', 'Our Menu')
@section('header', 'Menu')
@section('content')

    <!------------------------------------------- Drinks Section ------------------------------------------->

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="mb-5 pb-3">

                    @php
                        use Illuminate\Support\Str;
                    @endphp

                    <!-- Hot Drinks -->
                    <div class="row">
                        <h3 class="col-md-12 heading-pricing ftco-animate">Hot Drinks</h3><br>
                        @foreach ($hotDrinks as $hot)
                            <div class="col-md-6 pricing-entry d-flex ftco-animate">
                                <a href="{{ route('itemDetails', $hot->id) }}">
                                    <div class="img" style="background-image: url({{ asset($hot->image) }});"></div>
                                </a>

                                <div class="desc pl-3">
                                    <div class="d-flex text align-items-center">
                                        <h3>
                                            <span>
                                                <a href="{{ route('itemDetails', $hot->id) }}"
                                                    style="color: white">{{ $hot->name }}</a>
                                            </span>
                                        </h3>
                                        <span class="price">{{ $hot->price }} JOD</span>
                                    </div>
                                    <div class="d-block">
                                        <p>{{ Str::limit($hot->description, 53) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <br>
                    <br>

                    <!-- Cold Drinks -->
                    <div class="row">
                        <h3 class="col-md-12 heading-pricing ftco-animate">Cold Drinks</h3><br>
                        @foreach ($coldDrinks as $cold)
                            <div class="col-md-6 pricing-entry d-flex ftco-animate">
                                <a href="{{ route('itemDetails', $cold->id) }}">
                                    <div class="img" style="background-image: url({{ asset($cold->image) }});"></div>
                                </a>

                                <div class="desc pl-3">
                                    <div class="d-flex text align-items-center">
                                        <h3>
                                            <span>
                                                <a href="{{ route('itemDetails', $cold->id) }}"
                                                    style="color: white">{{ $cold->name }}</a>
                                            </span>
                                        </h3>
                                        <span class="price">{{ $cold->price }} JOD</span>
                                    </div>
                                    <div class="d-block">
                                        <p>{{ $cold->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div style="display: flex; justify-content: flex-end;">
                        <a href="" class="btn btn-primary p-3 px-xl-4 py-xl-3" style="margin-right: 5px;">
                            Download the menu
                        </a>
                    </div>


                </div>
            </div>
    </section>

    <!--///////////////////////////////////////// END Of Drinks///////////////////////////////////////////-->

    <hr style="border-top: 1px solid gray;">

@endsection
