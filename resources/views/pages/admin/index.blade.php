@extends('layouts.app')

@section('title', 'Data User / Admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data User / Admin</h1>
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
                                    class="btn btn-link p-0 mx-2">
                                    <span class="fa fa-eye"></span>
                                </a>

                                <a href="{{ route('admin.admin.edit', encrypt($item->id)) }}"
                                    class="btn btn-link text-secondary p-0 mx-2">
                                    <span class="fa fa-edit"></span>
                                </a>

                                <a href="javascript:void(0)"
                                    onclick="handleDestroy('{{ route('admin.admin.destroy', encrypt($item->id)) }}')"
                                    class="btn btn-link text-danger p-0 mx-2">
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
           HANYA MENGGANTI WARNA BIRU MENJADI HIJAU TOSKA
           ========================================================== */

        :root {
            --visit-teal: #126d69;
            --visit-teal-dark: #075c59;
            --visit-cream: #fffdf8;
            --visit-sand: #f5e9d0;
            --visit-border: #e7dcc9;
        }

        /* Tombol Tambah Data */
        .btn-primary {
            background-color: #126d69 !important;
            border-color: #126d69 !important;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            background-color: #075c59 !important;
            border-color: #075c59 !important;
        }

        /* Icon mata yang sebelumnya biru */
        .datatables .fa-eye {
            color: #126d69 !important;
        }

        .datatables .fa-eye:hover {
            color: #075c59 !important;
        }

        /* Pagination DataTables */
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            color: #126d69 !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #075c59 !important;
            background: #f5e9d0 !important;
            border-color: #a87842 !important;
        }

        /* Nomor halaman aktif */
        .dataTables_wrapper
        .dataTables_paginate
        .paginate_button.current,
        .dataTables_wrapper
        .dataTables_paginate
        .paginate_button.current:hover {
            color: #ffffff !important;
            background: #126d69 !important;
            border-color: #126d69 !important;
            box-shadow: none !important;
        }

        /* Bootstrap pagination */
        .dataTables_wrapper .pagination .page-item.active .page-link {
            color: #ffffff !important;
            background-color: #126d69 !important;
            border-color: #126d69 !important;
        }

        .dataTables_wrapper .pagination .page-link {
            color: #126d69 !important;
        }

        .dataTables_wrapper .pagination .page-link:hover {
            color: #075c59 !important;
            background-color: #f5e9d0 !important;
            border-color: #a87842 !important;
        }

        /* Search dan Show Entries kalau ada warna biru bawaan */
        .dataTables_wrapper .dataTables_filter input:focus,
        .dataTables_wrapper .dataTables_length select:focus {
            border-color: #126d69 !important;
            box-shadow: 0 0 0 0.15rem rgba(18, 109, 105, 0.12) !important;
        }

        /* Link DataTables yang masih biru */
        .dataTables_wrapper a {
            color: #126d69;
        }

        .dataTables_wrapper a:hover {
            color: #075c59;
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