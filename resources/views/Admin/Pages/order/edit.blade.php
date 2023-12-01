@extends('Admin.Layouts.master')
@section('title', 'Edit Order Status')
@section('content')


    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <!------------------------------------- Edit Order Status ------------------------------------->
            <div class="col-lg-10">
                <h3>Edit Order Status</h3>
                <br>
                <br>
                <form action="{{ route('order.update', $order->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row mb-3">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="status">Edit Order Status</label>
                            <select id="status" name="status" class="form-control">
                                <option value="">Edit Order Status</option>
                                <option value="In Shipping">In Shipping</option>
                                <option value="Canceled">Canceled</option>
                                <option value="Done">Done</option>
                            </select>
                        </div>
                        @if ($errors->has('status'))
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <!--/////////////////////////////// END Of Edit Order Status ///////////////////////////////-->
        </div>
    </div>
    </div>
    </div>

@endsection
