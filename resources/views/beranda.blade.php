@extends('layouts.visitor')

@section('title', 'Beranda | Evara Beach')

@section('content')

<style>
    .home-page {
        --tosca-dark: #075c59;
        --tosca: #0d7772;
        --tosca-light: #2da79e;
        --sand: #f5e9d0;
        --sand-dark: #d9aa62;
        --brown: #9b6b3d;

        font-family: 'Poppins', sans-serif;
        color: var(--tosca-dark);
        background: var(--sand);
        overflow: hidden;
    }

    .hero-section {
        position: relative;
        min-height: 650px;
        display: flex;
        align-items: center;
        isolation: isolate;

        background-image: url('{{ asset('img/foto pantai.jpeg') }}');
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .hero-section::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: -1;

        background:
            linear-gradient(
                90deg,
                rgba(3, 61, 58, 0.68) 0%,
                rgba(3, 74, 70, 0.38) 42%,
                rgba(3, 74, 70, 0.05) 100%
            );
    }

    .hero-section::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: -1px;
        height: 95px;
        z-index: 1;

        background: linear-gradient(
            to top,
            var(--sand) 0%,
            rgba(245, 233, 208, 0.65) 25%,
            rgba(245, 233, 208, 0.12) 75%,
            transparent 100%
        );
    }

    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 650px;
        padding: 95px 0 125px;
        color: #ffffff;
    }

    .hero-label {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 24px;
        padding: 9px 17px;
        border: 1px solid rgba(255, 255, 255, 0.7);
        border-radius: 30px;
        background: rgba(7, 92, 89, 0.25);
        color: #ffffff;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        backdrop-filter: blur(3px);
    }

    .hero-label::before {
        content: "";
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--sand-dark);
    }

    .hero-content h1 {
        margin-bottom: 22px;
        color: #ffffff;
        font-size: 58px;
        line-height: 1.15;
        font-weight: 800;
        letter-spacing: -1px;
        text-shadow:
            0 3px 8px rgba(0, 0, 0, 0.32),
            0 1px 2px rgba(0, 0, 0, 0.25);
    }

    .hero-content p {
        max-width: 550px;
        margin-bottom: 36px;
        color: #ffffff;
        font-size: 17px;
        line-height: 1.9;
        text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    .btn-visitor {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        padding: 17px 29px;
        border: 2px solid var(--sand-dark);
        border-radius: 50px;
        background: linear-gradient(
            135deg,
            #e8bd7c,
            #c99650
        );
        color: #ffffff;
        font-size: 13px;
        font-weight: 800;
        letter-spacing: 0.7px;
        text-decoration: none;
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.24);
        transition: all 0.3s ease;
    }

    .btn-visitor:hover {
        background: #ffffff;
        border-color: #ffffff;
        color: var(--tosca-dark);
        transform: translateY(-4px);
        box-shadow: 0 17px 32px rgba(0, 0, 0, 0.25);
    }

    .welcome-section {
        position: relative;
        padding: 105px 0;
        background: var(--sand);
    }

    .welcome-section::before {
        content: "";
        position: absolute;
        top: -100px;
        right: -120px;
        width: 300px;
        height: 300px;
        border: 35px solid rgba(45, 167, 158, 0.09);
        border-radius: 50%;
    }

    .welcome-image-wrapper {
        position: relative;
        padding: 0 15px 15px 0;
    }

    .welcome-image-wrapper::before {
        content: "";
        position: absolute;
        top: 22px;
        left: -15px;
        width: 100%;
        height: 100%;
        border: 2px solid var(--sand-dark);
        border-radius: 24px;
    }

    .welcome-image {
        position: relative;
        z-index: 2;
        overflow: hidden;
        border-radius: 24px;
        box-shadow: 0 18px 40px rgba(7, 92, 89, 0.16);
    }

    .welcome-image img {
        display: block;
        width: 100%;
        height: 390px;
        object-fit: cover;
        object-position: center;
        transition: transform 0.6s ease;
    }

    .welcome-image:hover img {
        transform: scale(1.04);
    }

    .welcome-text {
        position: relative;
        z-index: 2;
        padding-left: 38px;
    }

    .section-label {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 16px;
        color: var(--brown);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .section-label::before {
        content: "";
        width: 30px;
        height: 3px;
        border-radius: 5px;
        background: var(--sand-dark);
    }

    .welcome-text h2 {
        margin-bottom: 20px;
        color: var(--tosca-dark);
        font-size: 38px;
        line-height: 1.3;
        font-weight: 800;
    }

    .welcome-text p {
        margin: 0;
        color: #61716e;
        font-size: 15px;
        line-height: 2;
    }

    .small-line {
        width: 70px;
        height: 4px;
        margin-top: 25px;
        border-radius: 10px;
        background: var(--tosca);
    }

    .atmosphere-section {
        position: relative;
        padding: 90px 0;
        background:
            linear-gradient(
                135deg,
                rgba(5, 83, 79, 0.98),
                rgba(13, 119, 114, 0.96)
            );
        overflow: hidden;
    }

    .atmosphere-section::before {
        content: "";
        position: absolute;
        top: -180px;
        left: -100px;
        width: 350px;
        height: 350px;
        border: 45px solid rgba(255, 255, 255, 0.05);
        border-radius: 50%;
    }

    .atmosphere-section::after {
        content: "";
        position: absolute;
        right: -100px;
        bottom: -170px;
        width: 350px;
        height: 350px;
        border: 45px solid rgba(217, 170, 98, 0.18);
        border-radius: 50%;
    }

    .atmosphere-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .atmosphere-content h2 {
        margin-bottom: 18px;
        color: #ffffff;
        font-size: 36px;
        font-weight: 800;
    }

    .atmosphere-content p {
        max-width: 650px;
        margin: 0 auto;
        color: rgba(255, 255, 255, 0.9);
        font-size: 15px;
        line-height: 2;
    }

    .atmosphere-line {
        width: 70px;
        height: 4px;
        margin: 28px auto 0;
        border-radius: 10px;
        background: var(--sand-dark);
    }

    .closing-section {
        padding: 65px 0;
        background: #ffffff;
        text-align: center;
    }

    .closing-section h3 {
        margin-bottom: 12px;
        color: var(--tosca-dark);
        font-size: 27px;
        font-weight: 800;
    }

    .closing-section p {
        margin: 0;
        color: #71807d;
        font-size: 15px;
        line-height: 1.8;
    }

    .closing-decoration {
        display: flex;
        justify-content: center;
        gap: 7px;
        margin-top: 22px;
    }

    .closing-decoration span {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--sand-dark);
    }

    .closing-decoration span:nth-child(2) {
        background: var(--tosca-light);
    }

    .closing-decoration span:nth-child(3) {
        background: var(--tosca-dark);
    }

    @media (max-width: 991px) {
        .hero-content h1 {
            font-size: 48px;
        }

        .welcome-text {
            padding-left: 0;
            margin-top: 45px;
        }
    }

    @media (max-width: 576px) {
        .hero-section {
            min-height: 610px;
            background-position: 62% center;
        }

        .hero-content {
            padding: 75px 20px 120px;
        }

        .hero-content h1 {
            font-size: 38px;
        }

        .hero-content p {
            font-size: 15px;
        }

        .btn-visitor {
            width: 100%;
        }

        .welcome-section,
        .atmosphere-section {
            padding: 70px 20px;
        }

        .welcome-image img {
            height: 300px;
        }

        .welcome-text h2,
        .atmosphere-content h2 {
            font-size: 29px;
        }

        .closing-section {
            padding: 55px 20px;
        }
    }
