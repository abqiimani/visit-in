@extends('layouts.visitor')

@section('title', 'Beranda | Evara Beach')

@section('content')

<style>
    :root {
        --tosca-dark: #075c59;
        --tosca: #0d7772;
        --tosca-light: #2d9690;
        --cream: #fffaf1;
        --cream-soft: #f7f1e5;
        --sand: #e9d5b4;
        --sand-dark: #c99a59;
        --brown: #8d6745;
        --text: #4e615e;
        --muted: #74817e;
        --white: #ffffff;
    }

    .beranda-page {
        background: var(--cream);
        color: var(--text);
        overflow: hidden;
    }


    /* =========================================================
       HERO
       ========================================================= */

    .hero-section {
        position: relative;
        min-height: 650px;
        display: flex;
        align-items: center;
        overflow: hidden;

        background-image:
            linear-gradient(
                90deg,
                rgba(3, 48, 47, 0.70) 0%,
                rgba(3, 48, 47, 0.48) 38%,
                rgba(3, 48, 47, 0.15) 72%,
                rgba(3, 48, 47, 0.03) 100%
            ),
            url('{{ asset('img/foto20.png') }}');

        background-size: cover;

        /* posisi gambar tetap natural */
        background-position: center center;
    }


    /*
     * TRANSISI FOTO KE SECTION CREAM
     * Dibuat lebih panjang dan hangat supaya
     * tidak terlihat seperti foto langsung berubah putih.
     */

    .hero-section::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 180px;

        background: linear-gradient(
            to bottom,
            rgba(255, 250, 241, 0) 0%,
            rgba(238, 218, 186, 0.08) 20%,
            rgba(232, 211, 178, 0.20) 42%,
            rgba(242, 226, 201, 0.48) 62%,
            rgba(248, 239, 222, 0.78) 80%,
            #fffaf1 100%
        );

        z-index: 1;
        pointer-events: none;
    }


    .hero-content {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 1250px;
        margin: 0 auto;
        padding: 90px 42px 120px;
    }


    .hero-text {
        max-width: 620px;
        color: var(--white);
    }


    .hero-label {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 18px;
        padding: 8px 17px;

        border: 1px solid rgba(255,255,255,0.42);
        border-radius: 30px;

        background: rgba(255,255,255,0.10);
        backdrop-filter: blur(5px);

        font-size: 12px;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
    }


    .hero-label::before {
        content: "";
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #e7c078;
    }


    /* Ukuran tetap seperti desain sebelumnya */

    .hero-title {
        margin: 0;
        color: var(--white);

        font-family: "Playfair Display", Georgia, serif;
        font-size: clamp(44px, 5vw, 62px);
        font-weight: 600;
        line-height: 1.08;
        letter-spacing: -0.5px;
    }


    .hero-title span {
        display: block;
        color: #f6dfb7;
    }


    .hero-description {
        max-width: 570px;
        margin: 23px 0 30px;

        color: rgba(255,255,255,0.90);

        font-size: 16px;
        line-height: 1.8;
    }


    .hero-button {
        display: inline-flex;
        align-items: center;
        gap: 11px;

        padding: 14px 24px;

        border: none;
        border-radius: 8px;

        background: #f1d19b;
        color: #155d59;

        font-size: 14px;
        font-weight: 700;
        letter-spacing: .3px;

        text-decoration: none;

        transition:
            transform .25s ease,
            background .25s ease,
            box-shadow .25s ease;
    }


    .hero-button:hover {
        background: #f7dfb7;
        color: #155d59;

        transform: translateY(-2px);

        box-shadow: 0 10px 25px rgba(0,0,0,.18);
    }


    .hero-button i {
        font-size: 16px;
    }



    /* =========================================================
       SECTION 1 — PEMBUKA
       ========================================================= */

    .welcome-section {
        padding: 105px 30px 110px;
        background: var(--cream);
    }


    .welcome-container {
        max-width: 1180px;
        margin: 0 auto;
    }


    .welcome-grid {
        display: grid;
        grid-template-columns: .95fr 1.05fr;
        gap: 75px;
        align-items: center;
    }


    .welcome-image {
        position: relative;
    }


    .welcome-image img {
        display: block;
        width: 100%;
        height: 450px;

        object-fit: cover;
        border-radius: 5px;
    }


    .welcome-image::after {
        content: "";
        position: absolute;

        width: 105px;
        height: 105px;

        right: -18px;
        bottom: -18px;

        border-right: 3px solid var(--sand-dark);
        border-bottom: 3px solid var(--sand-dark);
    }


    .section-label {
        margin-bottom: 13px;

        color: var(--tosca);

        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
    }


    .welcome-title {
        margin: 0 0 20px;

        color: var(--tosca-dark);

        font-family: "Playfair Display", Georgia, serif;
        font-size: clamp(34px, 4vw, 48px);
        font-weight: 600;
        line-height: 1.15;
    }


    .welcome-text {
        max-width: 550px;
        margin: 0;

        color: var(--text);

        font-size: 16px;
        line-height: 1.9;
    }


    .welcome-highlight {
        display: flex;
        gap: 18px;

        margin-top: 28px;
        padding-top: 23px;

        border-top: 1px solid rgba(141,103,69,.20);
    }


    .highlight-item {
        flex: 1;
    }


    .highlight-item strong {
        display: block;
        margin-bottom: 5px;

        color: var(--tosca-dark);

        font-size: 14px;
        font-weight: 700;
    }


    .highlight-item span {
        color: var(--muted);

        font-size: 13px;
        line-height: 1.6;
    }



    /* =========================================================
       SECTION 2 — PENGALAMAN
       ========================================================= */

    .experience-section {
        padding: 90px 30px 95px;

        background: var(--cream-soft);

        border-top: 1px solid rgba(141,103,69,.10);
        border-bottom: 1px solid rgba(141,103,69,.10);
    }


    .experience-container {
        max-width: 1120px;
        margin: 0 auto;
    }


    .experience-heading {
        max-width: 700px;
        margin: 0 auto 55px;
        text-align: center;
    }


    .experience-title {
        margin: 0 0 15px;

        color: var(--tosca-dark);

        font-family: "Playfair Display", Georgia, serif;
        font-size: clamp(32px, 4vw, 44px);
        line-height: 1.2;
        font-weight: 600;
    }


    .experience-intro {
        margin: 0;

        color: var(--muted);

        font-size: 15px;
        line-height: 1.8;
    }


    .experience-list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 45px;
    }


    .experience-item {
        position: relative;
        padding: 10px 25px;
        text-align: center;
    }


    .experience-number {
        display: block;
        margin-bottom: 14px;

        color: var(--sand-dark);

        font-family: "Playfair Display", Georgia, serif;
        font-size: 29px;
        font-weight: 600;
    }


    .experience-item h3 {
        margin: 0 0 11px;

        color: var(--tosca-dark);

        font-size: 17px;
        font-weight: 700;
    }


    .experience-item p {
        margin: 0;

        color: var(--muted);

        font-size: 14px;
        line-height: 1.8;
    }


    .experience-item:not(:last-child)::after {
        content: "";
        position: absolute;

        width: 1px;
        height: 75px;

        right: -22px;
        top: 25px;

        background: rgba(141,103,69,.20);
    }



    /* =========================================================
       SECTION 3 — VISUAL
       ========================================================= */

    .visual-section {
        padding: 105px 30px;
        background: var(--cream);
    }


    .visual-container {
        max-width: 1180px;
        margin: 0 auto;
    }


    .visual-grid {
        display: grid;
        grid-template-columns: 1.1fr .9fr;
        min-height: 440px;
    }


    .visual-image {
        min-height: 440px;

        background-image:
            url('{{ asset('img/pantai21.png') }}');

        background-size: cover;
        background-position: center;
    }


    .visual-content {
        display: flex;
        flex-direction: column;
        justify-content: center;

        padding: 65px;

        background: var(--tosca-dark);
        color: var(--white);
    }


    .visual-content .section-label {
        color: #e4bd7e;
    }


    .visual-title {
        margin: 0 0 20px;

        color: var(--white);

        font-family: "Playfair Display", Georgia, serif;
        font-size: clamp(32px, 4vw, 45px);
        line-height: 1.18;
        font-weight: 600;
    }


    .visual-text {
        margin: 0;

        color: rgba(255,255,255,.84);

        font-size: 15px;
        line-height: 1.9;
    }



    /* =========================================================
       CLOSING
       ========================================================= */

    .closing-section {
        padding: 95px 30px 110px;

        text-align: center;

        background: var(--cream);
    }


    .closing-container {
        max-width: 720px;
        margin: 0 auto;
    }


    .closing-line {
        width: 45px;
        height: 2px;

        margin: 0 auto 25px;

        background: var(--sand-dark);
    }


    .closing-title {
        margin: 0 0 18px;

        color: var(--tosca-dark);

        font-family: "Playfair Display", Georgia, serif;
        font-size: clamp(34px, 4vw, 48px);
        line-height: 1.2;
        font-weight: 600;
    }


    .closing-text {
        margin: 0;

        color: var(--muted);

        font-size: 15px;
        line-height: 1.9;
    }



    /* =========================================================
       RESPONSIVE
       ========================================================= */

    @media (max-width: 991px) {

        .hero-section {
            min-height: 620px;
            background-position: 58% center;
        }


        .hero-content {
            padding: 90px 35px 115px;
        }


        .welcome-grid {
            gap: 45px;
        }


        .welcome-image img {
            height: 400px;
        }


        .visual-content {
            padding: 50px;
        }

    }



    @media (max-width: 767px) {

        .hero-section {
            min-height: 640px;
            background-position: center;
        }


        .hero-section::after {
            height: 130px;
        }


        .hero-content {
            padding: 85px 25px 110px;
        }


        .hero-title {
            font-size: 45px;
        }


        .hero-description {
            font-size: 15px;
            line-height: 1.75;
        }


        .welcome-section {
            padding: 75px 22px 80px;
        }


        .welcome-grid {
            grid-template-columns: 1fr;
            gap: 50px;
        }


        .welcome-image img {
            height: 340px;
        }


        .welcome-image::after {
            width: 75px;
            height: 75px;
        }


        .welcome-highlight {
            flex-direction: column;
            gap: 18px;
        }


        .experience-section {
            padding: 70px 22px 75px;
        }


        .experience-heading {
            margin-bottom: 40px;
        }


        .experience-list {
            grid-template-columns: 1fr;
            gap: 35px;
        }


        .experience-item {
            padding: 0 15px;
        }


        .experience-item:not(:last-child)::after {
            width: 45px;
            height: 1px;

            top: auto;
            right: auto;
            bottom: -18px;
            left: 50%;

            transform: translateX(-50%);
        }


        .visual-section {
            padding: 70px 22px;
        }


        .visual-grid {
            grid-template-columns: 1fr;
        }


        .visual-image {
            min-height: 320px;
        }


        .visual-content {
            padding: 50px 30px;
        }


        .closing-section {
            padding: 75px 22px 85px;
        }

    }



    @media (max-width: 480px) {

        .hero-title {
            font-size: 40px;
        }


        .hero-label {
            font-size: 11px;
            letter-spacing: 1.5px;
        }


        .hero-button {
            width: 100%;
            justify-content: center;
        }


        .welcome-image img {
            height: 300px;
        }


        .visual-image {
            min-height: 270px;
        }


        .visual-content {
            padding: 42px 25px;
        }

    }

