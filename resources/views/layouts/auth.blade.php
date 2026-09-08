<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Login Administrator | VISIT-IN')</title>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'DM Sans', sans-serif;
            background: linear-gradient(
                135deg,
                #dcebe8 0%,
                #c4dcd8 100%
            );
            color: #315e5c;
        }

        .auth-page {
            min-height: 100vh;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding: 35px 15px;
        }

        .auth-card {
            width: 100%;
            max-width: 470px;
            overflow: hidden;
            background: #fffaf0;
            border-radius: 16px;
            box-shadow: 0 15px 40px rgba(28, 83, 79, 0.18);
        }

        /* HEADER HIJAU TOSKA */

        .auth-header {
            position: relative;
            min-height: 145px;
            padding: 18px 20px 16px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow: hidden;
            background: linear-gradient(
                135deg,
                #087772,
                #15958e,
                #35b3aa
            );
            border-bottom: 2px solid #d9aa62;
        }

        .auth-header::after {
            content: "";
            position: absolute;
            width: 125px;
            height: 125px;
            top: -70px;
            right: -45px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.12);
        }

        .auth-header::before {
            content: "";
            position: absolute;
            width: 160px;
            height: 60px;
            left: -75px;
            bottom: -35px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
        }

        /* LOGO */

        .auth-logo {
            position: relative;
            z-index: 2;
            width: 48px;
            height: 48px;
            margin-bottom: 8px;
            overflow: hidden;
            border: 3px solid #fffdf8;
            border-radius: 50%;
            background: linear-gradient(
                145deg,
                #086d69,
                #36aaa1
            );
            box-shadow: 0 5px 14px rgba(8, 109, 105, 0.22);
        }

        .auth-logo .logo-sun {
            position: absolute;
            width: 9px;
            height: 9px;
            top: 8px;
            right: 9px;
            border-radius: 50%;
            background: #d8a35b;
        }

        .auth-logo .logo-wave {
            position: absolute;
            width: 35px;
            height: 17px;
            left: 5px;
            bottom: 7px;
            border-top: 3px solid #ffffff;
            border-radius: 50%;
            transform: rotate(-5deg);
        }

        .auth-logo .logo-wave::after {
            content: "";
            position: absolute;
            width: 27px;
            height: 12px;
            left: 6px;
            top: 4px;
            border-top: 2px solid rgba(255, 255, 255, 0.75);
            border-radius: 50%;
        }

        .auth-brand {
            position: relative;
            z-index: 2;
            margin: 0;
            color: #ffffff;
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .auth-brand-subtitle {
            position: relative;
            z-index: 2;
            margin-top: 4px;
            color: #f8edda;
            font-size: 7px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        /* BAGIAN FORM */

        .auth-body {
            padding: 27px 27px 30px;
            background: #fffaf0;
        }

        .auth-location {
            margin: 0;
            text-align: center;
            color: #b97855;
            font-family: 'Playfair Display', serif;
            font-size: 16px;
            font-weight: 700;
        }

        .auth-title {
            margin: 4px 0 0;
            text-align: center;
            color: #087772;
            font-size: 23px;
            font-weight: 800;
        }

        .auth-description {
            margin: 6px 0 25px;
            text-align: center;
            color: #879b95;
            font-size: 10px;
        }

        .auth-error {
            margin-bottom: 18px;
            padding: 10px 12px;
            border: 1px solid #e6bdb2;
            border-radius: 6px;
            background: #fff1ed;
            color: #a34f43;
            font-size: 10px;
        }

        .auth-error ul {
            margin: 0;
            padding-left: 16px;
        }

        .auth-field {
            margin-bottom: 17px;
        }

        .auth-field label {
            display: block;
            margin-bottom: 7px;
            color: #315e5c;
            font-size: 10px;
            font-weight: 700;
        }

        .auth-input {
            width: 100%;
            height: 38px;
            padding: 0 11px;
            border: 1px solid #d3dfda;
            border-radius: 6px;
            outline: none;
            background: #fffefa;
            color: #315e5c;
            font-family: 'DM Sans', sans-serif;
            font-size: 11px;
            transition: 0.2s ease;
        }

        .auth-input::placeholder {
            color: #a9b9b3;
        }

        .auth-input:focus {
            border-color: #15958e;
            box-shadow: 0 0 0 3px rgba(45, 167, 158, 0.12);
        }

        .auth-remember {
            display: flex;
            align-items: center;
            gap: 6px;
            margin: 5px 0 22px;
            color: #78918b;
            font-size: 10px;
        }

        .auth-remember input {
            width: 12px;
            height: 12px;
            accent-color: #15958e;
        }

        .auth-button {
            width: 100%;
            height: 40px;
            border: none;
            border-radius: 6px;
            background: linear-gradient(
                135deg,
                #128b84,
                #35b3aa
            );
            color: #ffffff;
            font-family: 'DM Sans', sans-serif;
            font-size: 11px;
            font-weight: 800;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .auth-button:hover {
            background: #087772;
        }

        .auth-note {
            margin: 18px 0 0;
            text-align: center;
            color: #9a876e;
            font-size: 10px;
        }

        @media (max-width: 500px) {
            .auth-page {
                padding: 0;
            }

            .auth-card {
                min-height: 100vh;
                border-radius: 0;
            }

            .auth-body {
                padding: 25px 22px;
            }
        }
    </style>
</head>

<body>

    <div class="auth-page">

        <div class="auth-card">

            <header class="auth-header">

                <div class="auth-logo">
                    <div class="logo-sun"></div>
                    <div class="logo-wave"></div>
                </div>

                <h1 class="auth-brand">
                    VISIT-IN
                </h1>

                <div class="auth-brand-subtitle">
                    PENDATAAN PENGUNJUNG WISATA
                </div>

            </header>

            <main class="auth-body">
                @yield('content')
            </main>

        </div>

    </div>

</body>

</html>