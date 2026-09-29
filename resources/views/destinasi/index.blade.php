@extends('layouts.visitor')

@section('title', 'Tentang Destinasi | Evara Beach')

@section('content')

<style>
    :root {
        --toska: #087873;
        --toska-dark: #075b58;
        --toska-deep: #034a47;

        --cream: #f8f1e3;
        --cream-light: #fffaf1;
        --cream-soft: #f4eadb;

        --sand: #d4aa6b;
        --brown: #8a6038;
        --brown-dark: #765033;

        --text: #405954;
        --muted: #74817d;

        --white: #ffffff;
    }

    * {
        box-sizing: border-box;
    }

    .destinasi-page {
        background: var(--cream);
        color: var(--text);
        overflow: hidden;
    }


    /* =========================================================
       HERO
    ========================================================= */

    .destinasi-hero {
        padding: 100px 30px 105px;

        background: linear-gradient(
            135deg,
            #f8f1e3 0%,
            #f6eddf 52%,
            #efe0c4 100%
        );

        border-bottom: 1px solid rgba(138, 96, 56, .12);
    }

    .destinasi-hero-inner {
        max-width: 900px;

        margin: 0 auto;

        display: flex;
        flex-direction: column;

        align-items: center;
        justify-content: center;

        text-align: center;
    }

    .destinasi-hero-inner > div {
        width: 100%;
    }

    .hero-label {
        margin-bottom: 17px;

        color: var(--brown);

        font-size: 12px;
        font-weight: 700;

        letter-spacing: 2.4px;
        text-transform: uppercase;

        text-align: center;
    }

    .destinasi-hero h1 {
        margin: 0 auto;

        color: var(--toska-dark);

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(47px, 5.5vw, 68px);

        line-height: 1.05;
        font-weight: 600;

        letter-spacing: -.7px;

        text-align: center;
    }

    .destinasi-hero h1 span {
        color: var(--brown);
    }

    .hero-description {
        max-width: 700px;

        margin: 28px auto 0;

        color: var(--text);

        font-size: 15px;
        line-height: 1.9;

        text-align: center;
    }


    /* =========================================================
       PROFIL DESTINASI
    ========================================================= */

    .profil-section {
        padding: 105px 30px;

        background: var(--cream-light);
    }

    .profil-container {
        max-width: 1120px;

        margin: 0 auto;
    }

    .profil-heading {
        max-width: 700px;

        margin: 0 auto 55px;

        text-align: center;
    }

    .section-label {
        margin-bottom: 13px;

        color: var(--toska);

        font-size: 12px;
        font-weight: 700;

        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .section-title {
        margin: 0;

        color: var(--toska-dark);

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(35px, 4vw, 49px);

        line-height: 1.17;
        font-weight: 600;
    }

    .profil-grid {
        display: grid;

        grid-template-columns: 1fr 1fr;

        gap: 70px;

        align-items: center;
    }

    .profil-image {
        position: relative;

        padding: 0 15px 15px 0;
    }

    .profil-image::after {
        content: "";

        position: absolute;

        left: 15px;
        right: 0;
        top: 15px;
        bottom: 0;

        border: 2px solid var(--sand);

        z-index: 0;
    }

    .profil-image img {
        position: relative;

        z-index: 1;

        display: block;

        width: 100%;
        height: 430px;

        object-fit: cover;
    }

    .profil-text {
        padding: 0 10px;
    }

    .profil-text p {
        margin: 0 0 19px;

        color: var(--text);

        font-size: 15px;
        line-height: 1.9;
    }

    .profil-note {
        margin-top: 28px;

        padding: 21px 23px;

        border-left: 3px solid var(--sand);

        background: var(--cream-soft);
    }

    .profil-note strong {
        display: block;

        margin-bottom: 6px;

        color: var(--toska-dark);

        font-size: 14px;
    }

    .profil-note span {
        color: var(--muted);

        font-size: 13px;

        line-height: 1.7;
    }


    /* =========================================================
       KARAKTER DESTINASI
    ========================================================= */

    .karakter-section {
        padding: 100px 30px 110px;

        background: var(--cream);
    }

    .karakter-container {
        max-width: 1120px;

        margin: 0 auto;
    }

    .karakter-heading {
        width: 100%;
        max-width: 850px;

        margin: 0 auto 55px;

        text-align: center;
    }

    .karakter-heading .section-label {
        text-align: center;
    }

    .karakter-heading .section-title {
        width: 100%;

        text-align: center;
    }

    .karakter-heading p {
        max-width: 650px;

        margin: 18px auto 0;

        color: var(--muted);

        font-size: 15px;

        line-height: 1.85;

        text-align: center;
    }


    /* =========================================================
       ACCORDION
    ========================================================= */

    .karakter-accordion {
        width: 100%;
        max-width: 900px;

        margin: 0 auto;

        border-top: 1px solid rgba(138, 96, 56, .22);
    }

    .karakter-accordion .accordion-item {
        background: transparent;

        border: 0;

        border-bottom: 1px solid rgba(138, 96, 56, .22);

        border-radius: 0;
    }

    .karakter-accordion .accordion-button {
        position: relative;

        display: grid;

        grid-template-columns: 75px 1fr 45px;

        align-items: center;

        width: 100%;

        padding: 27px 10px;

        background: transparent;

        color: var(--toska-dark);

        border: 0;

        box-shadow: none;

        text-align: left;
    }

    .karakter-accordion .accordion-button::after {
        display: none;
    }

    .karakter-accordion .accordion-button:focus {
        box-shadow: none;
    }

    .karakter-number {
        color: var(--sand);

        font-family: "Playfair Display", Georgia, serif;

        font-size: 24px;

        font-weight: 600;
    }

    .karakter-name {
        color: var(--toska-dark);

        font-size: 18px;

        font-weight: 700;

        transition: color .2s ease;
    }

    .karakter-icon {
        width: 34px;
        height: 34px;

        display: flex;

        align-items: center;
        justify-content: center;

        border: 1px solid rgba(138, 96, 56, .25);

        border-radius: 50%;

        color: var(--toska);

        font-size: 17px;

        transition:
            transform .25s ease,
            background .25s ease,
            color .25s ease,
            border-color .25s ease;
    }

    .karakter-accordion
    .accordion-button:hover
    .karakter-name {
        color: var(--brown);
    }

    .karakter-accordion
    .accordion-button:not(.collapsed)
    .karakter-name {
        color: var(--brown);
    }

    .karakter-accordion
    .accordion-button:not(.collapsed)
    .karakter-icon {
        transform: rotate(45deg);

        background: var(--toska);

        color: var(--white);

        border-color: var(--toska);
    }

    .karakter-description {
        padding: 0 75px 30px 85px;
    }

    .karakter-description-inner {
        max-width: 720px;

        padding: 22px 25px;

        background: var(--cream-light);

        border-left: 3px solid var(--sand);
    }

    .karakter-description-inner p {
        margin: 0;

        color: var(--muted);

        font-size: 14px;

        line-height: 1.9;
    }


    /* =========================================================
       DAYA TARIK
    ========================================================= */

    .daya-tarik-section {
        padding: 105px 30px;

        background: var(--cream-light);
    }

    .daya-tarik-container {
        max-width: 1120px;

        margin: 0 auto;
    }

    .daya-tarik-grid {
        display: grid;

        grid-template-columns: .9fr 1.1fr;

        gap: 70px;

        align-items: center;
    }

    .daya-tarik-content {
        padding-left: 28px;

        border-left: 3px solid var(--toska);
    }

    .daya-tarik-content h2 {
        margin: 0 0 20px;

        color: var(--toska-dark);

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(34px, 4vw, 47px);

        line-height: 1.17;

        font-weight: 600;
    }

    .daya-tarik-content p {
        margin: 0;

        color: var(--muted);

        font-size: 15px;

        line-height: 1.9;
    }

    .daya-tarik-images {
        display: grid;

        grid-template-columns: 1fr 1fr;

        gap: 18px;
    }

    .daya-tarik-images img {
        width: 100%;
        height: 280px;

        display: block;

        object-fit: cover;
    }

    .daya-tarik-images img:first-child {
        margin-top: 30px;
    }


    /* =========================================================
       CLOSING
    ========================================================= */

    .destinasi-closing {
        padding: 90px 30px 105px;

        background: var(--cream);

        text-align: center;
    }

    .closing-inner {
        max-width: 700px;

        margin: 0 auto;
    }

    .closing-line {
        width: 45px;
        height: 2px;

        margin: 0 auto 24px;

        background: var(--sand);
    }

    .closing-inner h2 {
        margin: 0 0 17px;

        color: var(--toska-dark);

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(34px, 4vw, 47px);

        line-height: 1.2;

        font-weight: 600;
    }

    .closing-inner p {
        margin: 0;

        color: var(--muted);

        font-size: 15px;

        line-height: 1.9;
    }


    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 991px) {

        .hero-description {
            max-width: 650px;
        }

        .profil-grid {
            gap: 45px;
        }

        .daya-tarik-grid {
            grid-template-columns: 1fr;

            gap: 50px;
        }
    }


    @media (max-width: 767px) {

        .destinasi-hero {
            padding: 75px 22px 80px;
        }

        .destinasi-hero h1 {
            font-size: 44px;
        }

        .hero-description {
            font-size: 14px;
        }


        .profil-section {
            padding: 75px 22px 80px;
        }

        .profil-heading {
            margin-bottom: 40px;
        }

        .profil-grid {
            grid-template-columns: 1fr;

            gap: 40px;
        }

        .profil-image {
            padding: 0 10px 10px 0;
        }

        .profil-image img {
            height: 320px;
        }

        .profil-image::after {
            left: 10px;
            top: 10px;
        }


        .karakter-section {
            padding: 75px 22px 80px;
        }

        .karakter-heading {
            margin-bottom: 40px;
        }

        .karakter-accordion .accordion-button {
            grid-template-columns: 55px 1fr 40px;

            padding: 23px 0;
        }

        .karakter-number {
            font-size: 21px;
        }

        .karakter-name {
            font-size: 16px;
        }

        .karakter-description {
            padding: 0 0 25px 55px;
        }

        .karakter-description-inner {
            padding: 18px 20px;
        }


        .daya-tarik-section {
            padding: 75px 22px 80px;
        }

        .daya-tarik-images img {
            height: 230px;
        }


        .destinasi-closing {
            padding: 75px 22px 85px;
        }
    }


    @media (max-width: 480px) {

        .destinasi-hero h1 {
            font-size: 39px;
        }

        .profil-image img {
            height: 280px;
        }

        .daya-tarik-images {
            grid-template-columns: 1fr;
        }

        .daya-tarik-images img,
        .daya-tarik-images img:first-child {
            height: 250px;

            margin-top: 0;
        }
    }

