@extends('layouts.app')

@section('title', 'Data User / Admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Admin</h1>
    </div>

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0">Data Admin</h5>

            <a href="{{ route('admin.admin.create') }}" class="btn btn-primary">
                <span class="fa fa-plus-circle mr-2"></span>
                <span>Tambah Data</span>
            </a>
        </div>

        <div class="card-body">
            <table class="table table-striped table-hover datatables">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Admin</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($user as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>

                            <td>
                                <a href="{{ route('admin.admin.show', encrypt($item->id)) }}"
                                    class="btn btn-link p-0 mx-2 action-button"
                                    title="Lihat Detail">
                                    <span class="fa fa-eye"></span>
                                </a>

                                <a href="{{ route('admin.admin.edit', encrypt($item->id)) }}"
                                    class="btn btn-link p-0 mx-2 action-button"
                                    title="Edit">
                                    <span class="fa fa-edit"></span>
                                </a>

                                <a href="javascript:void(0)"
                                    onclick="handleDestroy('{{ route('admin.admin.destroy', encrypt($item->id)) }}')"
                                    class="btn btn-link p-0 mx-2 action-button"
                                    title="Hapus">
                                    <span class="fa fa-trash"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <form id="form-destroy" method="POST">
        @csrf
        @method('DELETE')
    </form>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">

    <style>

        /* ==========================================================
           WARNA VISIT-IN
           ========================================================== */

        :root {
            --visit-teal: #126d69;
            --visit-teal-dark: #075c59;
            --visit-teal-soft: #e4f1ee;
            --visit-cream: #fffdf8;
            --visit-sand: #f5e9d0;
            --visit-brown: #a87842;
            --visit-border: #e7dcc9;
            --visit-text: #71807d;
        }


        /* ==========================================================
           JUDUL
           ========================================================== */

        .text-gray-800 {
            color: var(--visit-teal-dark) !important;
        }


        /* ==========================================================
           CARD
           ========================================================== */

        .card {
            border: 1px solid var(--visit-border) !important;
            background: var(--visit-cream) !important;
        }

        .card-header {
            background: var(--visit-cream) !important;
            border-bottom: 1px solid var(--visit-border) !important;
        }

        .card-title {
            color: var(--visit-teal-dark) !important;
        }


        /* ==========================================================
           TOMBOL TAMBAH DATA
           ========================================================== */

        .btn-primary {
            background-color: var(--visit-teal) !important;
            border-color: var(--visit-teal) !important;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            background-color: var(--visit-teal-dark) !important;
            border-color: var(--visit-teal-dark) !important;
        }


        /* ==========================================================
           HEADER TABEL
           ========================================================== */

        .datatables thead th {
            background: var(--visit-sand) !important;
            color: var(--visit-teal-dark) !important;
            border-color: var(--visit-border) !important;
            vertical-align: middle !important;
        }


        /* ==========================================================
           ISI TABEL
           ========================================================== */

        .datatables tbody td {
            color: var(--visit-text) !important;
            border-color: var(--visit-border) !important;
            vertical-align: middle !important;
        }


        /* Nama Admin */

        .datatables tbody td:nth-child(2) {
            color: var(--visit-teal) !important;
        }


        /* ==========================================================
           ACTION
           ========================================================== */

        .datatables tbody td:last-child {
            white-space: nowrap !important;
            text-align: center !important;
        }

        .datatables .action-button {
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            vertical-align: middle !important;
            margin-left: 5px !important;
            margin-right: 5px !important;
            width: 22px !important;
            height: 22px !important;
        }


        /* ==========================================================
           ICON MATA
           ========================================================== */

        .datatables .fa-eye {
            color: var(--visit-teal) !important;
        }

        .datatables .fa-eye:hover {
            color: var(--visit-teal-dark) !important;
        }


        /* ==========================================================
           ICON EDIT
           ========================================================== */

        .datatables .fa-edit {
            color: var(--visit-brown) !important;
        }

        .datatables .fa-edit:hover {
            color: #8d6336 !important;
        }


        /* ==========================================================
           ICON HAPUS
           ========================================================== */

        .datatables .fa-trash {
            color: #e74a3b !important;
        }

        .datatables .fa-trash:hover {
            color: #c0392b !important;
        }


        /* ==========================================================
           HOVER BARIS
           ========================================================== */

        .datatables tbody tr:hover {
            background: var(--visit-teal-soft) !important;
        }


        /* ==========================================================
           SEARCH
           ========================================================== */

        .dataTables_wrapper .dataTables_filter,
        .dataTables_wrapper .dataTables_filter label {
            color: var(--visit-teal-dark) !important;
        }

        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid var(--visit-border) !important;
            background: var(--visit-cream) !important;
            color: var(--visit-teal-dark) !important;
            border-radius: 6px !important;
        }

        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: var(--visit-teal) !important;
            box-shadow: 0 0 0 0.15rem rgba(18, 109, 105, 0.12) !important;
            outline: none !important;
        }


        /* ==========================================================
           SHOW ENTRIES
           ========================================================== */

        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_length label {
            color: var(--visit-teal-dark) !important;
        }

        .dataTables_wrapper .dataTables_length select {
            border: 1px solid var(--visit-border) !important;
            background: var(--visit-cream) !important;
            color: var(--visit-teal-dark) !important;
            border-radius: 5px !important;
        }


        /* ==========================================================
           INFO
           ========================================================== */

        .dataTables_wrapper .dataTables_info {
            color: var(--visit-text) !important;
        }


        /* ==========================================================
           LINK DATATABLES
           ========================================================== */

        .dataTables_wrapper a:not(.btn) {
            color: var(--visit-teal) !important;
        }

        .dataTables_wrapper a:not(.btn):hover {
            color: var(--visit-teal-dark) !important;
        }


        /* ==========================================================
           PAGINATION
           ========================================================== */

        .dataTables_wrapper .dataTables_paginate a {
            color: var(--visit-teal) !important;
        }

        .dataTables_wrapper .dataTables_paginate .page-link {
            color: var(--visit-teal) !important;
            background-color: var(--visit-cream) !important;
            border-color: var(--visit-border) !important;
        }


        /* ==========================================================
           NOMOR HALAMAN AKTIF
           ========================================================== */

        .dataTables_wrapper
        .dataTables_paginate
        .pagination
        .page-item.active
        .page-link {

            color: #ffffff !important;
            background-color: var(--visit-teal) !important;
            border-color: var(--visit-teal) !important;
            box-shadow: none !important;
        }


        /* ==========================================================
           HOVER PAGINATION
           ========================================================== */

        .dataTables_wrapper
        .dataTables_paginate
        .pagination
        .page-item:not(.active)
        .page-item:hover
        .page-link {

            color: var(--visit-teal-dark) !important;
            background-color: var(--visit-sand) !important;
            border-color: var(--visit-brown) !important;
        }


        /* ==========================================================
           PREVIOUS / NEXT
           ========================================================== */

        .dataTables_wrapper
        .dataTables_paginate
        .pagination
        .page-item
        .page-link {

            color: var(--visit-teal) !important;
            background-color: var(--visit-cream) !important;
            border-color: var(--visit-border) !important;
        }


        /* ==========================================================
           PREVIOUS / NEXT HOVER
           ========================================================== */

        .dataTables_wrapper
        .dataTables_paginate
        .pagination
        .page-item:hover
        .page-link {

            color: var(--visit-teal-dark) !important;
            background-color: var(--visit-sand) !important;
            border-color: var(--visit-brown) !important;
        }


        /* ==========================================================
           ACTIVE PAGINATION
           ========================================================== */

        .dataTables_wrapper
        .dataTables_paginate
        .pagination
        .page-item.active
        .page-link,

        .dataTables_wrapper
        .dataTables_paginate
        .pagination
        .page-item.active:hover
        .page-link {

            color: #ffffff !important;
            background-color: var(--visit-teal) !important;
            border-color: var(--visit-teal) !important;
        }


        /* ==========================================================
           PAGINATION DISABLED
           ========================================================== */

        .dataTables_wrapper
        .dataTables_paginate
        .pagination
        .page-item.disabled
        .page-link {

            color: #aaa59c !important;
            background-color: var(--visit-cream) !important;
            border-color: var(--visit-border) !important;
        }


        /* ==========================================================
           PANAH SORTING
           ========================================================== */

        .datatables thead .sorting:before,
        .datatables thead .sorting:after,
        .datatables thead .sorting_asc:before,
        .datatables thead .sorting_asc:after,
        .datatables thead .sorting_desc:before,
        .datatables thead .sorting_desc:after {

            color: var(--visit-brown) !important;
            opacity: 0.8 !important;
        }


        /* ==========================================================
           BORDER TABEL
           ========================================================== */

        .datatables {
            border-color: var(--visit-border) !important;
        }


        /* ==========================================================
           RESPONSIVE
           ========================================================== */

        @media (max-width: 768px) {

            .dataTables_wrapper .dataTables_filter {
                margin-top: 10px;
            }

            .datatables {
                min-width: 700px;
            }

        }

    </style>
@endpush


@push('scripts')

    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script>

        $('.datatables').DataTable();


        function handleDestroy(url) {

            Swal.fire({

                title: 'Apakah anda yakin akan menghapusnya?',

                text: 'Data yang dihapus tidak dapat dipulihkan.',

                icon: 'warning',

                showCancelButton: true,

                confirmButtonColor: '#126d69',

                cancelButtonColor: '#d33',

                confirmButtonText: 'Ya, hapus',

                cancelButtonText: 'Batal'

            }).then((result) => {

                if (result.isConfirmed) {

                    $('#form-destroy').attr('action', url);

                    $('#form-destroy').submit();

                }

            });

        }

    </script>


    @if (Session::has('success'))

        <script>

            Swal.fire({

                title: 'Berhasil',

                text: '{{ Session::get('success') }}',

                icon: 'success',

                confirmButtonText: 'OK'

            });

        </script>

    @endif

@endpush