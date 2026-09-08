@extends('layouts.visitor')

@section('title', 'Tentang Destinasi')

@section('content')

<style>
    :root {
        --toska: #087873;
        --toska-dark: #075b58;
        --cream: #fbf8f1;
        --cream-soft: #f3e8d5;
        --sand: #d4aa6b;
        --brown: #987047;
        --text: #405954;
        --muted: #78847f;
        --white: #ffffff;
        --line: rgba(117, 91, 57, .20);
    }

    .destination-page {
        background: var(--cream);
        color: var(--text);
        overflow: hidden;
    }

    .destination-page .container {
        max-width: 1160px;
    }

    /* =========================
       HERO
    ========================= */

    .destination-hero {
        padding: 82px 0 100px;
        background: var(--cream);
    }

    .hero-layout {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 70px;
        align-items: center;
    }

    .hero-content {
        max-width: 500px;
    }

    .eyebrow {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 24px;
        color: var(--toska);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 2.5px;
        text-transform: uppercase;
    }

    .eyebrow::before {
        content: "";
        width: 34px;
        height: 2px;
        background: var(--sand);
    }

    .hero-title {
        margin: 0;
        color: var(--toska-dark);
        font-size: clamp(43px, 4.5vw, 62px);
        font-weight: 800;
        line-height: 1.08;
        letter-spacing: -2px;
    }

    .hero-title span {
        display: block;
        color: var(--brown);
    }

    .hero-description {
        max-width: 420px;
        margin: 30px 0 0;
        color: var(--muted);
        font-size: 15px;
        line-height: 1.95;
    }

    .hero-photo {
        position: relative;
        padding: 0 0 18px 18px;
    }

    .hero-photo::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 75%;
        height: 75%;
        background: var(--sand);
    }

    .hero-photo img {
        position: relative;
        z-index: 1;
        width: 100%;
        height: 430px;
        display: block;
        object-fit: cover;
        border-radius: 2px;
    }

    /* =========================
       INTRODUCTION
    ========================= */

    .introduction-section {
        padding: 100px 0;
        background: var(--white);
    }

    .introduction-content {
        max-width: 850px;
        margin: 0 auto;
    }

    .section-label {
        margin-bottom: 16px;
        color: var(--toska);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 2.5px;
        text-transform: uppercase;
    }

    .section-title {
        max-width: 680px;
        margin: 0;
        color: var(--toska-dark);
        font-size: clamp(32px, 3.5vw, 47px);
        font-weight: 800;
        line-height: 1.2;
        letter-spacing: -1px;
    }

    .section-title span {
        color: var(--brown);
    }

    .introduction-lead {
        max-width: 820px;
        margin: 40px 0 25px;
        color: var(--text);
        font-size: 22px;
        line-height: 1.75;
    }

    .introduction-content p:not(.introduction-lead) {
        max-width: 780px;
        margin: 0 0 18px;
        color: var(--muted);
        font-size: 15px;
        line-height: 1.95;
    }

    /* =========================
       PESONA
    ========================= */

    .character-section {
        padding: 100px 0;
        background: var(--cream-soft);
    }

    .character-heading {
        max-width: 650px;
        margin-bottom: 48px;
    }

    .character-description {
        max-width: 570px;
        margin: 23px 0 0;
        color: var(--muted);
        font-size: 15px;
        line-height: 1.9;
    }

    .character-list {
        border-top: 1px solid var(--line);
    }

    .character-item {
        display: grid;
        grid-template-columns: 65px 260px minmax(0, 1fr);
        gap: 30px;
        align-items: start;
        padding: 30px 0;
        border-bottom: 1px solid var(--line);
    }

    .character-number {
        padding-top: 3px;
        color: var(--sand);
        font-size: 14px;
        font-weight: 800;
    }

    .character-item h3 {
        margin: 0;
        color: var(--toska-dark);
        font-size: 21px;
        font-weight: 750;
        line-height: 1.4;
    }

    .character-item p {
        max-width: 570px;
        margin: 0;
        color: var(--muted);
        font-size: 15px;
        line-height: 1.9;
    }

    /* =========================
       EXPERIENCE
    ========================= */

    .experience-section {
        padding: 100px 0;
        background: var(--white);
    }

    .experience-content {
        max-width: 850px;
        margin: 0 auto;
    }

    .experience-content p {
        max-width: 790px;
        margin: 25px 0 0;
        color: var(--muted);
        font-size: 15px;
        line-height: 1.95;
    }

    .experience-quote {
        max-width: 790px;
        margin-top: 30px;
        padding: 20px 25px;
        border-left: 3px solid var(--sand);
        background: var(--cream);
    }

    .experience-quote p {
        margin: 0;
        color: var(--brown);
        font-size: 15px;
        font-style: italic;
        line-height: 1.8;
    }

    /* =========================
       INFORMATION
    ========================= */

    .information-section {
        padding: 95px 0;
        background: var(--cream);
    }

    .information-layout {
        display: grid;
        grid-template-columns: .8fr 1.2fr;
        gap: 85px;
        align-items: start;
    }

    .information-intro {
        max-width: 360px;
    }

    .information-intro p {
        margin: 23px 0 0;
        color: var(--muted);
        font-size: 15px;
        line-height: 1.95;
    }

    .information-list {
        border-top: 1px solid var(--line);
    }

    .information-row {
        display: grid;
        grid-template-columns: 170px minmax(0, 1fr);
        gap: 30px;
        padding: 23px 0;
        border-bottom: 1px solid var(--line);
    }

    .information-row strong {
        color: var(--toska-dark);
        font-size: 15px;
        font-weight: 750;
    }

    .information-row span {
        color: var(--muted);
        font-size: 15px;
        line-height: 1.8;
    }

    /* =========================
       CLOSING
    ========================= */

    .closing-section {
        padding: 90px 20px;
        background: var(--toska-dark);
        text-align: center;
    }

    .closing-content {
        max-width: 680px;
        margin: 0 auto;
    }

    .closing-content .section-label {
        color: var(--sand);
    }

    .closing-title {
        margin: 0 0 22px;
        color: var(--white);
        font-size: clamp(32px, 3.8vw, 48px);
        font-weight: 800;
        line-height: 1.2;
        letter-spacing: -1px;
    }

    .closing-title span {
        color: var(--sand);
    }

    .closing-description {
        margin: 0;
        color: rgba(255, 255, 255, .68);
        font-size: 15px;
        line-height: 1.9;
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 991px) {
        .destination-hero {
            padding: 65px 0 80px;
        }

        .hero-layout {
            grid-template-columns: 1fr;
            gap: 50px;
        }

        .hero-content {
            max-width: 650px;
        }

        .hero-description {
            max-width: 540px;
        }

        .hero-photo {
            max-width: 720px;
        }

        .hero-photo img {
            height: 390px;
        }

        .introduction-section,
        .character-section,
        .experience-section,
        .information-section {
            padding: 75px 0;
        }

        .information-layout {
            grid-template-columns: 1fr;
            gap: 45px;
        }

        .information-intro {
            max-width: 600px;
        }
    }

    @media (max-width: 767px) {
        .hero-title {
            font-size: 43px;
        }

        .hero-photo {
            padding-left: 12px;
            padding-bottom: 12px;
        }

        .hero-photo img {
            height: 320px;
        }

        .introduction-lead {
            font-size: 20px;
        }

        .character-item {
            grid-template-columns: 42px minmax(0, 1fr);
            gap: 15px;
        }

        .character-item h3 {
            margin-bottom: 10px;
        }

        .character-item p {
            grid-column: 2;
        }

        .information-row {
            grid-template-columns: 1fr;
            gap: 7px;
        }
    }

    @media (max-width: 480px) {
        .destination-hero {
            padding: 48px 0 65px;
        }

        .hero-title {
            font-size: 38px;
        }

        .hero-description,
        .introduction-content p:not(.introduction-lead),
        .character-item p,
        .experience-content p,
        .information-row span {
            font-size: 14px;
        }

        .hero-photo img {
            height: 270px;
        }

        .section-title {
            font-size: 31px;
        }

        .closing-section {
            padding: 70px 20px;
        }
    }
