@extends('Admin.Layouts.master')
@section('title', 'Edit User')
@section('content')

<div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <!------------------------------------- Add User Section ------------------------------------->
                    <div class="col-lg-10">
                        <h3>Edit User</h3>
                        <br>
                        <br>
                        <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email :</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile :</label>
                                <input type="text" class="form-control" id="mobile" name="mobile" value="{{ $user->mobile }}">
                                @if ($errors->has('mobile'))
                                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address :</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}">
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                            <div class="form-row mb-3">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="role">Role:</label>
                                    <select id="role" name="role" class="form-control">
                                        <option value="">Select a Role:</option>
                                        <option value="1">Admin</option>
                                        <option value="0">User</option>
                                    </select>
                                </div>
                                @if ($errors->has('role'))
                                    <span class="text-danger">{{ $errors->first('role') }}</span>
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
                    
                    <!--/////////////////////////////// END Of Add User Section ///////////////////////////////-->
                </div>
            </div>
        </div>
    </div>

@endsection