@extends('layouts.app')

@section('title', 'Rekap Kunjungan')

@section('content')

<style>
    /* =========================
       REKAP KUNJUNGAN VISIT-IN
    ========================= */

    .rekap-page {
        padding: 25px;
        background: #f7f9f8;
        min-height: calc(100vh - 70px);
    }

    .rekap-header {
        margin-bottom: 22px;
    }

    .rekap-title {
        margin: 0;
        color: #146b69;
        font-size: 28px;
        font-weight: 700;
    }

    .rekap-subtitle {
        margin-top: 5px;
        color: #7c8987;
        font-size: 13px;
    }

    /* =========================
       FILTER
    ========================= */

    .filter-card {
        background: #ffffff;
        border: 1px solid #e3ebe8;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 22px;
        box-shadow: 0 5px 18px rgba(35, 84, 80, 0.06);
    }

    .filter-title {
        color: #146b69;
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 16px;
    }

    .filter-label {
        display: block;
        margin-bottom: 6px;
        color: #49615f;
        font-size: 12px;
        font-weight: 600;
    }

    .filter-control {
        width: 100%;
        height: 40px;
        padding: 0 12px;
        border: 1px solid #d7e2df;
        border-radius: 7px;
        background: #fff;
        color: #435957;
        font-size: 12px;
        outline: none;
    }

    .filter-control:focus {
        border-color: #20938e;
        box-shadow: 0 0 0 3px rgba(32, 147, 142, 0.10);
    }

    .btn-filter {
        width: 100%;
        height: 40px;
        border: none;
        border-radius: 7px;
        background: linear-gradient(
            100deg,
            #116e6b,
            #16827e,
            #2ca59e
        );
        color: white;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: .3px;
        transition: .2s ease;
    }

    .btn-filter:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 15px rgba(22, 125, 121, 0.20);
    }

    /* =========================
       SUMMARY CARDS
    ========================= */

    .summary-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
        margin-bottom: 22px;
    }

    .summary-card {
        position: relative;
        overflow: hidden;
        background: #ffffff;
        border: 1px solid #e3ebe8;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 5px 18px rgba(35, 84, 80, 0.06);
    }

    .summary-card::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: linear-gradient(
            180deg,
            #126f6c,
            #d3a05d
        );
    }

    .summary-label {
        color: #84918f;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .5px;
    }

    .summary-value {
        margin-top: 8px;
        color: #146b69;
        font-size: 27px;
        font-weight: 700;
    }

    .summary-note {
        margin-top: 4px;
        color: #a08b73;
        font-size: 11px;
    }

    /* =========================
       TABLE
    ========================= */

    .table-card {
        background: #ffffff;
        border: 1px solid #e3ebe8;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 18px rgba(35, 84, 80, 0.06);
    }

    .table-header {
        padding: 18px 20px;
        border-bottom: 1px solid #e5ecea;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
    }

    .table-title {
        margin: 0;
        color: #146b69;
        font-size: 16px;
        font-weight: 700;
    }

    .table-count {
        padding: 5px 10px;
        border-radius: 20px;
        background: #edf7f5;
        color: #147d78;
        font-size: 10px;
        font-weight: 700;
    }

    .table-responsive {
        overflow-x: auto;
    }

    .rekap-table {
        width: 100%;
        margin: 0;
        border-collapse: collapse;
    }

    .rekap-table th {
        padding: 13px 12px;
        background: #f3f8f7;
        border: 1px solid #dce7e4;
        color: #146b69;
        font-size: 11px;
        font-weight: 700;
        text-align: left;
        white-space: nowrap;
    }

    .rekap-table td {
        padding: 13px 12px;
        border: 1px solid #e1e9e7;
        color: #526462;
        font-size: 11px;
        vertical-align: middle;
    }

    .rekap-table tbody tr:hover {
        background: #f8fcfb;
    }

    .number-cell {
        text-align: center !important;
        width: 55px;
    }

    .date-badge {
        color: #147d78;
        font-weight: 600;
    }

    .category-badge {
        display: inline-block;
        padding: 5px 9px;
        border-radius: 20px;
        background: #f8eee6;
        color: #a76d4e;
        font-size: 10px;
        font-weight: 600;
    }

    .jumlah-badge {
        display: inline-block;
        min-width: 30px;
        padding: 4px 8px;
        border-radius: 5px;
        background: #edf7f5;
        color: #147d78;
        text-align: center;
        font-weight: 700;
    }

    .empty-state {
        padding: 45px 20px;
        text-align: center;
        color: #8a9795;
        font-size: 12px;
    }

    .empty-state strong {
        display: block;
        margin-bottom: 5px;
        color: #146b69;
        font-size: 14px;
    }

    /* =========================
       FOOTER INFO
    ========================= */

    .rekap-info {
        margin-top: 15px;
        color: #899592;
        font-size: 10px;
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 900px) {

        .summary-grid {
            grid-template-columns: 1fr;
        }

    }

    @media (max-width: 768px) {

        .rekap-page {
            padding: 18px 13px;
        }

        .rekap-title {
            font-size: 23px;
        }

        .filter-card {
            padding: 16px;
        }

        .table-header {
            padding: 15px;
        }

    }
</style>


