<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>
        @yield('title', 'VISIT-IN | Evara Beach')
    </title>

    {{-- Bootstrap --}}
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    {{-- Google Font --}}
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

        html,
        body {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: #f7f3e9;
            color: #315e5c;
        }

        /* =========================
           NAVBAR
        ========================= */

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

        /* =========================
           LOGO CSS
        ========================= */

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
                0 6px 18px rgba(8, 109, 105, 0.22);
        }

        /* Matahari */
        .logo-sun {
            position: absolute;

            width: 10px;
            height: 10px;

            top: 9px;
            right: 10px;

            border-radius: 50%;

            background: #d8a35b;
        }

        /* Ombak */
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

            left: 8px;
            top: 4px;

            border-top: 3px solid #d8a35b;
            border-radius: 50%;
        }

        .brand-text {
            display: flex;
            flex-direction: column;
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

        /* =========================
           MENU
        ========================= */

        .visitor-navbar .nav-link {
            position: relative;

            margin: 0 8px;
            padding: 12px 5px !important;

            color: #315e5c !important;

            font-size: 14px;
            font-weight: 600;

            transition: 0.3s ease;
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

            transform: translateX(-50%);

            transition: 0.3s ease;
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

        /* =========================
           MAIN CONTENT
        ========================= */

        .visitor-main {
            min-height: calc(100vh - 82px);
        }

        /* =========================
           FORM CARD
        ========================= */

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

        /* =========================
           HEADER FORM
        ========================= */

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

            padding: 21px 20px 22px;

            position: relative;
        }

        .brand-header::before {
            content: "";

            position: absolute;

            width: 190px;
            height: 190px;

            top: -120px;
            right: -70px;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.10);

            pointer-events: none;
        }

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

        .form-card-logo {
            width: 60px;
            height: 60px;

            margin: 0 auto 10px;

            border-radius: 50%;

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
                0 7px 18px rgba(0, 0, 0, 0.18);
        }

        .form-card-logo .logo-sun {
            position: relative;
            top: auto;
            right: auto;
        }

        /* =========================
           FORM CONTENT
        ========================= */

        .form-content {
            padding: 30px;
        }

        .form-title {
            margin-bottom: 8px;

            font-family:
                'Playfair Display',
                serif;

            color: #315e5c;

            font-size: 28px;
            font-weight: 700;

            text-align: center;
        }

        .form-subtitle {
            margin-bottom: 28px;

            color: #7d8b85;

            font-size: 13px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            margin-bottom: 8px;

            color: #315e5c;

            font-size: 13px;
            font-weight: 600;
        }

        .form-control,
        .form-select {
            min-height: 46px;

            border: 1px solid #dfd4c2;
            border-radius: 10px;

            background: #fffdf8;

            color: #315e5c;

            font-size: 13px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #a87842;

            box-shadow:
                0 0 0 0.2rem rgba(168, 120, 66, 0.12);
        }

        .form-control::placeholder {
            color: #aaa096;
        }

        .two-column {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .btn-submit {
            width: 100%;

            padding: 14px 25px;

            border: none;
            border-radius: 30px;

            color: white;

            font-size: 12px;
            font-weight: 700;

            letter-spacing: 0.5px;

            background:
                linear-gradient(
                    135deg,
                    #08746f,
                    #2da79e
                );

            box-shadow:
                0 8px 22px rgba(8, 116, 111, 0.25);

            transition: 0.3s ease;
        }

        .btn-submit:hover {
            color: white;

            transform: translateY(-3px);

            background:
                linear-gradient(
                    135deg,
                    #075e5a,
                    #23948d
                );

            box-shadow:
                0 12px 28px rgba(8, 116, 111, 0.32);
        }

        /* =========================
           FOOTER
        ========================= */

        .visitor-footer {
            padding: 45px 0;

            background: #105f5c;

            color: rgba(255, 255, 255, 0.8);

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

        /* =========================
           MOBILE
        ========================= */

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
                    0 10px 30px rgba(15, 70, 68, 0.08);
            }

            .visitor-navbar .nav-link {
                margin: 3px 0;
                padding: 10px !important;
            }

            .visitor-navbar .nav-link::after {
                display: none;
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

            .form-content {
                padding: 22px;
            }

            .two-column {
                grid-template-columns: 1fr;
                gap: 0;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg visitor-navbar">

        <div class="container">

            {{-- LOGO CSS, BUKAN FOTO --}}
            <a
                href="{{ route('pengunjung.create') }}"
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

            {{-- MOBILE BUTTON --}}
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#visitorNavbar"
                aria-controls="visitorNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- MENU --}}
            <div
                class="collapse navbar-collapse"
                id="visitorNavbar"
            >
                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('pengunjung.create') ? 'active' : '' }}"
                            href="{{ route('pengunjung.create') }}"
                        >
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link {{ request()->routeIs('pengunjung.create') ? 'active' : '' }}"
                            href="{{ route('pengunjung.create') }}"
                        >
                            Isi Buku Tamu
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    {{-- CONTENT --}}
    <main class="visitor-main">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="visitor-footer">
        @yield('footer')

        @if (!View::hasSection('footer'))
            <h4>VISIT-IN</h4>

            <p>
                Sistem Pendataan Pengunjung Wisata
            </p>

            <p class="mt-2">
                &copy; {{ date('Y') }} VISIT-IN
            </p>
        @endif
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>

    @stack('scripts')

</body>
</html>