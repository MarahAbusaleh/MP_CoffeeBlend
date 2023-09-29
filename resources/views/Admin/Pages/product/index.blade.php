@extends('Admin.Layouts.master')
@section('title', 'Products')
@section('content')

    <div class="container-fluid">

        @include('sweetalert::alert')

        <!--  Row 1 -->
        <div class="row">
            <h2>Products</h2>
            <center>
                <div class="col-lg-2">
                    <a href="{{ route('product.create') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"><i
                            class="ti ti-plus"></i> Add Product</a>
                </div>
            </center>
        </div>
        <!--  Row 2 -->
        <div class="row">
            {{ $dataTable->table() }}
        </div>
    </div>
    </div>
    </div>

@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
