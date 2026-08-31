<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VISIT-IN - Konfirmasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #eef4fb;
            min-height: 100vh;
            margin: 0;
        }

        .page-wrap {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 35px 20px;
        }

        /* ================= CARD UTAMA ================= */

        .confirmation-card {
            width: 100%;
            max-width: 650px;
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 14px 35px rgba(90, 140, 210, 0.15);
        }

        /* ================= HEADER ================= */

        .visit-header {
            height: 175px;
            background: #5b9bd9;
            padding: 20px 20px 25px;
            position: relative;
            overflow: hidden;
            text-align: center;
            color: white;
        }

        .visit-header::before {
            content: "";
            position: absolute;
            width: 220px;
            height: 150px;
            background: rgba(255, 255, 255, 0.10);
            border-radius: 50%;
            top: -75px;
            left: 45px;
        }

        .visit-header::after {
            content: "";
            position: absolute;
            width: 220px;
            height: 150px;
            background: rgba(255, 255, 255, 0.10);
            border-radius: 50%;
            top: -75px;
            right: -20px;
        }

        /* ================= LOGO ================= */

        .logo {
            width: 65px;
            height: 65px;
            margin-bottom: 2px;
            position: relative;
            z-index: 2;
        }

        .visit-header h2 {
            font-size: 27px;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin: 0;
            position: relative;
            z-index: 2;
        }

        .visit-header small {
            font-size: 10px;
            font-weight: 600;
            position: relative;
            z-index: 2;
        }

        /* ================= BODY KONFIRMASI ================= */

        .confirmation-body {
            text-align: center;
            padding: 65px 40px 75px;
            background: #ffffff;
        }

        /* ================= ICON BERHASIL ================= */

        .success-icon {
            width: 110px;
            height: 110px;
            background: #36b879;
            border-radius: 50%;
            margin: 0 auto 55px;

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;
            font-size: 65px;
            font-weight: 400;
            line-height: 1;
        }

        /* ================= TEXT ================= */

        .confirmation-text {
            color: #54749d;
            font-size: 21px;
            line-height: 1.6;
            margin-bottom: 45px;
        }

        /* ================= BUTTON ================= */

        .btn-back {
            display: inline-block;
            background: #3187E4;
            color: white;
            text-decoration: none;

            padding: 15px 35px;
            min-width: 300px;

            font-size: 15px;
            font-weight: 600;

            border-radius: 5px;
            transition: 0.2s;
        }

        .btn-back:hover {
            background: #2778ca;
            color: white;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 600px) {

            .page-wrap {
                padding: 20px 15px;
            }

            .confirmation-card {
                max-width: 100%;
            }

            .visit-header {
                height: 165px;
            }

            .logo {
                width: 60px;
                height: 60px;
            }

            .visit-header h2 {
                font-size: 24px;
            }

            .visit-header small {
                font-size: 9px;
            }

            .confirmation-body {
                padding: 50px 22px 60px;
            }

            .success-icon {
                width: 90px;
                height: 90px;
                font-size: 52px;
                margin-bottom: 40px;
            }

            .confirmation-text {
                font-size: 17px;
                margin-bottom: 35px;
            }

            .btn-back {
                min-width: 250px;
                padding: 13px 25px;
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

<div class="page-wrap">

    <div class="confirmation-card">

        <!-- ================= HEADER ================= -->

        <div class="visit-header">

            <svg class="logo"
                 viewBox="0 0 100 100">

                <defs>
                    <linearGradient id="viLogoBg"
                                    x1="20%"
                                    y1="0%"
                                    x2="90%"
                                    y2="100%">

                        <stop offset="0%" stop-color="#4a86d8"/>
                        <stop offset="100%" stop-color="#1c4488"/>

                    </linearGradient>
                </defs>

                <!-- Lingkaran luar -->
                <circle
                    cx="50"
                    cy="45"
                    r="38"
                    fill="none"
                    stroke="#ffffff"
                    stroke-width="1"
                    opacity="0.4"/>

                <!-- Lingkaran logo -->
                <circle
                    cx="50"
                    cy="45"
                    r="32"
                    fill="url(#viLogoBg)"/>

                <!-- Tulisan VI -->
                <text
                    x="50"
                    y="57"
                    text-anchor="middle"
                    font-family="Poppins, sans-serif"
                    font-weight="700"
                    font-size="26"
                    letter-spacing="1"
                    fill="#ffffff">

                    VI

                </text>

                <!-- Gelombang -->
                <path
                    d="M32 68 Q41 63, 50 68 Q59 73, 68 68"
                    fill="none"
                    stroke="#ffffff"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    opacity="0.9"/>

                <path
                    d="M35 72 Q42 68, 50 72 Q58 76, 65 72"
                    fill="none"
                    stroke="#ffffff"
                    stroke-width="1.2"
                    stroke-linecap="round"
                    opacity="0.55"/>

                <!-- Titik dekorasi -->
                <circle
                    cx="76"
                    cy="17"
                    r="4.5"
                    fill="none"
                    stroke="#ffd166"
                    stroke-width="0.8"
                    opacity="0.6"/>

                <circle
                    cx="76"
                    cy="17"
                    r="2.8"
                    fill="#ffd166"/>

            </svg>


            <h2>VISIT-IN</h2>

            <small>
                PENDATAAN PENGUNJUNG WISATA
            </small>

        </div>


        <!-- ================= KONFIRMASI ================= -->

        <div class="confirmation-body">

            <div class="success-icon">
                ✓
            </div>


            <div class="confirmation-text">

                Terima kasih telah berkunjung dan mengisi
                form kunjungan.<br>

                Semoga kunjungan Anda menyenangkan!

            </div>


            

        </div>

    </div>

</div>

</body>
</html>