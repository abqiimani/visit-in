@extends('layouts.visitor')

@section('title', 'Tentang Destinasi | Evara Beach')

@section('content')

<style>
    :root {
        --toska: #087873;
        --toska-dark: #045956;
        --toska-deep: #034a47;
        --toska-soft: #dcefeb;

        --cream: #f8f1e3;
        --cream-light: #fffaf1;
        --cream-dark: #eee1c9;

        --sand: #c99755;
        --sand-light: #e4c38f;

        --brown: #8a6038;
        --brown-dark: #6f4828;

        --text: #405954;
        --muted: #6f7d78;
        --white: #ffffff;

        --line: rgba(111, 72, 40, .20);
    }

    * {
        box-sizing: border-box;
    }

    .destination-page {
        background: var(--cream);
        color: var(--text);
        overflow: hidden;
    }


    /* =========================================================
       HERO
    ========================================================= */

    .destination-hero {
        position: relative;
        min-height: 310px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: var(--cream-light);

        overflow: hidden;
    }

    .destination-hero-content {
        width: 100%;
        max-width: 900px;

        margin: 0 auto;
        padding: 48px 30px 58px;

        text-align: center;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .destination-eyebrow {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 14px;

        margin-bottom: 18px;

        color: var(--brown);

        font-size: 11px;
        font-weight: 700;
        letter-spacing: 2.5px;
        text-transform: uppercase;
    }

    .destination-eyebrow::before,
    .destination-eyebrow::after {
        content: "";

        width: 42px;
        height: 2px;

        flex-shrink: 0;

        background: var(--sand);
    }

    .destination-hero h1 {
        margin: 0;

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(48px, 5.5vw, 70px);
        line-height: 1;
        font-weight: 600;

        letter-spacing: -2.5px;

        text-align: center;
        white-space: nowrap;
    }

    .destination-hero h1 .evara {
        color: var(--toska-dark);
    }

    .destination-hero h1 .beach {
        color: var(--brown);
        font-weight: 400;
        letter-spacing: -2px;
    }

    .destination-hero p {
        width: 100%;
        max-width: 650px;

        margin: 21px auto 0;

        color: var(--text);

        font-size: 15px;
        line-height: 1.75;

        text-align: center;
    }


    /* =========================================================
       PROFILE
    ========================================================= */

    .profile-section {
        padding: 90px 8% 105px;
        background: var(--toska);
    }

    .profile-grid {
        display: grid;

        grid-template-columns: .72fr 1.28fr;

        gap: 78px;

        align-items: start;
    }

    .section-label {
        margin-bottom: 14px;

        color: var(--brown);

        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .profile-section .section-label {
        color: var(--sand-light);
    }

    .profile-heading h2 {
        margin: 0;

        color: var(--cream-light);

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(35px, 3.5vw, 48px);
        line-height: 1.12;

        font-weight: 600;

        letter-spacing: -1px;
    }

    .profile-content .lead {
        margin: 0 0 23px;

        color: var(--cream-light);

        font-size: 18px;
        line-height: 1.7;

        font-weight: 500;
    }

    .profile-content p {
        margin: 0 0 18px;

        color: rgba(255, 250, 241, .84);

        font-size: 15px;
        line-height: 1.85;
    }

    .profile-highlights {
        display: grid;

        grid-template-columns: repeat(2, 1fr);

        gap: 17px;

        margin-top: 32px;
    }

    .profile-highlight {
        padding: 22px 21px;

        background: var(--cream-light);

        border-left: 4px solid var(--sand);
    }

    .profile-highlight strong {
        display: block;

        margin-bottom: 7px;

        color: var(--toska-dark);

        font-size: 14px;
        font-weight: 700;
    }

    .profile-highlight span {
        color: var(--muted);

        font-size: 13.5px;
        line-height: 1.65;
    }


    /* =========================================================
       CHARACTER SECTION
    ========================================================= */

    .character-section {
        padding: 100px 8%;

        background: var(--cream-light);
    }

    .character-header {
        max-width: 760px;

        margin-bottom: 48px;
    }

    .character-header .section-label {
        color: var(--brown);
    }

    .character-header h2 {
        margin: 0 0 16px;

        color: var(--toska-dark);

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(35px, 4vw, 50px);
        line-height: 1.15;

        font-weight: 600;
    }

    .character-header p {
        margin: 0;

        color: var(--text);

        font-size: 15.5px;
        line-height: 1.8;
    }


    /* =========================================================
       CHARACTER LIST
    ========================================================= */

    .character-list {
        max-width: 1050px;

        border-top: 2px solid var(--brown);
    }

    .character-item {
        border-bottom: 1px solid var(--line);

        transition: background .3s ease;
    }

    .character-item.active {
        background: var(--toska-soft);

        border-bottom-color: rgba(8, 120, 115, .25);
    }

    .character-button {
        width: 100%;

        padding: 25px 18px;

        border: 0;
        outline: none;

        background: transparent;
        color: var(--toska-dark);

        display: flex;
        align-items: center;

        text-align: left;

        cursor: pointer;

        font-family: inherit;

        transition: .25s ease;
    }

    .character-button:hover {
        color: var(--brown-dark);

        background: rgba(201, 151, 85, .07);

        padding-left: 25px;
    }

    .character-number {
        width: 55px;

        flex-shrink: 0;

        color: var(--brown);

        font-size: 14px;
        font-weight: 700;

        letter-spacing: 1px;
    }

    .character-title {
        flex: 1;

        font-size: 20px;
        font-weight: 600;
    }

    .character-arrow {
        margin-left: 20px;

        color: var(--brown);

        font-size: 18px;

        transition: transform .3s ease;
    }

    .character-item.active .character-arrow {
        transform: rotate(180deg);

        color: var(--toska);
    }

    .character-content {
        max-height: 0;

        overflow: hidden;

        padding-left: 73px;
        padding-right: 30px;

        transition:
            max-height .35s ease,
            padding .35s ease;
    }

    .character-content p {
        max-width: 800px;

        margin: 0;

        padding: 0 0 28px;

        color: var(--text);

        font-size: 15px;
        line-height: 1.8;
    }

    .character-item.active .character-content {
        max-height: 220px;
    }


    /* =========================================================
       DESTINATION DETAILS
    ========================================================= */

    .details-section {
        padding: 100px 8%;

        background: var(--cream-dark);
    }

    .details-container {
        max-width: 1120px;

        margin: 0 auto;
    }

    .details-header {
        max-width: 730px;

        margin-bottom: 45px;
    }

    .details-header .section-label {
        color: var(--brown);
    }

    .details-header h2 {
        margin: 0 0 16px;

        color: var(--toska-dark);

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(35px, 4vw, 48px);
        line-height: 1.15;

        font-weight: 600;
    }

    .details-header p {
        margin: 0;

        color: var(--text);

        font-size: 15.5px;
        line-height: 1.8;
    }

    .details-grid {
        display: grid;

        grid-template-columns: repeat(3, 1fr);

        gap: 20px;
    }

    .detail-card {
        min-height: 205px;

        padding: 30px 27px;

        background: var(--cream-light);

        border-top: 4px solid var(--toska);

        box-shadow: 0 8px 25px rgba(111, 72, 40, .06);

        transition:
            transform .25s ease,
            box-shadow .25s ease;
    }

    .detail-card:hover {
        transform: translateY(-4px);

        box-shadow:
            0 12px 30px rgba(111, 72, 40, .10);
    }

    .detail-card-number {
        display: block;

        margin-bottom: 18px;

        color: var(--sand);

        font-family: "Playfair Display", Georgia, serif;

        font-size: 25px;
        font-weight: 600;
    }

    .detail-card h3 {
        margin: 0 0 10px;

        color: var(--toska-dark);

        font-size: 19px;
        font-weight: 700;
    }

    .detail-card p {
        margin: 0;

        color: var(--muted);

        font-size: 14px;
        line-height: 1.75;
    }


    /* =========================================================
       CLOSING
    ========================================================= */

    .destination-closing {
        padding: 85px 30px 100px;

        background: var(--cream-light);

        text-align: center;
    }

    .destination-closing-inner {
        max-width: 700px;

        margin: 0 auto;
    }

    .closing-line {
        width: 45px;
        height: 2px;

        margin: 0 auto 24px;

        background: var(--sand);
    }

    .destination-closing h2 {
        margin: 0 0 16px;

        color: var(--toska-dark);

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(32px, 4vw, 45px);
        line-height: 1.2;

        font-weight: 600;
    }

    .destination-closing p {
        margin: 0;

        color: var(--muted);

        font-size: 15px;
        line-height: 1.8;
    }


    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 991px) {

        .destination-hero {
            min-height: 285px;
        }

        .destination-hero-content {
            padding: 40px 8% 52px;
        }

        .profile-grid {
            grid-template-columns: 1fr;

            gap: 40px;
        }

        .details-grid {
            grid-template-columns: 1fr;
        }
    }


    @media (max-width: 700px) {

        .destination-hero {
            min-height: 285px;
        }

        .destination-hero-content {
            padding: 34px 7% 50px;
        }

        .destination-eyebrow {
            gap: 10px;

            font-size: 10px;
            letter-spacing: 2px;
        }

        .destination-eyebrow::before,
        .destination-eyebrow::after {
            width: 26px;
        }

        .destination-hero h1 {
            font-size: 46px;

            letter-spacing: -2px;
        }

        .destination-hero h1 .beach {
            letter-spacing: -2px;
        }

        .destination-hero p {
            max-width: 100%;

            margin-top: 17px;

            font-size: 14px;
        }


        .profile-section {
            padding: 70px 7%;
        }

        .profile-heading h2 {
            font-size: 36px;
            line-height: 1.15;
        }

        .profile-content .lead {
            font-size: 17px;
        }

        .profile-highlights {
            grid-template-columns: 1fr;
        }


        .character-section,
        .details-section {
            padding: 70px 7%;
        }

        .character-header h2,
        .details-header h2 {
            font-size: 36px;
        }

        .character-button {
            padding: 22px 10px;
        }

        .character-button:hover {
            padding-left: 15px;
        }

        .character-number {
            width: 42px;

            font-size: 12px;
        }

        .character-title {
            font-size: 17px;
        }

        .character-arrow {
            margin-left: 10px;
        }

        .character-content {
            padding-left: 52px;
            padding-right: 10px;
        }

        .character-content p {
            font-size: 14px;
        }

        .detail-card {
            min-height: auto;

            padding: 27px 23px;
        }


        .destination-closing {
            padding: 70px 22px 85px;
        }
    }
</style>


<div class="destination-page">


    {{-- =====================================================
         HERO
    ====================================================== --}}

    <section class="destination-hero">

        <div class="destination-hero-content">

            <span class="destination-eyebrow">
                Tentang Destinasi
            </span>

            <h1>
                <span class="evara">Evara</span>
                <span class="beach">Beach</span>
            </h1>

            <p>
                Mengenal lebih dekat kawasan pesisir Evara Beach
                dan karakter yang menjadi bagian dari destinasi ini.
            </p>

        </div>

    </section>


    {{-- =====================================================
         PROFILE
    ====================================================== --}}

    <section class="profile-section">

        <div class="profile-grid">


            {{-- KIRI --}}

            <div class="profile-heading">

                <div class="section-label">
                    Profil Destinasi
                </div>

                <h2>
                    Sebuah destinasi yang dekat dengan pesisir
                </h2>

            </div>


            {{-- KANAN --}}

            <div class="profile-content">

                <p class="lead">
                    Evara Beach merupakan destinasi wisata pesisir
                    yang menghadirkan kawasan pantai sebagai bagian
                    utama dari karakter tempatnya.
                </p>

                <p>
                    Laut, garis pantai, dan lingkungan terbuka menjadi
                    bagian yang membentuk wajah Evara Beach. Kawasan ini
                    memberikan ruang bagi pengunjung untuk menikmati
                    lingkungan pesisir dalam suasana yang santai.
                </p>

                <p>
                    Setiap bagian dari kawasan memiliki hubungan dengan
                    lingkungan pantai, sehingga pengalaman berkunjung
                    tidak hanya berasal dari satu titik, tetapi dari
                    keseluruhan karakter kawasan.
                </p>


                <div class="profile-highlights">

                    <div class="profile-highlight">

                        <strong>
                            Kawasan Pesisir
                        </strong>

                        <span>
                            Lingkungan pantai menjadi unsur utama
                            yang membentuk karakter Evara Beach.
                        </span>

                    </div>


                    <div class="profile-highlight">

                        <strong>
                            Ruang Terbuka
                        </strong>

                        <span>
                            Area terbuka memberikan kesan lapang
                            yang menjadi bagian dari kawasan pantai.
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         CHARACTER
    ====================================================== --}}

    <section class="character-section">

        <div class="character-header">

            <div class="section-label">
                Karakter Evara Beach
            </div>

            <h2>
                Apa yang membentuk Evara Beach
            </h2>

            <p>
                Evara Beach memiliki karakter yang terbentuk dari
                hubungan antara lingkungan pantai, ruang terbuka,
                dan keberadaan pengunjung di dalam kawasan.
            </p>

        </div>


        <div class="character-list">


            {{-- 01 --}}

            <div class="character-item">

                <button
                    type="button"
                    class="character-button"
                    onclick="toggleCharacter(this)"
                >

                    <span class="character-number">
                        01
                    </span>

                    <span class="character-title">
                        Lingkungan Pesisir
                    </span>

                    <span class="character-arrow">
                        ↓
                    </span>

                </button>


                <div class="character-content">

                    <p>
                        Lingkungan pesisir menjadi dasar dari karakter
                        Evara Beach. Keberadaan laut dan kawasan pantai
                        memberikan identitas yang kuat terhadap destinasi ini.
                    </p>

                </div>

            </div>


            {{-- 02 --}}

            <div class="character-item">

                <button
                    type="button"
                    class="character-button"
                    onclick="toggleCharacter(this)"
                >

                    <span class="character-number">
                        02
                    </span>

                    <span class="character-title">
                        Ruang yang Terbuka
                    </span>

                    <span class="character-arrow">
                        ↓
                    </span>

                </button>


                <div class="character-content">

                    <p>
                        Kawasan pantai memiliki ruang terbuka yang memberikan
                        pandangan lebih luas terhadap lingkungan sekitar.
                        Karakter ini menjadi salah satu bagian yang terasa
                        ketika berada di kawasan Evara Beach.
                    </p>

                </div>

            </div>


            {{-- 03 --}}

            <div class="character-item">

                <button
                    type="button"
                    class="character-button"
                    onclick="toggleCharacter(this)"
                >

                    <span class="character-number">
                        03
                    </span>

                    <span class="character-title">
                        Lingkungan yang Menyatu
                    </span>

                    <span class="character-arrow">
                        ↓
                    </span>

                </button>


                <div class="character-content">

                    <p>
                        Area di sekitar pantai membentuk satu kesatuan
                        lingkungan yang saling terhubung. Laut, pasir,
                        ruang terbuka, dan kawasan sekitar menjadi bagian
                        dari identitas Evara Beach.
                    </p>

                </div>

            </div>


            {{-- 04 --}}

            <div class="character-item">

                <button
                    type="button"
                    class="character-button"
                    onclick="toggleCharacter(this)"
                >

                    <span class="character-number">
                        04
                    </span>

                    <span class="character-title">
                        Ruang untuk Berkunjung
                    </span>

                    <span class="character-arrow">
                        ↓
                    </span>

                </button>


                <div class="character-content">

                    <p>
                        Evara Beach menjadi ruang yang dapat dikunjungi
                        untuk menikmati lingkungan pesisir dengan cara
                        yang berbeda sesuai dengan kebutuhan setiap pengunjung.
                    </p>

                </div>

            </div>


        </div>

    </section>


    {{-- =====================================================
         DESTINATION DETAILS
    ====================================================== --}}

    <section class="details-section">

        <div class="details-container">

            <div class="details-header">

                <div class="section-label">
                    Evara Beach
                </div>

                <h2>
                    Satu kawasan, berbagai sisi
                </h2>

                <p>
                    Evara Beach tidak hanya dilihat dari pantainya,
                    tetapi juga dari lingkungan yang mengelilinginya
                    dan bagaimana kawasan tersebut menjadi satu kesatuan.
                </p>

            </div>


            <div class="details-grid">


                {{-- CARD 01 --}}

                <div class="detail-card">

                    <span class="detail-card-number">
                        01
                    </span>

                    <h3>
                        Lanskap Pantai
                    </h3>

                    <p>
                        Pemandangan laut dan garis pantai menjadi
                        bagian utama dari lanskap yang membentuk
                        identitas Evara Beach.
                    </p>

                </div>


                {{-- CARD 02 --}}

                <div class="detail-card">

                    <span class="detail-card-number">
                        02
                    </span>

                    <h3>
                        Lingkungan Sekitar
                    </h3>

                    <p>
                        Kawasan sekitar pantai menjadi bagian yang
                        melengkapi pengalaman berada di Evara Beach
                        sebagai sebuah destinasi.
                    </p>

                </div>


                {{-- CARD 03 --}}

                <div class="detail-card">

                    <span class="detail-card-number">
                        03
                    </span>

                    <h3>
                        Pengalaman Berkunjung
                    </h3>

                    <p>
                        Setiap pengunjung dapat memiliki pengalaman
                        yang berbeda sesuai dengan waktu dan tujuan
                        kunjungannya di kawasan pantai.
                    </p>

                </div>


            </div>

        </div>

    </section>


    {{-- =====================================================
         CLOSING
    ====================================================== --}}

    <section class="destination-closing">

        <div class="destination-closing-inner">

            <div class="closing-line"></div>

            <h2>
                Kenali Evara Beach
            </h2>

            <p>
                Temukan karakter kawasan pesisir Evara Beach
                dan lihat lebih banyak sisi destinasi melalui
                Galeri Evara Beach.
            </p>

        </div>

    </section>


</div>


<script>
    function toggleCharacter(button) {

        const item = button.closest('.character-item');

        const allItems = document.querySelectorAll('.character-item');

        allItems.forEach(function(otherItem) {

            if (otherItem !== item) {
                otherItem.classList.remove('active');
            }

        });

        item.classList.toggle('active');
    }
</script>

@endsection