@extends('Admin.Layouts.master')
@section('title', 'Comments')
@section('content')

    @include('sweetalert::alert')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <h2>Comments</h2>
        </div>
        <!--  Row 2 -->
        <div class="row">
            {{-- {{ $dataTable->}} --}}
            {{ $dataTable->table() }}
        </div>
    </div>
    </div>
    </div>

@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
