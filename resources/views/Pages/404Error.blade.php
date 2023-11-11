@extends('Layout.master')
@section('title', '404 Error | Page Not Found')
@section('content')

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(images/404Error.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        {{-- <h1 class="mb-3 mt-5 bread">404 Error | Page Not Found</h1> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
