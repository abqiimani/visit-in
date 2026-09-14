<style>
    /* =====================================================
       SIDEBAR VISIT-IN
    ====================================================== */

    .visit-sidebar {
        background: #126d69;
        background-image: none;
        width: 14rem !important;
        min-width: 14rem;
        margin: 0 !important;
        padding: 0 !important;
    }

    /* =====================================================
       BRAND / LOGO
    ====================================================== */

    .visit-sidebar .sidebar-brand {
        height: 75px !important;
        min-height: 75px !important;
        padding: 0 20px !important;
        margin: 0 !important;

        display: flex;
        align-items: center;
        justify-content: flex-start;

        background: #fffdf8;
    }

    .visit-sidebar .sidebar-brand:hover {
        background: #fffdf8;
    }

    .visit-sidebar .sidebar-brand-logo {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* =====================================================
       LOGO
    ====================================================== */

    .visit-sidebar .brand-logo {
        position: relative;
        width: 44px;
        height: 44px;
        flex: 0 0 44px;
        overflow: hidden;

        border: 3px solid #fffdf8;
        border-radius: 50%;

        background: linear-gradient(
            145deg,
            #086d69,
            #36aaa1
        );

        box-shadow:
            0 5px 15px rgba(8, 109, 105, 0.20);
    }

    .visit-sidebar .logo-sun {
        position: absolute;
        top: 7px;
        right: 8px;

        width: 9px;
        height: 9px;

        border-radius: 50%;
        background: #d8a35b;
    }

    .visit-sidebar .logo-wave {
        position: absolute;
        left: 4px;
        bottom: 6px;

        width: 34px;
        height: 15px;

        border-top: 3px solid #ffffff;
        border-radius: 50%;

        transform: rotate(-5deg);
    }

    .visit-sidebar .logo-wave::after {
        content: "";

        position: absolute;
        top: 4px;
        left: 6px;

        width: 25px;
        height: 11px;

        border-top: 2px solid rgba(255, 255, 255, 0.75);
        border-radius: 50%;
    }

    /* =====================================================
       TEXT LOGO
    ====================================================== */

    .visit-sidebar .brand-text {
        display: flex;
        flex-direction: column;
        line-height: 1;
    }

    .visit-sidebar .brand-text span {
        color: #126d69;

        font-family:
            Georgia,
            "Times New Roman",
            serif;

        font-size: 20px;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .visit-sidebar .brand-text small {
        display: block;

        margin-top: 5px;

        color: #a87842;

        font-size: 7px;
        font-weight: 700;
        letter-spacing: 1px;

        white-space: nowrap;
    }

    /* =====================================================
       GARIS PEMISAH
    ====================================================== */

    .visit-sidebar .sidebar-divider {
        margin: 0 !important;
        border-top: 1px solid rgba(255, 253, 248, 0.18);
    }

    /* =====================================================
       MENU
    ====================================================== */

    .visit-sidebar .nav-item {
        margin: 3px 0;
    }

    .visit-sidebar .nav-item .nav-link {
        margin: 0 12px;

        padding: 13px 15px;

        border-radius: 8px;

        color: rgba(255, 255, 255, 0.88);

        font-size: 15px;
        font-weight: 600;
    }

    .visit-sidebar .nav-item .nav-link i {
        width: 20px;
        margin-right: 8px;

        color: #d8a35b;

        text-align: center;
    }

    .visit-sidebar .nav-item .nav-link:hover {
        background: rgba(255, 253, 248, 0.12);
        color: #fffdf8;
    }

    .visit-sidebar .nav-item.active .nav-link {
        background: rgba(255, 253, 248, 0.12);
        color: #fffdf8;
        box-shadow: none;
    }

    .visit-sidebar .nav-item.active .nav-link i {
        color: #d8a35b;
    }

    /* =====================================================
       JUDUL MENU
    ====================================================== */

    .visit-sidebar .sidebar-heading {
        padding-left: 27px;

        color: rgba(255, 253, 248, 0.62);

        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1px;

        text-transform: uppercase;
    }
</style>


<ul
    class="navbar-nav sidebar sidebar-dark accordion visit-sidebar"
    id="accordionSidebar"
>

    <!-- LOGO VISIT-IN -->

    <a
        class="sidebar-brand"
        href="{{ route('admin.dashboard') }}"
    >

        <div class="sidebar-brand-logo">

            <div class="brand-logo">

                <div class="logo-sun"></div>

                <div class="logo-wave"></div>

            </div>

            <div class="brand-text">

                <span>VISIT-IN</span>

                <small>
                    PENDATAAN PENGUNJUNG WISATA
                </small>

            </div>

        </div>

    </a>


    <!-- GARIS PEMISAH -->

    <hr class="sidebar-divider my-0">


    <!-- DASHBOARD -->

    <li class="nav-item">

        <a
            class="nav-link"
            href="{{ route('admin.dashboard') }}"
        >

            <i class="fas fa-fw fa-tachometer-alt"></i>

            <span>
                Dashboard
            </span>

        </a>

    </li>


    <!-- JUDUL KELOMPOK MENU -->

    <div class="sidebar-heading mt-4 mb-2">

        Pengelolaan Data

    </div>


    <!-- DATA USER / ADMIN -->

    <li class="nav-item">

        <a
            class="nav-link"
            href="{{ route('admin.admin.index') }}"
        >

            <i class="fas fa-fw fa-user-shield"></i>

            <span>
                Data User / Admin
            </span>

        </a>

    </li>


    <!-- DATA PENGUNJUNG -->

    <li class="nav-item">

        <a
            class="nav-link"
            href="{{ route('admin.pengunjung.index') }}"
        >

            <i class="fas fa-fw fa-users"></i>

            <span>
                Pengunjung
            </span>

        </a>

    </li>


    <!-- REKAP KUNJUNGAN -->

    <li class="nav-item">

        <a
            class="nav-link"
            href="{{ route('admin.rekap-kunjungan.index') }}"
        >

            <i class="fas fa-fw fa-clipboard-list"></i>

            <span>
                Rekap Kunjungan
            </span>

        </a>

    </li>


    <!-- GRAFIK KUNJUNGAN -->

    <li class="nav-item">

        <a
            class="nav-link"
            href="{{ route('admin.grafik-kunjungan.index') }}"
        >

            <i class="fas fa-fw fa-chart-bar"></i>

            <span>
                Grafik Kunjungan
            </span>

        </a>

    </li>

</ul>