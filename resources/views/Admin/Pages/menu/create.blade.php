@extends('Admin.Layouts.master')
@section('title', 'Add Item')
@section('content')

<div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <!------------------------------------- Add Item Section ------------------------------------->
                    <div class="col-lg-10">
                        <h3>Add Item</h3>
                        <br>
                        <br>
                        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="name" name="name">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price :</label>
                                <input type="text" class="form-control" id="price" name="price">
                                @if ($errors->has('price'))
                                    <span class="text-danger">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description :</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                                @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <div class="form-row mb-3">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="type">Type:</label>
                                    <select id="type" name="type" class="form-control">
                                        <option value="">Select a Type:</option>
                                        <option value="hot">Hot Drink</option>
                                        <option value="cold">Cold Drink</option>
                                    </select>
                                </div>
                                @if ($errors->has('type'))
                                    <span class="text-danger">{{ $errors->first('type') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image :</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    
                    <!--/////////////////////////////// END Of Add item Section ///////////////////////////////-->
                </div>
            </div>
        </div>
    </div>

@endsection