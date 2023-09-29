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

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <!--/////////////////////////////// END Of Add User Section ///////////////////////////////-->
        </div>
    </div>
    </div>
    </div>

@endsection
