@extends('layouts.visitor')

@section('title', 'Galeri | VISIT-IN')

@section('content')

<style>
    :root {
        --toska: #087873;
        --toska-dark: #075b58;
        --toska-soft: #dcefed;

        --cream: #fbf8f1;
        --cream-soft: #f4eadb;

        --sand: #d4aa6b;
        --brown: #987047;

        --text: #405954;
        --muted: #78847f;

        --white: #ffffff;
    }

    /* =========================================================
       HALAMAN GALERI
    ========================================================== */

    .gallery-page {
        background: var(--cream);
        min-height: 100vh;
        padding-bottom: 55px;
    }


    /* =========================================================
       HEADER GALERI
    ========================================================== */

    .gallery-header {
        padding: 70px 20px 35px;
        text-align: center;

        background:
            linear-gradient(
                180deg,
                rgba(244, 234, 219, 0.65),
                rgba(251, 248, 241, 0.98)
            );
    }

    .gallery-header-inner {
        max-width: 850px;
        margin: 0 auto;
    }

    .gallery-title {
        margin: 0;

        color: var(--brown);

        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: clamp(38px, 5vw, 58px);
        font-weight: 600;
        line-height: 1.1;
    }

    .gallery-title span {
        color: var(--toska);
    }

    .gallery-header-description {
        max-width: 620px;
        margin: 18px auto 0;

        color: var(--muted);

        font-size: 15px;
        line-height: 1.8;
    }

    .gallery-header-line {
        width: 65px;
        height: 3px;

        margin: 25px auto 0;

        border-radius: 50px;
        background: var(--sand);
    }


    /* =========================================================
       GALERI GRID
    ========================================================== */

    .gallery-section {
        max-width: 1180px;
        margin: 0 auto;
        padding: 20px 25px 0;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
    }

    .gallery-item {
        min-width: 0;
    }


    /* =========================================================
       CARD FOTO
    ========================================================== */

    .gallery-card {
        position: relative;

        height: 255px;

        overflow: hidden;

        border-radius: 18px;

        background: #e8dfd1;

        cursor: pointer;

        box-shadow:
            0 8px 25px
            rgba(52, 76, 72, 0.08);
    }

    .gallery-card img {
        width: 100%;
        height: 100%;

        display: block;

        object-fit: cover;

        transition:
            transform 0.5s ease,
            filter 0.5s ease;
    }


    /* =========================================================
       HOVER OVERLAY
    ========================================================== */

    .gallery-overlay {
        position: absolute;
        inset: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        background:
            rgba(8, 120, 115, 0.76);

        opacity: 0;

        transition:
            opacity 0.35s ease;
    }

    .gallery-overlay span {
        color: var(--white);

        font-size: 16px;
        font-weight: 700;

        letter-spacing: 2px;

        text-align: center;
        text-transform: uppercase;

        padding: 12px 22px;

        border:
            1px solid
            rgba(255, 255, 255, 0.65);

        border-radius: 50px;

        transform: translateY(12px);

        transition:
            transform 0.35s ease;
    }

    .gallery-card:hover img {
        transform: scale(1.05);
        filter: brightness(0.88);
    }

    .gallery-card:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-card:hover .gallery-overlay span {
        transform: translateY(0);
    }


    /* =========================================================
       FOTO TAMBAHAN
       6 FOTO PERTAMA TAMPIL
       6 FOTO BERIKUTNYA TERSEMBUNYI
    ========================================================== */

    .gallery-item-extra {
        display: none;
    }

    .gallery-item-extra.show {
        display: block;

        animation:
            galleryFadeIn
            0.45s ease both;
    }

    @keyframes galleryFadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }


    /* =========================================================
       LEARN MORE
    ========================================================== */

    .gallery-more {
        display: flex;
        justify-content: center;

        margin-top: 45px;
    }

    .gallery-more-btn {
        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 12px;

        min-width: 175px;

        padding: 13px 24px;

        border:
            1px solid
            var(--toska);

        border-radius: 50px;

        background: transparent;

        color: var(--toska);

        font-size: 13px;
        font-weight: 700;

        letter-spacing: 1px;

        text-transform: uppercase;

        cursor: pointer;

        transition:
            background 0.3s ease,
            color 0.3s ease,
            transform 0.3s ease,
            box-shadow 0.3s ease;
    }

    .gallery-more-btn:hover {
        background: var(--toska);
        color: var(--white);

        transform: translateY(-2px);

        box-shadow:
            0 8px 20px
            rgba(8, 120, 115, 0.18);
    }

    .gallery-more-btn .arrow {
        font-size: 16px;

        transition:
            transform 0.3s ease;
    }

    .gallery-more-btn.active .arrow {
        transform: rotate(180deg);
    }


    /* =========================================================
       PENUTUP
    ========================================================== */

    .gallery-ending {
        max-width: 1180px;

        margin: 55px auto 0;

        padding: 0 25px;

        text-align: center;
    }

    .gallery-ending-line {
        width: 100%;
        height: 1px;

        background:
            rgba(152, 112, 71, 0.18);

        margin-bottom: 20px;
    }

    .gallery-ending-text {
        margin: 0;

        color: var(--muted);

        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 17px;
        font-style: italic;
    }


    /* =========================================================
       MODAL FOTO
    ========================================================== */

    .gallery-modal {
        position: fixed !important;

        top: 0 !important;
        left: 0 !important;

        width: 100% !important;
        height: 100% !important;

        padding:
            105px
            20px
            25px !important;

        overflow-x: hidden !important;
        overflow-y: auto !important;
    }

    .gallery-modal.show {
        display: block !important;
    }

    .gallery-modal .modal-dialog {
        width: 100%;

        max-width: 850px;

        margin:
            0 auto !important;

        transform: none !important;
    }

    .gallery-modal .modal-content {
        width: 100%;

        overflow: hidden;

        border: 0;

        border-radius: 18px;

        background: var(--cream);

        box-shadow:
            0 25px 70px
            rgba(0, 0, 0, 0.28);
    }


    /* =========================================================
       HEADER MODAL
    ========================================================== */

    .gallery-modal .modal-header {
        min-height: 64px;

        padding: 15px 22px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        border-bottom:
            1px solid
            rgba(8, 120, 115, 0.12);

        background: var(--cream);
    }

    .gallery-modal .modal-title {
        margin: 0;

        color: var(--toska-dark);

        font-family:
            "Playfair Display",
            Georgia,
            serif;

        font-size: 24px;
        font-weight: 600;

        line-height: 1.2;
    }

    .gallery-modal .btn-close {
        flex-shrink: 0;

        margin: 0;

        box-shadow: none;

        opacity: 0.7;
    }

    .gallery-modal .btn-close:hover {
        opacity: 1;
    }


    /* =========================================================
       BODY MODAL
    ========================================================== */

    .gallery-modal .modal-body {
        padding: 0;

        background: var(--cream);
    }


    /* =========================================================
       GAMBAR MODAL
    ========================================================== */

    .gallery-modal-image {
        width: 100%;

        max-height: 58vh;

        display: block;

        object-fit: contain;

        background: #eee7da;
    }


    /* =========================================================
       DESCRIPTION MODAL
    ========================================================== */

    .gallery-modal-description {
        margin: 0;

        padding:
            15px
            22px
            18px;

        color: var(--text);

        background: var(--cream);

        font-size: 14px;

        line-height: 1.6;
    }


    /* =========================================================
       BACKDROP
    ========================================================== */

    .modal-backdrop.show {
        opacity: 0.68;
    }


    /* =========================================================
       TABLET
    ========================================================== */

    @media (max-width: 991px) {

        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 22px;
        }

        .gallery-card {
            height: 235px;
        }

        .gallery-modal {
            padding:
                85px
                15px
                20px !important;
        }

        .gallery-modal .modal-dialog {
            max-width: 750px;
        }

        .gallery-modal-image {
            max-height: 55vh;
        }
    }


    /* =========================================================
       HP
    ========================================================== */

    @media (max-width: 575px) {

        .gallery-header {
            padding:
                55px
                18px
                30px;
        }

        .gallery-title {
            font-size: 38px;
        }

        .gallery-header-description {
            font-size: 14px;
        }

        .gallery-section {
            padding:
                15px
                18px
                0;
        }

        .gallery-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .gallery-card {
            height: 240px;
            border-radius: 15px;
        }

        .gallery-more {
            margin-top: 35px;
        }

        .gallery-ending {
            padding: 0 18px;
            margin-top: 45px;
        }

        .gallery-ending-text {
            font-size: 15px;
        }


        /* =====================================================
           MODAL HP
        ====================================================== */

        .gallery-modal {
            padding:
                70px
                10px
                15px !important;
        }

        .gallery-modal .modal-content {
            border-radius: 14px;
        }

        .gallery-modal .modal-header {
            min-height: 55px;

            padding:
                12px
                16px;
        }

        .gallery-modal .modal-title {
            font-size: 20px;
        }

        .gallery-modal-image {
            max-height: 50vh;
        }

        .gallery-modal-description {
            padding:
                12px
                16px
                15px;

            font-size: 13px;

            line-height: 1.5;
        }
    }
