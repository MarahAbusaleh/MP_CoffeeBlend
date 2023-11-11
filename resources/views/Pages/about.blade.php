@extends('Layout.master')
@section('title', 'About Coffee Blend')
@section('header title', 'About Us')
@section('header', 'About')
@section('content')
    <!---------------------------------------------- Our Story ---------------------------------------------->

    @include('Pages.Home.Sections.ourStory')

    <!--///////////////////////////////////////// END Of Our Story ////////////////////////////////////////-->

    <!------------------------------------------- Calculations -------------------------------------------->

    {{-- @include('Pages.Home.Sections.calculations') --}}

    <!--/////////////////////////////////////// END Of Calculations //////////////////////////////////////-->


@endsection
