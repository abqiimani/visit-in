@extends('layouts.visitor')

@section('title', 'Beranda | Evara Beach')

@section('content')

<style>
    :root {
        --toska-dark: #075c59;
        --toska: #0d7772;
        --toska-light: #2d9690;
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

    /* ================= HERO ================= */

    .hero-section {
        position: relative;
        min-height: 650px;
        display: flex;
        align-items: center;
        overflow: hidden;

        background-image:
            linear-gradient(
                90deg,
                rgba(3,48,47,.70) 0%,
                rgba(3,48,47,.48) 38%,
                rgba(3,48,47,.15) 72%,
                rgba(3,48,47,.03) 100%
            ),
            url('{{ asset('img/pantaifiks.png') }}');

        background-size: cover;
        background-position: center center;
    }

    .hero-section::before {
        content: "";
        position: absolute;
        width: 620px;
        height: 620px;
        right: -250px;
        top: -170px;

        border: 1px solid rgba(255,255,255,.18);
        border-radius: 50%;

        box-shadow:
            0 0 0 35px rgba(255,255,255,.035),
            0 0 0 70px rgba(255,255,255,.022);

        pointer-events: none;
    }

    .hero-section::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 160px;

        background: linear-gradient(
            to bottom,
            rgba(255,250,241,0) 0%,
            rgba(242,226,201,.15) 38%,
            rgba(248,239,222,.45) 70%,
            #fffaf1 100%
        );

        z-index: 1;
        pointer-events: none;
    }

    .hero-content {
        position: relative;
        z-index: 3;

        width: 100%;
        max-width: 1250px;
        margin: 0 auto;

        padding: 90px 42px 120px;
    }

    .hero-text {
        max-width: 620px;
        color: #fff;
    }

    .hero-label {
        display: inline-flex;
        align-items: center;
        gap: 10px;

        margin-bottom: 18px;
        padding: 8px 17px;

        border: 1px solid rgba(255,255,255,.42);
        border-radius: 30px;

        background: rgba(255,255,255,.10);
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

        box-shadow:
            0 0 0 4px rgba(231,192,120,.12);
    }

    .hero-title {
        margin: 0;

        color: #fff;

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(44px, 5vw, 62px);
        font-weight: 600;
        line-height: 1.08;

        text-shadow:
            0 3px 12px rgba(0,0,0,.22);
    }

    .hero-title span {
        display: block;
        color: #f6dfb7;
    }

    .hero-description {
        max-width: 570px;

        margin: 23px 0 30px;

        color: rgba(255,255,255,.92);

        font-size: 16px;
        line-height: 1.8;

        text-shadow:
            0 2px 7px rgba(0,0,0,.28);
    }

    /* ================= ORNAMEN KANAN ================= */

    .hero-side-decoration {
        position: absolute;

        right: 8%;
        top: 50%;

        width: 280px;
        height: 280px;

        transform: translateY(-50%);

        z-index: 2;
        pointer-events: none;
    }

    .hero-ring {
        position: absolute;
        inset: 0;

        border: 1px solid rgba(255,255,255,.24);
        border-radius: 50%;

        box-shadow:
            0 0 0 18px rgba(255,255,255,.035),
            0 0 0 42px rgba(255,255,255,.022);
    }

    .hero-ring::before {
        content: "";

        position: absolute;

        width: 9px;
        height: 9px;

        top: 36px;
        right: 55px;

        border-radius: 50%;

        background: #e7c078;

        box-shadow:
            0 0 0 7px rgba(231,192,120,.12),
            0 0 25px rgba(231,192,120,.55);
    }

    .hero-ring::after {
        content: "";

        position: absolute;

        width: 5px;
        height: 5px;

        left: 35px;
        bottom: 55px;

        border-radius: 50%;

        background: rgba(255,255,255,.72);

        box-shadow:
            0 0 0 7px rgba(255,255,255,.08);
    }

    /* ================= CARD KANAN ================= */

    .hero-mini-card {
        position: absolute;

        right: 7%;
        bottom: 105px;

        z-index: 4;

        width: 235px;

        padding: 20px 22px;

        border: 1px solid rgba(255,255,255,.28);
        border-radius: 18px;

        background:
            linear-gradient(
                135deg,
                rgba(7,92,89,.64),
                rgba(7,92,89,.28)
            );

        backdrop-filter: blur(10px);

        box-shadow:
            0 18px 45px rgba(0,0,0,.20),
            inset 0 1px 0 rgba(255,255,255,.14);

        color: #fff;
    }

    .hero-mini-card-top {
        display: flex;
        align-items: center;
        gap: 9px;

        margin-bottom: 10px;

        color: #f4d79e;

        font-size: 10px;
        font-weight: 800;

        letter-spacing: 1.8px;
        text-transform: uppercase;
    }

    .hero-mini-card-top::before {
        content: "";

        width: 6px;
        height: 6px;

        border-radius: 50%;

        background: #f1d19b;

        box-shadow:
            0 0 0 4px rgba(241,209,155,.13);
    }

    .hero-mini-card h3 {
        margin: 0 0 7px;

        color: #fff;

        font-family: "Playfair Display", Georgia, serif;

        font-size: 25px;
        font-weight: 600;

        line-height: 1.15;
    }

    .hero-mini-card p {
        margin: 0;

        color: rgba(255,255,255,.78);

        font-size: 12px;
        line-height: 1.7;
    }

    .hero-mini-line {
        width: 38px;
        height: 2px;

        margin-top: 14px;

        border-radius: 10px;

        background: #e2b56e;
    }

    /* ================= TOMBOL ================= */

    .hero-button-wrap {
        display: inline-flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 7px;
    }

    .hero-button-label {
        display: inline-flex;
        align-items: center;
        gap: 8px;

        margin-left: 9px;

        color: #fff;

        font-size: 11px;
        font-weight: 800;

        letter-spacing: 1.7px;
        text-transform: uppercase;

        text-shadow:
            0 2px 6px rgba(0,0,0,.30);
    }

    .hero-button-label::before {
        content: "";

        width: 7px;
        height: 7px;

        flex-shrink: 0;

        border-radius: 50%;

        background: #f1d19b;

        box-shadow:
            0 0 0 4px rgba(241,209,155,.18),
            0 0 14px rgba(241,209,155,.45);
    }

    .hero-button {
        position: relative;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        gap: 14px;

        width: 330px;
        min-height: 68px;

        padding: 17px 25px;

        border: 2px solid rgba(255,255,255,.82);
        border-radius: 17px;

        background:
            linear-gradient(
                135deg,
                #f9dfad 0%,
                #efca8e 45%,
                #dcae69 100%
            );

        color: #075c59;

        font-size: 16px;
        font-weight: 900;

        letter-spacing: .6px;

        text-decoration: none;

        box-shadow:
            0 14px 30px rgba(0,0,0,.25),
            0 0 0 6px rgba(241,209,155,.13),
            0 0 28px rgba(241,209,155,.18);

        overflow: hidden;

        transition:
            transform .25s ease,
            box-shadow .25s ease,
            background .25s ease;
    }

    .hero-button::before {
        content: "";

        position: absolute;

        top: -80%;
        left: -45%;

        width: 38%;
        height: 240%;

        background:
            linear-gradient(
                90deg,
                transparent,
                rgba(255,255,255,.78),
                transparent
            );

        transform: rotate(20deg);

        transition: left .7s ease;

        pointer-events: none;
    }

    .hero-button::after {
        content: "";

        position: absolute;

        inset: 3px;

        border-radius: 13px;

        border: 1px solid rgba(255,255,255,.38);

        pointer-events: none;
    }

    .hero-button:hover::before {
        left: 125%;
    }

    .hero-button:hover {
        color: #075c59;

        transform: translateY(-4px);

        background:
            linear-gradient(
                135deg,
                #ffe8be 0%,
                #f4d39a 48%,
                #e2b572 100%
            );

        box-shadow:
            0 19px 38px rgba(0,0,0,.30),
            0 0 0 8px rgba(241,209,155,.17),
            0 0 38px rgba(241,209,155,.30);
    }

    .hero-button i:first-child {
        font-size: 21px;
    }

    .hero-button .hero-arrow {
        margin-left: auto;

        font-size: 22px;

        transition: transform .25s ease;
    }

    .hero-button:hover .hero-arrow {
        transform: translateX(5px);
    }

    /* ================= WELCOME ================= */

    .welcome-section {
        position: relative;

        padding: 105px 30px 110px;

        background: var(--cream);

        overflow: hidden;
    }

    .welcome-section::before {
        content: "";

        position: absolute;

        width: 260px;
        height: 260px;

        right: -130px;
        top: -110px;

        border: 30px solid rgba(13,119,114,.06);

        border-radius: 50%;
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

        box-shadow:
            0 20px 45px rgba(7,92,89,.12);
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

        font-size: clamp(34px,4vw,48px);
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

        color: var(--toska-dark);

        font-size: 14px;
        font-weight: 700;
    }

    .highlight-item span {
        color: var(--muted);

        font-size: 13px;
        line-height: 1.6;
    }

    /* ================= EXPERIENCE ================= */

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

        color: var(--toska-dark);

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(32px,4vw,44px);

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

        grid-template-columns: repeat(3,1fr);

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

        color: var(--toska-dark);

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

    /* ================= VISUAL ================= */

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
            url('{{ asset('img/foto pantai.jpeg') }}');

        background-size: cover;
        background-position: center;
    }

    .visual-content {
        display: flex;

        flex-direction: column;
        justify-content: center;

        padding: 65px;

        background: var(--toska-dark);

        color: #fff;
    }

    .visual-content .section-label {
        color: #e4bd7e;
    }

    .visual-title {
        margin: 0 0 20px;

        color: #fff;

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(32px,4vw,45px);

        line-height: 1.18;
        font-weight: 600;
    }

    .visual-text {
        margin: 0;

        color: rgba(255,255,255,.84);

        font-size: 15px;
        line-height: 1.9;
    }

    /* ================= CLOSING ================= */

    .closing-section {
        position: relative;

        padding: 95px 30px 110px;

        text-align: center;

        background: var(--cream);

        overflow: hidden;
    }

    .closing-section::before {
        content: "";

        position: absolute;

        width: 260px;
        height: 260px;

        left: -150px;
        bottom: -150px;

        border: 30px solid rgba(13,119,114,.06);

        border-radius: 50%;
    }

    .closing-container {
        position: relative;
        z-index: 2;

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

        color: var(--toska-dark);

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(34px,4vw,48px);

        line-height: 1.2;
        font-weight: 600;
    }

    .closing-text {
        margin: 0;

        color: var(--muted);

        font-size: 15px;
        line-height: 1.9;
    }

    /* ================= RESPONSIVE ================= */

    @media (max-width:1100px) {

        .hero-mini-card {
            right: 4%;
        }

        .hero-side-decoration {
            right: 4%;
        }
    }

    @media (max-width:991px) {

        .hero-section {
            min-height: 620px;
            background-position: 58% center;
        }

        .hero-content {
            padding: 90px 35px 115px;
        }

        .hero-mini-card {
            right: 30px;
            bottom: 70px;
            width: 205px;
        }

        .hero-side-decoration {
            right: 0;
            opacity: .7;
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

    @media (max-width:767px) {

        .hero-section {
            min-height: 640px;
            background-position: center;
        }

        .hero-section::before {
            display: none;
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

        .hero-mini-card,
        .hero-side-decoration {
            display: none;
        }

        .hero-button {
            width: 310px;
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

    @media (max-width:480px) {

        .hero-title {
            font-size: 40px;
        }

        .hero-button-wrap {
            width: 100%;
        }

        .hero-button-label {
            margin-left: 5px;
        }

        .hero-button {
            width: 100%;
            min-height: 64px;
            padding: 16px 20px;
            font-size: 15px;
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

    {{-- ================= HERO ================= --}}

    <section class="hero-section">

        <div class="hero-side-decoration">
            <div class="hero-ring"></div>
        </div>

        <div class="hero-mini-card">

            <div class="hero-mini-card-top">
                Coastal Destination
            </div>

            <h3>
                Laut &amp;<br>
                Pesisir
            </h3>

            <p>
                Ruang untuk menikmati panorama pantai
                dan suasana pesisir dalam satu kawasan.
            </p>

            <div class="hero-mini-line"></div>

        </div>

        <div class="hero-content">

            <div class="hero-text">

                <div class="hero-label">
                    Evara Beach
                </div>

                <h1 class="hero-title">
                    Selamat Datang
                    <span>di Evara Beach</span>
                </h1>

                <p class="hero-description">
                    Nikmati keindahan pantai, suasana yang menyenangkan,
                    dan pengalaman sederhana yang membuat kunjungan
                    ke Evara Beach terasa berkesan.
                </p>

                <div class="hero-button-wrap">

                    <div class="hero-button-label">
                        Mulai di sini
                    </div>

                    <a
                        href="{{ route('pengunjung.create') }}"
                        class="hero-button"
                    >
                        <i class="bi bi-pencil-square"></i>

                        <span>
                            ISI DATA KUNJUNGAN
                        </span>

                        <i class="bi bi-arrow-right hero-arrow"></i>
                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= SEKILAS EVARA BEACH ================= --}}

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
                        Sekilas Evara Beach
                    </div>

                    <h2 class="welcome-title">
                        Pesona Pantai dalam Satu Destinasi
                    </h2>

                    <p class="welcome-text">
                        Evara Beach merupakan kawasan wisata pantai yang
                        menghadirkan pemandangan laut, hamparan pasir, dan
                        ruang terbuka untuk berbagai kebutuhan pengunjung.
                        Kawasan ini menjadi bagian dari pengalaman
                        berkunjung yang nyaman dan menyenangkan.
                    </p>

                    <div class="welcome-highlight">

                        <div class="highlight-item">

                            <strong>
                                Pemandangan Pantai
                            </strong>

                            <span>
                                Pemandangan laut dan kawasan pesisir
                                yang menjadi karakter Evara Beach.
                            </span>

                        </div>

                        <div class="highlight-item">

                            <strong>
                                Area Bersantai
                            </strong>

                            <span>
                                Ruang yang nyaman untuk berkumpul
                                bersama keluarga dan orang terdekat.
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= DAYA TARIK ================= --}}

    <section class="experience-section">

        <div class="experience-container">

            <div class="experience-heading">

                <div class="section-label">
                    Daya Tarik Evara Beach
                </div>

                <h2 class="experience-title">
                    Hal yang Dapat Ditemukan di Evara Beach
                </h2>

                <p class="experience-intro">
                    Kawasan Evara Beach memiliki berbagai bagian
                    yang menjadi daya tarik bagi pengunjung.
                </p>

            </div>

            <div class="experience-list">

                <div class="experience-item">

                    <span class="experience-number">
                        01
                    </span>

                    <h3>
                        Pemandangan Pantai
                    </h3>

                    <p>
                        Hamparan laut, garis pantai, dan pemandangan
                        alam menjadi bagian utama kawasan wisata.
                    </p>

                </div>

                <div class="experience-item">

                    <span class="experience-number">
                        02
                    </span>

                    <h3>
                        Area Bersantai
                    </h3>

                    <p>
                        Tersedia ruang untuk duduk, berkumpul, dan
                        menikmati kawasan pantai dengan lebih santai.
                    </p>

                </div>

                <div class="experience-item">

                    <span class="experience-number">
                        03
                    </span>

                    <h3>
                        Spot Foto
                    </h3>

                    <p>
                        Berbagai sudut kawasan dapat menjadi pilihan
                        untuk mengabadikan momen selama berkunjung.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= VISUAL FEATURE ================= --}}

    <section class="visual-section">

        <div class="visual-container">

            <div class="visual-grid">

                <div class="visual-image"></div>

                <div class="visual-content">

                    <div class="section-label">
                        Suasana Evara Beach
                    </div>

                    <h2 class="visual-title">
                        Pantai, Laut, dan Ruang Terbuka
                    </h2>

                    <p class="visual-text">
                        Evara Beach menghadirkan kawasan pesisir dengan
                        pemandangan laut, pasir, dan ruang terbuka yang
                        menjadi bagian dari karakter destinasi. Berbagai
                        sudut kawasan dapat dinikmati sesuai kebutuhan
                        setiap pengunjung.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= PENUTUP ================= --}}

    <section class="closing-section">

        <div class="closing-container">

            <div class="closing-line"></div>

            <h2 class="closing-title">
                Mulai Menjelajahi Evara Beach
            </h2>

            <p class="closing-text">
                Kenali kawasan, lihat berbagai informasi yang tersedia,
                dan temukan bagian Evara Beach yang ingin Anda jelajahi.
            </p>

        </div>

    </section>

</div>

@endsection