<div class="rekap-page">

    {{-- =========================
         HEADER
    ========================= --}}

    <div class="rekap-header">

        <h1 class="rekap-title">
            Rekap Kunjungan
        </h1>

        <div class="rekap-subtitle">
            Ringkasan data kunjungan wisata Evara Beach
        </div>

    </div>


    {{-- =========================
         FILTER
    ========================= --}}

    <div class="filter-card">

        <div class="filter-title">
            Filter Data Kunjungan
        </div>

        <form action="{{ route('admin.rekap-kunjungan.index') }}" method="GET">

            <div class="row g-3 align-items-end">

                <div class="col-md-3">

                    <label class="filter-label">
                        Periode Awal
                    </label>

                    <input
                        type="date"
                        name="tanggal_awal"
                        class="filter-control"
                        value="{{ request('tanggal_awal') }}"
                    >

                </div>


                <div class="col-md-3">

                    <label class="filter-label">
                        Periode Akhir
                    </label>

                    <input
                        type="date"
                        name="tanggal_akhir"
                        class="filter-control"
                        value="{{ request('tanggal_akhir') }}"
                    >

                </div>


                <div class="col-md-3">

                    <label class="filter-label">
                        Kategori Pengunjung
                    </label>

                    <select
                        name="kategori_pengunjung"
                        class="filter-control"
                    >

                        <option value="">
                            Semua Kategori
                        </option>

                        <option
                            value="Masyarakat Umum"
                            {{ request('kategori_pengunjung') == 'Masyarakat Umum' ? 'selected' : '' }}
                        >
                            Masyarakat Umum
                        </option>

                        <option
                            value="Pelajar"
                            {{ request('kategori_pengunjung') == 'Pelajar' ? 'selected' : '' }}
                        >
                            Pelajar
                        </option>

                        <option
                            value="Mahasiswa"
                            {{ request('kategori_pengunjung') == 'Mahasiswa' ? 'selected' : '' }}
                        >
                            Mahasiswa
                        </option>

                        <option
                            value="Wisatawan"
                            {{ request('kategori_pengunjung') == 'Wisatawan' ? 'selected' : '' }}
                        >
                            Wisatawan
                        </option>

                    </select>

                </div>


                <div class="col-md-3">

                    <button
                        type="submit"
                        class="btn-filter"
                    >
                        TAMPILKAN
                    </button>

                </div>

            </div>

        </form>

    </div>


    {{-- =========================
         SUMMARY
    ========================= --}}

    <div class="summary-grid">

        {{-- TOTAL KUNJUNGAN --}}

        <div class="summary-card">

            <div class="summary-label">
                Total Kunjungan
            </div>

            <div class="summary-value">
                {{ $totalKunjungan }}
            </div>

            <div class="summary-note">
                Data kunjungan tercatat
            </div>

        </div>


        {{-- JUMLAH PENGUNJUNG --}}

        <div class="summary-card">

            <div class="summary-label">
                Jumlah Pengunjung
            </div>

            <div class="summary-value">
                {{ $jumlahPengunjung }}
            </div>

            <div class="summary-note">
                Total individu pengunjung
            </div>

        </div>


        {{-- KATEGORI TERBANYAK --}}

        <div class="summary-card">

            <div class="summary-label">
                Kategori Terbanyak
            </div>

            <div class="summary-value" style="font-size: 20px;">
                {{ $kategoriTerbanyak ?? '-' }}
            </div>

            <div class="summary-note">
                Berdasarkan jumlah pengunjung
            </div>

        </div>

    </div>


    {{-- =========================
         TABLE
    ========================= --}}

    <div class="table-card">

        <div class="table-header">

            <h2 class="table-title">
                Data Rekap Kunjungan
            </h2>

            <div class="table-count">
                {{ $totalKunjungan }} Kunjungan
            </div>

        </div>


        <div class="table-responsive">

            <table class="rekap-table">

                <thead>

                    <tr>

                        <th class="number-cell">
                            No.
                        </th>

                        <th>
                            Tanggal
                        </th>

                        <th>
                            Asal Daerah
                        </th>

                        <th>
                            Kategori
                        </th>

                        <th>
                            Jumlah
                        </th>

                        <th>
                            Nama Lengkap
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse ($pengunjungs as $index => $pengunjung)

                        <tr>

                            <td class="number-cell">
                                {{ $index + 1 }}
                            </td>

                            <td>
                                <span class="date-badge">
                                    {{ \Carbon\Carbon::parse($pengunjung->tanggal_kunjungan)->format('d/m/Y') }}
                                </span>
                            </td>

                            <td>
                                {{ $pengunjung->asal_daerah }}
                            </td>

                            <td>

                                <span class="category-badge">
                                    {{ $pengunjung->kategori_pengunjung }}
                                </span>

                            </td>

                            <td>

                                <span class="jumlah-badge">
                                    {{ $pengunjung->jumlah_pengunjung }}
                                </span>

                            </td>

                            <td>
                                {{ $pengunjung->nama_lengkap }}
                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6">

                                <div class="empty-state">

                                    <strong>
                                        Belum Ada Data Kunjungan
                                    </strong>

                                    Belum terdapat data pengunjung yang dapat ditampilkan.

                                </div>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>


    <div class="rekap-info">
        Data rekap kunjungan bersumber dari data pengunjung VISIT-IN Evara Beach.
    </div>

</div>

@endsection