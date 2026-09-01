@extends('layouts.visitor')

@section('title', 'VISIT-IN | Evara Beach')

@section('content')

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    /* =========================================
       HERO HOME
    ========================================= */

    .home-page {
        position: relative;
        min-height: calc(100vh - 82px);

        display: flex;
        align-items: center;

        overflow: hidden;

        background-image: url('{{ asset('img/pantai.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    /* Overlay pantai */
    .home-overlay {
        position: absolute;
        inset: 0;
        z-index: 1;

        background:
            linear-gradient(
                90deg,
                rgba(5, 65, 63, 0.88) 0%,
                rgba(6, 82, 78, 0.72) 30%,
                rgba(8, 91, 86, 0.38) 58%,
                rgba(8, 91, 86, 0.08) 100%
            );
    }

    /* =========================================
       CONTENT
    ========================================= */

    .home-content {
        position: relative;
        z-index: 3;

        width: 100%;
        max-width: 1250px;

        margin: 0 auto;

        padding: 75px 55px;
    }

    .home-text {
        width: 700px;
        max-width: 100%;
    }

    /* =========================================
       BADGE
    ========================================= */

    .home-badge {
        display: inline-block;

        padding: 10px 22px;
        margin-bottom: 25px;

        border-radius: 50px;

        color: #ffffff;

        background: rgba(21, 137, 130, 0.90);

        border: 1px solid rgba(255,255,255,0.35);

        font-size: 12px;
        font-weight: 700;

        letter-spacing: 1.3px;

        box-shadow:
            0 8px 25px rgba(0,0,0,0.18);
    }

    /* =========================================
       JUDUL
    ========================================= */

    .home-title {
        margin: 0;

        color: #ffffff;

        font-family:
            Georgia,
            'Times New Roman',
            serif;

        font-size: clamp(58px, 7vw, 92px);

        font-weight: 700;

        line-height: 0.94;

        letter-spacing: -3px;

        text-shadow:
            0 5px 25px rgba(0,0,0,0.25);
    }

    .home-title .highlight {
        color: #e5bb78;
    }

    /* =========================================
       DESKRIPSI
    ========================================= */

    .home-description {
        max-width: 650px;

        margin-top: 30px;
        margin-bottom: 32px;

        color: #ffffff;

        font-size: 18px;

        line-height: 1.8;

        text-shadow:
            0 2px 8px rgba(0,0,0,0.25);
    }

    /* =========================================
       AREA CTA
    ========================================= */

    .visit-action {
        width: 100%;
        max-width: 520px;

        margin-top: 5px;
    }

    /* Label kecil di atas tombol */

    .visit-label {
        margin-bottom: 10px;

        color: #ffffff;

        font-size: 13px;
        font-weight: 700;

        letter-spacing: 0.5px;
    }

    /* =========================================
       TOMBOL UTAMA
    ========================================= */

    .home-visit-button {
        position: relative;

        display: flex;
        align-items: center;
        justify-content: space-between;

        width: 100%;

        padding: 20px 25px 20px 30px;

        border: none;
        border-radius: 18px;

        background:
            linear-gradient(
                135deg,
                #087d78,
                #35b8ad
            );

        color: #ffffff !important;

        text-decoration: none;

        box-shadow:
            0 15px 35px rgba(3, 75, 71, 0.40);

        transition:
            transform 0.3s ease,
            box-shadow 0.3s ease,
            background 0.3s ease;
    }

    .home-visit-button:hover {
        transform: translateY(-4px);

        background:
            linear-gradient(
                135deg,
                #066b67,
                #2eaaa1
            );

        box-shadow:
            0 20px 45px rgba(3, 75, 71, 0.50);
    }

    /* Tulisan utama tombol */

    .visit-button-text {
        display: flex;
        flex-direction: column;

        gap: 4px;
    }

    .visit-button-title {
        font-size: 19px;
        font-weight: 800;

        letter-spacing: 0.4px;
    }

    .visit-button-subtitle {
        font-size: 12px;
        font-weight: 400;

        opacity: 0.90;
    }

    /* Panah */

    .visit-arrow {
        width: 48px;
        height: 48px;

        display: flex;
        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        border-radius: 50%;

        background: rgba(255,255,255,0.18);

        font-size: 24px;

        transition:
            transform 0.3s ease,
            background 0.3s ease;
    }

    .home-visit-button:hover .visit-arrow {
        transform: translateX(5px);

        background: rgba(255,255,255,0.28);
    }

    /* =========================================
       KEAMANAN DATA
    ========================================= */

    .data-security {
        display: flex;
        align-items: center;

        gap: 9px;

        margin-top: 14px;
        padding-left: 5px;

        color: rgba(255,255,255,0.90);

        font-size: 12px;
    }

    .security-dot {
        width: 8px;
        height: 8px;

        flex-shrink: 0;

        border-radius: 50%;

        background: #e5bb78;

        box-shadow:
            0 0 0 4px rgba(229,187,120,0.15);
    }

    /* =========================================
       INFO TAMBAHAN
    ========================================= */

    .home-info {
        display: flex;
        align-items: center;

        gap: 25px;

        margin-top: 30px;

        color: rgba(255,255,255,0.88);

        font-size: 12px;
    }

    .home-info-item {
        display: flex;
        flex-direction: column;

        gap: 3px;
    }

    .home-info-number {
        color: #e5bb78;

        font-size: 18px;
        font-weight: 800;
    }

    .home-info-label {
        font-size: 11px;
    }

    .home-info-divider {
        width: 1px;
        height: 35px;

        background: rgba(255,255,255,0.30);
    }

    /* =========================================
       RESPONSIVE
    ========================================= */

    @media (max-width: 991px) {

        .home-content {
            padding: 65px 35px;
        }

        .home-title {
            font-size: 68px;
        }

        .home-description {
            font-size: 16px;
        }

        .visit-action {
            max-width: 480px;
        }
    }

    @media (max-width: 576px) {

        .home-page {
            min-height: calc(100vh - 70px);

            background-position: 58% center;
        }

        .home-content {
            min-height: calc(100vh - 70px);

            display: flex;
            align-items: center;

            padding: 45px 22px;
        }

        .home-badge {
            padding: 8px 15px;

            font-size: 9px;
        }

        .home-title {
            font-size: 52px;

            line-height: 0.98;

            letter-spacing: -1.5px;
        }

        .home-description {
            margin-top: 22px;
            margin-bottom: 27px;

            font-size: 14px;

            line-height: 1.7;
        }

        .home-visit-button {
            padding: 17px 18px 17px 22px;

            border-radius: 16px;
        }

        .visit-button-title {
            font-size: 15px;
        }

        .visit-button-subtitle {
            font-size: 10px;
        }

        .visit-arrow {
            width: 42px;
            height: 42px;

            font-size: 20px;
        }

        .data-security {
            font-size: 10px;
        }

        .home-info {
            gap: 15px;

            margin-top: 25px;
        }

        .home-info-number {
            font-size: 15px;
        }

        .home-info-label {
            font-size: 9px;
        }
    }
</style>


<!-- =========================================
     BERANDA VISIT-IN
========================================= -->

<section class="home-page">

    <!-- Background overlay -->
    <div class="home-overlay"></div>


    <div class="home-content">

        <div class="home-text">

            <!-- Badge -->
            <div class="home-badge">
                SELAMAT DATANG DI EVARA BEACH
            </div>


            <!-- Judul utama -->
            <h1 class="home-title">

                Nikmati<br>

                Keindahan
                <span class="highlight">
                    Evara<br>
                    Beach
                </span>

            </h1>


            <!-- Deskripsi -->
            <p class="home-description">

                Temukan pesona pantai, pasir yang indah,
                suara ombak yang menenangkan, dan suasana
                liburan yang tak terlupakan di Evara Beach.

            </p>


            <!-- =====================================
                 CTA UTAMA
            ====================================== -->

            <div class="visit-action">

                <div class="visit-label">
                    Sudah berada di Evara Beach?
                </div>


                <!-- SATU-SATUNYA TOMBOL -->
                <a
                    href="{{ route('pengunjung.create') }}"
                    class="home-visit-button"
                >

                    <div class="visit-button-text">

                        <span class="visit-button-title">
                            ISI DATA KUNJUNGAN
                        </span>

                        <span class="visit-button-subtitle">
                            Lengkapi data kunjungan Anda
                        </span>

                    </div>


                    <div class="visit-arrow">
                        →
                    </div>

                </a>


                <!-- Keamanan data -->
                <div class="data-security">

                    <span class="security-dot"></span>

                    <span>
                        Data Anda aman dan digunakan untuk
                        pendataan kunjungan wisata.
                    </span>

                </div>

            </div>


            <!-- =====================================
                 INFO KECIL
            ====================================== -->

            <div class="home-info">

                <div class="home-info-item">

                    <span class="home-info-number">
                        Evara
                    </span>

                    <span class="home-info-label">
                        Beach
                    </span>

                </div>


                <div class="home-info-divider"></div>


                <div class="home-info-item">

                    <span class="home-info-number">
                        VISIT-IN
                    </span>

                    <span class="home-info-label">
                        Pendataan Wisata
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection