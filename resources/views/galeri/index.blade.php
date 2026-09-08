@extends('layouts.visitor')

@section('title', 'Galeri | VISIT-IN')

@section('content')

<style>
    :root {
        --toska: #087873;
        --toska-dark: #075b58;
        --cream: #fbf8f1;
        --cream-soft: #f2e6d3;
        --sand: #d4aa6b;
        --brown: #987047;
        --text: #405954;
        --muted: #78847f;
        --white: #ffffff;
        --line: rgba(117, 91, 57, .20);
    }

    .gallery-page {
        background: var(--cream);
        color: var(--text);
        overflow: hidden;
    }

    .gallery-page .container {
        max-width: 1160px;
    }

    /* =========================
       HEADER GALERI
    ========================= */

    .gallery-header {
        padding: 82px 0 70px;
        background: var(--cream);
    }

    .gallery-header-inner {
        max-width: 720px;
    }

    .eyebrow {
        display: flex;
        align-items: center;
        gap: 13px;
        margin-bottom: 23px;
        color: var(--toska);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 2.5px;
        text-transform: uppercase;
    }

    .eyebrow::before {
        content: "";
        width: 35px;
        height: 2px;
        background: var(--sand);
    }

    .gallery-title {
        margin: 0;
        color: var(--toska-dark);
        font-size: clamp(40px, 4.7vw, 62px);
        font-weight: 800;
        line-height: 1.08;
        letter-spacing: -1.8px;
    }

    .gallery-title span {
        color: var(--brown);
    }

    .gallery-intro {
        max-width: 590px;
        margin: 27px 0 0;
        color: var(--muted);
        font-size: 15px;
        line-height: 1.95;
    }

    /* =========================
       GALERI GRID
    ========================= */

    .gallery-section {
        padding: 0 0 105px;
        background: var(--cream);
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(12, minmax(0, 1fr));
        gap: 48px 28px;
    }

    .gallery-item {
        min-width: 0;
    }

    .gallery-item.large {
        grid-column: span 7;
    }

    .gallery-item.small {
        grid-column: span 5;
    }

    .gallery-item.full {
        grid-column: span 12;
        display: grid;
        grid-template-columns: 1.1fr .9fr;
        gap: 42px;
        align-items: center;
    }

    .gallery-image-wrapper {
        position: relative;
        overflow: hidden;
        background: var(--cream-soft);
    }

    .gallery-item.large .gallery-image-wrapper {
        height: 430px;
    }

    .gallery-item.small .gallery-image-wrapper {
        height: 350px;
    }

    .gallery-item.full .gallery-image-wrapper {
        height: 390px;
    }

    .gallery-image-wrapper::after {
        content: "";
        position: absolute;
        inset: 0;
        border: 1px solid rgba(255, 255, 255, .25);
        pointer-events: none;
    }

    .gallery-image {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
        transition: transform .5s ease;
    }

    .gallery-item:hover .gallery-image {
        transform: scale(1.035);
    }

    .gallery-caption {
        padding-top: 20px;
    }

    .gallery-item.full .gallery-caption {
        padding: 0;
    }

    .gallery-number {
        margin-bottom: 10px;
        color: var(--sand);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 1.5px;
    }

    .gallery-caption h2,
    .gallery-caption h3 {
        margin: 0;
        color: var(--toska-dark);
        font-weight: 800;
        line-height: 1.3;
    }

    .gallery-caption h2 {
        font-size: 31px;
        letter-spacing: -.5px;
    }

    .gallery-caption h3 {
        font-size: 24px;
    }

    .gallery-caption p {
        max-width: 500px;
        margin: 13px 0 0;
        color: var(--muted);
        font-size: 14px;
        line-height: 1.9;
    }

    .gallery-caption-line {
        width: 42px;
        height: 2px;
        margin-top: 20px;
        background: var(--sand);
    }

    /* =========================
       PENUTUP
    ========================= */

    .gallery-closing {
        padding: 85px 20px;
        background: var(--toska-dark);
        text-align: center;
    }

    .gallery-closing-inner {
        max-width: 650px;
        margin: 0 auto;
    }

    .gallery-closing-label {
        margin-bottom: 18px;
        color: var(--sand);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 2.5px;
        text-transform: uppercase;
    }

    .gallery-closing h2 {
        margin: 0 0 20px;
        color: var(--white);
        font-size: clamp(30px, 3.7vw, 46px);
        font-weight: 800;
        line-height: 1.2;
        letter-spacing: -.8px;
    }

    .gallery-closing h2 span {
        color: var(--sand);
    }

    .gallery-closing p {
        margin: 0;
        color: rgba(255, 255, 255, .68);
        font-size: 15px;
        line-height: 1.9;
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 991px) {
        .gallery-header {
            padding: 65px 0 55px;
        }

        .gallery-section {
            padding-bottom: 75px;
        }

        .gallery-grid {
            gap: 38px 22px;
        }

        .gallery-item.large {
            grid-column: span 12;
        }

        .gallery-item.small {
            grid-column: span 6;
        }

        .gallery-item.full {
            grid-column: span 12;
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .gallery-item.large .gallery-image-wrapper {
            height: 400px;
        }

        .gallery-item.small .gallery-image-wrapper {
            height: 310px;
        }

        .gallery-item.full .gallery-image-wrapper {
            height: 370px;
        }

        .gallery-item.full .gallery-caption {
            padding: 0;
        }
    }

    @media (max-width: 767px) {
        .gallery-title {
            font-size: 43px;
        }

        .gallery-grid {
            display: block;
        }

        .gallery-item {
            margin-bottom: 48px;
        }

        .gallery-item:last-child {
            margin-bottom: 0;
        }

        .gallery-item.small {
            display: block;
        }

        .gallery-item.large .gallery-image-wrapper,
        .gallery-item.small .gallery-image-wrapper,
        .gallery-item.full .gallery-image-wrapper {
            height: 300px;
        }

        .gallery-caption h2 {
            font-size: 29px;
        }

        .gallery-caption h3 {
            font-size: 23px;
        }

        .gallery-item.full {
            display: block;
        }
    }

    @media (max-width: 480px) {
        .gallery-header {
            padding: 48px 0 50px;
        }

        .gallery-title {
            font-size: 38px;
            letter-spacing: -1px;
        }

        .gallery-intro,
        .gallery-caption p,
        .gallery-closing p {
            font-size: 14px;
        }

        .gallery-item.large .gallery-image-wrapper,
        .gallery-item.small .gallery-image-wrapper,
        .gallery-item.full .gallery-image-wrapper {
            height: 260px;
        }

        .gallery-closing {
            padding: 70px 20px;
        }
    }
</style>

<div class="gallery-page">

    {{-- HEADER --}}
    <section class="gallery-header">
        <div class="container">
            <div class="gallery-header-inner">

                <div class="eyebrow">
                    Galeri Destinasi
                </div>

                <h1 class="gallery-title">
                    Pesona
                    <span>Evara Beach</span>
                </h1>

                <p class="gallery-intro">
                    Lihat lebih dekat suasana, pemandangan, dan berbagai
                    aktivitas yang dapat dinikmati di Evara Beach melalui
                    rangkaian foto berikut.
                </p>

            </div>
        </div>
    </section>

    {{-- GALERI --}}
    <section class="gallery-section">
        <div class="container">

            <div class="gallery-grid">

                {{-- FOTO 1 --}}
                <article class="gallery-item large">

                    <div class="gallery-image-wrapper">
                        {{-- Ganti pantai21.png dengan foto spot foto --}}
                        <img
                            src="{{ asset('img/pantai21.png') }}"
                            alt="Spot foto Evara Beach"
                            class="gallery-image"
                        >
                    </div>

                    <div class="gallery-caption">
                        <div class="gallery-number">
                            01 / SPOT DESTINASI
                        </div>

                        <h2>
                            Spot Foto
                        </h2>

                        <p>
                            Area yang dapat digunakan pengunjung untuk
                            mengabadikan momen dengan latar pemandangan
                            Evara Beach.
                        </p>

                        <div class="gallery-caption-line"></div>
                    </div>

                </article>

                {{-- FOTO 2 --}}
                <article class="gallery-item small">

                    <div class="gallery-image-wrapper">
                        {{-- Ganti pantai.jpg dengan foto pemandangan laut --}}
                        <img
                            src="{{ asset('img/pantai.jpg') }}"
                            alt="Pemandangan laut Evara Beach"
                            class="gallery-image"
                        >
                    </div>

                    <div class="gallery-caption">
                        <div class="gallery-number">
                            02 / PEMANDANGAN
                        </div>

                        <h3>
                            Pemandangan Laut
                        </h3>

                        <p>
                            Hamparan laut dan suasana pesisir yang
                            memberikan kesan tenang serta menyegarkan.
                        </p>

                        <div class="gallery-caption-line"></div>
                    </div>

                </article>

                {{-- FOTO 3 --}}
                <article class="gallery-item small">

                    <div class="gallery-image-wrapper">
                        {{-- Ganti foto20.png dengan foto aktivitas berenang --}}
                        <img
                            src="{{ asset('img/foto20.png') }}"
                            alt="Aktivitas berenang di Evara Beach"
                            class="gallery-image"
                        >
                    </div>

                    <div class="gallery-caption">
                        <div class="gallery-number">
                            03 / AKTIVITAS
                        </div>

                        <h3>
                            Berenang
                        </h3>

                        <p>
                            Aktivitas menikmati air laut yang dapat
                            dilakukan sesuai kondisi dan keamanan
                            kawasan pantai.
                        </p>

                        <div class="gallery-caption-line"></div>
                    </div>

                </article>

                {{-- FOTO 4 --}}
                <article class="gallery-item large">

                    <div class="gallery-image-wrapper">
                        {{-- Ganti pantai1.jpg dengan foto bersantai atau berjemur --}}
                        <img
                            src="{{ asset('img/pantai1.jpg') }}"
                            alt="Bersantai di tepi pantai"
                            class="gallery-image"
                        >
                    </div>

                    <div class="gallery-caption">
                        <div class="gallery-number">
                            04 / WAKTU SANTAI
                        </div>

                        <h2>
                            Bersantai di Tepi Pantai
                        </h2>

                        <p>
                            Menikmati udara laut, suara ombak, dan waktu
                            luang dalam suasana pantai yang terbuka.
                        </p>

                        <div class="gallery-caption-line"></div>
                    </div>

                </article>

                {{-- FOTO 5 --}}
                <article class="gallery-item full">

                    <div class="gallery-image-wrapper">
                        {{-- Ganti nama file dengan foto kebersamaan keluarga atau teman --}}
                        <img
                            src="{{ asset('img/pantai.jpg') }}"
                            alt="Momen kebersamaan di Evara Beach"
                            class="gallery-image"
                        >
                    </div>

                    <div class="gallery-caption">
                        <div class="gallery-number">
                            05 / MOMEN BERKESAN
                        </div>

                        <h2>
                            Momen Kebersamaan
                        </h2>

                        <p>
                            Evara Beach menjadi tempat untuk menghabiskan
                            waktu bersama keluarga, sahabat, maupun orang
                            terdekat dalam suasana yang santai.
                        </p>

                        <div class="gallery-caption-line"></div>
                    </div>

                </article>

                {{-- FOTO 6 --}}
                <article class="gallery-item full">

                    <div class="gallery-image-wrapper">
                        {{-- Ganti nama file dengan foto suasana sore atau matahari terbenam --}}
                        <img
                            src="{{ asset('img/pantai21.png') }}"
                            alt="Suasana sore di Evara Beach"
                            class="gallery-image"
                        >
                    </div>

                    <div class="gallery-caption">
                        <div class="gallery-number">
                            06 / SUASANA PANTAI
                        </div>

                        <h2>
                            Menikmati Suasana Sore
                        </h2>

                        <p>
                            Suasana sore menghadirkan cahaya yang lembut
                            dan pemandangan yang cocok untuk menikmati
                            akhir perjalanan.
                        </p>

                        <div class="gallery-caption-line"></div>
                    </div>

                </article>

            </div>

        </div>
    </section>

    {{-- PENUTUP --}}
    <section class="gallery-closing">
        <div class="container">
            <div class="gallery-closing-inner">

                <div class="gallery-closing-label">
                    Evara Beach
                </div>

                <h2>
                    Setiap foto menyimpan
                    <span>sebuah cerita</span>
                </h2>

                <p>
                    Temukan suasana dan momen menarik lainnya
                    melalui kunjungan langsung ke Evara Beach.
                </p>

            </div>
        </div>
    </section>

</div>

@endsection