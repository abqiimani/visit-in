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

        --line: rgba(111, 72, 40, .22);
    }

    * {
        box-sizing: border-box;
    }

    .destination-page {
        background: var(--cream);
        color: var(--text);
    }


    /* =========================
       HERO
    ========================= */

    .destination-hero {
        min-height: 560px;
        display: grid;
        grid-template-columns: .9fr 1.1fr;
        align-items: stretch;
        background: var(--cream-light);
    }

    .destination-hero-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 80px 8%;
        background:
            linear-gradient(
                135deg,
                var(--cream-light) 0%,
                var(--cream) 100%
            );
    }

    .destination-eyebrow {
        display: inline-block;
        margin-bottom: 18px;
        color: var(--brown);
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .destination-hero h1 {
        margin: 0 0 20px;
        color: var(--toska-dark);
        font-size: clamp(48px, 6vw, 82px);
        line-height: .95;
        font-weight: 700;
        letter-spacing: -2px;
    }

    .destination-hero h1 span {
        display: block;
        color: var(--brown);
        font-weight: 400;
    }

    .destination-hero p {
        max-width: 520px;
        margin: 0;
        color: var(--text);
        font-size: 17px;
        line-height: 1.8;
    }

    .destination-hero-image {
        min-height: 560px;
        overflow: hidden;
    }

    .destination-hero-image img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
    }


    /* =========================
       ABOUT
    ========================= */

    .about-section {
        padding: 100px 8%;
        background: var(--toska);
    }

    .about-grid {
        display: grid;
        grid-template-columns: .7fr 1.3fr;
        gap: 80px;
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

    .about-section .section-label {
        color: var(--sand-light);
    }

    .about-heading h2 {
        margin: 0;
        color: var(--cream-light);
        font-size: clamp(32px, 4vw, 52px);
        line-height: 1.15;
        font-weight: 700;
    }

    .about-content .lead {
        margin: 0 0 22px;
        color: var(--cream-light);
        font-size: 21px;
        line-height: 1.65;
        font-weight: 500;
    }

    .about-content p {
        margin: 0 0 18px;
        color: rgba(255, 250, 241, .82);
        font-size: 16px;
        line-height: 1.8;
    }

    .about-highlights {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 18px;
        margin-top: 32px;
    }

    .highlight-box {
        padding: 22px;
        background: var(--cream-light);
        border-left: 4px solid var(--sand);
    }

    .highlight-box strong {
        display: block;
        margin-bottom: 7px;
        color: var(--toska-dark);
        font-size: 15px;
    }

    .highlight-box span {
        color: var(--muted);
        font-size: 14px;
        line-height: 1.6;
    }


    /* =========================
       DAYA TARIK
    ========================= */

    .attraction-section {
        padding: 100px 8%;
        background:
            linear-gradient(
                180deg,
                var(--cream-light) 0%,
                var(--cream) 100%
            );
    }

    .attraction-header {
        max-width: 720px;
        margin-bottom: 48px;
    }

    .attraction-header .section-label {
        color: var(--brown);
    }

    .attraction-header h2 {
        margin: 0 0 15px;
        color: var(--toska-dark);
        font-size: clamp(32px, 4vw, 50px);
        line-height: 1.15;
    }

    .attraction-header p {
        margin: 0;
        color: var(--text);
        font-size: 16px;
        line-height: 1.8;
    }


    /* =========================
       ACCORDION
    ========================= */

    .attraction-list {
        max-width: 1000px;
        border-top: 2px solid var(--brown);
    }

    .attraction-item {
        border-bottom: 1px solid var(--line);
        transition: background .3s ease;
    }

    .attraction-item.active {
        background: var(--toska-soft);
        border-bottom-color: rgba(8, 120, 115, .25);
    }

    .attraction-button {
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

    .attraction-button:hover {
        color: var(--brown-dark);
        background: rgba(201, 151, 85, .08);
        padding-left: 25px;
    }

    .attraction-number {
        width: 55px;
        flex-shrink: 0;
        color: var(--brown);
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .attraction-title {
        flex: 1;
        font-size: 20px;
        font-weight: 600;
    }

    .attraction-arrow {
        color: var(--brown);
        font-size: 18px;
        transition: transform .3s ease;
        margin-left: 20px;
    }

    .attraction-item.active .attraction-arrow {
        transform: rotate(180deg);
        color: var(--toska);
    }

    .attraction-content {
        max-height: 0;
        overflow: hidden;
        transition:
            max-height .35s ease,
            padding .35s ease;
        padding-left: 73px;
        padding-right: 30px;
    }

    .attraction-content p {
        max-width: 760px;
        margin: 0;
        padding: 0 0 27px;
        color: var(--text);
        font-size: 15px;
        line-height: 1.8;
    }

    .attraction-item.active .attraction-content {
        max-height: 180px;
    }


    /* =========================
       CHARACTER
    ========================= */

    .character-section {
        padding: 100px 8%;
        background: var(--cream-dark);
    }

    .character-header {
        max-width: 700px;
        margin-bottom: 45px;
    }

    .character-header .section-label {
        color: var(--brown);
    }

    .character-header h2 {
        margin: 0 0 15px;
        color: var(--toska-dark);
        font-size: clamp(32px, 4vw, 50px);
        line-height: 1.15;
    }

    .character-header p {
        margin: 0;
        color: var(--text);
        font-size: 16px;
        line-height: 1.8;
    }

    .character-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .character-card {
        padding: 32px 28px;
        background: var(--cream-light);
        border-top: 4px solid var(--toska);
        box-shadow: 0 8px 25px rgba(111, 72, 40, .06);
        transition:
            transform .25s ease,
            box-shadow .25s ease;
    }

    .character-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(111, 72, 40, .10);
    }

    .character-card h3 {
        margin: 0 0 10px;
        color: var(--toska-dark);
        font-size: 21px;
    }

    .character-card p {
        margin: 0;
        color: var(--muted);
        font-size: 14px;
        line-height: 1.7;
    }


    /* =========================
       CLOSING
    ========================= */

    .destination-closing {
        padding: 100px 8%;
        background:
            linear-gradient(
                rgba(4, 89, 86, .94),
                rgba(4, 89, 86, .94)
            ),
            url('{{ asset('img/pantai.jpg') }}') center/cover no-repeat;
        text-align: center;
        border-top: 6px solid var(--sand);
    }

    .destination-closing .section-label {
        color: var(--sand-light);
    }

    .destination-closing h2 {
        max-width: 700px;
        margin: 0 auto 18px;
        color: var(--cream-light);
        font-size: clamp(32px, 4vw, 52px);
        line-height: 1.15;
    }

    .destination-closing p {
        max-width: 650px;
        margin: 0 auto;
        color: rgba(255, 250, 241, .82);
        font-size: 16px;
        line-height: 1.8;
    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 991px) {

        .destination-hero {
            grid-template-columns: 1fr;
        }

        .destination-hero-content {
            padding: 75px 8%;
        }

        .destination-hero-image {
            min-height: 420px;
        }

        .about-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .character-grid {
            grid-template-columns: 1fr;
        }
    }


    @media (max-width: 600px) {

        .destination-hero-content {
            padding: 60px 7%;
        }

        .destination-hero h1 {
            font-size: 52px;
        }

        .destination-hero p {
            font-size: 15px;
        }

        .destination-hero-image {
            min-height: 330px;
        }

        .about-section,
        .attraction-section,
        .character-section,
        .destination-closing {
            padding: 70px 7%;
        }

        .about-highlights {
            grid-template-columns: 1fr;
        }

        .attraction-button {
            padding: 22px 10px;
        }

        .attraction-number {
            width: 42px;
            font-size: 12px;
        }

        .attraction-title {
            font-size: 17px;
        }

        .attraction-arrow {
            margin-left: 10px;
        }

        .attraction-content {
            padding-left: 52px;
            padding-right: 10px;
        }

        .attraction-content p {
            font-size: 14px;
        }

        .character-card {
            padding: 25px 22px;
        }
    }
</style>


<div class="destination-page">

    {{-- =========================
         HERO
    ========================= --}}

    <section class="destination-hero">

        <div class="destination-hero-content">

            <span class="destination-eyebrow">
                Tentang Destinasi
            </span>

            <h1>
                Evara
                <span>Beach</span>
            </h1>

            <p>
                Kenali suasana kawasan pesisir dan daya tarik
                yang dapat ditemukan dalam kunjungan ke Evara Beach.
            </p>

        </div>


        <div class="destination-hero-image">

            <img
                src="{{ asset('img/pantai.jpg') }}"
                alt="Evara Beach"
            >

        </div>

    </section>


    {{-- =========================
         ABOUT
    ========================= --}}

    <section class="about-section">

        <div class="about-grid">

            <div class="about-heading">

                <div class="section-label">
                    Tentang Evara Beach
                </div>

                <h2>
                    Keindahan pesisir
                    yang sederhana
                </h2>

            </div>


            <div class="about-content">

                <p class="lead">
                    Evara Beach merupakan destinasi pesisir
                    yang menghadirkan suasana pantai sebagai
                    bagian utama dari pengalaman berkunjung.
                </p>

                <p>
                    Kawasan pantai menjadi ruang untuk menikmati
                    pemandangan laut, suasana sekitar, serta
                    karakter lingkungan pesisir secara langsung.
                </p>

                <p>
                    Setiap bagian memiliki daya tarik tersendiri
                    yang dapat dinikmati sesuai dengan kebutuhan
                    dan waktu kunjungan.
                </p>


                <div class="about-highlights">

                    <div class="highlight-box">

                        <strong>
                            Nuansa Pesisir
                        </strong>

                        <span>
                            Suasana khas kawasan pantai yang
                            menjadi bagian dari pengalaman berkunjung.
                        </span>

                    </div>


                    <div class="highlight-box">

                        <strong>
                            Keindahan Alam
                        </strong>

                        <span>
                            Pemandangan alam pesisir yang dapat
                            dinikmati secara langsung.
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         DAYA TARIK
    ========================= --}}

    <section class="attraction-section">

        <div class="attraction-header">

            <div class="section-label">
                Daya Tarik
            </div>

            <h2>
                Hal yang dapat ditemukan
            </h2>

            <p>
                Beberapa bagian dari kawasan pantai yang dapat
                menjadi perhatian selama kunjungan.
            </p>

        </div>


        <div class="attraction-list">


            {{-- 01 --}}
            <div class="attraction-item">

                <button
                    type="button"
                    class="attraction-button"
                    onclick="toggleAttraction(this)"
                >

                    <span class="attraction-number">
                        01
                    </span>

                    <span class="attraction-title">
                        Pemandangan Laut
                    </span>

                    <span class="attraction-arrow">
                        ↓
                    </span>

                </button>


                <div class="attraction-content">

                    <p>
                        Pemandangan laut menjadi salah satu bagian
                        yang dapat dinikmati secara langsung dari
                        kawasan pesisir.
                    </p>

                </div>

            </div>


            {{-- 02 --}}
            <div class="attraction-item">

                <button
                    type="button"
                    class="attraction-button"
                    onclick="toggleAttraction(this)"
                >

                    <span class="attraction-number">
                        02
                    </span>

                    <span class="attraction-title">
                        Garis Pantai
                    </span>

                    <span class="attraction-arrow">
                        ↓
                    </span>

                </button>


                <div class="attraction-content">

                    <p>
                        Area garis pantai memberikan ruang untuk
                        menikmati kawasan pesisir dan melihat
                        perpaduan antara daratan dengan laut.
                    </p>

                </div>

            </div>


            {{-- 03 --}}
            <div class="attraction-item">

                <button
                    type="button"
                    class="attraction-button"
                    onclick="toggleAttraction(this)"
                >

                    <span class="attraction-number">
                        03
                    </span>

                    <span class="attraction-title">
                        Lingkungan Pesisir
                    </span>

                    <span class="attraction-arrow">
                        ↓
                    </span>

                </button>


                <div class="attraction-content">

                    <p>
                        Lingkungan sekitar pantai memperlihatkan
                        karakter kawasan pesisir yang menjadi bagian
                        dari suasana destinasi.
                    </p>

                </div>

            </div>


            {{-- 04 --}}
            <div class="attraction-item">

                <button
                    type="button"
                    class="attraction-button"
                    onclick="toggleAttraction(this)"
                >

                    <span class="attraction-number">
                        04
                    </span>

                    <span class="attraction-title">
                        Suasana Menjelang Sore
                    </span>

                    <span class="attraction-arrow">
                        ↓
                    </span>

                </button>


                <div class="attraction-content">

                    <p>
                        Perubahan suasana menjelang sore memberikan
                        pengalaman visual yang berbeda dibandingkan
                        waktu kunjungan lainnya.
                    </p>

                </div>

            </div>


            {{-- 05 --}}
            <div class="attraction-item">

                <button
                    type="button"
                    class="attraction-button"
                    onclick="toggleAttraction(this)"
                >

                    <span class="attraction-number">
                        05
                    </span>

                    <span class="attraction-title">
                        Area untuk Bersantai
                    </span>

                    <span class="attraction-arrow">
                        ↓
                    </span>

                </button>


                <div class="attraction-content">

                    <p>
                        Kawasan pantai dapat menjadi tempat untuk
                        berhenti sejenak dan menikmati suasana
                        sekitar selama berada di lokasi.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         CHARACTER
    ========================= --}}

    <section class="character-section">

        <div class="character-header">

            <div class="section-label">
                Karakter Destinasi
            </div>

            <h2>
                Suasana yang menjadi
                ciri khas
            </h2>

            <p>
                Karakter kawasan pantai dapat dilihat dari
                lingkungan dan suasana yang dirasakan selama
                berada di destinasi.
            </p>

        </div>


        <div class="character-grid">

            <div class="character-card">

                <h3>
                    Tenang
                </h3>

                <p>
                    Suasana kawasan pesisir yang dapat dinikmati
                    tanpa banyak gangguan dari lingkungan sekitar.
                </p>

            </div>


            <div class="character-card">

                <h3>
                    Alami
                </h3>

                <p>
                    Lingkungan pantai menjadi bagian utama dari
                    tampilan dan karakter destinasi.
                </p>

            </div>


            <div class="character-card">

                <h3>
                    Menyegarkan
                </h3>

                <p>
                    Keberadaan laut dan kawasan terbuka memberikan
                    suasana yang berbeda dari lingkungan perkotaan.
                </p>

            </div>

        </div>

    </section>


    {{-- =========================
         CLOSING
    ========================= --}}

    <section class="destination-closing">

        <div class="section-label">
            Evara Beach
        </div>

        <h2>
            Temukan ketenangan
            di tepi pantai
        </h2>

        <p>
            Nikmati suasana kawasan pesisir dan temukan
            pengalaman yang sesuai dengan perjalanan Anda.
        </p>

    </section>

</div>


<script>
    function toggleAttraction(button) {

        const item = button.closest('.attraction-item');

        const allItems = document.querySelectorAll(
            '.attraction-item'
        );

        allItems.forEach(function(otherItem) {

            if (otherItem !== item) {
                otherItem.classList.remove('active');
            }

        });

        item.classList.toggle('active');
    }
</script>

@endsection