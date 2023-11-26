@extends('Admin.Layouts.master')
@section('title', 'Contact Message')
@section('content')

    <div class="container-fluid">
        @include('sweetalert::alert')

        <!--  Row 1 -->
        <div class="row">
            <h2>Contact Message</h2>
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
