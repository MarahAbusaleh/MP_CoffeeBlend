@extends('Admin.Layouts.master')
@section('title', 'Add User')
@section('content')

<div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <!------------------------------------- Add Item Section ------------------------------------->
                    <div class="col-lg-10">
                        <h3>Add Admin</h3>
                        <br>
                        <br>
                        <form>
                            <div class="mb-3">
                                <label for="addedCateroryName" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="addedCateroryName" name="addedCateroryName">
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