</style>


<div class="gallery-page">

    <!-- =====================================================
         HEADER
    ====================================================== -->

    <section class="gallery-header">

        <div class="gallery-header-inner">

            <h1 class="gallery-title">
                <span>Galeri</span> Evara Beach
            </h1>

            <p class="gallery-header-description">
                Lihat berbagai suasana, aktivitas, dan fasilitas
                yang ada di Evara Beach.
            </p>

            <div class="gallery-header-line"></div>

        </div>

    </section>


    <!-- =====================================================
         GALERI
    ====================================================== -->

    <section class="gallery-section">

        <div class="gallery-grid">


            <!-- =================================================
                 1. HAMPARAN PASIR
            ================================================== -->

            <div class="gallery-item">

                <div
                    class="gallery-card"
                    data-bs-toggle="modal"
                    data-bs-target="#galleryModal"
                    data-image="{{ asset('img/galeri1.jpeg') }}"
                    data-title="Hamparan Pasir"
                    data-description="Hamparan pasir yang menjadi bagian dari kawasan pesisir Evara Beach dan memberikan karakter alami pada area pantai."
                >

                    <img
                        src="{{ asset('img/galeri1.jpeg') }}"
                        alt="Hamparan Pasir Evara Beach"
                    >

                    <div class="gallery-overlay">
                        <span>HAMPARAN PASIR</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 2. PEMANDANGAN PANTAI
            ================================================== -->

            <div class="gallery-item">

                <div
                    class="gallery-card"
                    data-bs-toggle="modal"
                    data-bs-target="#galleryModal"
                    data-image="{{ asset('img/galeri2.jpeg') }}"
                    data-title="Pemandangan Pantai"
                    data-description="Panorama laut dan kawasan pantai yang menjadi bagian dari keindahan Evara Beach."
                >

                    <img
                        src="{{ asset('img/galeri2.jpeg') }}"
                        alt="Pemandangan Pantai Evara Beach"
                    >

                    <div class="gallery-overlay">
                        <span>PEMANDANGAN PANTAI</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 3. SUNRISE
            ================================================== -->

            <div class="gallery-item">

                <div
                    class="gallery-card"
                    data-bs-toggle="modal"
                    data-bs-target="#galleryModal"
                    data-image="{{ asset('img/foto20.png') }}"
                    data-title="Sunrise"
                    data-description="Pemandangan pagi saat matahari terbit di kawasan pantai dengan cahaya yang menyinari garis laut."
                >

                    <img
                        src="{{ asset('img/foto20.png') }}"
                        alt="Sunrise Evara Beach"
                    >

                    <div class="gallery-overlay">
                        <span>SUNRISE</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 4. SUNSET
            ================================================== -->

            <div class="gallery-item">

                <div
                    class="gallery-card"
                    data-bs-toggle="modal"
                    data-bs-target="#galleryModal"
                    data-image="{{ asset('img/galeri4.jpeg') }}"
                    data-title="Sunset"
                    data-description="Keindahan matahari terbenam dengan cahaya senja yang memantul di permukaan laut Evara Beach."
                >

                    <img
                        src="{{ asset('img/galeri4.jpeg') }}"
                        alt="Sunset Evara Beach"
                    >

                    <div class="gallery-overlay">
                        <span>SUNSET</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 5. SPOT FOTO
            ================================================== -->

            <div class="gallery-item">

                <div
                    class="gallery-card"
                    data-bs-toggle="modal"
                    data-bs-target="#galleryModal"
                    data-image="{{ asset('img/galeri5.png') }}"
                    data-title="Spot Foto"
                    data-description="Berbagai sudut menarik yang dapat digunakan pengunjung untuk mengabadikan momen selama berada di Evara Beach."
                >

                    <img
                        src="{{ asset('img/galeri5.png') }}"
                        alt="Spot Foto Evara Beach"
                    >

                    <div class="gallery-overlay">
                        <span>SPOT FOTO</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 6. KESERUAN BERSAMA
            ================================================== -->

            <div class="gallery-item">

                <div
                    class="gallery-card"
                    data-bs-toggle="modal"
                    data-bs-target="#galleryModal"
                    data-image="{{ asset('img/galeri13.png') }}"
                    data-title="Keseruan Bersama"
                    data-description="Momen kebersamaan pengunjung saat menikmati permainan dan kegiatan bersama di tepi pantai."
                >

                    <img
                        src="{{ asset('img/galeri13.png') }}"
                        alt="Keseruan Bersama di Evara Beach"
                    >

                    <div class="gallery-overlay">
                        <span>KESERUAN BERSAMA</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 7. AREA BERSANTAI
                 TERSEMBUNYI AWAL
            ================================================== -->

            <div class="gallery-item gallery-item-extra">

                <div
                    class="gallery-card"
                    data-bs-toggle="modal"
                    data-bs-target="#galleryModal"
                    data-image="{{ asset('img/galeri8.jpeg') }}"
                    data-title="Area Bersantai"
                    data-description="Area yang dapat digunakan pengunjung untuk duduk, beristirahat, dan menikmati suasana pantai."
                >

                    <img
                        src="{{ asset('img/galeri8.jpeg') }}"
                        alt="Area Bersantai Evara Beach"
                    >

                    <div class="gallery-overlay">
                        <span>AREA BERSANTAI</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 8. AKTIVITAS AIR
                 TERSEMBUNYI AWAL
            ================================================== -->

            <div class="gallery-item gallery-item-extra">

                <div
                    class="gallery-card"
                    data-bs-toggle="modal"
                    data-bs-target="#galleryModal"
                    data-image="{{ asset('img/galeri11.png') }}"
                    data-title="Aktivitas Air"
                    data-description="Aktivitas rekreasi air yang dapat menjadi bagian dari pengalaman pengunjung di kawasan Evara Beach."
                >

                    <img
                        src="{{ asset('img/galeri11.png') }}"
                        alt="Aktivitas Air Evara Beach"
                    >

                    <div class="gallery-overlay">
                        <span>AKTIVITAS AIR</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 9. KULINER
                 TERSEMBUNYI AWAL
            ================================================== -->

            <div class="gallery-item gallery-item-extra">

                <div
                    class="gallery-card"
                    data-bs-toggle="modal"
                    data-bs-target="#galleryModal"
                    data-image="{{ asset('img/galeri10.jpeg') }}"
                    data-title="Kuliner"
                    data-description="Beragam pilihan makanan dan minuman yang dapat dinikmati pengunjung selama berada di Evara Beach."
                >

                    <img
                        src="{{ asset('img/galeri10.jpeg') }}"
                        alt="Kuliner Evara Beach"
                    >

                    <div class="gallery-overlay">
                        <span>KULINER</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 10. PENGINAPAN
                 TERSEMBUNYI AWAL
            ================================================== -->

            <div class="gallery-item gallery-item-extra">

                <div
                    class="gallery-card"
                    data-bs-toggle="modal"
                    data-bs-target="#galleryModal"
                    data-image="{{ asset('img/galeri14.png') }}"
                    data-title="Penginapan"
                    data-description="Pilihan tempat menginap yang dapat mendukung kenyamanan pengunjung selama berada di kawasan wisata."
                >

                    <img
                        src="{{ asset('img/galeri14.png') }}"
                        alt="Penginapan Evara Beach"
                    >

                    <div class="gallery-overlay">
                        <span>PENGINAPAN</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 11. GAZEBO
                 TERSEMBUNYI AWAL
            ================================================== -->

            <div class="gallery-item gallery-item-extra">

                <div
                    class="gallery-card"
                    data-bs-toggle="modal"
                    data-bs-target="#galleryModal"
                    data-image="{{ asset('img/galeri12.png') }}"
                    data-title="Gazebo"
                    data-description="Gazebo yang dapat digunakan pengunjung sebagai tempat berteduh dan bersantai di kawasan pantai."
                >

                    <img
                        src="{{ asset('img/galeri12.png') }}"
                        alt="Gazebo Evara Beach"
                    >

                    <div class="gallery-overlay">
                        <span>GAZEBO</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 12. SUASANA MALAM
                 TERSEMBUNYI AWAL
            ================================================== -->

            <div class="gallery-item gallery-item-extra">

                <div
                    class="gallery-card"
                    data-bs-toggle="modal"
                    data-bs-target="#galleryModal"
                    data-image="{{ asset('img/galeri15.png') }}"
                    data-title="Suasana Malam"
                    data-description="Area kulineran atau makan dan bersantai dengan suasana malam yang hangat di tepi pantai Evara Beach."
                >

                    <img
                        src="{{ asset('img/galeri15.png') }}"
                        alt="Suasana Malam Evara Beach"
                    >

                    <div class="gallery-overlay">
                        <span>SUASANA MALAM</span>
                    </div>

                </div>

            </div>


        </div>


        <!-- =====================================================
             LEARN MORE
        ====================================================== -->

        <div class="gallery-more">

            <button
                type="button"
                class="gallery-more-btn"
                id="galleryMoreBtn"
            >

                <span id="galleryMoreText">
                    Learn More
                </span>

                <span class="arrow">
                    ↓
                </span>

            </button>

        </div>

    </section>


    <!-- =====================================================
         PENUTUP
    ====================================================== -->

    <div class="gallery-ending">

        <div class="gallery-ending-line"></div>

        <p class="gallery-ending-text">
            Evara Beach — nikmati setiap suasana di tepi pantai.
        </p>

    </div>

