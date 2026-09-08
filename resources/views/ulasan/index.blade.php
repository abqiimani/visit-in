@extends('layouts.visitor')

@section('title', 'Ulasan Pengunjung | VISIT-IN')

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

    .review-page {
        background: var(--cream);
        color: var(--text);
        overflow: hidden;
    }

    .review-page .container {
        max-width: 1160px;
    }

    /* =========================
       HEADER
    ========================= */

    .review-header {
        padding: 82px 0 75px;
        background: var(--cream);
    }

    .review-header-content {
        max-width: 730px;
    }

    .eyebrow {
        display: flex;
        align-items: center;
        gap: 13px;
        margin-bottom: 23px;
        color: var(--toska);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 2.5px;
        text-transform: uppercase;
    }

    .eyebrow::before {
        content: "";
        width: 35px;
        height: 2px;
        background: var(--sand);
    }

    .review-title {
        margin: 0;
        color: var(--toska-dark);
        font-size: clamp(40px, 4.7vw, 62px);
        font-weight: 800;
        line-height: 1.08;
        letter-spacing: -1.8px;
    }

    .review-title span {
        color: var(--brown);
    }

    .review-description {
        max-width: 600px;
        margin: 28px 0 0;
        color: var(--muted);
        font-size: 15px;
        line-height: 1.95;
    }

    /* =========================
       CONTENT
    ========================= */

    .review-content {
        padding: 0 0 105px;
        background: var(--cream);
    }

    .review-layout {
        display: grid;
        grid-template-columns: minmax(0, .8fr) minmax(0, 1.2fr);
        gap: 85px;
        align-items: start;
    }

    /* =========================
       FORM
    ========================= */

    .review-form-wrapper {
        position: sticky;
        top: 30px;
        padding: 32px;
        background: var(--white);
        border-top: 3px solid var(--toska);
        box-shadow: 0 15px 40px rgba(55, 77, 70, .06);
    }

    .form-label-small {
        display: block;
        margin-bottom: 10px;
        color: var(--toska);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1.5px;
        text-transform: uppercase;
    }

    .form-title {
        margin: 0;
        color: var(--toska-dark);
        font-size: 28px;
        font-weight: 800;
        line-height: 1.25;
    }

    .form-description {
        margin: 15px 0 28px;
        color: var(--muted);
        font-size: 14px;
        line-height: 1.85;
    }

    .review-form .form-control,
    .review-form .form-select {
        min-height: 49px;
        padding: 12px 15px;
        border: 1px solid var(--line);
        border-radius: 2px;
        color: var(--text);
        background: var(--cream);
        font-size: 14px;
        box-shadow: none;
    }

    .review-form textarea.form-control {
        min-height: 125px;
        resize: vertical;
    }

    .review-form .form-control:focus,
    .review-form .form-select:focus {
        border-color: var(--toska);
        background: var(--white);
        box-shadow: 0 0 0 3px rgba(8, 120, 115, .08);
    }

    .review-form .form-control::placeholder {
        color: #a1aaa5;
    }

    .rating-title {
        display: block;
        margin-bottom: 10px;
        color: var(--toska);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1.5px;
        text-transform: uppercase;
    }

    .rating-options {
        display: flex;
        gap: 8px;
        margin-bottom: 20px;
    }

    .rating-options input {
        display: none;
    }

    .rating-options label {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 39px;
        height: 39px;
        border: 1px solid var(--line);
        color: var(--brown);
        background: var(--cream);
        font-size: 14px;
        cursor: pointer;
        transition: .2s ease;
    }

    .rating-options label:hover {
        border-color: var(--sand);
        background: var(--cream-soft);
    }

    .rating-options input:checked + label {
        border-color: var(--toska);
        color: var(--white);
        background: var(--toska);
    }

    .submit-review {
        width: 100%;
        min-height: 49px;
        margin-top: 8px;
        border: none;
        border-radius: 2px;
        color: var(--white);
        background: var(--toska);
        font-size: 13px;
        font-weight: 800;
        letter-spacing: .5px;
        transition: .2s ease;
    }

    .submit-review:hover {
        background: var(--toska-dark);
    }

    /* =========================
       REVIEW LIST
    ========================= */

    .review-list-wrapper {
        min-width: 0;
    }

    .review-list-header {
        display: flex;
        align-items: end;
        justify-content: space-between;
        gap: 25px;
        margin-bottom: 30px;
        padding-bottom: 22px;
        border-bottom: 1px solid var(--line);
    }

    .section-label {
        margin-bottom: 13px;
        color: var(--toska);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 2.5px;
        text-transform: uppercase;
    }

    .section-title {
        margin: 0;
        color: var(--toska-dark);
        font-size: 35px;
        font-weight: 800;
        line-height: 1.2;
        letter-spacing: -.8px;
    }

    .review-count {
        color: var(--brown);
        font-size: 13px;
        white-space: nowrap;
    }

    .review-item {
        padding: 28px 0;
        border-bottom: 1px solid var(--line);
    }

    .review-item:first-child {
        padding-top: 0;
    }

    .review-top {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 25px;
        margin-bottom: 15px;
    }

    .reviewer-info {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .reviewer-avatar {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 47px;
        height: 47px;
        border-radius: 50%;
        color: var(--white);
        background: var(--toska);
        font-size: 17px;
        font-weight: 800;
    }

    .reviewer-name {
        margin: 0;
        color: var(--toska-dark);
        font-size: 16px;
        font-weight: 800;
    }

    .reviewer-date {
        margin-top: 4px;
        color: var(--muted);
        font-size: 12px;
    }

    .review-stars {
        color: var(--sand);
        font-size: 14px;
        letter-spacing: 2px;
        white-space: nowrap;
    }

    .review-text {
        max-width: 650px;
        margin: 0;
        color: var(--muted);
        font-size: 14px;
        line-height: 1.9;
    }

    .empty-review {
        padding: 45px 25px;
        border: 1px dashed var(--line);
        text-align: center;
        background: var(--white);
    }

    .empty-review h3 {
        margin: 0 0 10px;
        color: var(--toska-dark);
        font-size: 21px;
    }

    .empty-review p {
        margin: 0;
        color: var(--muted);
        font-size: 14px;
        line-height: 1.8;
    }

    /* =========================
       CLOSING
    ========================= */

    .review-closing {
        padding: 85px 20px;
        background: var(--toska-dark);
        text-align: center;
    }

    .review-closing-inner {
        max-width: 650px;
        margin: 0 auto;
    }

    .review-closing-label {
        margin-bottom: 18px;
        color: var(--sand);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 2.5px;
        text-transform: uppercase;
    }

    .review-closing h2 {
        margin: 0 0 20px;
        color: var(--white);
        font-size: clamp(30px, 3.7vw, 46px);
        font-weight: 800;
        line-height: 1.2;
        letter-spacing: -.8px;
    }

    .review-closing h2 span {
        color: var(--sand);
    }

    .review-closing p {
        margin: 0;
        color: rgba(255, 255, 255, .68);
        font-size: 15px;
        line-height: 1.9;
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 991px) {
        .review-header {
            padding: 65px 0 55px;
        }

        .review-content {
            padding-bottom: 75px;
        }

        .review-layout {
            grid-template-columns: 1fr;
            gap: 65px;
        }

        .review-form-wrapper {
            position: static;
            max-width: 650px;
        }

        .review-list-wrapper {
            max-width: 800px;
        }
    }

    @media (max-width: 767px) {
        .review-title {
            font-size: 43px;
        }

        .review-form-wrapper {
            padding: 25px;
        }

        .review-list-header {
            display: block;
        }

        .review-count {
            display: block;
            margin-top: 12px;
        }

        .section-title {
            font-size: 31px;
        }

        .review-top {
            display: block;
        }

        .review-stars {
            display: block;
            margin-top: 12px;
        }
    }

    @media (max-width: 480px) {
        .review-header {
            padding: 48px 0 50px;
        }

        .review-title {
            font-size: 38px;
        }

        .review-description,
        .review-text,
        .review-closing p {
            font-size: 14px;
        }

        .review-closing {
            padding: 70px 20px;
        }
    }
</style>

<div class="review-page">

    {{-- HEADER --}}
    <section class="review-header">
        <div class="container">
            <div class="review-header-content">

                <div class="eyebrow">
                    Ulasan Pengunjung
                </div>

                <h1 class="review-title">
                    Cerita dari
                    <span>pengunjung Evara Beach</span>
                </h1>

                <p class="review-description">
                    Baca pengalaman pengunjung setelah menikmati suasana,
                    pemandangan, dan momen berkesan di Evara Beach.
                </p>

            </div>
        </div>
    </section>

    {{-- CONTENT --}}
    <section class="review-content">
        <div class="container">

            <div class="review-layout">

                {{-- FORM ULASAN --}}
                <div class="review-form-wrapper">

                    <span class="form-label-small">
                        Bagikan Pengalaman
                    </span>

                    <h2 class="form-title">
                        Ceritakan kunjunganmu
                    </h2>

                    <p class="form-description">
                        Bagikan kesan singkat setelah berkunjung
                        ke Evara Beach.
                    </p>

                    <form
                        action="#"
                        method="POST"
                        class="review-form"
                    >
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label-small">
                                Nama Pengunjung
                            </label>

                            <input
                                type="text"
                                id="nama"
                                name="nama"
                                class="form-control"
                                placeholder="Masukkan nama kamu"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label-small">
                                Email
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control"
                                placeholder="Masukkan email kamu"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <span class="rating-title">
                                Penilaian
                            </span>

                            <div class="rating-options">

                                <input
                                    type="radio"
                                    id="rating1"
                                    name="rating"
                                    value="1"
                                    required
                                >
                                <label for="rating1">1</label>

                                <input
                                    type="radio"
                                    id="rating2"
                                    name="rating"
                                    value="2"
                                >
                                <label for="rating2">2</label>

                                <input
                                    type="radio"
                                    id="rating3"
                                    name="rating"
                                    value="3"
                                >
                                <label for="rating3">3</label>

                                <input
                                    type="radio"
                                    id="rating4"
                                    name="rating"
                                    value="4"
                                >
                                <label for="rating4">4</label>

                                <input
                                    type="radio"
                                    id="rating5"
                                    name="rating"
                                    value="5"
                                >
                                <label for="rating5">5</label>

                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="ulasan" class="form-label-small">
                                Ulasan
                            </label>

                            <textarea
                                id="ulasan"
                                name="ulasan"
                                class="form-control"
                                placeholder="Ceritakan pengalaman kamu..."
                                required
                            ></textarea>
                        </div>

                        <button
                            type="submit"
                            class="submit-review"
                        >
                            KIRIM ULASAN
                        </button>

                    </form>

                </div>

                {{-- DAFTAR ULASAN --}}
                <div class="review-list-wrapper">

                    <div class="review-list-header">
                        <div>
                            <div class="section-label">
                                Pengalaman Mereka
                            </div>

                            <h2 class="section-title">
                                Ulasan Pengunjung
                            </h2>
                        </div>

                        <div class="review-count">
                            Cerita dari para pengunjung
                        </div>
                    </div>

                    {{-- Contoh ulasan sementara --}}
                    <article class="review-item">

                        <div class="review-top">

                            <div class="reviewer-info">
                                <div class="reviewer-avatar">
                                    A
                                </div>

                                <div>
                                    <h3 class="reviewer-name">
                                        Andi
                                    </h3>

                                    <div class="reviewer-date">
                                        Pengunjung Evara Beach
                                    </div>
                                </div>
                            </div>

                            <div class="review-stars">
                                ★★★★★
                            </div>

                        </div>

                        <p class="review-text">
                            Tempatnya nyaman untuk menikmati suasana pantai
                            dan menghabiskan waktu bersama keluarga.
                        </p>

                    </article>

                    <article class="review-item">

                        <div class="review-top">

                            <div class="reviewer-info">
                                <div class="reviewer-avatar">
                                    S
                                </div>

                                <div>
                                    <h3 class="reviewer-name">
                                        Sinta
                                    </h3>

                                    <div class="reviewer-date">
                                        Pengunjung Evara Beach
                                    </div>
                                </div>
                            </div>

                            <div class="review-stars">
                                ★★★★☆
                            </div>

                        </div>

                        <p class="review-text">
                            Pemandangannya bagus dan suasananya cukup tenang.
                            Cocok untuk bersantai dan mengambil foto.
                        </p>

                    </article>

                    <article class="review-item">

                        <div class="review-top">

                            <div class="reviewer-info">
                                <div class="reviewer-avatar">
                                    R
                                </div>

                                <div>
                                    <h3 class="reviewer-name">
                                        Raka
                                    </h3>

                                    <div class="reviewer-date">
                                        Pengunjung Evara Beach
                                    </div>
                                </div>
                            </div>

                            <div class="review-stars">
                                ★★★★★
                            </div>

                        </div>

                        <p class="review-text">
                            Pengalaman berkunjung yang menyenangkan.
                            Suasana pantainya membuat perjalanan terasa
                            lebih berkesan.
                        </p>

                    </article>

                </div>

            </div>

        </div>
    </section>

    {{-- PENUTUP --}}
    <section class="review-closing">
        <div class="container">
            <div class="review-closing-inner">

                <div class="review-closing-label">
                    Evara Beach
                </div>

                <h2>
                    Pengalamanmu juga
                    <span>berarti</span>
                </h2>

                <p>
                    Bagikan cerita kunjunganmu dan bantu pengunjung
                    lain mengenal Evara Beach lebih dekat.
                </p>

            </div>
        </div>
    </section>

</div>

@endsection