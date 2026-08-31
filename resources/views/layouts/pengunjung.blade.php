<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VISIT-IN | Data Kunjungan</title>


    <!-- =====================================================
         BOOTSTRAP
    ====================================================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- =====================================================
         GOOGLE FONT
    ====================================================== -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >


    <style>

        /* =====================================================
           RESET
        ===================================================== */

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            min-height: 100%;
        }


        /* =====================================================
           BODY
        ===================================================== */

        body {

            min-height: 100vh;

            font-family: 'DM Sans', sans-serif;

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 35px 20px;

            position: relative;

            background-image:
                linear-gradient(
                    rgba(10, 91, 88, 0.20),
                    rgba(7, 70, 69, 0.27)
                ),
                url("{{ asset('img/pantai.jpg') }}");

            background-size: cover;

            background-position: center;

            background-repeat: no-repeat;

            background-attachment: fixed;
        }


        /* =====================================================
           OVERLAY
        ===================================================== */

        body::before {

            content: "";

            position: fixed;

            inset: 0;

            background:
                linear-gradient(
                    180deg,
                    rgba(255,255,255,0.03),
                    rgba(5,65,65,0.10)
                );

            pointer-events: none;

            z-index: 0;
        }


        /* =====================================================
           WRAPPER
        ===================================================== */

        .page-wrapper {

            width: 100%;

            max-width: 520px;

            position: relative;

            z-index: 2;
        }


        /* =====================================================
           FORM CARD
        ===================================================== */

        .form-card {

            width: 100%;

            background: #faf8f1;

            border-radius: 18px;

            overflow: hidden;

            box-shadow:
                0 22px 55px rgba(0, 55, 55, 0.30);

            border: none;

            position: relative;
        }


        /* =====================================================
           HEADER VISIT-IN
           GRADASI HIJAU TOSKA
        ===================================================== */

        .brand-header {

            background:
                linear-gradient(
                    135deg,
                    #126f6c 0%,
                    #16817d 22%,
                    #21938e 48%,
                    #2ba49e 72%,
                    #42b5ac 100%
                );

            text-align: center;

            color: white;

            padding:
                21px
                20px
                22px;

            position: relative;
        }


        /* =====================================================
           EFEK CAHAYA
        ===================================================== */

        .brand-header::before {

            content: "";

            position: absolute;

            width: 190px;

            height: 190px;

            top: -120px;

            right: -70px;

            border-radius: 50%;

            background:
                rgba(255,255,255,0.10);

            pointer-events: none;
        }


        /* =====================================================
           AKSEN PASIR
        ===================================================== */

        .brand-header::after {

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


        /* =====================================================
           LOGO
        ===================================================== */

        .logo {

            width: 60px;

            height: 60px;

            border-radius: 50%;

            margin: 0 auto 10px;

            background:
                linear-gradient(
                    145deg,
                    #fffdf5,
                    #e6f3ed
                );

            display: flex;

            align-items: center;

            justify-content: center;

            box-shadow:
                0 7px 18px rgba(0,0,0,0.18);

            border: none;

            position: relative;
        }


        /* =====================================================
           LOGO ICON
        ===================================================== */

        .logo-icon {

            width: 34px;

            height: 34px;

            position: relative;
        }


        /* =====================================================
           MATAHARI
        ===================================================== */

        .logo-sun {

            position: absolute;

            width: 10px;

            height: 10px;

            border-radius: 50%;

            background: #d5a65d;

            top: 1px;

            right: 1px;
        }


        /* =====================================================
           POHON KELAPA
        ===================================================== */

        .logo-tree {

            position: absolute;

            left: 9px;

            top: 8px;

            width: 3px;

            height: 21px;

            background: #227871;

            border-radius: 5px;

            transform: rotate(-12deg);
        }


        /* =====================================================
           DAUN KELAPA
        ===================================================== */

        .logo-tree::before {

            content: "";

            position: absolute;

            width: 19px;

            height: 8px;

            border-top:
                3px solid #227871;

            border-radius: 50%;

            top: -6px;

            left: -7px;

            transform: rotate(-25deg);
        }


        .logo-tree::after {

            content: "";

            position: absolute;

            width: 19px;

            height: 8px;

            border-top:
                3px solid #227871;

            border-radius: 50%;

            top: -6px;

            left: -7px;

            transform: rotate(38deg);
        }


        /* =====================================================
           OMBAK LOGO
        ===================================================== */

        .logo-wave {

            position: absolute;

            width: 23px;

            height: 9px;

            border-top:
                3px solid #23928c;

            border-radius: 50%;

            bottom: 1px;

            right: 0;
        }


        /* =====================================================
           VISIT-IN
        ===================================================== */

        .brand-title {

            margin: 0;

            font-size: 30px;

            font-weight: 700;

            letter-spacing: 3px;

            line-height: 1.1;

            text-shadow:
                0 2px 8px rgba(0,0,0,0.10);
        }


        /* =====================================================
           SUBTITLE
        ===================================================== */

        .brand-subtitle {

            margin-top: 6px;

            font-size: 9px;

            font-weight: 600;

            letter-spacing: 1.8px;

            opacity: 0.94;
        }


        /* =====================================================
           FORM CONTENT
        ===================================================== */

        .form-content {

            padding:
                22px
                30px
                24px;

            background:
                linear-gradient(
                    180deg,
                    #fbfaf4 0%,
                    #f8f6ed 100%
                );
        }


        /* =====================================================
           FORM HEADING
        ===================================================== */

        .form-heading {

            text-align: center;

            margin-bottom: 21px;
        }


        /* =====================================================
           EVARA BEACH
        ===================================================== */

        .beach-name {

            font-family:
                'Playfair Display',
                serif;

            color: #bd7756;

            font-size: 17px;

            font-weight: 600;

            margin-bottom: 2px;
        }


        /* =====================================================
           FORM TITLE
        ===================================================== */

        .form-title {

            margin: 0;

            color: #146b69;

            font-size: 24px;

            font-weight: 700;

            letter-spacing: -0.2px;
        }


        /* =====================================================
           DESKRIPSI
        ===================================================== */

        .form-description {

            margin:
                4px
                0
                0;

            color: #8d9692;

            font-size: 10px;
        }


        /* =====================================================
           FORM GROUP
        ===================================================== */

        .form-group {

            margin-bottom: 14px;
        }


        /* =====================================================
           LABEL
        ===================================================== */

        .form-label {

            display: block;

            color: #385b5a;

            font-size: 10px;

            font-weight: 600;

            margin-bottom: 5px;
        }


        /* =====================================================
           INPUT & SELECT
        ===================================================== */

        .form-control,
        .form-select {

            width: 100%;

            height: 38px;

            border:
                1px solid #d4dfdb;

            border-radius: 7px;

            background: #ffffff;

            color: #405654;

            font-family:
                'DM Sans',
                sans-serif;

            font-size: 11px;

            padding:
                0
                11px;

            box-shadow: none !important;

            transition:
                border-color .2s ease,
                box-shadow .2s ease,
                background .2s ease;
        }


        /* =====================================================
           PLACEHOLDER
        ===================================================== */

        .form-control::placeholder {

            color: #aab5b1;

            opacity: 1;
        }


        /* =====================================================
           HOVER
        ===================================================== */

        .form-control:hover,
        .form-select:hover {

            border-color: #8fc4be;

            background: #ffffff;
        }


        /* =====================================================
           FOCUS
        ===================================================== */

        .form-control:focus,
        .form-select:focus {

            border-color: #20938e;

            background: #ffffff;

            box-shadow:
                0 0 0 3px
                rgba(32,147,142,0.10)
                !important;

            outline: none;
        }


        /* =====================================================
           TWO COLUMN
        ===================================================== */

        .two-column {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 13px;
        }


        /* =====================================================
           BUTTON
           GRADASI HIJAU TOSKA
        ===================================================== */

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

            font-family:
                'DM Sans',
                sans-serif;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 0.5px;

            cursor: pointer;

            box-shadow:
                0 7px 16px
                rgba(22,125,121,0.23);

            transition:
                all .25s ease;
        }


        /* =====================================================
           BUTTON HOVER
        ===================================================== */

        .btn-submit:hover {

            background:
                linear-gradient(
                    100deg,
                    #0f625f 0%,
                    #147773 30%,
                    #1c8883 60%,
                    #249b94 100%
                );

            transform:
                translateY(-1px);

            box-shadow:
                0 9px 20px
                rgba(22,125,121,0.30);
        }


        .btn-submit:active {

            transform:
                translateY(0);
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .card-footer {

            text-align: center;

            color: #929b97;

            font-size: 8px;

            padding:
                0
                15px
                18px;

            background:
                #f8f6ed;
        }


        /* =====================================================
           NAMA PANTAI21
        ===================================================== */

        .card-footer span {

            color: #bd7756;

            font-weight: 600;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 600px) {

            body {

                padding:
                    20px
                    13px;

                background-attachment:
                    scroll;
            }


            .page-wrapper {

                max-width: 430px;
            }


            .form-content {

                padding:
                    20px
                    21px
                    22px;
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

                grid-template-columns:
                    1fr;

                gap: 0;
            }

        }

    </style>

</head>


<body>


    <!-- =====================================================
         PAGE WRAPPER
    ===================================================== -->

    <div class="page-wrapper">


        <!-- =================================================
             FORM CARD
        ================================================== -->

        <div class="form-card">


            <!-- =================================================
                 HEADER VISIT-IN
            ================================================== -->

            <div class="brand-header">


                <!-- LOGO -->

                <div class="logo">

                    <div class="logo-icon">

                        <div class="logo-sun"></div>

                        <div class="logo-tree"></div>

                        <div class="logo-wave"></div>

                    </div>

                </div>


                <!-- NAMA APLIKASI -->

                <h1 class="brand-title">
                    VISIT-IN
                </h1>


                <!-- SUBTITLE -->

                <div class="brand-subtitle">
                    PENDATAAN PENGUNJUNG WISATA
                </div>


            </div>



            <!-- =================================================
                 FORM CONTENT
            ================================================== -->

            <div class="form-content">


                <!-- JUDUL -->

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



                <!-- =================================================
                     FORM
                ================================================== -->

                <form
                    action="#"
                    method="POST"
                >

                    @csrf


                    <!-- =================================================
                         NAMA LENGKAP
                    ================================================== -->

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
                            class="form-control"
                            placeholder="Masukkan nama lengkap"
                            autocomplete="name"
                            required
                        >

                    </div>



                    <!-- =================================================
                         NOMOR TELEPON
                    ================================================== -->

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
                            class="form-control"
                            placeholder="Masukkan nomor telepon"
                            autocomplete="tel"
                            required
                        >

                    </div>



                    <!-- =================================================
                         ASAL DAERAH
                    ================================================== -->

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
                            class="form-control"
                            placeholder="Masukkan asal daerah"
                            required
                        >

                    </div>



                    <!-- =================================================
                         KATEGORI PENGUNJUNG
                    ================================================== -->

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
                            class="form-select"
                            required
                        >

                            <option
                                value=""
                                selected
                                disabled
                            >
                                Pilih kategori pengunjung
                            </option>


                            <option value="Masyarakat Umum">
                                Masyarakat Umum
                            </option>


                            <option value="Pelajar">
                                Pelajar
                            </option>


                            <option value="Mahasiswa">
                                Mahasiswa
                            </option>


                            <option value="Wisatawan">
                                Wisatawan
                            </option>

                        </select>

                    </div>



                    <!-- =================================================
                         JUMLAH + TANGGAL
                    ================================================== -->

                    <div class="two-column">


                        <!-- JUMLAH PENGUNJUNG -->

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
                                class="form-control"
                                placeholder="Masukkan jumlah"
                                min="1"
                                required
                            >

                        </div>



                        <!-- TANGGAL KUNJUNGAN -->

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
                                class="form-control"
                                required
                            >

                        </div>


                    </div>



                    <!-- =================================================
                         BUTTON
                    ================================================== -->

                    <button
                        type="submit"
                        class="btn-submit"
                    >

                        SIMPAN DATA KUNJUNGAN

                    </button>


                </form>


            </div>



            <!-- =================================================
                 FOOTER
            ================================================== -->

            <div class="card-footer">

                VISIT-IN
                &nbsp;•&nbsp;
                Pendataan Pengunjung Wisata
                &nbsp;•&nbsp;

                <span>
                    pantai21
                </span>

            </div>


        </div>


    </div>


</body>

</html>