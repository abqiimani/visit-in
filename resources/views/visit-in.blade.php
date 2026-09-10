@extends('layouts.pengunjung')

@section('title', 'VISIT-IN | Form Data Kunjungan')

@section('content')

{{-- SWEETALERT2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
    html,
    body {
        margin: 0;
        padding: 0;
        background: #f7f1e6 !important;
    }

    .visit-in-page {
        min-height: calc(100vh - 82px);
        padding: 35px 20px;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        background:
            linear-gradient(
                rgba(247, 241, 230, 0.88),
                rgba(247, 241, 230, 0.88)
            ),
            url("{{ asset('img/pantai.jpg') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .visit-in-wrapper {
        width: 100%;
        max-width: 520px;
    }

    .visit-in-card {
        width: 100%;
        overflow: hidden;
        border-radius: 18px;
        background: #fffdf8;
        box-shadow: 0 15px 35px rgba(91, 72, 48, 0.13);
    }

    /* =========================
       HEADER LOGO
    ========================= */

    .visit-in-header {
        position: relative;
        padding: 22px 20px 24px;
        text-align: center;
        color: white;
        background:
            linear-gradient(
                135deg,
                #126f6c 0%,
                #16817d 25%,
                #21938e 50%,
                #2ba49e 75%,
                #42b5ac 100%
            );
    }

    .visit-in-header::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 3px;
        background:
            linear-gradient(
                90deg,
                #d8b779,
                #ead09c,
                #d8b779
            );
    }

    .logo {
        width: 62px;
        height: 62px;
        margin: 0 auto 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #fffdf5;
        box-shadow: 0 7px 18px rgba(0, 0, 0, 0.18);
    }

    .logo-icon {
        position: relative;
        width: 48px;
        height: 48px;
        overflow: hidden;
        border-radius: 50%;
        background: linear-gradient(
            145deg,
            #08706b,
            #25a39b
        );
        border: 2px solid #ffffff;
    }

    /* BULATAN COKELAT */

    .logo-sun {
        position: absolute;
        top: 8px;
        right: 9px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #d5a05a;
        z-index: 5;
    }

    /* GARIS HIJAU */

    .logo-tree {
        position: absolute;
        top: 17px;
        left: 14px;
        width: 3px;
        height: 20px;
        border-radius: 5px;
        background: #237b75;
        transform: rotate(-12deg);
    }

    .logo-tree::before {
        content: "";
        position: absolute;
        top: -5px;
        left: -7px;
        width: 19px;
        height: 8px;
        border-top: 2px solid #237b75;
        border-radius: 50%;
        transform: rotate(-25deg);
    }

    .logo-tree::after {
        content: "";
        position: absolute;
        top: -5px;
        left: -7px;
        width: 19px;
        height: 8px;
        border-top: 2px solid #237b75;
        border-radius: 50%;
        transform: rotate(38deg);
    }

    /* OMBAK */

    .logo-wave {
        position: absolute;
        right: 5px;
        bottom: 8px;
        width: 34px;
        height: 13px;
        border-top: 2px solid #ffffff;
        border-radius: 50%;
        transform: rotate(-7deg);
    }

    .logo-wave::after {
        content: "";
        position: absolute;
        top: 5px;
        left: 7px;
        width: 27px;
        height: 10px;
        border-top: 2px solid rgba(255, 255, 255, 0.75);
        border-radius: 50%;
    }

    .brand-title {
        margin: 0;
        font-family: 'Playfair Display', serif;
        font-size: 30px;
        font-weight: 700;
        letter-spacing: 3px;
        line-height: 1.1;
    }

    .brand-subtitle {
        margin-top: 6px;
        font-size: 9px;
        font-weight: 600;
        letter-spacing: 1.8px;
    }

    /* =========================
       FORM
    ========================= */

    .form-content {
        padding: 24px 30px 25px;
        background:
            linear-gradient(
                180deg,
                #fbfaf4 0%,
                #f8f6ed 100%
            );
    }

    .form-heading {
        margin-bottom: 22px;
        text-align: center;
    }

    .beach-name {
        margin-bottom: 3px;
        color: #bd7756;
        font-family: 'Playfair Display', serif;
        font-size: 17px;
        font-weight: 600;
    }

    .form-title {
        margin: 0;
        color: #146b69;
        font-family: 'Playfair Display', serif;
        font-size: 24px;
        font-weight: 700;
    }

    .form-description {
        margin: 5px 0 0;
        color: #8d9692;
        font-size: 10px;
    }

    .form-group {
        margin-bottom: 14px;
    }

    .form-label {
        display: block;
        margin-bottom: 5px;
        color: #385b5a;
        font-size: 10px;
        font-weight: 600;
    }

    .form-control,
    .form-select {
        width: 100%;
        height: 38px;
        padding: 0 11px;
        border: 1px solid #d4dfdb;
        border-radius: 7px;
        outline: none;
        background: #ffffff;
        color: #405654;
        font-family: 'DM Sans', sans-serif;
        font-size: 11px;
        box-shadow: none !important;
        transition: .2s ease;
    }

    .form-control::placeholder {
        color: #aab5b1;
    }

    .form-control:hover,
    .form-select:hover {
        border-color: #8fc4be;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #20938e;
        box-shadow: 0 0 0 3px rgba(32, 147, 142, 0.10) !important;
    }

    .two-column {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 13px;
    }

    .btn-submit {
        width: 100%;
        height: 41px;
        margin-top: 1px;
        border: none;
        border-radius: 7px;
        background:
            linear-gradient(
                100deg,
                #116e6b 0%,
                #16827e 30%,
                #20938e 60%,
                #2ca59e 100%
            );
        color: white;
        font-family: 'DM Sans', sans-serif;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: .5px;
        cursor: pointer;
        box-shadow: 0 7px 16px rgba(22, 125, 121, 0.23);
        transition: .25s ease;
    }

    .btn-submit:hover {
        transform: translateY(-1px);
        box-shadow: 0 9px 20px rgba(22, 125, 121, 0.30);
    }

    /* =========================
       FOOTER TIPIS
    ========================= */

    .card-footer {
        padding: 18px 15px;
        text-align: center;
        background: #fffdf8;
        border-top: 1px solid #eadfce;
        color: #bd7756;
        font-size: 11px;
        font-weight: 400;
    }

    .card-footer span {
        color: #126f6c;
        font-weight: 600;
    }

    /* Sembunyikan footer hijau dari layout */

    .visitor-footer {
        display: none !important;
    }

    /* =========================
       ERROR VALIDASI
    ========================= */

    .error-message {
        margin-top: 5px;
        color: #c45d5d;
        font-size: 9px;
    }

    .form-control.is-invalid,
    .form-select.is-invalid {
        border-color: #d97a7a;
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 600px) {

        .visit-in-page {
            min-height: calc(100vh - 70px);
            padding: 20px 13px;
            background-attachment: scroll;
        }

        .form-content {
            padding: 20px 21px 22px;
        }

        .brand-title {
            font-size: 27px;
        }

        .brand-subtitle {
            font-size: 8px;
        }

        .form-title {
            font-size: 22px;
        }

        .beach-name {
            font-size: 16px;
        }

        .two-column {
            grid-template-columns: 1fr;
            gap: 0;
        }
    }
</style>


<div class="visit-in-page">

    <div class="visit-in-wrapper">

        <div class="visit-in-card">

            <!-- HEADER VISIT-IN -->

            <div class="visit-in-header">

                <div class="logo">

                    <div class="logo-icon">

                        <div class="logo-sun"></div>

                        <div class="logo-tree"></div>

                        <div class="logo-wave"></div>

                    </div>

                </div>

                <h1 class="brand-title">
                    VISIT-IN
                </h1>

                <div class="brand-subtitle">
                    PENDATAAN PENGUNJUNG WISATA
                </div>

            </div>


            <!-- ISI FORM -->

            <div class="form-content">

                <div class="form-heading">

                    <div class="beach-name">
                        Evara Beach
                    </div>

                    <h2 class="form-title">
                        Form Data Kunjungan
                    </h2>

                    <p class="form-description">
                        Silakan isi data kunjungan dengan lengkap
                    </p>

                </div>


                <!-- FORM -->

                <form
                    action="{{ route('pengunjung.store') }}"
                    method="POST"
                >

                    @csrf


                    <!-- NAMA LENGKAP -->

                    <div class="form-group">

                        <label
                            for="nama_lengkap"
                            class="form-label"
                        >
                            Nama Lengkap
                        </label>

                        <input
                            type="text"
                            id="nama_lengkap"
                            name="nama_lengkap"
                            class="form-control @error('nama_lengkap') is-invalid @enderror"
                            placeholder="Masukkan nama lengkap"
                            autocomplete="name"
                            value="{{ old('nama_lengkap') }}"
                            required
                        >

                        @error('nama_lengkap')
                            <div class="error-message">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- NOMOR TELEPON -->

                    <div class="form-group">

                        <label
                            for="nomor_telepon"
                            class="form-label"
                        >
                            Nomor Telepon
                        </label>

                        <input
                            type="tel"
                            id="nomor_telepon"
                            name="nomor_telepon"
                            class="form-control @error('nomor_telepon') is-invalid @enderror"
                            placeholder="Masukkan nomor telepon"
                            autocomplete="tel"
                            value="{{ old('nomor_telepon') }}"
                            required
                        >

                        @error('nomor_telepon')
                            <div class="error-message">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- ASAL DAERAH -->

                    <div class="form-group">

                        <label
                            for="asal_daerah"
                            class="form-label"
                        >
                            Asal Daerah
                        </label>

                        <input
                            type="text"
                            id="asal_daerah"
                            name="asal_daerah"
                            class="form-control @error('asal_daerah') is-invalid @enderror"
                            placeholder="Masukkan asal daerah"
                            value="{{ old('asal_daerah') }}"
                            required
                        >

                        @error('asal_daerah')
                            <div class="error-message">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- KATEGORI PENGUNJUNG -->

                    <div class="form-group">

                        <label
                            for="kategori_pengunjung"
                            class="form-label"
                        >
                            Kategori Pengunjung
                        </label>

                        <select
                            id="kategori_pengunjung"
                            name="kategori_pengunjung"
                            class="form-select @error('kategori_pengunjung') is-invalid @enderror"
                            required
                        >

                            <option
                                value=""
                                selected
                                disabled
                            >
                                Pilih kategori pengunjung
                            </option>

                            <option
                                value="Masyarakat Umum"
                                {{ old('kategori_pengunjung') == 'Masyarakat Umum' ? 'selected' : '' }}
                            >
                                Masyarakat Umum
                            </option>

                            <option
                                value="Pelajar"
                                {{ old('kategori_pengunjung') == 'Pelajar' ? 'selected' : '' }}
                            >
                                Pelajar
                            </option>

                            <option
                                value="Mahasiswa"
                                {{ old('kategori_pengunjung') == 'Mahasiswa' ? 'selected' : '' }}
                            >
                                Mahasiswa
                            </option>

                            <option
                                value="Wisatawan"
                                {{ old('kategori_pengunjung') == 'Wisatawan' ? 'selected' : '' }}
                            >
                                Wisatawan
                            </option>

                        </select>

                        @error('kategori_pengunjung')
                            <div class="error-message">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- JUMLAH DAN TANGGAL -->

                    <div class="two-column">

                        <div class="form-group">

                            <label
                                for="jumlah_pengunjung"
                                class="form-label"
                            >
                                Jumlah Pengunjung
                            </label>

                            <input
                                type="number"
                                id="jumlah_pengunjung"
                                name="jumlah_pengunjung"
                                class="form-control @error('jumlah_pengunjung') is-invalid @enderror"
                                placeholder="Masukkan jumlah"
                                min="1"
                                value="{{ old('jumlah_pengunjung') }}"
                                required
                            >

                            @error('jumlah_pengunjung')
                                <div class="error-message">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <div class="form-group">

                            <label
                                for="tanggal_kunjungan"
                                class="form-label"
                            >
                                Tanggal Kunjungan
                            </label>

                            <input
                                type="date"
                                id="tanggal_kunjungan"
                                name="tanggal_kunjungan"
                                class="form-control @error('tanggal_kunjungan') is-invalid @enderror"
                                value="{{ old('tanggal_kunjungan') }}"
                                required
                            >

                            @error('tanggal_kunjungan')
                                <div class="error-message">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                    </div>


                    <!-- TOMBOL -->

                    <button
                        type="submit"
                        class="btn-submit"
                    >
                        SIMPAN DATA KUNJUNGAN
                    </button>

                </form>

            </div>


            <!-- FOOTER TIPIS -->

            <div class="card-footer">

                Copyright © 2026
                <span>VISIT-IN</span>
                | Pendataan Pengunjung Wisata

            </div>

        </div>

    </div>

</div>


{{-- =========================
     SWEETALERT BERHASIL
========================= --}}

@if (session('success'))

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK',
                confirmButtonColor: '#147d78'
            });

        });
    </script>

@endif


@endsection