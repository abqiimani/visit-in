@extends('layouts.visitor')

@section('title', 'Event | VISIT-IN')

@section('content')

<style>
    :root {
        --toska: #087873;
        --toska-dark: #075b58;
        --toska-deep: #034a47;
        --toska-soft: #dcefed;

        --cream: #fbf8f1;
        --cream-soft: #f5ecdd;
        --cream-dark: #eadcc7;

        --sand: #d4aa6b;
        --sand-light: #e6c995;

        --brown: #8a6038;
        --brown-dark: #6f4828;

        --text: #405954;
        --muted: #78847f;
        --white: #ffffff;

        --shadow: 0 18px 45px rgba(45, 76, 71, .10);
    }


    /* =====================================================
       EVENT PAGE
    ===================================================== */

    .event-page {
        min-height: 100vh;

        background:
            radial-gradient(
                circle at 8% 8%,
                rgba(212, 170, 107, .12),
                transparent 28%
            ),
            linear-gradient(
                180deg,
                #fffdf8 0%,
                var(--cream) 48%,
                #f7f0e5 100%
            );

        color: var(--text);
    }


    /* =====================================================
       HERO EVENT
       HANYA BAGIAN ATAS YANG DIUBAH
    ===================================================== */

    .event-hero {
        position: relative;
        overflow: hidden;

        padding: 58px 20px 52px;

        text-align: center;

        background:
            radial-gradient(
                circle at 50% -80%,
                rgba(8, 120, 115, .18),
                transparent 52%
            ),
            linear-gradient(
                180deg,
                #fffdf8 0%,
                #f9f4e9 70%,
                #f5ecdd 100%
            );

        border-bottom: 1px solid rgba(8, 120, 115, .12);
    }


    /* lingkaran kiri */

    .event-hero::before {
        content: "";

        position: absolute;

        width: 300px;
        height: 300px;

        left: -165px;
        top: -145px;

        border-radius: 50%;

        border: 1px solid rgba(8, 120, 115, .14);

        box-shadow:
            0 0 0 22px rgba(8, 120, 115, .035),
            0 0 0 44px rgba(8, 120, 115, .018);
    }


    /* lingkaran kanan */

    .event-hero::after {
        content: "";

        position: absolute;

        width: 220px;
        height: 220px;

        right: -120px;
        bottom: -145px;

        border-radius: 50%;

        border: 1px solid rgba(212, 170, 107, .24);

        box-shadow:
            0 0 0 18px rgba(212, 170, 107, .045);
    }


    .event-hero-inner {
        position: relative;
        z-index: 2;

        max-width: 900px;

        margin: 0 auto;
    }


    /* garis kecil gold */

    .event-eyebrow {
        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 11px;

        margin-bottom: 14px;

        color: var(--toska);

        font-size: .72rem;
        font-weight: 800;

        letter-spacing: .22em;

        text-transform: uppercase;
    }


    .event-eyebrow::before,
    .event-eyebrow::after {
        content: "";

        width: 34px;
        height: 2px;

        background:
            linear-gradient(
                90deg,
                transparent,
                var(--sand)
            );
    }


    .event-eyebrow::after {
        background:
            linear-gradient(
                90deg,
                var(--sand),
                transparent
            );
    }


    /* judul utama */

    .event-hero h1 {
        position: relative;

        margin: 0;

        color: var(--toska-deep);

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(2.8rem, 5vw, 4rem);

        font-weight: 700;

        line-height: 1.08;

        letter-spacing: -.025em;
    }


    /* aksen kecil di bawah judul */

    .event-hero h1::after {
        content: "";

        display: block;

        width: 58px;
        height: 3px;

        margin: 18px auto 0;

        border-radius: 999px;

        background:
            linear-gradient(
                90deg,
                var(--sand),
                var(--sand-light)
            );

        box-shadow:
            0 3px 10px rgba(212, 170, 107, .25);
    }


    .event-hero p {
        max-width: 690px;

        margin: 18px auto 0;

        color: var(--muted);

        font-size: 1rem;

        line-height: 1.8;
    }


    /* =====================================================
       INTRO
    ===================================================== */

    .event-intro {
        max-width: 1080px;
        margin: 0 auto;
        padding: 0 20px 68px;
    }

    .event-intro-box {
        position: relative;
        overflow: hidden;

        padding: 34px 42px;

        background: var(--white);
        border: 1px solid rgba(138, 96, 56, .12);
        border-radius: 24px;

        box-shadow: var(--shadow);
        text-align: center;
    }

    .event-intro-box::before {
        content: "";
        position: absolute;
        width: 6px;
        height: 100%;
        left: 0;
        top: 0;

        background: linear-gradient(
            180deg,
            var(--toska),
            var(--sand)
        );
    }

    .event-intro-box h2 {
        margin: 0 0 10px;

        color: var(--toska-deep);
        font-family: "Playfair Display", Georgia, serif;
        font-size: 1.65rem;
    }

    .event-intro-box p {
        max-width: 760px;
        margin: 0 auto;

        color: var(--muted);
        font-size: .95rem;
        line-height: 1.82;
    }


    /* =====================================================
       EVENT SECTION
    ===================================================== */

    .event-section {
        max-width: 1180px;
        margin: 0 auto;
        padding: 0 20px 92px;
    }

    .event-heading {
        margin-bottom: 40px;
        text-align: center;
    }

    .event-heading span {
        display: block;
        margin-bottom: 9px;

        color: var(--brown);
        font-size: .74rem;
        font-weight: 800;
        letter-spacing: .18em;
        text-transform: uppercase;
    }

    .event-heading h2 {
        margin: 0;

        color: var(--toska-deep);
        font-family: "Playfair Display", Georgia, serif;
        font-size: clamp(2rem, 4vw, 2.7rem);
    }

    .event-heading p {
        max-width: 650px;
        margin: 12px auto 0;

        color: var(--muted);
        font-size: .93rem;
        line-height: 1.75;
    }


    /* =====================================================
       EVENT GRID
    ===================================================== */

    .event-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 30px;
    }


    /* =====================================================
       EVENT CARD
    ===================================================== */

    .event-card {
        overflow: hidden;

        background: var(--white);
        border: 1px solid rgba(138, 96, 56, .12);
        border-radius: 22px;

        box-shadow: 0 12px 32px rgba(45, 76, 71, .07);

        transition:
            transform .3s ease,
            box-shadow .3s ease;
    }

    .event-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 22px 48px rgba(45, 76, 71, .14);
    }

    .event-image {
        position: relative;
        height: 275px;
        overflow: hidden;
        background: var(--cream-soft);
    }

    .event-image img {
        display: block;

        width: 100%;
        height: 100%;

        object-fit: cover;

        transition: transform .5s ease;
    }

    .event-card:hover .event-image img {
        transform: scale(1.045);
    }

    .event-category {
        position: absolute;
        top: 18px;
        left: 18px;

        padding: 8px 14px;

        background: rgba(255, 255, 255, .94);
        border-radius: 999px;

        color: var(--toska-dark);
        font-size: .69rem;
        font-weight: 800;
        letter-spacing: .08em;
        text-transform: uppercase;

        box-shadow: 0 5px 16px rgba(0, 0, 0, .10);
    }

    .event-content {
        padding: 25px 27px 28px;
    }

    .event-content h3 {
        margin: 0 0 11px;

        color: var(--toska-deep);
        font-family: "Playfair Display", Georgia, serif;
        font-size: 1.55rem;
        line-height: 1.25;
    }

    .event-content p {
        margin: 0;

        color: var(--muted);
        font-size: .91rem;
        line-height: 1.78;
    }

    .event-meta {
        display: flex;
        align-items: center;
        gap: 8px;

        margin-top: 18px;
        padding-top: 16px;

        border-top: 1px solid rgba(138, 96, 56, .12);

        color: var(--brown);
        font-size: .78rem;
        font-weight: 700;
    }

    .event-meta i {
        font-size: .95rem;
    }


    /* =====================================================
       CLOSING
    ===================================================== */

    .event-closing {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px 95px;
        text-align: center;
    }

    .event-closing-box {
        position: relative;
        overflow: hidden;

        padding: 48px 30px;

        background: var(--toska);
        border-radius: 26px;

        color: var(--white);
    }

    .event-closing-box::after {
        content: "";

        position: absolute;
        width: 230px;
        height: 230px;

        right: -80px;
        top: -100px;

        border: 1px solid rgba(255,255,255,.14);
        border-radius: 50%;
    }

    .event-closing-box h2 {
        position: relative;
        z-index: 1;

        margin: 0 0 12px;

        font-family: "Playfair Display", Georgia, serif;
        font-size: 2rem;
    }

    .event-closing-box p {
        position: relative;
        z-index: 1;

        max-width: 620px;
        margin: 0 auto;

        color: rgba(255,255,255,.84);
        font-size: .92rem;
        line-height: 1.8;
    }


    /* =====================================================
       RESPONSIVE
    ===================================================== */

    @media (max-width: 900px) {

        .event-grid {
            grid-template-columns: 1fr;
            max-width: 680px;
            margin: 0 auto;
        }

        .event-image {
            height: 310px;
        }
    }


    @media (max-width: 600px) {

        .event-hero {
            padding: 48px 18px 42px;
        }

        .event-eyebrow {
            font-size: .66rem;
            letter-spacing: .16em;
        }

        .event-eyebrow::before,
        .event-eyebrow::after {
            width: 24px;
        }

        .event-hero h1 {
            font-size: 2.5rem;
        }

        .event-hero h1::after {
            width: 48px;
            margin-top: 15px;
        }

        .event-hero p {
            font-size: .92rem;
            line-height: 1.7;
        }

        .event-intro {
            padding: 0 16px 50px;
        }

        .event-intro-box {
            padding: 28px 24px;
        }

        .event-section {
            padding: 0 16px 70px;
        }

        .event-image {
            height: 235px;
        }

        .event-content {
            padding: 22px 21px 24px;
        }

        .event-content h3 {
            font-size: 1.4rem;
        }

        .event-closing {
            padding: 0 16px 70px;
        }

        .event-closing-box {
            padding: 38px 22px;
        }
    }
