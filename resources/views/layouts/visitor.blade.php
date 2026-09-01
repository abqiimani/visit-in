<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title', 'VISIT-IN | Evara Beach')
    </title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;

            font-family: 'DM Sans', sans-serif;

            background: #f7f3e9;

            color: #315e5c;
        }


        /* ==================================================
           NAVBAR
        ================================================== */

        .visitor-navbar {

            position: sticky;
            top: 0;
            z-index: 9999;

            width: 100%;

            background: rgba(255, 252, 244, 0.97);

            border-bottom: 1px solid #e7dcc9;

            box-shadow:
                0 5px 25px rgba(27, 87, 82, 0.08);

            backdrop-filter: blur(10px);
        }


        .visitor-navbar .container {
            min-height: 82px;
        }


        /* ==================================================
           LOGO
        ================================================== */

        .visitor-brand {

            display: flex;

            align-items: center;

            gap: 12px;

            text-decoration: none;

            color: #126d69 !important;
        }


        .brand-logo {

            position: relative;

            width: 52px;
            height: 52px;

            overflow: hidden;

            border-radius: 50%;

            background:
                linear-gradient(
                    145deg,
                    #086d69,
                    #36aaa1
                );

            border: 3px solid #fffdf8;

            box-shadow:
                0 6px 18px rgba(8, 109, 105, .22);
        }


        /* matahari */

        .logo-sun {

            position: absolute;

            width: 10px;
            height: 10px;

            top: 9px;
            right: 10px;

            border-radius: 50%;

            background: #d8a35b;
        }


        /* ombak */

        .logo-wave {

            position: absolute;

            width: 40px;
            height: 18px;

            left: 5px;
            bottom: 8px;

            border-top: 3px solid white;

            border-radius: 50%;

            transform: rotate(-5deg);
        }


        .logo-wave::after {

            content: "";

            position: absolute;

            width: 29px;
            height: 13px;

            left: 7px;
            top: 4px;

            border-top:
                2px solid rgba(255,255,255,.75);

            border-radius: 50%;
        }


        /* ==================================================
           NAMA VISIT-IN
        ================================================== */

        .brand-text {

            display: flex;

            flex-direction: column;

            line-height: 1;
        }


        .brand-text span {

            font-family:
                'Playfair Display',
                serif;

            font-size: 23px;

            font-weight: 700;

            letter-spacing: 1px;

            color: #126d69;
        }


        .brand-text small {

            margin-top: 6px;

            font-size: 8px;

            font-weight: 700;

            letter-spacing: 1.7px;

            color: #a87842;
        }


        /* ==================================================
           MENU
        ================================================== */

        .visitor-navbar .nav-link {

            position: relative;

            margin: 0 8px;

            padding: 12px 5px !important;

            color: #315e5c !important;

            font-size: 14px;

            font-weight: 600;

            transition: .3s ease;
        }


        .visitor-navbar .nav-link::after {

            content: "";

            position: absolute;

            left: 50%;

            bottom: 4px;

            width: 0;

            height: 2px;

            background: #c59558;

            border-radius: 20px;

            transform:
                translateX(-50%);

            transition: .3s ease;
        }


        .visitor-navbar .nav-link:hover {

            color: #08746f !important;
        }


        .visitor-navbar .nav-link:hover::after {

            width: 30px;
        }


        .visitor-navbar .nav-link.active {

            color: #08746f !important;
        }


        .visitor-navbar .nav-link.active::after {

            width: 30px;
        }


        /* ==================================================
           BUTTON UTAMA
        ================================================== */

        .btn-visit {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            min-width: 205px;

            padding: 14px 25px;

            border-radius: 30px;

            color: white !important;

            text-decoration: none;

            font-size: 12px;

            font-weight: 700;

            letter-spacing: .5px;

            background:
                linear-gradient(
                    135deg,
                    #08746f,
                    #2da79e
                );

            box-shadow:
                0 8px 22px
                rgba(8,116,111,.25);

            transition: .3s ease;
        }


        .btn-visit:hover {

            transform: translateY(-3px);

            color: white !important;

            background:
                linear-gradient(
                    135deg,
                    #075e5a,
                    #23948d
                );

            box-shadow:
                0 12px 28px
                rgba(8,116,111,.32);
        }


        /* ==================================================
           CONTENT
        ================================================== */

        .visitor-main {

            min-height: calc(100vh - 82px);
        }


        /* ==================================================
           FOOTER
        ================================================== */

        .visitor-footer {

            padding: 45px 0;

            background: #105f5c;

            color: rgba(255,255,255,.8);

            text-align: center;
        }


        .visitor-footer h4 {

            margin-bottom: 8px;

            font-family:
                'Playfair Display',
                serif;

            color: white;
        }


        .visitor-footer p {

            margin: 0;

            font-size: 13px;
        }


        /* ==================================================
           MOBILE
        ================================================== */

        @media (max-width: 991px) {

            .visitor-navbar .container {

                min-height: 70px;
            }


            .visitor-navbar .navbar-collapse {

                margin-top: 12px;

                padding: 15px;

                background: white;

                border-radius: 16px;

                box-shadow:
                    0 10px 30px
                    rgba(15,70,68,.08);
            }


            .visitor-navbar .nav-link {

                margin: 3px 0;

                padding: 10px !important;
            }


            .visitor-navbar .nav-link::after {

                display: none;
            }


            .btn-visit {

                width: 100%;

                margin-top: 10px;
            }

        }


        @media (max-width: 575px) {

            .brand-logo {

                width: 44px;
                height: 44px;
            }


            .brand-text span {

                font-size: 19px;
            }


            .brand-text small {

                font-size: 7px;
            }

        }

    </style>

