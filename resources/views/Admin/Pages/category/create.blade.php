@extends('Admin.Layouts.master')
@section('title', 'Add Category')
@section('content')

    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <!------------------------------------- Add Item Section ------------------------------------->
            <div class="col-lg-10">
                <h3>Add Category</h3>
                <br>
                <br>
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name :</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-xl-2">
                            <div class="mb-5">
                                <img id="showImage" width="100px" src="{{ url('no-image.jpg') }}">
                            </div>
                        </div>
                        <div class="col-xl-10">
                            <label for="image1" class="form-label">Image 1 :</label>
                            <input type="file" class="form-control" id="image" name="image1" required>
                            @if ($errors->has('image1'))
                                <span class="text-danger">{{ $errors->first('image1') }}</span>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <!--/////////////////////////////// END Of Add Item Section ///////////////////////////////-->
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