</style>


<div class="destinasi-page">


    {{-- =====================================================
         HERO
    ====================================================== --}}

    <section class="destinasi-hero">

        <div class="destinasi-hero-inner">

            <div>

                <div class="hero-label">
                    Tentang Destinasi
                </div>

                <h1>
                    Mengenal <span>Evara Beach</span>
                </h1>

            </div>

            <p class="hero-description">
                Evara Beach merupakan destinasi wisata pesisir
                dengan karakter kawasan yang dibentuk oleh pantai,
                lingkungan pesisir, dan ruang terbuka.
            </p>

        </div>

    </section>


    {{-- =====================================================
         PROFIL DESTINASI
    ====================================================== --}}

    <section class="profil-section">

        <div class="profil-container">

            <div class="profil-heading">

                <div class="section-label">
                    Profil Destinasi
                </div>

                <h2 class="section-title">
                    Sebuah kawasan pesisir
                    dengan karakter tersendiri.
                </h2>

            </div>


            <div class="profil-grid">

                <div class="profil-image">

                    <img
                        src="{{ asset('img/foto pantai.jpeg') }}"
                        alt="Evara Beach"
                    >

                </div>


                <div class="profil-text">

                    <p>
                        Evara Beach merupakan destinasi wisata pesisir
                        yang menjadikan kawasan pantai sebagai bagian
                        utama dari identitasnya.
                    </p>

                    <p>
                        Lingkungan pantai, garis pesisir, serta ruang
                        terbuka di sekitarnya membentuk kawasan yang
                        menjadi bagian dari Evara Beach.
                    </p>

                    <p>
                        Melalui VISIT-IN, Evara Beach diperkenalkan
                        sebagai sebuah destinasi dengan karakter
                        kawasan pesisir.
                    </p>

                    <div class="profil-note">

                        <strong>
                            Identitas Evara Beach
                        </strong>

                        <span>
                            Pantai, garis pesisir, dan ruang terbuka
                            menjadi unsur yang membentuk karakter
                            kawasan Evara Beach.
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         KARAKTER DESTINASI
    ====================================================== --}}

    <section class="karakter-section">

        <div class="karakter-container">

            <div class="karakter-heading">

                <div class="section-label">
                    Karakter Destinasi
                </div>

                <h2 class="section-title">
                    Mengenal bagian dari Evara Beach
                </h2>

                <p>
                    Klik pada bagian yang ingin kamu ketahui
                    untuk melihat penjelasan lebih lengkap.
                </p>

            </div>


            <div
                class="accordion karakter-accordion"
                id="karakterAccordion"
            >


                {{-- =================================================
                     01 KAWASAN PANTAI
                ================================================== --}}

                <div class="accordion-item">

                    <h3 class="accordion-header">

                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#karakterPantai"
                            aria-expanded="false"
                            aria-controls="karakterPantai"
                        >

                            <span class="karakter-number">
                                01
                            </span>

                            <span class="karakter-name">
                                Kawasan Pantai
                            </span>

                            <span class="karakter-icon">
                                <i class="bi bi-plus"></i>
                            </span>

                        </button>

                    </h3>


                    <div
                        id="karakterPantai"
                        class="accordion-collapse collapse"
                        data-bs-parent="#karakterAccordion"
                    >

                        <div class="karakter-description">

                            <div class="karakter-description-inner">

                                <p>
                                    Kawasan pantai merupakan bagian
                                    utama dari Evara Beach. Area ini
                                    menjadi unsur yang paling menonjol
                                    dalam membentuk identitas destinasi.
                                    Garis pantai dan area di sekitarnya
                                    menjadi bagian dari lingkungan
                                    wisata Evara Beach.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     02 LINGKUNGAN PESISIR
                ================================================== --}}

                <div class="accordion-item">

                    <h3 class="accordion-header">

                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#karakterPesisir"
                            aria-expanded="false"
                            aria-controls="karakterPesisir"
                        >

                            <span class="karakter-number">
                                02
                            </span>

                            <span class="karakter-name">
                                Lingkungan Pesisir
                            </span>

                            <span class="karakter-icon">
                                <i class="bi bi-plus"></i>
                            </span>

                        </button>

                    </h3>


                    <div
                        id="karakterPesisir"
                        class="accordion-collapse collapse"
                        data-bs-parent="#karakterAccordion"
                    >

                        <div class="karakter-description">

                            <div class="karakter-description-inner">

                                <p>
                                    Lingkungan pesisir menjadi bagian
                                    yang tidak terpisahkan dari Evara
                                    Beach. Garis pantai dan lingkungan
                                    di sekitarnya membentuk karakter
                                    kawasan yang menjadi identitas
                                    Evara Beach sebagai destinasi
                                    wisata pesisir.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     03 RUANG TERBUKA
                ================================================== --}}

                <div class="accordion-item">

                    <h3 class="accordion-header">

                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#karakterRuang"
                            aria-expanded="false"
                            aria-controls="karakterRuang"
                        >

                            <span class="karakter-number">
                                03
                            </span>

                            <span class="karakter-name">
                                Ruang Terbuka
                            </span>

                            <span class="karakter-icon">
                                <i class="bi bi-plus"></i>
                            </span>

                        </button>

                    </h3>


                    <div
                        id="karakterRuang"
                        class="accordion-collapse collapse"
                        data-bs-parent="#karakterAccordion"
                    >

                        <div class="karakter-description">

                            <div class="karakter-description-inner">

                                <p>
                                    Ruang terbuka menjadi bagian dari
                                    kawasan Evara Beach dan melengkapi
                                    lingkungan pesisir yang ada di
                                    dalam destinasi. Area ini menjadi
                                    bagian dari ruang yang membentuk
                                    keseluruhan kawasan Evara Beach.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </section>


    {{-- =====================================================
         DAYA TARIK
    ====================================================== --}}

    <section class="daya-tarik-section">

        <div class="daya-tarik-container">

            <div class="daya-tarik-grid">

                <div class="daya-tarik-content">

                    <div class="section-label">
                        Daya Tarik
                    </div>

                    <h2>
                        Karakter pantai
                        yang menjadi identitas.
                    </h2>

                    <p>
                        Evara Beach memiliki daya tarik yang berasal
                        dari karakter kawasan pesisirnya. Laut, garis
                        pantai, dan ruang terbuka menjadi unsur yang
                        membentuk tampilan destinasi.
                    </p>

                </div>


                <div class="daya-tarik-images">

                    <img
                        src="{{ asset('img/pantai21.png') }}"
                        alt="Pantai Evara Beach"
                    >

                    <img
                        src="{{ asset('img/foto20.png') }}"
                        alt="Pemandangan Evara Beach"
                    >

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         CLOSING
    ====================================================== --}}

    <section class="destinasi-closing">

        <div class="closing-inner">

            <div class="closing-line"></div>

            <h2>
                Evara Beach
            </h2>

            <p>
                Sebuah destinasi wisata pesisir dengan pantai,
                lingkungan pesisir, dan ruang terbuka sebagai
                bagian dari karakter kawasannya.
            </p>

        </div>

    </section>


</div>

@endsection