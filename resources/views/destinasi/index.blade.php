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
    overflow: hidden;
}


/* =========================================================
   HERO
========================================================= */

.destination-hero {
    position: relative;
    min-height: 300px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: var(--cream-light);
    overflow: hidden;
}

.destination-hero-content {
    width: 100%;
    max-width: 850px;

    margin: 0 auto;
    padding: 38px 30px 55px;

    text-align: center;

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}


/* Label */

.destination-eyebrow {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 100%;
    gap: 14px;

    margin-bottom: 17px;

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


/* Judul Evara Beach */

.destination-hero h1 {
    margin: 0;

    font-size: clamp(48px, 5.5vw, 70px);
    line-height: 1;

    font-weight: 700;
    letter-spacing: -3px;

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
    max-width: 600px;

    margin: 20px auto 0;

    color: var(--text);

    font-size: 15px;
    line-height: 1.7;

    text-align: center;
}


/* =========================================================
   ABOUT
========================================================= */

.about-section {
    position: relative;
    padding: 85px 8% 100px;
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


/* Tulisan Evara Beach pada bagian kiri */

.about-destination-name {
    margin: 0 0 14px;

    font-size: 23px;
    line-height: 1.2;

    font-weight: 600;
    letter-spacing: -.3px;
}

.about-destination-name .evara {
    color: var(--cream-light);
}

.about-destination-name .beach {
    color: var(--sand-light);
}


/* Judul kiri */

.about-heading h2 {
    margin: 0;

    color: var(--cream-light);

    font-size: clamp(34px, 3.4vw, 46px);

    line-height: 1.12;

    font-weight: 700;

    letter-spacing: -1.2px;
}


/* =========================================================
   ABOUT CONTENT
========================================================= */

.about-content .lead {
    margin: 0 0 22px;

    color: var(--cream-light);

    font-size: 18px;
    line-height: 1.65;

    font-weight: 500;
}

.about-content p {
    margin: 0 0 18px;

    color: rgba(255, 250, 241, .82);

    font-size: 15px;
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
    font-size: 14px;
    font-weight: 700;
}

.highlight-box span {
    color: var(--muted);
    font-size: 13.5px;
    line-height: 1.65;
}


/* =========================================================
   ATTRACTION
========================================================= */

.attraction-section {
    padding: 100px 8%;
    background: var(--cream-light);
}

.attraction-header {
    max-width: 720px;
    margin-bottom: 48px;
}

.attraction-header .section-label {
    color: var(--brown);
}


/*
|--------------------------------------------------------------------------
| Bagian "Bagian dari Evara Beach" DIHAPUS
|--------------------------------------------------------------------------
| Tidak ada judul kedua agar "Yang Ada di Evara Beach"
| tidak tampil dua kali.
*/

.attraction-header p {
    margin: 0;

    color: var(--text);
    font-size: 16px;
    line-height: 1.8;
}

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
    margin-left: 20px;

    color: var(--brown);

    font-size: 18px;

    transition: transform .3s ease;
}

.attraction-item.active .attraction-arrow {
    transform: rotate(180deg);

    color: var(--toska);
}

.attraction-content {
    max-height: 0;

    overflow: hidden;

    padding-left: 73px;
    padding-right: 30px;

    transition:
        max-height .35s ease,
        padding .35s ease;
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


/* =========================================================
   CHARACTER
========================================================= */

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


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .destination-hero {
        min-height: 285px;
    }

    .destination-hero-content {
        padding: 35px 8% 50px;
    }

    .about-section {
        padding-top: 105px;
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

    .destination-hero {
        min-height: 285px;
    }

    .destination-hero-content {
        padding: 32px 7% 50px;
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

    .about-section {
        padding: 70px 7%;
    }

    .about-destination-name {
        font-size: 21px;

        margin-bottom: 12px;
    }

    .about-heading h2 {
        font-size: 36px;

        line-height: 1.15;

        letter-spacing: -1px;
    }

    .about-content .lead {
        font-size: 18px;
    }

    .about-highlights {
        grid-template-columns: 1fr;
    }

    .attraction-section,
    .character-section {
        padding: 70px 7%;
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
                Kenali suasana kawasan pesisir dan daya tarik yang dapat
                ditemukan dalam kunjungan ke Evara Beach.
            </p>

        </div>

    </section>



    {{-- =====================================================
         ABOUT
    ====================================================== --}}

    <section class="about-section">

        <div class="about-grid">


            {{-- BAGIAN KIRI --}}

            <div class="about-heading">

                <div class="section-label">
                    Tentang Evara Beach
                </div>

                <div class="about-destination-name">
                    <span class="evara">Evara</span>
                    <span class="beach">Beach</span>
                </div>

                <h2>
                    Keindahan pesisir yang sederhana
                </h2>

            </div>



            {{-- BAGIAN KANAN --}}

            <div class="about-content">

                <p class="lead">
                    Evara Beach merupakan destinasi pesisir yang menghadirkan
                    suasana pantai sebagai bagian utama dari pengalaman berkunjung.
                </p>

                <p>
                    Kawasan pantai menjadi ruang untuk menikmati pemandangan laut,
                    suasana sekitar, serta karakter lingkungan pesisir secara langsung.
                </p>

                <p>
                    Setiap bagian memiliki daya tarik tersendiri yang dapat dinikmati
                    sesuai dengan kebutuhan dan waktu kunjungan.
                </p>


                <div class="about-highlights">

                    <div class="highlight-box">

                        <strong>
                            Nuansa Pesisir
                        </strong>

                        <span>
                            Suasana khas kawasan pantai yang menjadi bagian
                            dari pengalaman berkunjung.
                        </span>

                    </div>


                    <div class="highlight-box">

                        <strong>
                            Keindahan Alam
                        </strong>

                        <span>
                            Pemandangan alam pesisir yang dapat dinikmati
                            secara langsung.
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         ATTRACTION
    ====================================================== --}}

    <section class="attraction-section">

        <div class="attraction-header">

            <div class="section-label">
                Yang Ada di Evara Beach
            </div>

            {{-- "Bagian dari Evara Beach" DIHAPUS --}}

            <p>
                Beragam bagian dan daya tarik yang dapat dijumpai
                di kawasan Evara Beach selama kunjungan.
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
                        Hamparan laut menjadi salah satu daya tarik utama
                        yang dapat dilihat dari kawasan Evara Beach.
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
                        Garis pantai menjadi bagian dari kawasan Evara Beach
                        yang memperlihatkan pertemuan antara daratan dan laut.
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
                        Spot Foto
                    </span>

                    <span class="attraction-arrow">
                        ↓
                    </span>

                </button>


                <div class="attraction-content">

                    <p>
                        Beberapa sudut kawasan pantai dapat menjadi pilihan
                        untuk mengabadikan pemandangan dan suasana selama
                        berada di Evara Beach.
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
                        Sunset
                    </span>

                    <span class="attraction-arrow">
                        ↓
                    </span>

                </button>


                <div class="attraction-content">

                    <p>
                        Menjelang matahari terbenam, kawasan pantai menawarkan
                        pemandangan langit dan laut dengan suasana yang berbeda.
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
                        Area Bersantai
                    </span>

                    <span class="attraction-arrow">
                        ↓
                    </span>

                </button>


                <div class="attraction-content">

                    <p>
                        Area bersantai menjadi bagian dari kawasan Evara Beach
                        yang dapat digunakan untuk berhenti sejenak dan menikmati
                        lingkungan sekitar.
                    </p>

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
                Karakter Destinasi
            </div>

            <h2>
                Suasana yang menjadi ciri khas
            </h2>

            <p>
                Karakter kawasan pantai dapat dilihat dari lingkungan
                dan suasana yang dirasakan selama berada di destinasi.
            </p>

        </div>


        <div class="character-grid">


            <div class="character-card">

                <h3>
                    Tenang
                </h3>

                <p>
                    Suasana kawasan pesisir yang dapat dinikmati
                    dengan lebih santai selama berada di pantai.
                </p>

            </div>


            <div class="character-card">

                <h3>
                    Alami
                </h3>

                <p>
                    Lingkungan pantai menjadi bagian utama dari
                    tampilan dan karakter Evara Beach.
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

</div>



<script>
function toggleAttraction(button) {

    const item = button.closest('.attraction-item');

    const allItems = document.querySelectorAll('.attraction-item');

    allItems.forEach(function(otherItem) {

        if (otherItem !== item) {
            otherItem.classList.remove('active');
        }

    });

    item.classList.toggle('active');
}
</script>

@endsection