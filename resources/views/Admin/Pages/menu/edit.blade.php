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
                        <form>
                            <div class="mb-3">
                                <label for="editedItemName" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="editedItemName" name="editedItemName">
                            </div>
                            <div class="mb-3">
                                <label for="editedItemPrice" class="form-label">Price :</label>
                                <input type="text" class="form-control" id="editedItemPrice" name="editedItemPrice">
                            </div>
                            <div class="mb-3">
                                <label for="editedItemDesc" class="form-label">Description :</label>
                                <textarea class="form-control" id="editedItemDesc" name="editedItemDesc"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="editedItemIamge" class="form-label">Image :</label>
                                <input type="file" class="form-control" id="editedItemImage" name="editedItemImage">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    
                    <!--/////////////////////////////// END Of Edit Item Section ///////////////////////////////-->
                </div>
            </div>
        </div>
    </div>

@endsection