<style>
    .visit-sidebar {
        background: #126d69;
        background-image: none;
        width: 14rem !important;
        min-width: 14rem;
    }

    .visit-sidebar .sidebar-brand {
        min-height: 105px;
        height: auto;
        padding: 18px 20px;
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

    .visit-sidebar .brand-logo {
        position: relative;
        width: 48px;
        height: 48px;
        flex: 0 0 48px;
        overflow: hidden;
        border: 3px solid #fffdf8;
        border-radius: 50%;
        background: linear-gradient(145deg, #086d69, #36aaa1);
        box-shadow: 0 6px 18px rgba(8, 109, 105, 0.22);
    }

    .visit-sidebar .logo-sun {
        position: absolute;
        top: 8px;
        right: 9px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #d8a35b;
    }

    .visit-sidebar .logo-wave {
        position: absolute;
        left: 4px;
        bottom: 7px;
        width: 38px;
        height: 17px;
        border-top: 3px solid #ffffff;
        border-radius: 50%;
        transform: rotate(-5deg);
    }

    .visit-sidebar .logo-wave::after {
        content: "";
        position: absolute;
        top: 4px;
        left: 7px;
        width: 28px;
        height: 12px;
        border-top: 2px solid rgba(255, 255, 255, 0.75);
        border-radius: 50%;
    }

    .visit-sidebar .brand-text {
        display: flex;
        flex-direction: column;
        line-height: 1;
    }

    .visit-sidebar .brand-text span {
        color: #126d69;
        font-family: Georgia, "Times New Roman", serif;
        font-size: 18px;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .visit-sidebar .brand-text small {
        display: block;
        margin-top: 5px;
        color: #a87842;
        font-size: 6px;
        font-weight: 700;
        letter-spacing: 1px;
        white-space: nowrap;
    }

    .visit-sidebar .sidebar-divider {
        margin: 0;
        border-top: 1px solid rgba(255, 253, 248, 0.18);
    }

    .visit-sidebar .nav-item {
        margin: 3px 0;
    }

    .visit-sidebar .nav-item .nav-link {
        margin: 0 12px;
        padding: 13px 15px;
        border-radius: 8px;
        color: rgba(255, 255, 255, 0.88);
        font-size: 14px;
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
        background: transparent;
        color: rgba(255, 255, 255, 0.88);
        box-shadow: none;
    }

    .visit-sidebar .nav-item.active .nav-link i {
        color: #d8a35b;
    }

    .visit-sidebar .sidebar-heading {
        padding-left: 27px;
        color: rgba(255, 253, 248, 0.62);
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
    }
</style>


<ul class="navbar-nav sidebar sidebar-dark accordion visit-sidebar" id="accordionSidebar">

    <!-- Logo VISIT-IN -->
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
                <small>PENDATAAN PENGUNJUNG WISATA</small>
            </div>

        </div>
    </a>


    <hr class="sidebar-divider my-0">


    <!-- Dashboard -->
    <li class="nav-item active">
        <a
            class="nav-link"
            href="{{ route('admin.dashboard') }}"
        >
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>


    <!-- Judul Kelompok Menu -->
    <div class="sidebar-heading mt-4 mb-2">
        Pengelolaan Data
    </div>


   <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.admin.index') }}">
        <i class="fas fa-users"></i>
        <span>Data User / Admin</span>
    </a>
</li>


    <!-- Data Pengunjung -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>Pengunjung</span>
        </a>
    </li>


    <!-- Rekap Kunjungan -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Rekap Kunjungan</span>
        </a>
    </li>


    <!-- Grafik Kunjungan -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-bar"></i>
            <span>Grafik Kunjungan</span>
        </a>
    </li>

     @csrf
    </form>

</ul>
