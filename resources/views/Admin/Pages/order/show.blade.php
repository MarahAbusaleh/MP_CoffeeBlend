@extends('Admin.Layouts.master')
@section('title', 'Orders Details')
@section('content')

                <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <h2>Order Details</h2>
                </div>
                <!--  Row 2 -->
                <div class="row">
                    @foreach ($orderitem as $orderitem)
                        <div>{{ $orderitem->quantity }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection

