@extends('layouts.visitor')

@section('title', 'Ulasan Pengunjung | VISIT-IN')

@section('content')

<style>

    :root {
        --toska: #087873;
        --toska-dark: #075b58;
        --toska-deep: #064c49;

        --cream: #fbf8f1;
        --cream-soft: #f3e8d5;
        --cream-light: #fffdf8;

        --sand: #d4aa6b;
        --brown: #987047;

        --text: #405954;
        --muted: #78847f;

        --white: #ffffff;

        --line: rgba(117, 91, 57, .18);
        --shadow: 0 14px 35px rgba(55, 77, 70, .07);
    }


    /* =========================================================
       PAGE
    ========================================================= */

    .review-page {
        background: var(--cream);
        color: var(--text);
        overflow: hidden;
        min-height: 100vh;
    }

    .review-page .container {
        width: 100%;
        max-width: 1160px;
        margin: 0 auto;
    }


    /* =========================================================
       HEADER
    ========================================================= */

    .review-header {
        padding: 78px 20px 70px;
        background: var(--cream);
    }

    .review-header-content {
        max-width: 760px;
    }

    .eyebrow {
        display: flex;
        align-items: center;
        gap: 13px;

        margin-bottom: 22px;

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

        flex: 0 0 35px;

        background: var(--sand);
    }

    .review-title {
        margin: 0;

        color: var(--toska-dark);

        font-size: clamp(40px, 5vw, 62px);
        font-weight: 800;

        line-height: 1.08;
        letter-spacing: -1.8px;
    }

    .review-title span {
        color: var(--brown);
    }

    .review-description {
        max-width: 640px;

        margin: 25px 0 0;

        color: var(--muted);

        font-size: 15px;
        line-height: 1.9;
    }


    /* =========================================================
       CONTENT
    ========================================================= */

    .review-content {
        padding: 0 20px 100px;
        background: var(--cream);
    }

    .review-layout {
        display: grid;

        grid-template-columns:
            minmax(300px, .82fr)
            minmax(0, 1.18fr);

        gap: 70px;

        align-items: start;
    }


    /* =========================================================
       FORM
    ========================================================= */

    .review-form-wrapper {
        width: 100%;

        padding: 32px;

        background: var(--white);

        border-top: 3px solid var(--toska);

        box-shadow: var(--shadow);
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
        margin: 14px 0 27px;

        color: var(--muted);

        font-size: 14px;
        line-height: 1.8;
    }

    .review-form .form-control,
    .review-form .form-select {
        width: 100%;

        min-height: 49px;

        padding: 12px 15px;

        border: 1px solid var(--line);
        border-radius: 3px;

        color: var(--text);
        background: var(--cream-light);

        font-size: 14px;

        box-shadow: none;

        transition:
            border-color .2s ease,
            background .2s ease,
            box-shadow .2s ease;
    }

    .review-form textarea.form-control {
        min-height: 135px;

        resize: vertical;
    }

    .review-form .form-control:focus,
    .review-form .form-select:focus {
        border-color: var(--toska);

        background: var(--white);

        box-shadow:
            0 0 0 3px rgba(8, 120, 115, .08);

        outline: none;
    }

    .review-form .form-control::placeholder {
        color: #a1aaa5;
    }


    /* =========================================================
       RATING
    ========================================================= */

    .rating-title {
        display: block;

        margin-bottom: 11px;

        color: var(--toska);

        font-size: 11px;
        font-weight: 800;

        letter-spacing: 1.5px;

        text-transform: uppercase;
    }

    .rating-options {
        display: flex;
        flex-wrap: wrap;

        gap: 8px;

        margin-bottom: 21px;
    }

    .rating-options input {
        position: absolute;

        width: 1px;
        height: 1px;

        opacity: 0;

        pointer-events: none;
    }

    .rating-options label {
        display: flex;

        align-items: center;
        justify-content: center;

        width: 42px;
        height: 42px;

        border: 1px solid var(--line);
        border-radius: 3px;

        color: var(--brown);
        background: var(--cream);

        font-size: 14px;
        font-weight: 700;

        cursor: pointer;

        transition:
            .2s ease;
    }

    .rating-options label:hover {
        border-color: var(--sand);

        background: var(--cream-soft);

        transform: translateY(-1px);
    }

    .rating-options input:checked + label {
        border-color: var(--toska);

        color: var(--white);

        background: var(--toska);

        box-shadow:
            0 5px 14px rgba(8, 120, 115, .16);
    }


    /* =========================================================
       SUBMIT
    ========================================================= */

    .submit-review {
        width: 100%;

        min-height: 50px;

        margin-top: 8px;

        padding: 12px 18px;

        border: none;
        border-radius: 3px;

        color: var(--white);

        background: var(--toska);

        font-size: 13px;
        font-weight: 800;

        letter-spacing: .7px;

        cursor: pointer;

        transition:
            background .2s ease,
            transform .2s ease,
            box-shadow .2s ease;
    }

    .submit-review:hover {
        background: var(--toska-dark);

        transform: translateY(-1px);

        box-shadow:
            0 8px 20px rgba(8, 120, 115, .16);
    }


    /* =========================================================
       REVIEW LIST
    ========================================================= */

    .review-list-wrapper {
        min-width: 0;
        width: 100%;
    }

    .review-list-header {
        display: flex;

        align-items: flex-end;
        justify-content: space-between;

        gap: 25px;

        margin-bottom: 25px;
        padding-bottom: 20px;

        border-bottom: 1px solid var(--line);
    }

    .section-label {
        margin-bottom: 11px;

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


    /* =========================================================
       REVIEW ITEM
    ========================================================= */

    .review-item {
        padding: 25px 0;

        border-bottom: 1px solid var(--line);
    }

    .review-item:first-child {
        padding-top: 0;
    }

    .review-item:last-child {
        border-bottom: none;
    }

    .review-top {
        display: flex;

        align-items: flex-start;
        justify-content: space-between;

        gap: 20px;

        margin-bottom: 15px;
    }

    .reviewer-info {
        display: flex;

        align-items: center;

        gap: 13px;

        min-width: 0;
    }

    .reviewer-avatar {
        display: flex;

        align-items: center;
        justify-content: center;

        width: 47px;
        height: 47px;

        flex: 0 0 47px;

        border-radius: 50%;

        color: var(--white);

        background: var(--toska);

        font-size: 16px;
        font-weight: 800;
    }

    .reviewer-name {
        margin: 0;

        color: var(--toska-dark);

        font-size: 16px;
        font-weight: 800;

        line-height: 1.3;
    }

    .reviewer-date {
        margin-top: 4px;

        color: var(--muted);

        font-size: 12px;
    }

    .review-stars {
        padding-top: 5px;

        color: var(--sand);

        font-size: 14px;

        letter-spacing: 2px;

        white-space: nowrap;
    }

    .review-text {
        max-width: 680px;

        margin: 0;

        color: var(--muted);

        font-size: 14px;

        line-height: 1.9;
    }


    /* =========================================================
       EMPTY REVIEW
    ========================================================= */

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


    /* =========================================================
       CLOSING
    ========================================================= */

    .review-closing {
        padding: 82px 20px;

        background: var(--toska-dark);

        text-align: center;
    }

    .review-closing-inner {
        max-width: 650px;

        margin: 0 auto;
    }

    .review-closing-label {
        margin-bottom: 17px;

        color: var(--sand);

        font-size: 11px;
        font-weight: 800;

        letter-spacing: 2.5px;

        text-transform: uppercase;
    }

    .review-closing h2 {
        margin: 0 0 18px;

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
        max-width: 560px;

        margin: 0 auto;

        color: rgba(255, 255, 255, .68);

        font-size: 15px;

        line-height: 1.9;
    }


    /* =========================================================
       TABLET
    ========================================================= */

    @media (max-width: 1100px) {

        .review-layout {
            grid-template-columns:
                minmax(280px, .85fr)
                minmax(0, 1.15fr);

            gap: 45px;
        }

        .review-form-wrapper {
            padding: 28px;
        }

    }


    /* =========================================================
       TABLET / SMALL LAPTOP
    ========================================================= */

    @media (max-width: 991px) {

        .review-header {
            padding: 65px 20px 55px;
        }

        .review-content {
            padding-bottom: 80px;
        }

        .review-layout {
            grid-template-columns: 1fr;

            gap: 55px;
        }

        .review-form-wrapper {
            max-width: 700px;
        }

        .review-list-wrapper {
            max-width: 850px;
        }

    }


    /* =========================================================
       MOBILE
    ========================================================= */

    @media (max-width: 767px) {

        .review-header {
            padding: 52px 18px 48px;
        }

        .review-content {
            padding: 0 18px 65px;
        }

        .review-header-content {
            max-width: 100%;
        }

        .eyebrow {
            margin-bottom: 18px;

            font-size: 10px;

            letter-spacing: 2px;
        }

        .eyebrow::before {
            width: 27px;

            flex-basis: 27px;
        }

        .review-title {
            font-size: 42px;

            letter-spacing: -1.2px;
        }

        .review-description {
            margin-top: 20px;

            font-size: 14px;

            line-height: 1.8;
        }

        .review-layout {
            gap: 48px;
        }

        .review-form-wrapper {
            max-width: none;

            padding: 25px 21px;
        }

        .form-title {
            font-size: 25px;
        }

        .form-description {
            margin-bottom: 24px;
        }

        .review-list-header {
            display: block;

            margin-bottom: 22px;
        }

        .section-title {
            font-size: 30px;
        }

        .review-count {
            display: block;

            margin-top: 9px;

            font-size: 12px;

            white-space: normal;
        }

        .review-top {
            display: flex;

            align-items: center;

            gap: 15px;
        }

        .review-stars {
            padding-top: 0;

            font-size: 13px;

            letter-spacing: 1.5px;
        }

        .review-text {
            font-size: 14px;

            line-height: 1.8;
        }

        .review-closing {
            padding: 65px 20px;
        }

    }


    /* =========================================================
       SMALL MOBILE
    ========================================================= */

    @media (max-width: 520px) {

        .review-title {
            font-size: 37px;
        }

        .review-form-wrapper {
            padding: 23px 18px;
        }

        .form-title {
            font-size: 23px;
        }

        .rating-options {
            gap: 7px;
        }

        .rating-options label {
            width: 40px;
            height: 40px;
        }

        .reviewer-avatar {
            width: 43px;
            height: 43px;

            flex-basis: 43px;
        }

        .reviewer-name {
            font-size: 15px;
        }

        .review-top {
            display: block;
        }

        .review-stars {
            display: block;

            margin-top: 11px;
        }

        .review-item {
            padding: 23px 0;
        }

        .review-closing h2 {
            font-size: 31px;
        }

        .review-closing p {
            font-size: 14px;
        }

    }


    /* =========================================================
       EXTRA SMALL
    ========================================================= */

    @media (max-width: 360px) {

        .review-title {
            font-size: 34px;
        }

        .rating-options {
            gap: 5px;
        }

        .rating-options label {
            width: 37px;
            height: 37px;

            font-size: 13px;
        }

    }

</style>


<div class="review-page">


    <!-- =====================================================
         HEADER
    ====================================================== -->

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
                    Baca pengalaman pengunjung setelah menikmati
                    suasana, pemandangan, dan momen berkesan
                    di Evara Beach.
                </p>

            </div>

        </div>

    </section>



    <!-- =====================================================
         CONTENT
    ====================================================== -->

    <section class="review-content">

        <div class="container">

            <div class="review-layout">


                <!-- =================================================
                     FORM ULASAN
                ================================================== -->

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


                        <!-- NAMA -->

                        <div class="mb-3">

                            <label
                                for="nama"
                                class="form-label-small"
                            >
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



                        <!-- EMAIL -->

                        <div class="mb-3">

                            <label
                                for="email"
                                class="form-label-small"
                            >
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



                        <!-- RATING -->

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

                                <label for="rating1">
                                    1
                                </label>


                                <input
                                    type="radio"
                                    id="rating2"
                                    name="rating"
                                    value="2"
                                >

                                <label for="rating2">
                                    2
                                </label>


                                <input
                                    type="radio"
                                    id="rating3"
                                    name="rating"
                                    value="3"
                                >

                                <label for="rating3">
                                    3
                                </label>


                                <input
                                    type="radio"
                                    id="rating4"
                                    name="rating"
                                    value="4"
                                >

                                <label for="rating4">
                                    4
                                </label>


                                <input
                                    type="radio"
                                    id="rating5"
                                    name="rating"
                                    value="5"
                                >

                                <label for="rating5">
                                    5
                                </label>

                            </div>

                        </div>



                        <!-- ULASAN -->

                        <div class="mb-3">

                            <label
                                for="ulasan"
                                class="form-label-small"
                            >
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



                        <!-- BUTTON -->

                        <button
                            type="submit"
                            class="submit-review"
                        >
                            KIRIM ULASAN
                        </button>

                    </form>

                </div>



                <!-- =================================================
                     DAFTAR ULASAN
                ================================================== -->

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



                    <!-- =================================================
                         ULASAN 1
                    ================================================== -->

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
                            Tempatnya nyaman untuk menikmati suasana
                            pantai dan menghabiskan waktu bersama keluarga.
                        </p>

                    </article>



                    <!-- =================================================
                         ULASAN 2
                    ================================================== -->

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



                    <!-- =================================================
                         ULASAN 3
                    ================================================== -->

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



    <!-- =====================================================
         PENUTUP
    ====================================================== -->

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