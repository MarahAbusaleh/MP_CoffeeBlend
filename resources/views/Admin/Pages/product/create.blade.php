@extends('Admin.Layouts.master')
@section('title', 'Add Products')
@section('content')

    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <!------------------------------------- Add Product Section ------------------------------------->
            <div class="col-lg-10">
                <h3>Add Product</h3>
                <br>
                <br>
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name :</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price :</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ old('price') }}">
                        @if ($errors->has('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description :</label>
                        <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    <div class="form-row mb-3">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="category">Category:</label>
                            <select id="category" name="category" class="form-control">
                                <option value="">Select a Category:</option>
                                @foreach ($category as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @if ($errors->has('category'))
                            <span class="text-danger">{{ $errors->first('category') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-xl-2">
                            <div class="mb-5">
                                <img id="showImage" width="100px" src="{{ url('no-image.jpg') }}">
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

            <!--/////////////////////////////// END Of Add Product Section ///////////////////////////////-->
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
