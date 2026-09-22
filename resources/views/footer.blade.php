{{-- =========================================================
     FOOTER PUBLIC VISIT-IN
========================================================= --}}

<style>

    /* =====================================================
       FOOTER UTAMA
    ===================================================== */

    .visitor-footer {
        background: #087873;
        color: #ffffff;
        margin: 0;
    }


    /* =====================================================
       AREA UTAMA
    ===================================================== */

    .visitor-footer-main {
        max-width: 1180px;
        margin: 0 auto;
        padding: 40px 30px 34px;
    }

    .visitor-footer-grid {
        display: grid;

        grid-template-columns:
            1.35fr
            1fr
            1fr
            1fr;

        gap: 38px;

        align-items: start;
    }


    /* =====================================================
       BRAND
    ===================================================== */

    .footer-brand {
        padding-right: 10px;
        text-align: center;
    }

    .footer-brand-name {
        margin: 0;

        font-family: 'Playfair Display', serif;

        font-size: 30px;
        font-weight: 700;

        letter-spacing: .5px;
        line-height: 1.1;

        color: #ffffff;
    }

    .footer-brand-subtitle {
        display: block;

        margin-top: 6px;

        font-size: 9px;
        font-weight: 700;

        letter-spacing: 2px;

        color: #e2b56e;
    }

    .footer-brand-description {
        max-width: 315px;

        margin: 12px auto 0;

        color: rgba(255,255,255,.80);

        font-size: 12.5px;

        line-height: 1.65;
    }


    /* =====================================================
       JUDUL KOLOM
    ===================================================== */

    .footer-column-title {
        margin: 0 0 17px;

        font-size: 14px;
        font-weight: 700;

        color: #ffffff;

        text-align: center;
    }


    /* =====================================================
       INFORMASI
    ===================================================== */

    .footer-links {
        list-style: none;

        padding: 0;
        margin: 0;

        text-align: center;
    }

    .footer-links li {
        margin-bottom: 8px;
    }

    .footer-links li:last-child {
        margin-bottom: 0;
    }

    .footer-links a {
        display: inline-block;

        color: rgba(255,255,255,.78);

        text-decoration: none;

        font-size: 12.5px;

        transition: .25s ease;
    }

    .footer-links a:hover {
        color: #ffffff;

        transform: translateY(-1px);
    }


    /* =====================================================
       KONTAK
    ===================================================== */

    .footer-contact {
        display: flex;

        flex-direction: column;

        align-items: center;

        gap: 11px;
    }

    .footer-contact-item {
        width: 190px;

        display: flex;

        align-items: center;

        gap: 9px;

        text-align: left;
    }

    .footer-contact-icon {
        width: 30px;
        height: 30px;

        min-width: 30px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: rgba(255,255,255,.08);

        border: 1px solid rgba(255,255,255,.25);

        font-size: 13px;
    }


    /* WhatsApp */

    .footer-contact-icon.whatsapp {
        color: #25D366;
    }


    /* Email & lokasi */

    .footer-contact-icon.email,
    .footer-contact-icon.location {
        color: #e2b56e;
    }


    .footer-contact-text {
        display: flex;

        flex-direction: column;

        gap: 1px;

        min-width: 0;
    }

    .footer-contact-label {
        font-size: 8px;

        font-weight: 700;

        letter-spacing: 1px;

        text-transform: uppercase;

        color: #e2b56e;
    }

    .footer-contact-value {
        color: rgba(255,255,255,.85);

        font-size: 11.5px;

        line-height: 1.45;

        text-decoration: none;

        white-space: nowrap;
    }

    a.footer-contact-value:hover {
        color: #ffffff;
    }


    /* =====================================================
       IKUTI KAMI
    ===================================================== */

    .footer-social {
        display: flex;

        flex-direction: column;

        align-items: center;

        gap: 9px;
    }

    .footer-social-link {
        width: 160px;

        display: flex;

        align-items: center;

        gap: 10px;

        color: #ffffff;

        text-decoration: none;

        transition: .25s ease;
    }

    .footer-social-link:hover {
        color: #ffffff;

        transform: translateX(3px);
    }

    .footer-social-icon {
        width: 32px;
        height: 32px;

        min-width: 32px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: rgba(255,255,255,.08);

        border: 1px solid rgba(255,255,255,.25);

        font-size: 14px;

        transition: .25s ease;
    }


    /* =====================================================
       WARNA IKON SOSIAL
    ===================================================== */

    /* Instagram */

    .footer-social-link.instagram .footer-social-icon {
        color: #E4405F;
    }

    .footer-social-link.instagram:hover .footer-social-icon {
        background: linear-gradient(
            135deg,
            #F58529,
            #DD2A7B,
            #8134AF
        );

        border-color: transparent;

        color: #ffffff;
    }


    /* TikTok */

    .footer-social-link.tiktok .footer-social-icon {
        color: #ffffff;
    }

    .footer-social-link.tiktok:hover .footer-social-icon {
        background: #111111;

        border-color: #25F4EE;

        color: #25F4EE;
    }


    /* Facebook */

    .footer-social-link.facebook .footer-social-icon {
        color: #1877F2;
    }

    .footer-social-link.facebook:hover .footer-social-icon {
        background: #1877F2;

        border-color: #1877F2;

        color: #ffffff;
    }


    /* YouTube */

    .footer-social-link.youtube .footer-social-icon {
        color: #FF0000;
    }

    .footer-social-link.youtube:hover .footer-social-icon {
        background: #FF0000;

        border-color: #FF0000;

        color: #ffffff;
    }


    .footer-social-info {
        display: flex;

        flex-direction: column;

        gap: 0;
    }

    .footer-social-name {
        font-size: 11.5px;

        font-weight: 700;

        line-height: 1.3;

        color: #ffffff;
    }

    .footer-social-account {
        font-size: 10px;

        line-height: 1.3;

        color: rgba(255,255,255,.62);
    }


    /* =====================================================
       BAGIAN BAWAH
    ===================================================== */

    .visitor-footer-bottom {
        background: #076b67;

        border-top: 1px solid rgba(255,255,255,.13);
    }

    .visitor-footer-bottom-inner {
        max-width: 1180px;

        margin: 0 auto;

        padding: 13px 30px;

        display: flex;

        align-items: center;

        justify-content: center;

        text-align: center;
    }

    .footer-copyright {
        margin: 0;

        color: rgba(255,255,255,.78);

        font-size: 10.5px;

        font-weight: 500;
    }


    /* =====================================================
       TABLET
    ===================================================== */

    @media (max-width: 991px) {

        .visitor-footer-main {
            padding: 38px 25px 30px;
        }

        .visitor-footer-grid {
            grid-template-columns: 1fr 1fr;

            gap: 32px 30px;
        }

        .footer-brand {
            padding-right: 0;
        }

    }


    /* =====================================================
       MOBILE
    ===================================================== */

    @media (max-width: 575px) {

        .visitor-footer-main {
            padding: 34px 22px 28px;
        }

        .visitor-footer-grid {
            grid-template-columns: 1fr;

            gap: 28px;
        }

        .footer-brand-description {
            max-width: 100%;
        }

        .footer-contact-item,
        .footer-social-link {
            width: 190px;
        }

        .visitor-footer-bottom-inner {
            padding: 12px 20px;
        }

    }

