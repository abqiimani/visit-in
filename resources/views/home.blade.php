@extends('layouts.app')

@section('title', 'Dashboard Admin | VISIT-IN')

@section('content')

<style>
    .visit-dashboard {
        min-height: calc(100vh - 75px);
        padding: 30px 25px 45px;
        background: #f7f3e9;
    }

    .visit-dashboard-header {
        margin-bottom: 30px;
    }

    .visit-dashboard-header h1 {
        margin: 0 0 8px;
        color: #075c59;
        font-size: 30px;
        font-weight: 700;
    }

    .visit-dashboard-header p {
        margin: 0;
        color: #7b8884;
        font-size: 14px;
    }


    /* =====================================================
       KARTU STATISTIK
    ====================================================== */

    .visit-stat-card {
        height: 100%;
        min-height: 155px;

        padding: 24px;

        border: none;
        border-radius: 12px;

        background: #fffdf8;

        box-shadow:
            0 5px 18px rgba(18, 109, 105, 0.06);

        transition: 0.2s ease;
    }

    .visit-stat-card:hover {
        transform: translateY(-2px);

        box-shadow:
            0 8px 22px rgba(18, 109, 105, 0.09);
    }

    .visit-stat-top {
        display: flex;
        align-items: center;
        justify-content: space-between;

        margin-bottom: 22px;
    }

    .visit-stat-title {
        margin: 0;

        color: #71807d;

        font-size: 11px;
        font-weight: 700;

        letter-spacing: 0.5px;

        text-transform: uppercase;
    }

    .visit-stat-icon {
        display: flex;
        align-items: center;
        justify-content: center;

        width: 38px;
        height: 38px;

        border-radius: 9px;

        background: #e4f1ee;

        color: #0d7772;

        font-size: 17px;
    }

    .visit-stat-number {
        margin-bottom: 8px;

        color: #075c59;

        font-size: 30px;
        font-weight: 700;

        line-height: 1;
    }

    .visit-stat-description {
        margin: 0;

        color: #9a9f99;

        font-size: 12px;
    }


    /* =====================================================
       RINGKASAN STATISTIK
    ====================================================== */

    .visit-information-card {
        margin-top: 12px;

        border: none;
        border-radius: 12px;

        background: #fffdf8;

        box-shadow:
            0 5px 18px rgba(18, 109, 105, 0.06);
    }

    .visit-information-header {
        padding: 22px 25px 15px;
    }

    .visit-information-header h5 {
        margin: 0;

        color: #075c59;

        font-size: 17px;
        font-weight: 700;
    }

    .visit-information-body {
        padding: 10px 25px 25px;
    }

    .visit-information-body > p {
        margin-bottom: 20px;

        color: #71807d;

        font-size: 14px;

        line-height: 1.8;
    }


    /* =====================================================
       ITEM RINGKASAN
    ====================================================== */

    .visit-information-item {
        display: flex;
        align-items: center;

        gap: 12px;

        padding: 10px 0;
    }

    .visit-information-item i {
        width: 25px;

        color: #d8a35b;

        font-size: 16px;

        text-align: center;
    }

    .visit-information-item span {
        color: #71807d;

        font-size: 13px;
    }

    .visit-information-item strong {
        color: #075c59;

        font-weight: 700;
    }


    /* =====================================================
       RESPONSIVE
    ====================================================== */

    @media (max-width: 768px) {

        .visit-dashboard {
            padding: 25px 15px 35px;
        }

        .visit-dashboard-header h1 {
            font-size: 25px;
        }

        .visit-stat-card {
            min-height: 145px;
        }
    }
</style>