</head>


<body>


    <!-- ==================================================
         NAVBAR
    ================================================== -->

    <nav class="navbar navbar-expand-lg visitor-navbar">

        <div class="container">


            <!-- LOGO -->

            <a
                href="{{ route('beranda') }}"
                class="visitor-brand"
            >

                <div class="brand-logo">

                    <div class="logo-sun"></div>

                    <div class="logo-wave"></div>

                </div>


                <div class="brand-text">

                    <span>
                        VISIT-IN
                    </span>

                    <small>
                        PENDATAAN PENGUNJUNG WISATA
                    </small>

                </div>

            </a>


            <!-- MOBILE -->

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#visitorNavbar"
            >

                <span class="navbar-toggler-icon"></span>

            </button>


            <!-- MENU -->

            <div
                class="collapse navbar-collapse"
                id="visitorNavbar"
            >

                <ul class="navbar-nav ms-auto align-items-lg-center">


                    <!-- BERANDA -->

                    <li class="nav-item">

                        <a
                            class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}"
                            href="{{ route('beranda') }}"
                        >
                            Beranda
                        </a>

                    </li>


                    <!-- TENTANG -->

                    <li class="nav-item">

                        <a
                            class="nav-link {{ request()->routeIs('destinasi') ? 'active' : '' }}"
                            href="{{ route('destinasi') }}"
                        >
                            Tentang Destinasi
                        </a>

                    </li>


                    <!-- GALERI -->

                    <li class="nav-item">

                        <a
                            class="nav-link {{ request()->routeIs('galeri') ? 'active' : '' }}"
                            href="{{ route('galeri') }}"
                        >
                            Galeri
                        </a>

                    </li>


                    <!-- ULASAN -->

                    <li class="nav-item">

                        <a
                            class="nav-link {{ request()->routeIs('ulasan') ? 'active' : '' }}"
                            href="{{ route('ulasan') }}"
                        >
                            Ulasan Pengunjung
                        </a>

                    </li>


                    <!-- TOMBOL UTAMA -->

                    <li class="nav-item ms-lg-3">

                        <a
                            href="{{ route('pengunjung.create') }}"
                            class="btn-visit"
                        >
                            ISI DATA KUNJUNGAN
                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- ==================================================
         CONTENT
    ================================================== -->

    <main class="visitor-main">

        @yield('content')

    </main>


    <!-- ==================================================
         FOOTER
    ================================================== -->

    @yield('footer')


    <!-- Bootstrap -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>


    @stack('scripts')

</body>

</html>