</style>


<div class="event-page">


    {{-- =====================================================
         HERO
    ====================================================== --}}

    <section class="event-hero">

        <div class="event-hero-inner">

            <div class="event-eyebrow">
                Event Evara Beach
            </div>

            <h1>
                Kegiatan Seru di Evara Beach
            </h1>

            <p>
                Berbagai kegiatan, perayaan, hiburan, dan acara
                yang hadir untuk melengkapi suasana di Evara Beach.
            </p>

        </div>

    </section>


    {{-- =====================================================
         INTRO
    ====================================================== --}}

    <section class="event-intro">

        <div class="event-intro-box">

            <h2>
                Ada Apa di Evara Beach?
            </h2>

            <p>
                Berbagai event dapat hadir di Evara Beach untuk memberikan
                suasana yang berbeda dalam setiap kunjungan. Mulai dari
                festival, kegiatan bersama, hiburan, hingga kegiatan kreatif
                yang memadukan suasana pantai dengan berbagai aktivitas menarik.
            </p>

        </div>

    </section>


    {{-- =====================================================
         EVENT LIST
    ====================================================== --}}

    <section class="event-section">

        <div class="event-heading">

            <span>
                Agenda Evara Beach
            </span>

            <h2>
                Event Pilihan
            </h2>

            <p>
                Kenali berbagai kegiatan yang dapat menjadi bagian
                dari keseruan di Evara Beach.
            </p>

        </div>


        <div class="event-grid">


            {{-- =================================================
                 1. EVARA BEACH FESTIVAL
            ================================================== --}}

            <article class="event-card">

                <div class="event-image">

                    <img
                        src="{{ asset('img/eventt.png') }}"
                        alt="Evara Beach Festival"
                    >

                    <span class="event-category">
                        Festival
                    </span>

                </div>

                <div class="event-content">

                    <h3>
                        Evara Beach Festival
                    </h3>

                    <p>
                        Festival utama Evara Beach yang menghadirkan
                        perpaduan musik, kuliner, permainan, dan berbagai
                        kegiatan menarik dalam satu perayaan di kawasan pantai.
                    </p>

                    <div class="event-meta">
                        <i class="bi bi-stars"></i>
                        Festival Pantai
                    </div>

                </div>

            </article>


            {{-- =================================================
                 2. EVARA BEACH NIGHT
            ================================================== --}}

            <article class="event-card">

                <div class="event-image">

                    <img
                        src="{{ asset('img/event1.png') }}"
                        alt="Evara Beach Night"
                    >

                    <span class="event-category">
                        Hiburan
                    </span>

                </div>

                <div class="event-content">

                    <h3>
                        Evara Beach Night
                    </h3>

                    <p>
                        Acara malam di tepi pantai dengan pertunjukan musik,
                        area kuliner, dekorasi cahaya, dan berbagai hiburan
                        yang menghadirkan suasana berbeda setelah malam tiba.
                    </p>

                    <div class="event-meta">
                        <i class="bi bi-moon-stars"></i>
                        Acara Malam
                    </div>

                </div>

            </article>


            {{-- =================================================
                 3. BEACH GAMES FESTIVAL
            ================================================== --}}

            <article class="event-card">

                <div class="event-image">

                    <img
                        src="{{ asset('img/event3.png') }}"
                        alt="Beach Games Festival"
                    >

                    <span class="event-category">
                        Kompetisi
                    </span>

                </div>

                <div class="event-content">

                    <h3>
                        Beach Games Festival
                    </h3>

                    <p>
                        Berbagai permainan dan kompetisi seru yang melibatkan
                        pengunjung, mulai dari permainan kelompok hingga
                        pertandingan ringan dengan suasana pantai sebagai latarnya.
                    </p>

                    <div class="event-meta">
                        <i class="bi bi-trophy"></i>
                        Permainan & Kompetisi
                    </div>

                </div>

            </article>


            {{-- =================================================
                 4. EVARA FOOD & BEACH FESTIVAL
            ================================================== --}}

            <article class="event-card">

                <div class="event-image">

                    <img
                        src="{{ asset('img/event4.png') }}"
                        alt="Evara Food and Beach Festival"
                    >

                    <span class="event-category">
                        Kuliner
                    </span>

                </div>

                <div class="event-content">

                    <h3>
                        Evara Food & Beach Festival
                    </h3>

                    <p>
                        Festival kuliner yang mempertemukan berbagai pilihan
                        makanan, minuman, dan produk lokal dengan suasana
                        santai khas kawasan pantai.
                    </p>

                    <div class="event-meta">
                        <i class="bi bi-cup-hot"></i>
                        Kuliner & Produk Lokal
                    </div>

                </div>

            </article>


            {{-- =================================================
                 5. EVARA COLOR SPLASH
            ================================================== --}}

            <article class="event-card">

                <div class="event-image">

                    <img
                        src="{{ asset('img/event5.png') }}"
                        alt="Evara Color Splash"
                    >

                    <span class="event-category">
                        Perayaan
                    </span>

                </div>

                <div class="event-content">

                    <h3>
                        Evara Color Splash
                    </h3>

                    <p>
                        Perayaan penuh warna yang memadukan musik, permainan,
                        aktivitas bersama, dan berbagai momen seru yang
                        dapat dinikmati oleh pengunjung.
                    </p>

                    <div class="event-meta">
                        <i class="bi bi-palette"></i>
                        Kreativitas & Hiburan
                    </div>

                </div>

            </article>


            {{-- =================================================
                 6. EVARA CREATIVE MARKET
            ================================================== --}}

            <article class="event-card">

                <div class="event-image">

                    <img
                        src="{{ asset('img/event6.png') }}"
                        alt="Evara Creative Market"
                    >

                    <span class="event-category">
                        Kreatif
                    </span>

                </div>

                <div class="event-content">

                    <h3>
                        Evara Creative Market
                    </h3>

                    <p>
                        Ruang bagi pelaku kreatif dan usaha lokal untuk
                        memperkenalkan berbagai produk, kerajinan, makanan,
                        dan karya dalam suasana pantai.
                    </p>

                    <div class="event-meta">
                        <i class="bi bi-shop"></i>
                        Kreatif & UMKM
                    </div>

                </div>

            </article>


        </div>

    </section>


    {{-- =====================================================
         CLOSING
    ====================================================== --}}

    <section class="event-closing">

        <div class="event-closing-box">

            <h2>
                Berbagai Kegiatan, Satu Destinasi
            </h2>

            <p>
                Setiap event menghadirkan suasana yang berbeda di Evara Beach.
                Dari festival hingga kegiatan kreatif, setiap acara menjadi
                bagian dari pengalaman yang dapat dinikmati bersama.
            </p>

        </div>

    </section>

</div>

@endsection