<div class="visit-dashboard">

    <!-- ==================================================
         HEADER DASHBOARD
    =================================================== -->

    <div class="visit-dashboard-header">

        <h1>
            Dashboard Admin
        </h1>

        <p>
            Ringkasan pengelolaan data kunjungan wisata Evara Beach.
        </p>

    </div>


    <!-- ==================================================
         STATISTIK UTAMA
    =================================================== -->

    <div class="row">


        <!-- ==================================================
             TOTAL PENGUNJUNG
        =================================================== -->

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="visit-stat-card">

                <div class="visit-stat-top">

                    <p class="visit-stat-title">
                        Total Pengunjung
                    </p>

                    <div class="visit-stat-icon">

                        <i class="fas fa-users"></i>

                    </div>

                </div>


                <div class="visit-stat-number">

                    {{ number_format($totalPengunjung, 0, ',', '.') }}

                </div>


                <p class="visit-stat-description">

                    Orang telah tercatat

                </p>

            </div>

        </div>


        <!-- ==================================================
             KUNJUNGAN HARI INI
        =================================================== -->

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="visit-stat-card">

                <div class="visit-stat-top">

                    <p class="visit-stat-title">
                        Kunjungan Hari Ini
                    </p>

                    <div class="visit-stat-icon">

                        <i class="fas fa-calendar-day"></i>

                    </div>

                </div>


                <div class="visit-stat-number">

                    {{ number_format($kunjunganHariIni, 0, ',', '.') }}

                </div>


                <p class="visit-stat-description">

                    Orang berkunjung hari ini

                </p>

            </div>

        </div>


        <!-- ==================================================
             KUNJUNGAN BULAN INI
        =================================================== -->

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="visit-stat-card">

                <div class="visit-stat-top">

                    <p class="visit-stat-title">
                        Kunjungan Bulan Ini
                    </p>

                    <div class="visit-stat-icon">

                        <i class="fas fa-calendar-alt"></i>

                    </div>

                </div>


                <div class="visit-stat-number">

                    {{ number_format($kunjunganBulanIni, 0, ',', '.') }}

                </div>


                <p class="visit-stat-description">

                    Orang pada bulan berjalan

                </p>

            </div>

        </div>


        <!-- ==================================================
             KATEGORI TERBANYAK
        =================================================== -->

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="visit-stat-card">

                <div class="visit-stat-top">

                    <p class="visit-stat-title">
                        Kategori Terbanyak
                    </p>

                    <div class="visit-stat-icon">

                        <i class="fas fa-chart-pie"></i>

                    </div>

                </div>


                <div
                    class="visit-stat-number"
                    style="font-size: 21px;"
                >

                    {{ $namaKategoriTerbanyak }}

                </div>


                <p class="visit-stat-description">

                    {{ number_format($jumlahKategoriTerbanyak, 0, ',', '.') }}
                    orang

                </p>

            </div>

        </div>

    </div>


    <!-- ==================================================
         RINGKASAN STATISTIK
    =================================================== -->

    <div class="visit-information-card">

        <div class="visit-information-header">

            <h5>
                Ringkasan Statistik
            </h5>

        </div>


        <div class="visit-information-body">

            <p>
                Informasi berikut memberikan gambaran singkat
                mengenai data kunjungan yang telah tercatat
                dalam sistem VISIT-IN.
            </p>


            <!-- TOTAL DATA KUNJUNGAN -->

            <div class="visit-information-item">

                <i class="fas fa-database"></i>

                <span>

                    Total Data Kunjungan:

                    <strong>
                        {{ number_format($totalDataKunjungan, 0, ',', '.') }}
                        data
                    </strong>

                </span>

            </div>


            <!-- RATA-RATA PENGUNJUNG -->

            <div class="visit-information-item">

                <i class="fas fa-users"></i>

                <span>

                    Rata-rata Pengunjung per Kunjungan:

                    <strong>
                        {{ number_format($rataRataPengunjung, 1, ',', '.') }}
                        orang
                    </strong>

                </span>

            </div>


            <!-- KATEGORI TERBANYAK -->

            <div class="visit-information-item">

                <i class="fas fa-chart-bar"></i>

                <span>

                    Kategori Pengunjung Dominan:

                    <strong>
                        {{ $namaKategoriTerbanyak }}
                    </strong>

                </span>

            </div>


            <!-- JUMLAH KATEGORI TERBANYAK -->

            <div class="visit-information-item">

                <i class="fas fa-user-friends"></i>

                <span>

                    Jumlah Pengunjung dari Kategori Terbanyak:

                    <strong>
                        {{ number_format($jumlahKategoriTerbanyak, 0, ',', '.') }}
                        orang
                    </strong>

                </span>

            </div>

        </div>

    </div>

</div>

@endsection