@extends('Admin.Layouts.master')
@section('title', 'Add Discount Code')
@section('content')

    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <!------------------------------------- Add Discount Code Section ------------------------------------->
            <div class="col-lg-10">
                <h3>Add Discount Code</h3>
                <br>
                <br>
                <form action="{{ route('discount.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Discount Code Text :</label>
                        <input type="text" class="form-control" id="name" name="discount_code"
                            value="{{ old('discount_code') }}">
                        @if ($errors->has('discount_code'))
                            <span class="text-danger">{{ $errors->first('discount_code') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Discount Code Percentege :</label>
                        <input type="text" class="form-control" id="name" name="discount_per"
                            value="{{ old('discount_per') }}">
                        @if ($errors->has('discount_per'))
                            <span class="text-danger">{{ $errors->first('discount_per') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <!--/////////////////////////////// END Of Add Discount Code Section ///////////////////////////////-->
        </div>
    </div>
    </div>
    </div>

@endsection
