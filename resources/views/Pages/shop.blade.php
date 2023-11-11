@extends('Layout.master')
@section('title', 'Shop')
@section('header title', 'Order Online')
@section('header', 'Shop')
@section('content')

    <!--------------------------------------------- Categories ---------------------------------------------->

    <section class="ftco-menu mb-5 pb-5">
        <div class="container">
            <div class="row" style=" margin-right: 0px;">
                @foreach ($categories as $category)
                    <div class="col-lg-4" style="border: 1px solid gray; margin: 0px;">
                        <div class="">
                            <div class="text text-center pt-4">
                                <div>
                                    <img src="{{ asset($category->image1) }}" height="360px" width="100%">
                                </div>
                                <p style="margin-top: 120px;"><a href="{{ route('showProducts', $category->id) }}"
                                        class="btn btn-primary"
                                        style="height: fit-content; width: fit-content; font-size: 15px;">{{ $category->name }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!--//////////////////////////////////////// END Of Categories ////////////////////////////////////////-->

    <hr style="border-top: 1px solid gray;">

@endsection
