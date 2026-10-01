@extends('layouts.visitor')

@section('title', 'Tentang Destinasi | Evara Beach')

@section('content')

<style>
    :root {
        --teal-deep: #034a47;
        --teal-dark: #075f5b;
        --teal: #087873;
        --teal-mid: #0d9189;
        --teal-light: #27b9ae;

        --cream: #f8f0df;
        --cream-light: #fffaf1;
        --cream-soft: #f3e7d4;

        --gold: #dca957;
        --gold-light: #f2cf86;
        --gold-dark: #a97732;

        --brown: #8a6038;

        --text: #315956;
        --muted: #6d7f7b;
        --white: #ffffff;
    }

    * {
        box-sizing: border-box;
    }

    body {
        overflow-x: hidden;
    }

    .destinasi-page {
        position: relative;
        overflow: hidden;
        background: var(--cream-light);
        color: var(--text);
    }

    /* =========================================================
       HERO
    ========================================================= */

    .destinasi-hero {
        position: relative;
        min-height: 430px;

        display: flex;
        align-items: center;
        justify-content: center;

        padding: 72px 25px 92px;

        overflow: hidden;
        text-align: center;

        /* GRADASI DIBUAT LEBIH NATURAL */
        background:
            radial-gradient(
                circle at 18% 35%,
                rgba(39,185,174,.20) 0%,
                rgba(39,185,174,.06) 24%,
                transparent 43%
            ),
            radial-gradient(
                circle at 83% 18%,
                rgba(242,207,134,.16) 0%,
                transparent 27%
            ),
            linear-gradient(
                135deg,
                #034541 0%,
                #05625e 38%,
                #087873 68%,
                #086c68 100%
            );
    }

    /*
     * TRANSISI BAWAH HERO
     * Dibuat pendek supaya tidak terlihat seperti kabut putih.
     */
    .destinasi-hero::after {
        content: "";

        position: absolute;

        left: 0;
        right: 0;
        bottom: 0;

        height: 42px;

        z-index: 2;

        background:
            linear-gradient(
                to bottom,
                rgba(248,240,223,0) 0%,
                rgba(248,240,223,.10) 45%,
                rgba(248,240,223,.42) 100%
            );

        pointer-events: none;
    }

    .destinasi-hero::before {
        content: "";

        position: absolute;

        width: 520px;
        height: 520px;

        left: 50%;
        top: 50%;

        transform: translate(-50%, -50%);

        border-radius: 50%;

        background:
            radial-gradient(
                circle,
                rgba(255,255,255,.055) 0%,
                rgba(255,255,255,.018) 42%,
                transparent 70%
            );

        pointer-events: none;
    }

    .hero-orbit {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
    }

    .hero-orbit.left {
        width: 330px;
        height: 330px;

        left: -210px;
        top: -180px;

        border: 1px solid rgba(255,255,255,.16);

        box-shadow:
            0 0 0 22px rgba(255,255,255,.025),
            0 0 0 48px rgba(255,255,255,.018);
    }

    .hero-orbit.right {
        width: 270px;
        height: 270px;

        right: -155px;
        bottom: -155px;

        border: 1px solid rgba(242,207,134,.18);

        box-shadow:
            0 0 0 20px rgba(242,207,134,.025);
    }

    .hero-small-orbit {
        position: absolute;

        width: 72px;
        height: 72px;

        right: 13%;
        top: 68px;

        border-radius: 50%;

        border: 1px solid rgba(242,207,134,.25);
    }

    .hero-small-orbit::after {
        content: "";

        position: absolute;

        width: 7px;
        height: 7px;

        right: -4px;
        bottom: 13px;

        border-radius: 50%;

        background: var(--gold-light);

        box-shadow:
            0 0 0 6px rgba(242,207,134,.09),
            0 0 18px rgba(242,207,134,.50);
    }

    .hero-dot {
        position: absolute;

        width: 6px;
        height: 6px;

        border-radius: 50%;

        background: var(--gold-light);

        box-shadow:
            0 0 0 6px rgba(242,207,134,.08),
            0 0 18px rgba(242,207,134,.35);
    }

    .hero-dot.one {
        left: 17%;
        top: 105px;
    }

    .hero-dot.two {
        right: 22%;
        bottom: 105px;

        width: 5px;
        height: 5px;

        background: rgba(255,255,255,.70);
    }

    .hero-dot.three {
        left: 26%;
        bottom: 90px;

        width: 5px;
        height: 5px;

        background: var(--teal-light);
    }

    .destinasi-hero-inner {
        position: relative;
        z-index: 5;

        width: 100%;
        max-width: 900px;

        margin-top: -8px;
    }

    .hero-eyebrow {
        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 10px;

        margin-bottom: 15px;

        color: var(--gold-light);

        font-size: 10px;

        font-weight: 900;

        letter-spacing: 3px;

        text-transform: uppercase;

        text-shadow:
            0 0 16px rgba(242,207,134,.18);
    }

    .hero-eyebrow::before,
    .hero-eyebrow::after {
        content: "";

        width: 30px;
        height: 1px;

        background:
            linear-gradient(
                90deg,
                transparent,
                rgba(242,207,134,.85)
            );
    }

    .hero-eyebrow::after {
        background:
            linear-gradient(
                90deg,
                rgba(242,207,134,.85),
                transparent
            );
    }

    .destinasi-hero h1 {
        margin: 0;

        color: #ffffff;

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(45px, 6vw, 68px);

        line-height: 1.05;

        font-weight: 600;

        letter-spacing: -1.5px;

        text-shadow:
            0 5px 25px rgba(0,35,33,.30);
    }

    .destinasi-hero h1 span {
        color: var(--gold-light);

        text-shadow:
            0 0 22px rgba(242,207,134,.15),
            0 4px 18px rgba(50,35,15,.18);
    }

    .hero-accent {
        position: relative;

        width: 100px;
        height: 3px;

        margin: 20px auto 0;

        border-radius: 50px;

        background:
            linear-gradient(
                90deg,
                transparent,
                var(--gold-light),
                transparent
            );

        box-shadow:
            0 0 18px rgba(242,207,134,.40);
    }

    .hero-description {
        max-width: 720px;

        margin: 20px auto 0;

        color: rgba(255,255,255,.88);

        font-size: 15.5px;

        line-height: 1.9;

        text-shadow:
            0 2px 13px rgba(0,40,38,.20);
    }

    /* =========================================================
       PEMISAH HERO
    ========================================================= */

    .hero-transition {
        position: relative;

        height: 28px;

        margin-top: -28px;

        z-index: 10;

        pointer-events: none;

        /*
         * Tidak lagi membuat fade panjang.
         * Hanya menyambungkan hero ke background cream.
         */
        background:
            linear-gradient(
                to bottom,
                transparent 0%,
                rgba(248,240,223,.35) 55%,
                #f8f0df 100%
            );
    }

    .hero-transition-line {
        position: absolute;

        left: 50%;
        top: 14px;

        transform: translateX(-50%);

        width: 70px;
        height: 2px;

        border-radius: 50px;

        background:
            linear-gradient(
                90deg,
                transparent,
                var(--gold),
                transparent
            );

        box-shadow:
            0 0 14px rgba(220,169,87,.25);
    }

    /* =========================================================
       PROFIL
    ========================================================= */

    .profil-section {
        position: relative;

        padding: 85px 30px 105px;

        background:
            radial-gradient(
                circle at 0% 25%,
                rgba(8,120,115,.12),
                transparent 30%
            ),
            radial-gradient(
                circle at 100% 80%,
                rgba(220,169,87,.15),
                transparent 30%
            ),
            linear-gradient(
                135deg,
                #f8f0df 0%,
                #fffaf1 48%,
                #edf5f0 100%
            );
    }

    .profil-section::before {
        content: "";

        position: absolute;

        width: 260px;
        height: 260px;

        left: -145px;
        bottom: -130px;

        border-radius: 50%;

        border: 1px solid rgba(8,120,115,.12);

        box-shadow:
            0 0 0 20px rgba(8,120,115,.025),
            0 0 0 45px rgba(8,120,115,.015);
    }

    .profil-container {
        max-width: 1120px;
        margin: 0 auto;
    }

    .section-heading {
        max-width: 760px;

        margin: 0 auto 52px;

        text-align: center;
    }

    .section-label {
        display: inline-flex;

        align-items: center;

        gap: 9px;

        margin-bottom: 12px;

        color: var(--teal);

        font-size: 10px;

        font-weight: 900;

        letter-spacing: 2.5px;

        text-transform: uppercase;
    }

    .section-label::before {
        content: "";

        width: 20px;
        height: 2px;

        border-radius: 20px;

        background: var(--gold);
    }

    .section-title {
        margin: 0;

        color: var(--teal-dark);

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(34px, 4vw, 48px);

        line-height: 1.15;

        font-weight: 600;
    }

    .section-heading p {
        max-width: 700px;

        margin: 17px auto 0;

        color: var(--muted);

        font-size: 15px;

        line-height: 1.9;
    }

    .profil-grid {
        display: grid;

        grid-template-columns: 1.03fr .97fr;

        gap: 65px;

        align-items: center;
    }

    .profil-image {
        position: relative;

        padding: 0 17px 17px 0;
    }

    .profil-image::before {
        content: "";

        position: absolute;

        left: -12px;
        top: -12px;

        width: 65px;
        height: 65px;

        border-radius: 15px;

        background:
            linear-gradient(
                135deg,
                var(--teal),
                var(--teal-light)
            );

        z-index: 0;

        box-shadow:
            0 12px 25px rgba(8,120,115,.18);
    }

    .profil-image::after {
        content: "";

        position: absolute;

        right: 0;
        bottom: 0;

        width: 82%;
        height: 88%;

        border: 2px solid var(--gold);

        z-index: 0;
    }

    .profil-image img {
        position: relative;

        z-index: 2;

        display: block;

        width: 100%;
        height: 420px;

        object-fit: cover;

        border-radius: 3px;

        box-shadow:
            0 20px 42px rgba(4,86,83,.16);
    }

    .profil-text {
        padding-left: 28px;

        border-left: 3px solid var(--teal);
    }

    .profil-text p {
        margin: 0 0 19px;

        color: var(--text);

        font-size: 15px;

        line-height: 1.95;
    }

    .profil-note {
        position: relative;

        margin-top: 25px;

        padding: 21px 23px;

        overflow: hidden;

        border: 1px solid rgba(8,120,115,.12);

        border-radius: 4px;

        background:
            linear-gradient(
                120deg,
                #dff0eb 0%,
                #f7ead5 100%
            );

        box-shadow:
            0 10px 25px rgba(8,120,115,.06);
    }

    .profil-note::after {
        content: "";

        position: absolute;

        width: 95px;
        height: 95px;

        right: -45px;
        top: -45px;

        border-radius: 50%;

        border: 1px solid rgba(8,120,115,.14);
    }

    .profil-note strong {
        display: block;

        margin-bottom: 7px;

        color: var(--teal-dark);

        font-size: 14px;
    }

    .profil-note span {
        color: var(--muted);

        font-size: 14px;

        line-height: 1.8;
    }

    /* =========================================================
       BAGIAN KAWASAN
    ========================================================= */

    .karakter-section {
        position: relative;

        padding: 100px 30px 110px;

        overflow: hidden;

        background:
            radial-gradient(
                circle at 10% 10%,
                rgba(8,120,115,.10),
                transparent 25%
            ),
            radial-gradient(
                circle at 90% 85%,
                rgba(220,169,87,.16),
                transparent 30%
            ),
            linear-gradient(
                135deg,
                #f1e4cf 0%,
                #fffaf1 38%,
                #e6f1ec 72%,
                #d6e9e1 100%
            );
    }

    .karakter-section::before {
        content: "";

        position: absolute;

        width: 430px;
        height: 430px;

        left: -245px;
        bottom: -275px;

        border-radius: 50%;

        border: 1px solid rgba(8,120,115,.12);

        box-shadow:
            0 0 0 25px rgba(8,120,115,.025),
            0 0 0 55px rgba(8,120,115,.015);
    }

    .karakter-section::after {
        content: "";

        position: absolute;

        width: 300px;
        height: 300px;

        right: -170px;
        top: -175px;

        border-radius: 50%;

        border: 1px solid rgba(139,96,56,.11);
    }

    .karakter-container {
        position: relative;

        z-index: 2;

        max-width: 1050px;

        margin: 0 auto;
    }

    .karakter-heading {
        max-width: 760px;

        margin: 0 auto 52px;

        text-align: center;
    }

    .karakter-heading p {
        max-width: 700px;

        margin: 17px auto 0;

        color: var(--muted);

        font-size: 15px;

        line-height: 1.9;
    }

    /* =========================================================
       ACCORDION
    ========================================================= */

    .karakter-accordion {
        border-top: 1px solid rgba(8,120,115,.17);

        box-shadow:
            0 18px 45px rgba(8,120,115,.07);
    }

    .karakter-accordion .accordion-item {
        border: 0;

        border-bottom: 1px solid rgba(8,120,115,.14);

        background:
            linear-gradient(
                90deg,
                rgba(255,255,255,.95),
                rgba(244,249,246,.94)
            );
    }

    .karakter-accordion .accordion-button {
        display: grid;

        grid-template-columns: 70px 1fr 45px;

        align-items: center;

        width: 100%;

        padding: 25px 17px;

        background: transparent;

        color: var(--teal-dark);

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
        color: var(--gold-dark);

        font-family: "Playfair Display", Georgia, serif;

        font-size: 22px;

        font-weight: 600;
    }

    .karakter-name {
        color: var(--teal-dark);

        font-size: 17px;

        font-weight: 700;
    }

    .karakter-icon {
        display: flex;

        align-items: center;
        justify-content: center;

        width: 34px;
        height: 34px;

        border: 1px solid rgba(8,120,115,.27);

        border-radius: 50%;

        color: var(--teal);

        font-size: 16px;

        transition: .25s ease;
    }

    .karakter-accordion
    .accordion-button:not(.collapsed)
    .karakter-icon {
        transform: rotate(45deg);

        background: var(--teal);

        color: #ffffff;

        border-color: var(--teal);

        box-shadow:
            0 5px 15px rgba(8,120,115,.20);
    }

    .karakter-accordion
    .accordion-button:not(.collapsed)
    .karakter-name {
        color: var(--teal);
    }

    .karakter-description {
        padding: 0 70px 27px 87px;
    }

    .karakter-description-inner {
        padding: 21px 24px;

        border-left: 3px solid var(--gold);

        border-radius: 3px;

        background:
            linear-gradient(
                120deg,
                #e0efea,
                #fff7e9
            );
    }

    .karakter-description-inner p {
        margin: 0;

        color: var(--muted);

        font-size: 15px;

        line-height: 1.9;
    }

    /* =========================================================
       DAYA TARIK
    ========================================================= */

    .daya-tarik-section {
        position: relative;

        padding: 100px 30px 110px;

        background:
            radial-gradient(
                circle at 90% 20%,
                rgba(8,120,115,.13),
                transparent 28%
            ),
            radial-gradient(
                circle at 8% 85%,
                rgba(220,169,87,.15),
                transparent 28%
            ),
            linear-gradient(
                135deg,
                #fffaf1 0%,
                #f5ead8 55%,
                #eaf2ed 100%
            );
    }

    .daya-tarik-container {
        max-width: 1120px;

        margin: 0 auto;
    }

    .daya-tarik-grid {
        display: grid;

        grid-template-columns: .86fr 1.14fr;

        gap: 65px;

        align-items: center;
    }

    .daya-tarik-content {
        padding-left: 27px;

        border-left: 4px solid var(--teal);
    }

    .daya-tarik-content h2 {
        margin: 0 0 18px;

        color: var(--teal-dark);

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(35px, 4vw, 50px);

        line-height: 1.13;

        font-weight: 600;
    }

    .daya-tarik-content p {
        margin: 0;

        color: var(--muted);

        font-size: 15px;

        line-height: 1.95;
    }

    .daya-tarik-images {
        display: grid;

        grid-template-columns: 1fr 1fr;

        gap: 18px;
    }

    .image-frame {
        position: relative;

        overflow: hidden;
    }

    .image-frame:first-child {
        margin-top: 28px;
    }

    .image-frame::before {
        content: "";

        position: absolute;

        inset: 0;

        z-index: 2;

        background:
            linear-gradient(
                180deg,
                transparent 55%,
                rgba(2,62,59,.28)
            );

        pointer-events: none;
    }

    .image-frame::after {
        content: "";

        position: absolute;

        width: 42px;
        height: 42px;

        right: 14px;
        top: 14px;

        border-top: 2px solid rgba(255,255,255,.68);
        border-right: 2px solid rgba(255,255,255,.68);

        z-index: 3;
    }

    .image-frame img {
        display: block;

        width: 100%;
        height: 315px;

        object-fit: cover;

        transition: transform .5s ease;
    }

    .image-frame:hover img {
        transform: scale(1.045);
    }

    /* =========================================================
       CLOSING
    ========================================================= */

    .destinasi-closing {
        position: relative;

        padding: 85px 30px 95px;

        overflow: hidden;

        text-align: center;

        background:
            radial-gradient(
                circle at 50% 0%,
                rgba(8,120,115,.13),
                transparent 38%
            ),
            radial-gradient(
                circle at 15% 100%,
                rgba(220,169,87,.18),
                transparent 33%
            ),
            linear-gradient(
                135deg,
                #f7ecd9 0%,
                #fffaf1 42%,
                #edf4ef 75%,
                #dcebe5 100%
            );

        border-top: 1px solid rgba(8,120,115,.10);
    }

    .closing-orbit {
        position: absolute;

        width: 390px;
        height: 390px;

        left: 50%;
        top: 50%;

        transform: translate(-50%, -50%);

        border-radius: 50%;

        border: 1px solid rgba(8,120,115,.10);

        box-shadow:
            0 0 0 30px rgba(8,120,115,.018),
            0 0 0 65px rgba(220,169,87,.018);
    }

    .closing-orbit::after {
        content: "";

        position: absolute;

        width: 8px;
        height: 8px;

        right: 30px;
        top: 55px;

        border-radius: 50%;

        background: var(--gold);

        box-shadow:
            0 0 0 6px rgba(220,169,87,.10),
            0 0 20px rgba(220,169,87,.35);
    }

    .closing-inner {
        position: relative;

        z-index: 3;

        max-width: 680px;

        margin: 0 auto;
    }

    .closing-line {
        width: 72px;
        height: 3px;

        margin: 0 auto 22px;

        border-radius: 50px;

        background:
            linear-gradient(
                90deg,
                transparent,
                var(--teal),
                var(--gold),
                transparent
            );
    }

    .closing-inner h2 {
        margin: 0 0 14px;

        color: var(--teal-dark);

        font-family: "Playfair Display", Georgia, serif;

        font-size: clamp(35px, 4vw, 49px);

        line-height: 1.15;

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

        .profil-grid {
            grid-template-columns: 1fr;
            gap: 50px;
        }

        .profil-image {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
        }

        .profil-text {
            max-width: 800px;
            margin: 0 auto;
        }

        .daya-tarik-grid {
            grid-template-columns: 1fr;
            gap: 50px;
        }

        .daya-tarik-content {
            max-width: 800px;
        }

        .daya-tarik-images {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
        }
    }

    @media (max-width: 767px) {

        .destinasi-hero {
            min-height: 420px;
            padding: 70px 20px 85px;
        }

        .destinasi-hero h1 {
            font-size: 43px;
        }

        .hero-description {
            font-size: 14px;
        }

        .hero-small-orbit {
            display: none;
        }

        .hero-orbit.left {
            width: 250px;
            height: 250px;

            left: -140px;
            top: -125px;
        }

        .hero-orbit.right {
            width: 220px;
            height: 220px;

            right: -130px;
            bottom: -125px;
        }

        .hero-dot.one {
            left: 10%;
            top: 90px;
        }

        .hero-dot.two {
            right: 11%;
            bottom: 85px;
        }

        .hero-dot.three {
            left: 18%;
            bottom: 70px;
        }

        .profil-section,
        .karakter-section,
        .daya-tarik-section {
            padding: 78px 20px 88px;
        }

        .destinasi-closing {
            padding: 75px 20px 85px;
        }

        .profil-image img {
            height: 320px;
        }

        .profil-image::before {
            width: 52px;
            height: 52px;

            left: -7px;
            top: -7px;
        }

        .profil-text {
            padding-left: 20px;
        }

        .profil-text p {
            font-size: 14.5px;
        }

        .section-heading p,
        .karakter-heading p {
            font-size: 14px;
        }

        .karakter-accordion .accordion-button {
            grid-template-columns: 52px 1fr 38px;
            padding: 22px 8px;
        }

        .karakter-number {
            font-size: 19px;
        }

        .karakter-name {
            font-size: 15px;
        }

        .karakter-description {
            padding: 0 12px 23px 60px;
        }

        .karakter-description-inner {
            padding: 17px 18px;
        }

        .karakter-description-inner p {
            font-size: 14px;
        }

        .daya-tarik-content {
            padding-left: 20px;
        }

        .daya-tarik-content p {
            font-size: 14.5px;
        }

        .daya-tarik-images {
            gap: 12px;
        }

        .image-frame img {
            height: 245px;
        }

        .closing-orbit {
            width: 300px;
            height: 300px;
        }

        .closing-inner p {
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {

        .destinasi-hero {
            min-height: 400px;
            padding-top: 65px;
        }

        .destinasi-hero h1 {
            font-size: 38px;
        }

        .hero-eyebrow {
            font-size: 9px;
            letter-spacing: 2px;
        }

        .hero-eyebrow::before,
        .hero-eyebrow::after {
            width: 18px;
        }

        .profil-image img {
            height: 285px;
        }

        .daya-tarik-images {
            grid-template-columns: 1fr;
        }

        .image-frame:first-child {
            margin-top: 0;
        }

        .image-frame img {
            height: 270px;
        }

        .closing-orbit {
            width: 270px;
            height: 270px;
        }
    }
</style>


<div class="destinasi-page">

    {{-- =====================================================
         HERO TENTANG DESTINASI
    ====================================================== --}}

    <section class="destinasi-hero">

        <span class="hero-orbit left"></span>
        <span class="hero-orbit right"></span>

        <span class="hero-small-orbit"></span>

        <span class="hero-dot one"></span>
        <span class="hero-dot two"></span>
        <span class="hero-dot three"></span>

        <div class="destinasi-hero-inner">

            <div class="hero-eyebrow">
                Tentang Destinasi
            </div>

            <h1>
                Mengenal
                <span>Evara Beach</span>
            </h1>

            <div class="hero-accent"></div>

            <p class="hero-description">
                Evara Beach merupakan destinasi wisata pesisir
                yang menghadirkan perpaduan antara garis pantai,
                lingkungan alami, dan area wisata dalam satu kawasan.
            </p>

        </div>

    </section>


    {{-- PEMISAH HERO KE SECTION --}}
    <div class="hero-transition">
        <span class="hero-transition-line"></span>
    </div>


    {{-- =====================================================
         PROFIL DESTINASI
    ====================================================== --}}

    <section class="profil-section">

        <div class="profil-container">

            <div class="section-heading">

                <div class="section-label">
                    Profil Destinasi
                </div>

                <h2 class="section-title">
                    Ruang pesisir yang
                    menjadi identitas Evara Beach.
                </h2>

                <p>
                    Evara Beach dibangun sebagai kawasan wisata
                    yang memanfaatkan keindahan pantai dan
                    lingkungan di sekitarnya sebagai bagian utama
                    dari pengalaman pengunjung.
                </p>

            </div>


            <div class="profil-grid">

                <div class="profil-image">

                    <img
                        src="{{ asset('img/foto pantai.jpeg') }}"
                        alt="Pemandangan Evara Beach"
                    >

                </div>


                <div class="profil-text">

                    <p>
                        Evara Beach merupakan destinasi wisata yang
                        berada dalam lingkungan pesisir dengan pantai
                        sebagai salah satu bagian utama kawasan.
                    </p>

                    <p>
                        Keberadaan garis pantai, laut, serta area di
                        sekitarnya membentuk suasana yang menjadi
                        ciri visual dari destinasi ini.
                    </p>

                    <p>
                        Kawasan tersebut kemudian dilengkapi dengan
                        berbagai area yang mendukung kegiatan
                        pengunjung selama berada di Evara Beach.
                    </p>


                    <div class="profil-note">

                        <strong>
                            Sekilas Evara Beach
                        </strong>

                        <span>
                            Pantai menjadi pusat kawasan, sementara
                            area di sekitarnya melengkapi fungsi
                            wisata dan memberikan ruang bagi
                            pengunjung untuk menikmati destinasi.
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         BAGIAN KAWASAN
    ====================================================== --}}

    <section class="karakter-section">

        <div class="karakter-container">

            <div class="karakter-heading">

                <div class="section-label">
                    Bagian Kawasan
                </div>

                <h2 class="section-title">
                    Mengenal sisi berbeda Evara Beach
                </h2>

                <p>
                    Setiap bagian memiliki fungsi dan suasana
                    yang berbeda dalam membentuk kawasan wisata
                    Evara Beach.
                </p>

            </div>


            <div
                class="accordion karakter-accordion"
                id="karakterAccordion"
            >

                {{-- 01 --}}

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
                                Garis Pantai
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
                                    Garis pantai menjadi bagian yang
                                    paling mudah dikenali dari Evara
                                    Beach. Hamparan pasir dan laut
                                    memberikan tampilan utama kawasan
                                    sekaligus menjadi ruang yang
                                    memperlihatkan hubungan langsung
                                    antara destinasi dan lingkungan
                                    pesisirnya.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- 02 --}}

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
                                    Area di sekitar pantai memberikan
                                    suasana alami yang melengkapi
                                    kawasan. Pepohonan, garis laut,
                                    serta elemen pesisir lainnya
                                    menciptakan tampilan yang membuat
                                    Evara Beach tetap terasa dekat
                                    dengan lingkungan alamnya.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- 03 --}}

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
                                Area Rekreasi
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
                                    Selain area pantai, Evara Beach
                                    memiliki ruang yang dapat digunakan
                                    pengunjung untuk duduk, bersantai,
                                    menikmati pemandangan, serta
                                    menghabiskan waktu bersama selama
                                    berada di kawasan wisata.
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
                        Pemandangan pesisir
                        yang menjadi daya tarik utama.
                    </h2>

                    <p>
                        Daya tarik Evara Beach terlihat dari perpaduan
                        antara laut, hamparan pasir, pepohonan, dan
                        ruang di sekitar pantai. Kombinasi tersebut
                        memberikan tampilan khas yang menjadi bagian
                        dari pengalaman berada di kawasan ini.
                    </p>

                </div>


                <div class="daya-tarik-images">

                    <div class="image-frame">

                        <img
                            src="{{ asset('img/pantai21.png') }}"
                            alt="Pemandangan pantai Evara Beach"
                        >

                    </div>

                    <div class="image-frame">

                        <img
                            src="{{ asset('img/foto20.png') }}"
                            alt="Suasana kawasan Evara Beach"
                        >

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         CLOSING
    ====================================================== --}}

    <section class="destinasi-closing">

        <span class="closing-orbit"></span>

        <div class="closing-inner">

            <div class="closing-line"></div>

            <h2>
                Evara Beach
            </h2>

            <p>
                Destinasi pesisir yang memadukan keindahan pantai,
                lingkungan alami, dan ruang rekreasi dalam satu
                kawasan wisata.
            </p>

        </div>

    </section>


</div>

@endsection