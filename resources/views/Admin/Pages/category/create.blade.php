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
                                <input type="text" class="form-control" id="name" name="name">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="image1" class="form-label">Image 1 :</label>
                                <input type="file" class="form-control" id="image1" name="image1" required>
                                @if ($errors->has('image1'))
                                    <span class="text-danger">{{ $errors->first('image1') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="image2" class="form-label">Image 2 :</label>
                                <input type="file" class="form-control" id="image2" name="image2" required>
                                @if ($errors->has('image2'))
                                    <span class="text-danger">{{ $errors->first('image2') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="image3" class="form-label">Image 3 :</label>
                                <input type="file" class="form-control" id="image3" name="image3" required>
                                @if ($errors->has('image3'))
                                    <span class="text-danger">{{ $errors->first('image3') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    
                    <!--/////////////////////////////// END Of Add Item Section ///////////////////////////////-->
                </div>
            </div>
        </div>
    </div>

@endsection