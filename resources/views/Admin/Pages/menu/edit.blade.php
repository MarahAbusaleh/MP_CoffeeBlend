@extends('Admin.Layouts.master')
@section('title', 'Edit Item')
@section('content')

<div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <!------------------------------------- Edit Item Section ------------------------------------->
                    <div class="col-lg-10">
                        <h3>Edit Item</h3>
                        <br>
                        <br>
                        <form action="{{ route('menu.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price :</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ $item->price }}">
                                @if ($errors->has('price'))
                                    <span class="text-danger">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description :</label>
                                <textarea class="form-control" id="description" name="description"> {{ $item->description }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
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
                    
                    <!--/////////////////////////////// END Of Edit item Section ///////////////////////////////-->
                </div>
            </div>
        </div>
    </div>

@endsection