@extends('layouts.app')

@section('title', 'Data Pengunjung')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pengunjung</h1>
</div>

<div class="card">

    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title mb-0">Data Pengunjung VISIT-IN</h5>
    </div>

    <div class="card-body">

        <table class="table table-striped table-hover datatables">

            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Nomor Telepon</th>
                    <th>Asal Daerah</th>
                    <th>Kategori Pengunjung</th>
                    <th>Jumlah Pengunjung</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($pengunjungs as $pengunjung)

                    <tr>

                        <td>
                            {{ $pengunjung->nama_lengkap }}
                        </td>

                        <td>
                            {{ $pengunjung->nomor_telepon }}
                        </td>

                        <td>
                            {{ $pengunjung->asal_daerah }}
                        </td>

                        <td>
                            {{ $pengunjung->kategori_pengunjung }}
                        </td>

                        <td>
                            {{ $pengunjung->jumlah_pengunjung }}
                        </td>

                        <td>
                            {{ $pengunjung->tanggal_kunjungan }}
                        </td>

                        <td>

                            {{-- Lihat Detail --}}
                            <a href="{{ route('admin.pengunjung.show', encrypt($pengunjung->id)) }}"
                               class="btn btn-link text-secondary p-0 mx-2 action-button"
                               title="Lihat Detail">

                                <span class="fa fa-eye"></span>

                            </a>

                            {{-- Hapus --}}
                            <a href="javascript:void(0)"
                               onclick="actionDestroy('{{ route('admin.pengunjung.destroy', encrypt($pengunjung->id)) }}')"
                               class="btn btn-link text-danger p-0 mx-2 action-button"
                               title="Hapus">

                                <span class="fa fa-trash"></span>

                            </a>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

        {{-- Form Delete --}}
        <form id="form-destroy" method="POST" style="display: none;">

            @csrf

            @method('DELETE')

        </form>

    </div>

</div>

@endsection


@push('styles')

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
   HEADER TABEL
   ========================================================== */

.datatables {
    width: 100% !important;
    border-color: var(--visit-border) !important;
}

.datatables thead th {
    background: var(--visit-sand) !important;
    color: var(--visit-teal-dark) !important;
    border-color: var(--visit-border) !important;
    vertical-align: middle !important;
    white-space: normal !important;
}


/* ==========================================================
   LEBAR KOLOM
   ========================================================== */

.datatables th:nth-child(1),
.datatables td:nth-child(1) {
    width: 17% !important;
}

.datatables th:nth-child(2),
.datatables td:nth-child(2) {
    width: 14% !important;
}

.datatables th:nth-child(3),
.datatables td:nth-child(3) {
    width: 16% !important;
}

.datatables th:nth-child(4),
.datatables td:nth-child(4) {
    width: 17% !important;
}

.datatables th:nth-child(5),
.datatables td:nth-child(5) {
    width: 13% !important;
    text-align: center !important;
}

.datatables th:nth-child(6),
.datatables td:nth-child(6) {
    width: 14% !important;
}

.datatables th:nth-child(7),
.datatables td:nth-child(7) {
    width: 9% !important;
    text-align: center !important;
}


/* ==========================================================
   ISI TABEL
   ========================================================== */

.datatables tbody td {
    color: var(--visit-text) !important;
    border-color: var(--visit-border) !important;
    vertical-align: middle !important;
}


/* Nama lengkap */

.datatables tbody td:first-child {
    color: var(--visit-teal) !important;
}


/* ==========================================================
   AGAR ISI KOLOM TIDAK BERANTAKAN
   ========================================================== */

.datatables tbody td:nth-child(2),
.datatables tbody td:nth-child(5),
.datatables tbody td:nth-child(6),
.datatables tbody td:nth-child(7) {
    white-space: nowrap !important;
}


/* ==========================================================
   ACTION — DIBUAT SEBARIS
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
   HOVER BARIS
   ========================================================== */

.datatables tbody tr:hover {
    background: var(--visit-teal-soft) !important;
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
   ICON HAPUS
   ========================================================== */

.datatables .fa-trash {
    color: #e74a3b !important;
}

.datatables .fa-trash:hover {
    color: #c0392b !important;
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
   SEMUA LINK DATATABLES
   ========================================================== */

.dataTables_wrapper .dataTables_paginate a {
    color: var(--visit-teal) !important;
}


/* ==========================================================
   PAGINATION - BOOTSTRAP 4
   ========================================================== */

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
   ACTIVE HARUS TETAP TOSCA
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

    background-color: #126d69 !important;

    border-color: #126d69 !important;

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
   LINK YANG MASIH MENGIKUTI BOOTSTRAP
   ========================================================== */

.dataTables_wrapper a:not(.btn) {
    color: var(--visit-teal) !important;
}

.dataTables_wrapper a:not(.btn):hover {
    color: var(--visit-teal-dark) !important;
}


/* ==========================================================
   TOMBOL PAGINATION DATATABLES
   ========================================================== */

.dataTables_wrapper .paginate_button {
    color: var(--visit-teal) !important;
}

.dataTables_wrapper .paginate_button.current {
    color: #ffffff !important;
    background: var(--visit-teal) !important;
    border-color: var(--visit-teal) !important;
}


/* ==========================================================
   RESPONSIVE
   ========================================================== */

@media (max-width: 768px) {

    .dataTables_wrapper .dataTables_filter {
        margin-top: 10px;
    }

    .datatables {
        min-width: 900px;
    }

}

</style>

@endpush


@push('scripts')

<script>

    $(document).ready(function () {

        $('.datatables').DataTable();

    });


    function actionDestroy(url) {

        Swal.fire({

            title: "Apakah anda yakin akan menghapus data ini?",

            text: "Data pengunjung yang dihapus tidak dapat dipulihkan!",

            icon: "warning",

            showCancelButton: true,

            confirmButtonColor: "#d33",

            cancelButtonColor: "#6c757d",

            confirmButtonText: "Ya, hapus",

            cancelButtonText: "Batal"

        }).then((result) => {

            if (result.isConfirmed) {

                $('#form-destroy').attr('action', url);

                $('#form-destroy').submit();

            }

        });

    }

</script>


@if (Session::has('success'))

    <script type="text/javascript">

        Swal.fire({

            title: 'Berhasil',

            text: '{{ Session::get('success') }}',

            icon: 'success',

            confirmButtonText: 'OK'

        });

    </script>

@endif

@endpush