</div>


<!-- =========================================================
     MODAL FOTO
========================================================= -->

<div
    class="modal fade gallery-modal"
    id="galleryModal"
    tabindex="-1"
    aria-hidden="true"
>

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h5
                    class="modal-title"
                    id="galleryModalTitle"
                >
                    Galeri Evara Beach
                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>

            </div>

            <div class="modal-body">

                <img
                    id="galleryModalImage"
                    class="gallery-modal-image"
                    src=""
                    alt=""
                >

                <p
                    id="galleryModalDescription"
                    class="gallery-modal-description"
                ></p>

            </div>

        </div>

    </div>

</div>


<script>
document.addEventListener('DOMContentLoaded', function () {

    /* =====================================================
       LEARN MORE / SHOW LESS
    ====================================================== */

    const moreButton =
        document.getElementById('galleryMoreBtn');

    const moreText =
        document.getElementById('galleryMoreText');

    const extraItems =
        document.querySelectorAll('.gallery-item-extra');

    let expanded = false;

    if (moreButton) {

        moreButton.addEventListener(
            'click',
            function () {

                expanded = !expanded;

                extraItems.forEach(
                    function (item) {

                        item.classList.toggle(
                            'show',
                            expanded
                        );

                    }
                );


                if (expanded) {

                    moreText.textContent =
                        'Show Less';

                    moreButton.classList.add(
                        'active'
                    );

                } else {

                    moreText.textContent =
                        'Learn More';

                    moreButton.classList.remove(
                        'active'
                    );

                    const gallerySection =
                        document.querySelector(
                            '.gallery-section'
                        );

                    if (gallerySection) {

                        window.scrollTo({

                            top:
                                gallerySection.offsetTop - 80,

                            behavior:
                                'smooth'

                        });

                    }

                }

            }
        );

    }


    /* =====================================================
       MODAL FOTO
    ====================================================== */

    const galleryCards =
        document.querySelectorAll(
            '.gallery-card'
        );

    const modalImage =
        document.getElementById(
            'galleryModalImage'
        );

    const modalTitle =
        document.getElementById(
            'galleryModalTitle'
        );

    const modalDescription =
        document.getElementById(
            'galleryModalDescription'
        );


    galleryCards.forEach(
        function (card) {

            card.addEventListener(
                'click',
                function () {

                    const image =
                        card.getAttribute(
                            'data-image'
                        );

                    const title =
                        card.getAttribute(
                            'data-title'
                        );

                    const description =
                        card.getAttribute(
                            'data-description'
                        );


                    modalImage.src =
                        image;

                    modalImage.alt =
                        title;

                    modalTitle.textContent =
                        title;

                    modalDescription.textContent =
                        description;

                }
            );

        }
    );

});
</script>

@endsection