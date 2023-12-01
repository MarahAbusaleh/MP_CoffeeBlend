@extends('Layout.master')
@section('title', 'About Coffee Blend')
@section('header title', 'About Us')
@section('header', 'About')
@section('content')
    <!---------------------------------------------- Our Story ---------------------------------------------->

    @include('Pages.Home.Sections.ourStory')

    <!--///////////////////////////////////////// END Of Our Story ////////////////////////////////////////-->

    <!------------------------------------------- Partners -------------------------------------------->

    @include('Pages.Home.Sections.Partners')

    <!--/////////////////////////////////////// END Of Partners //////////////////////////////////////-->


@endsection