</style>

<div class="home-page">

    {{-- HERO --}}
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">

                <span class="hero-label">
                    Evara Beach
                </span>

                <h1>
                    Temukan Tenangnya<br>
                    Suasana Pantai
                </h1>

                <p>
                    Nikmati keindahan alam, udara laut yang segar,
                    dan pengalaman berkunjung yang berkesan di Evara Beach.
                </p>

                <a href="{{ route('pengunjung.create') }}" class="btn-visitor">
                    <i class="bi bi-pencil-square"></i>
                    <span>ISI DATA KUNJUNGAN</span>
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>
        </div>
    </section>


    {{-- WELCOME --}}
    <section class="welcome-section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="welcome-image-wrapper">
                        <div class="welcome-image">
                            <img
                                src="{{ asset('img/foto20.png') }}"
                                alt="Pemandangan Evara Beach"
                            >
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="welcome-text">

                        <span class="section-label">
                            Sebuah Awal yang Menenangkan
                        </span>

                        <h2>
                            Biarkan Laut Membawa Ketenangan
                        </h2>

                        <p>
                            Evara Beach menjadi tempat untuk berhenti sejenak
                            dari kesibukan, menikmati suasana alam, dan
                            menciptakan momen sederhana bersama orang-orang
                            terdekat. Setiap kunjungan dimulai dari pengalaman
                            yang nyaman dan berkesan.
                        </p>

                        <div class="small-line"></div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ATMOSPHERE --}}
    <section class="atmosphere-section">
        <div class="container">
            <div class="atmosphere-content">

                <h2>
                    Nikmati Setiap Momen di Evara Beach
                </h2>

                <p>
                    Rasakan perpaduan antara suara ombak, angin laut,
                    dan pemandangan pantai yang membuat setiap waktu
                    terasa lebih santai dan bermakna.
                </p>

                <div class="atmosphere-line"></div>

            </div>
        </div>
    </section>


    {{-- CLOSING --}}
    <section class="closing-section">
        <div class="container">

            <h3>
                Selamat Menikmati Kunjungan Anda
            </h3>

            <p>
                Terima kasih telah memilih Evara Beach sebagai tujuan perjalanan Anda.
            </p>

            <div class="closing-decoration">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>
    </section>

</div>

@endsection