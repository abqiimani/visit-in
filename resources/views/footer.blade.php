<footer class="visitor-footer">

    <div class="container">

        <div class="row gy-5">

            {{-- BRAND --}}
            <div class="col-lg-4 col-md-6">

                <a href="{{ route('beranda') }}" class="footer-brand">
                    <span class="footer-brand-name">VISIT-IN</span>
                    <span class="footer-brand-subtitle">
                        EVARA BEACH
                    </span>
                </a>

                <p class="footer-description">
                    Platform pendataan pengunjung untuk mendukung
                    pengalaman wisata yang lebih tertata di Evara Beach.
                </p>

                <a href="{{ route('pengunjung.create') }}"
                   class="footer-visit-btn">
                    ISI DATA KUNJUNGAN
                </a>

            </div>


            {{-- NAVIGASI --}}
            <div class="col-lg-2 col-md-6">

                <h5 class="footer-title">
                    Navigasi
                </h5>

                <ul class="footer-menu">

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


            {{-- INFORMASI --}}
            <div class="col-lg-3 col-md-6">

                <h5 class="footer-title">
                    Evara Beach
                </h5>

                <div class="footer-info">

                    <div class="footer-info-item">
                        <span class="footer-info-label">
                            Lokasi
                        </span>

                        <span>
                            Evara Beach
                        </span>
                    </div>

                    <div class="footer-info-item">
                        <span class="footer-info-label">
                            Jam Operasional
                        </span>

                        <span>
                            Setiap Hari
                            <br>
                            08.00 – 18.00 WIB
                        </span>
                    </div>

                </div>

            </div>


            {{-- KONTAK --}}
            <div class="col-lg-3 col-md-6">

                <h5 class="footer-title">
                    Hubungi Kami
                </h5>

                <div class="footer-contact">

                    <a href="#" class="footer-contact-item">

                        <span class="contact-icon">
                            WA
                        </span>

                        <span>
                            <small>WhatsApp</small>
                            Hubungi kami
                        </span>

                    </a>


                    <a href="mailto:info@evarabeach.com"
                       class="footer-contact-item">

                        <span class="contact-icon">
                            @
                        </span>

                        <span>
                            <small>Email</small>
                            info@evarabeach.com
                        </span>

                    </a>


                    <a href="#" class="footer-contact-item">

                        <span class="contact-icon">
                            IG
                        </span>

                        <span>
                            <small>Instagram</small>
                            Evara Beach
                        </span>

                    </a>

                </div>

            </div>

        </div>


        {{-- GARIS --}}
        <div class="footer-divider"></div>


        {{-- BOTTOM --}}
        <div class="footer-bottom">

            <p>
                © {{ date('Y') }} VISIT-IN · Evara Beach
            </p>

            <p>
                Pendataan Pengunjung Wisata
            </p>

        </div>

    </div>

</footer>


<style>

    /* ==================================================
       FOOTER PUBLIK VISIT-IN
    ================================================== */

    .visitor-footer {
        background:
            linear-gradient(
                135deg,
                #075f5b 0%,
                #087872 50%,
                #0b6864 100%
            );

        color: #ffffff;

        padding: 60px 0 24px;

        margin-top: 0;
    }


    /* ==================================================
       BRAND
    ================================================== */

    .footer-brand {
        display: inline-flex;
        flex-direction: column;

        text-decoration: none;

        margin-bottom: 18px;
    }


    .footer-brand-name {
        font-family: 'Playfair Display', serif;

        font-size: 30px;

        font-weight: 700;

        letter-spacing: 1px;

        color: #f8e7c5;

        line-height: 1;
    }


    .footer-brand-subtitle {
        margin-top: 7px;

        font-size: 9px;

        font-weight: 700;

        letter-spacing: 3px;

        color: rgba(255,255,255,.72);
    }


    .footer-description {
        max-width: 340px;

        margin: 0 0 22px;

        font-size: 14px;

        line-height: 1.8;

        color: rgba(255,255,255,.76);
    }


    /* ==================================================
       BUTTON
    ================================================== */

    .footer-visit-btn {
        display: inline-flex;

        align-items: center;

        justify-content: center;

        padding: 11px 19px;

        border-radius: 30px;

        background: #e0ad68;

        color: #ffffff;

        text-decoration: none;

        font-size: 11px;

        font-weight: 700;

        letter-spacing: .5px;

        transition: .25s ease;
    }


    .footer-visit-btn:hover {
        background: #f0c27d;

        color: #ffffff;

        transform: translateY(-2px);
    }


    /* ==================================================
       TITLE
    ================================================== */

    .footer-title {
        margin: 0 0 20px;

        font-size: 16px;

        font-weight: 700;

        color: #f8e7c5;
    }


    /* ==================================================
       NAVIGATION
    ================================================== */

    .footer-menu {
        list-style: none;

        padding: 0;

        margin: 0;
    }


    .footer-menu li {
        margin-bottom: 12px;
    }


    .footer-menu a {
        color: rgba(255,255,255,.74);

        text-decoration: none;

        font-size: 13px;

        transition: .25s ease;
    }


    .footer-menu a:hover {
        color: #f8e7c5;

        padding-left: 4px;
    }


    /* ==================================================
       INFORMATION
    ================================================== */

    .footer-info {
        display: flex;

        flex-direction: column;

        gap: 19px;
    }


    .footer-info-item {
        display: flex;

        flex-direction: column;

        gap: 4px;

        font-size: 13px;

        line-height: 1.6;

        color: rgba(255,255,255,.76);
    }


    .footer-info-label {
        font-size: 11px;

        font-weight: 700;

        text-transform: uppercase;

        letter-spacing: 1px;

        color: rgba(255,255,255,.5);
    }


    /* ==================================================
       CONTACT
    ================================================== */

    .footer-contact {
        display: flex;

        flex-direction: column;

        gap: 13px;
    }


    .footer-contact-item {
        display: flex;

        align-items: center;

        gap: 11px;

        text-decoration: none;

        color: rgba(255,255,255,.78);

        font-size: 13px;

        transition: .25s ease;
    }


    .footer-contact-item:hover {
        color: #f8e7c5;
    }


    .footer-contact-item small {
        display: block;

        margin-bottom: 2px;

        font-size: 10px;

        color: rgba(255,255,255,.48);

        letter-spacing: .4px;
    }


    .contact-icon {
        width: 32px;

        height: 32px;

        display: flex;

        align-items: center;

        justify-content: center;

        flex-shrink: 0;

        border-radius: 50%;

        background: rgba(255,255,255,.1);

        border: 1px solid rgba(255,255,255,.13);

        color: #f8e7c5;

        font-size: 9px;

        font-weight: 700;
    }


    /* ==================================================
       DIVIDER
    ================================================== */

    .footer-divider {
        height: 1px;

        margin: 45px 0 20px;

        background: rgba(255,255,255,.15);
    }


    /* ==================================================
       BOTTOM
    ================================================== */

    .footer-bottom {
        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 20px;
    }


    .footer-bottom p {
        margin: 0;

        font-size: 11px;

        color: rgba(255,255,255,.52);
    }


    /* ==================================================
       RESPONSIVE
    ================================================== */

    @media (max-width: 767px) {

        .visitor-footer {
            padding: 48px 0 22px;
        }

        .footer-description {
            max-width: 100%;
        }

        .footer-bottom {
            flex-direction: column;

            align-items: flex-start;

            gap: 6px;
        }

    }

</style>