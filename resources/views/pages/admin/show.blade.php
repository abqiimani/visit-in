@extends('layouts.app')

@section('title', 'Detail Admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Admin</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informasi Admin</h5>
                </div>

                <div class="card-body">
                    <div class="form-group mb-3">
                        <label class="form-label">ID</label>
                        <input
                            type="text"
                            class="form-control"
                            value="{{ $user->id }}"
                            readonly
                        >
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Nama</label>
                        <input
                            type="text"
                            class="form-control"
                            value="{{ $user->name }}"
                            readonly
                        >
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            value="{{ $user->email }}"
                            readonly
                        >
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Dibuat Pada</label>
                        <input
                            type="text"
                            class="form-control"
                            value="{{ $user->created_at }}"
                            readonly
                        >
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Diperbarui Pada</label>
                        <input
                            type="text"
                            class="form-control"
                            value="{{ $user->updated_at }}"
                            readonly
                        >
                    </div>
                </div>

                <div class="card-footer">
                    <a
                        href="{{ route('admin.admin.index') }}"
                        class="btn btn-secondary"
                    >
                        <span class="fa fa-arrow-left mr-2"></span>
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection