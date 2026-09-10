@extends('layouts.app')

@section('title', 'Grafik Kunjungan')

@section('content')

<style>
    .grafik-page {
        min-height: calc(100vh - 70px);
        padding: 30px;
        background: #f7f8f6;
    }

    /* HEADER */
    .grafik-header {
        margin-bottom: 25px;
    }

    .grafik-header h1 {
        margin: 0;
        color: #126d69;
        font-size: 28px;
        font-weight: 700;
    }

    .grafik-header p {
        margin: 6px 0 0;
        color: #7d8582;
        font-size: 14px;
    }

    /* FILTER */
    .filter-card {
        background: #fffdf8;
        border: 1px solid #ebe3d6;
        border-radius: 14px;
        padding: 22px;
        margin-bottom: 25px;
        box-shadow: 0 5px 18px rgba(18, 109, 105, 0.05);
    }

    .filter-title {
        color: #126d69;
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 17px;
    }

    .filter-label {
        display: block;
        margin-bottom: 7px;
        color: #5f6966;
        font-size: 13px;
        font-weight: 600;
    }

    .filter-card .form-control,
    .filter-card .form-select {
        height: 43px;
        border: 1px solid #ddd8cf;
        border-radius: 8px;
        color: #4d5754;
        background-color: #ffffff;
        font-size: 13px;
    }

    .filter-card .form-control:focus,
    .filter-card .form-select:focus {
        border-color: #126d69;
        box-shadow: 0 0 0 0.15rem rgba(18, 109, 105, 0.12);
    }

    .btn-tampilkan {
        height: 43px;
        padding: 0 24px;
        border: none;
        border-radius: 8px;
        background: #126d69;
        color: #ffffff;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: .3px;
        transition: .2s ease;
    }

    .btn-tampilkan:hover {
        background: #0d5b58;
        color: #ffffff;
        transform: translateY(-1px);
    }

    /* CHART CARD */
    .chart-card {
        background: #ffffff;
        border: 1px solid #ebe8e2;
        border-radius: 16px;
        padding: 25px;
        box-shadow: 0 7px 22px rgba(18, 109, 105, 0.06);
    }

    .chart-card-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 15px;
        margin-bottom: 20px;
    }

    .chart-title {
        color: #126d69;
        font-size: 19px;
        font-weight: 700;
        margin: 0;
    }

    .chart-subtitle {
        color: #89918f;
        font-size: 13px;
        margin: 5px 0 0;
    }

    .total-badge {
        padding: 9px 15px;
        border-radius: 9px;
        background: #f8efe2;
        color: #a87842;
        font-size: 12px;
        font-weight: 700;
        white-space: nowrap;
    }

    .chart-wrapper {
        position: relative;
        width: 100%;
        height: 420px;
    }

    /* EMPTY */
    .empty-chart {
        height: 420px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        border-radius: 12px;
        background: #fafcfb;
        border: 1px dashed #d8e3df;
        color: #89918f;
    }

    .empty-chart-title {
        color: #126d69;
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .empty-chart-text {
        font-size: 13px;
    }

    /* FOOTER INFO */
    .chart-info {
        display: flex;
        align-items: center;
        gap: 9px;
        margin-top: 17px;
        padding-top: 15px;
        border-top: 1px solid #eeeae4;
        color: #858e8b;
        font-size: 12px;
    }

    .chart-info-dot {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: #d8a35b;
        flex-shrink: 0;
    }

    @media (max-width: 768px) {

        .grafik-page {
            padding: 18px;
        }

        .grafik-header h1 {
            font-size: 24px;
        }

        .chart-card-header {
            flex-direction: column;
        }

        .chart-wrapper,
        .empty-chart {
            height: 300px;
        }
    }
</style>


<div class="grafik-page">

    {{-- =====================================================
        HEADER
    ====================================================== --}}

    <div class="grafik-header">

        <h1>
            Grafik Kunjungan
        </h1>

        <p>
            Visualisasi jumlah kunjungan wisatawan Evara Beach
        </p>

    </div>


    {{-- =====================================================
        FILTER
    ====================================================== --}}

    <div class="filter-card">

        <div class="filter-title">
            Filter Data Kunjungan
        </div>

        <form
            action="{{ route('admin.grafik-kunjungan.index') }}"
            method="GET"
        >

            <div class="row g-3 align-items-end">

                {{-- TANGGAL AWAL --}}
                <div class="col-md-3">

                    <label class="filter-label">
                        Periode Awal
                    </label>

                    <input
                        type="date"
                        name="tanggal_awal"
                        class="form-control"
                        value="{{ request('tanggal_awal') }}"
                    >

                </div>


                {{-- TANGGAL AKHIR --}}
                <div class="col-md-3">

                    <label class="filter-label">
                        Periode Akhir
                    </label>

                    <input
                        type="date"
                        name="tanggal_akhir"
                        class="form-control"
                        value="{{ request('tanggal_akhir') }}"
                    >

                </div>


                {{-- KATEGORI --}}
                <div class="col-md-3">

                    <label class="filter-label">
                        Kategori
                    </label>

                    <select
                        name="kategori_pengunjung"
                        class="form-select"
                    >

                        <option value="">
                            Semua Kategori
                        </option>

                        @foreach($kategori as $item)

                            <option
                                value="{{ $item }}"
                                {{ request('kategori_pengunjung') == $item ? 'selected' : '' }}
                            >
                                {{ $item }}
                            </option>

                        @endforeach

                    </select>

                </div>


                {{-- BUTTON --}}
                <div class="col-md-3">

                    <button
                        type="submit"
                        class="btn-tampilkan w-100"
                    >
                        TAMPILKAN
                    </button>

                </div>

            </div>

        </form>

    </div>


    {{-- =====================================================
        GRAFIK
    ====================================================== --}}

    <div class="chart-card">

        <div class="chart-card-header">

            <div>

                <h2 class="chart-title">
                    Jumlah Kunjungan Wisata
                </h2>

                <p class="chart-subtitle">
                    Grafik jumlah pengunjung berdasarkan tanggal kunjungan
                </p>

            </div>


            <div class="total-badge">

                Total:
                {{ number_format($totalPengunjung, 0, ',', '.') }}
                Pengunjung

            </div>

        </div>


        @if(count($labelGrafik) > 0)

            <div class="chart-wrapper">

                <canvas id="grafikKunjungan"></canvas>

            </div>

        @else

            <div class="empty-chart">

                <div>

                    <div class="empty-chart-title">
                        Belum Ada Data Kunjungan
                    </div>

                    <div class="empty-chart-text">
                        Data kunjungan belum tersedia untuk ditampilkan.
                    </div>

                </div>

            </div>

        @endif


        <div class="chart-info">

            <span class="chart-info-dot"></span>

            <span>
                Data grafik diambil dari data kunjungan wisatawan
                yang tersimpan pada sistem VISIT-IN.
            </span>

        </div>

    </div>

</div>


{{-- =========================================================
    CHART.JS
========================================================= --}}

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

document.addEventListener('DOMContentLoaded', function () {

    const canvas = document.getElementById('grafikKunjungan');

    if (!canvas) {
        return;
    }

    new Chart(canvas, {

        type: 'bar',

        data: {

            labels: @json($labelGrafik),

            datasets: [

                {

                    label: 'Jumlah Pengunjung',

                    data: @json($dataGrafik),

                    backgroundColor: '#126d69',

                    borderColor: '#126d69',

                    borderWidth: 1,

                    borderRadius: 7,

                    maxBarThickness: 45

                }

            ]

        },

        options: {

            responsive: true,

            maintainAspectRatio: false,

            interaction: {
                intersect: false,
                mode: 'index'
            },

            plugins: {

                legend: {
                    display: true,

                    labels: {
                        usePointStyle: true,
                        padding: 20
                    }
                },

                tooltip: {

                    callbacks: {

                        label: function (context) {

                            return ' ' +
                                context.parsed.y +
                                ' pengunjung';

                        }

                    }

                }

            },

            scales: {

                y: {

                    beginAtZero: true,

                    ticks: {
                        precision: 0
                    },

                    title: {
                        display: true,
                        text: 'Jumlah Pengunjung'
                    },

                    grid: {
                        color: 'rgba(18, 109, 105, 0.08)'
                    }

                },

                x: {

                    title: {
                        display: true,
                        text: 'Tanggal Kunjungan'
                    },

                    grid: {
                        display: false
                    }

                }

            }

        }

    });

});

</script>

@endsection