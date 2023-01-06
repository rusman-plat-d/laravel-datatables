@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Users</div>
            <div class="card-body">
                {{ $usersDataTable->html()->table() }}
                {{ $roleDataTable->html()->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $usersDataTable->html()->scripts(attributes: ['type' => 'module']) }}
    {{ $roleDataTable->html()->scripts(attributes: ['type' => 'module']) }}
@endpush