</style>

<div class="destination-page">

    {{-- HERO --}}
    <section class="destination-hero">
        <div class="container">
            <div class="hero-layout">

                <div class="hero-content">
                    <div class="eyebrow">
                        Tentang Destinasi
                    </div>

                    <h1 class="hero-title">
                        Mengenal lebih dekat
                        <span>Evara Beach</span>
                    </h1>

                    <p class="hero-description">
                        Evara Beach merupakan destinasi pesisir
                        dengan suasana tenang, pemandangan alam
                        yang menyegarkan, dan keindahan sederhana
                        yang meninggalkan kesan.
                    </p>
                </div>

                <div class="hero-photo">
                    <img
                        src="{{ asset('img/pantai.jpg') }}"
                        alt="Pemandangan Evara Beach"
                    >
                </div>

            </div>
        </div>
    </section>

    {{-- TENTANG DESTINASI --}}
    <section class="introduction-section">
        <div class="container">
            <div class="introduction-content">

                <div class="section-label">
                    Tentang Evara Beach
                </div>

                <h2 class="section-title">
                    Keindahan yang terasa
                    <span>dekat dan alami</span>
                </h2>

                <p class="introduction-lead">
                    Evara Beach menghadirkan pesona pantai melalui
                    suasana alam yang sederhana, udara laut yang
                    menyegarkan, dan pemandangan pesisir yang menenangkan.
                </p>

                <p>
                    Evara Beach menjadi ruang untuk menikmati suasana
                    terbuka dan sejenak menjauh dari kesibukan sehari-hari.
                    Keindahannya hadir melalui perpaduan laut, pantai,
                    dan lingkungan sekitar yang terasa alami.
                </p>

                <p>
                    Setiap kunjungan dapat memberikan pengalaman yang
                    berbeda. Suasana pantai dapat dinikmati melalui
                    pemandangan, kebersamaan, maupun waktu tenang
                    yang dihabiskan dengan cara masing-masing.
                </p>

            </div>
        </div>
    </section>

    {{-- PESONA DESTINASI --}}
    <section class="character-section">
        <div class="container">

            <div class="character-heading">
                <div class="section-label">
                    Pesona Destinasi
                </div>

                <h2 class="section-title">
                    Sederhana tetapi
                    <span>berkesan</span>
                </h2>

                <p class="character-description">
                    Daya tarik Evara Beach hadir melalui suasana,
                    pemandangan, dan momen yang tercipta selama
                    berada di kawasan pesisir.
                </p>
            </div>

            <div class="character-list">

                <div class="character-item">
                    <div class="character-number">
                        01
                    </div>

                    <h3>Suasana Pesisir</h3>

                    <p>
                        Suara ombak, udara laut, dan hamparan pantai
                        menciptakan suasana yang tenang serta
                        memberikan kesan santai.
                    </p>
                </div>

                <div class="character-item">
                    <div class="character-number">
                        02
                    </div>

                    <h3>Pemandangan Alam</h3>

                    <p>
                        Pemandangan laut dan lingkungan sekitar menjadi
                        bagian dari daya tarik Evara Beach yang dapat
                        dinikmati dalam berbagai suasana.
                    </p>
                </div>

                <div class="character-item">
                    <div class="character-number">
                        03
                    </div>

                    <h3>Momen Kebersamaan</h3>

                    <p>
                        Evara Beach menjadi tempat untuk menikmati waktu
                        bersama keluarga, sahabat, maupun orang-orang
                        terdekat dalam suasana yang lebih santai.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- PENGALAMAN --}}
    <section class="experience-section">
        <div class="container">
            <div class="experience-content">

                <div class="section-label">
                    Pengalaman Berkunjung
                </div>

                <h2 class="section-title">
                    Setiap kunjungan
                    memiliki ceritanya sendiri
                </h2>

                <p>
                    Berkunjung ke Evara Beach tidak harus selalu
                    dipenuhi dengan banyak kegiatan. Menikmati
                    pemandangan, merasakan angin laut, berbincang,
                    atau mengabadikan momen sederhana juga menjadi
                    bagian dari pengalaman yang berharga.
                </p>

                <p>
                    Setiap orang dapat menemukan kesan yang berbeda.
                    Bagi sebagian orang, Evara Beach menjadi tempat
                    untuk mencari ketenangan. Bagi yang lain, tempat
                    ini menjadi bagian dari cerita perjalanan bersama
                    keluarga dan sahabat.
                </p>

                <div class="experience-quote">
                    <p>
                        “Terkadang, tempat yang paling berkesan adalah
                        tempat yang membuat kita merasa tenang.”
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- INFORMASI --}}
    <section class="information-section">
        <div class="container">

            <div class="information-layout">

                <div class="information-intro">
                    <div class="section-label">
                        Informasi Destinasi
                    </div>

                    <h2 class="section-title">
                        Hal yang perlu
                        <span>diketahui</span>
                    </h2>

                    <p>
                        Informasi mengenai destinasi membantu pengunjung
                        mempersiapkan kunjungan dengan lebih baik dan
                        menikmati pengalaman di Evara Beach secara nyaman.
                    </p>
                </div>

                <div class="information-list">

                    <div class="information-row">
                        <strong>Jenis Destinasi</strong>
                        <span>
                            Destinasi wisata pesisir dan pantai
                        </span>
                    </div>

                    <div class="information-row">
                        <strong>Suasana</strong>
                        <span>
                            Tenang, terbuka, dan dekat dengan alam
                        </span>
                    </div>

                    <div class="information-row">
                        <strong>Aktivitas</strong>
                        <span>
                            Menikmati pemandangan, bersantai,
                            berfoto, dan menghabiskan waktu bersama
                        </span>
                    </div>

                    <div class="information-row">
                        <strong>Lokasi</strong>
                        <span>
                            Silakan sesuaikan dengan alamat resmi
                            Evara Beach
                        </span>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- PENUTUP --}}
    <section class="closing-section">
        <div class="container">
            <div class="closing-content">

                <div class="section-label">
                    Evara Beach
                </div>

                <h2 class="closing-title">
                    Sebuah tempat untuk
                    <span>menikmati momen</span>
                </h2>

                <p class="closing-description">
                    Dengan suasana pesisir yang tenang dan keindahan
                    alam yang sederhana, Evara Beach menjadi bagian
                    dari perjalanan yang dapat dikenang melalui
                    momen-momen kecil.
                </p>

            </div>
        </div>
    </section>

</div>

@endsection