</style>



<div class="beranda-page">


    {{-- =====================================================
         HERO
         ===================================================== --}}

    <section class="hero-section">

        <div class="hero-content">

            <div class="hero-text">

                <div class="hero-label">
                    Evara Beach
                </div>


                <h1 class="hero-title">
                    Temukan Tenangnya
                    <span>Suasana Pantai</span>
                </h1>


                <p class="hero-description">
                    Nikmati keindahan pantai, suasana yang menyenangkan,
                    dan berbagai pengalaman sederhana yang membuat
                    kunjungan ke Evara Beach terasa berkesan.
                </p>


                <a href="{{ route('pengunjung.create') }}"
                   class="hero-button">

                    <i class="bi bi-pencil-square"></i>

                    <span>ISI DATA KUNJUNGAN</span>

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

        </div>

    </section>



    {{-- =====================================================
         WELCOME
         ===================================================== --}}

    <section class="welcome-section">

        <div class="welcome-container">

            <div class="welcome-grid">


                <div class="welcome-image">

                    <img
                        src="{{ asset('img/foto20.png') }}"
                        alt="Pemandangan Evara Beach"
                    >

                </div>



                <div class="welcome-content">

                    <div class="section-label">
                        Selamat Datang di Evara Beach
                    </div>


                    <h2 class="welcome-title">
                        Tempat untuk Menikmati Waktu dengan Cara Anda
                    </h2>


                    <p class="welcome-text">
                        Evara Beach menawarkan suasana yang dapat dinikmati
                        dengan berbagai cara. Menikmati pemandangan laut,
                        menghabiskan waktu bersama keluarga dan teman,
                        mencari sudut untuk berfoto, atau sekadar menikmati
                        udara pantai — semuanya bisa menjadi bagian dari
                        kunjungan Anda.
                    </p>


                    <div class="welcome-highlight">

                        <div class="highlight-item">

                            <strong>
                                Suasana Pantai
                            </strong>

                            <span>
                                Nikmati udara laut dan pemandangan
                                yang menjadi bagian dari perjalanan.
                            </span>

                        </div>


                        <div class="highlight-item">

                            <strong>
                                Waktu Bersama
                            </strong>

                            <span>
                                Ciptakan pengalaman bersama keluarga
                                maupun orang-orang terdekat.
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         EXPERIENCE
         ===================================================== --}}

    <section class="experience-section">

        <div class="experience-container">


            <div class="experience-heading">

                <div class="section-label">
                    Pengalaman Berkunjung
                </div>


                <h2 class="experience-title">
                    Ada Banyak Cara untuk Menikmati Pantai
                </h2>


                <p class="experience-intro">
                    Setiap pengunjung bisa memiliki cara yang berbeda
                    untuk menikmati waktu di Evara Beach.
                </p>

            </div>



            <div class="experience-list">


                <div class="experience-item">

                    <span class="experience-number">
                        01
                    </span>


                    <h3>
                        Menikmati Pemandangan
                    </h3>


                    <p>
                        Luangkan waktu melihat hamparan laut,
                        langit, dan suasana pantai yang ada di sekitar.
                    </p>

                </div>



                <div class="experience-item">

                    <span class="experience-number">
                        02
                    </span>


                    <h3>
                        Bersama Orang Terdekat
                    </h3>


                    <p>
                        Nikmati waktu bersama keluarga atau teman
                        dalam suasana yang lebih santai dan menyenangkan.
                    </p>

                </div>



                <div class="experience-item">

                    <span class="experience-number">
                        03
                    </span>


                    <h3>
                        Mengabadikan Perjalanan
                    </h3>


                    <p>
                        Temukan sudut yang menarik untuk berfoto
                        dan simpan cerita dari kunjungan Anda.
                    </p>

                </div>


            </div>

        </div>

    </section>



    {{-- =====================================================
         VISUAL FEATURE
         ===================================================== --}}

    <section class="visual-section">

        <div class="visual-container">

            <div class="visual-grid">


                <div class="visual-image"></div>


                <div class="visual-content">

                    <div class="section-label">
                        Tentukan Cara Anda Menikmati Pantai
                    </div>


                    <h2 class="visual-title">
                        Dari Pemandangan hingga Suasana
                    </h2>


                    <p class="visual-text">
                        Ada yang datang untuk menikmati pemandangan,
                        ada yang ingin menghabiskan waktu bersama,
                        dan ada pula yang sekadar mencari suasana
                        berbeda dari rutinitas sehari-hari.

                        Apa pun alasannya, setiap kunjungan memiliki
                        cerita tersendiri.
                    </p>

                </div>


            </div>

        </div>

    </section>



    {{-- =====================================================
         CLOSING
         ===================================================== --}}

    <section class="closing-section">

        <div class="closing-container">

            <div class="closing-line"></div>


            <h2 class="closing-title">
                Sampai Jumpa di Evara Beach
            </h2>


            <p class="closing-text">
                Nikmati perjalanan Anda, temukan suasana yang disukai,
                dan jadikan kunjungan ke Evara Beach sebagai bagian
                dari cerita perjalanan Anda.
            </p>

        </div>

    </section>


</div>

@endsection