</style>


{{-- =========================================================
     BOOTSTRAP ICONS
========================================================= --}}

<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
>


<footer class="visitor-footer">


    {{-- =====================================================
         AREA UTAMA FOOTER
    ====================================================== --}}

    <div class="visitor-footer-main">

        <div class="visitor-footer-grid">


            {{-- =================================================
                 BRAND
            ================================================== --}}

            <div class="footer-brand">

                <h3 class="footer-brand-name">
                    VISIT-IN
                </h3>

                <span class="footer-brand-subtitle">
                    EVARA BEACH
                </span>

                <p class="footer-brand-description">
                    Platform pendataan pengunjung wisata untuk
                    mendukung pengelolaan data pengunjung serta
                    informasi mengenai Evara Beach.
                </p>

            </div>


            {{-- =================================================
                 INFORMASI
            ================================================== --}}

            <div>

                <h4 class="footer-column-title">
                    Informasi
                </h4>

                <ul class="footer-links">

                    <li>
                        <a href="{{ route('beranda') }}">
                            Beranda
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('destinasi') }}">
                            Tentang Destinasi
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('galeri') }}">
                            Galeri
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('ulasan') }}">
                            Ulasan Pengunjung
                        </a>
                    </li>

                </ul>

            </div>


            {{-- =================================================
                 KONTAK
            ================================================== --}}

            <div>

                <h4 class="footer-column-title">
                    Kontak
                </h4>

                <div class="footer-contact">


                    {{-- WhatsApp --}}

                    <div class="footer-contact-item">

                        <div class="footer-contact-icon whatsapp">
                            <i class="bi bi-whatsapp"></i>
                        </div>

                        <div class="footer-contact-text">

                            <span class="footer-contact-label">
                                WhatsApp
                            </span>

                            <a
                                href="https://wa.me/6281234567890"
                                target="_blank"
                                class="footer-contact-value"
                            >
                                0812 3456 7890
                            </a>

                        </div>

                    </div>


                    {{-- Email --}}

                    <div class="footer-contact-item">

                        <div class="footer-contact-icon email">
                            <i class="bi bi-envelope"></i>
                        </div>

                        <div class="footer-contact-text">

                            <span class="footer-contact-label">
                                Email
                            </span>

                            <a
                                href="mailto:info@evarabeach.com"
                                class="footer-contact-value"
                            >
                                info@evarabeach.com
                            </a>

                        </div>

                    </div>


                    {{-- Lokasi --}}

                    <div class="footer-contact-item">

                        <div class="footer-contact-icon location">
                            <i class="bi bi-geo-alt"></i>
                        </div>

                        <div class="footer-contact-text">

                            <span class="footer-contact-label">
                                Lokasi
                            </span>

                            <span class="footer-contact-value">
                                Evara Beach · Indonesia
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 IKUTI KAMI
            ================================================== --}}

            <div>

                <h4 class="footer-column-title">
                    Ikuti Kami
                </h4>

                <div class="footer-social">


                    {{-- Instagram --}}

                    <a
                        href="#"
                        class="footer-social-link instagram"
                    >

                        <span class="footer-social-icon">
                            <i class="bi bi-instagram"></i>
                        </span>

                        <span class="footer-social-info">

                            <span class="footer-social-name">
                                Instagram
                            </span>

                            <span class="footer-social-account">
                                @evarabeach
                            </span>

                        </span>

                    </a>


                    {{-- TikTok --}}

                    <a
                        href="#"
                        class="footer-social-link tiktok"
                    >

                        <span class="footer-social-icon">
                            <i class="bi bi-tiktok"></i>
                        </span>

                        <span class="footer-social-info">

                            <span class="footer-social-name">
                                TikTok
                            </span>

                            <span class="footer-social-account">
                                @evarabeach
                            </span>

                        </span>

                    </a>


                    {{-- Facebook --}}

                    <a
                        href="#"
                        class="footer-social-link facebook"
                    >

                        <span class="footer-social-icon">
                            <i class="bi bi-facebook"></i>
                        </span>

                        <span class="footer-social-info">

                            <span class="footer-social-name">
                                Facebook
                            </span>

                            <span class="footer-social-account">
                                Evara Beach
                            </span>

                        </span>

                    </a>


                    {{-- YouTube --}}

                    <a
                        href="#"
                        class="footer-social-link youtube"
                    >

                        <span class="footer-social-icon">
                            <i class="bi bi-youtube"></i>
                        </span>

                        <span class="footer-social-info">

                            <span class="footer-social-name">
                                YouTube
                            </span>

                            <span class="footer-social-account">
                                Evara Beach
                            </span>

                        </span>

                    </a>


                </div>

            </div>


        </div>

    </div>


    {{-- =====================================================
         COPYRIGHT
    ===================================================== --}}

    <div class="visitor-footer-bottom">

        <div class="visitor-footer-bottom-inner">

            <p class="footer-copyright">
                © {{ date('Y') }} VISIT-IN · Evara Beach
            </p>

        </div>

    </div>


</footer>