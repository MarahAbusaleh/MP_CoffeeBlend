@extends('Admin.Layouts.master')
@section('title', 'Edit Product')
@section('content')

    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <!------------------------------------- Edit Product Section ------------------------------------->
            <div class="col-lg-10">
                <h3>Edit Product</h3>
                <br>
                <br>
                <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name :</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $product->name }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price :</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ $product->price }}">
                        @if ($errors->has('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description :</label>
                        <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-xl-2">
                            <div class="mb-5">
                                <img id="showImage" width="100px"
                                    src="{{ $product->image == '' ? url('no-image.jpg') : asset($product->image) }}">
                            </div>
                        </div>
                        <div class="col-xl-10">
                            <label for="image" class="form-label">Image :</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <!--/////////////////////////////// END Of Edit Product Section ///////////////////////////////-->
        </div>
    </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            })
        });
    </script>
@endsection
