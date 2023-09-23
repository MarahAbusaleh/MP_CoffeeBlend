@extends('Admin.Layouts.master')
@section('title', 'Edit Category')
@section('content')

    <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <!------------------------------------- Edit Category Section ------------------------------------->
                    <div class="col-lg-10">
                        <h3>Edit Category</h3>
                        <br>
                        <br>
                        <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="image1" class="form-label">Image 1 :</label>
                                <input type="file" class="form-control" id="image1" name="image1">
                            </div>
                            <div class="mb-3">
                                <label for="image2" class="form-label">Image 2 :</label>
                                <input type="file" class="form-control" id="image2" name="image2">
                            </div>
                            <div class="mb-3">
                                <label for="image3" class="form-label">Image 3 :</label>
                                <input type="file" class="form-control" id="image3" name="image3">
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