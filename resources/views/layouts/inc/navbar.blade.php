<style>
    /* =====================================================
       NAVBAR VISIT-IN
    ====================================================== */

    .visit-topbar {
        height: 75px !important;
        min-height: 75px !important;

        margin: 0 !important;
        padding-top: 0 !important;
        padding-bottom: 0 !important;

        background: #fffdf8 !important;

        border-bottom: 1px solid #e7dcc9;

        box-shadow:
            0 4px 15px rgba(18, 109, 105, 0.06) !important;
    }

    .visit-topbar #sidebarToggleTop {
        color: #126d69;
    }

    .visit-topbar #sidebarToggleTop:hover {
        background: #f5e9d0;
        color: #075c59;
    }

    .visit-topbar .nav-link {
        color: #126d69 !important;
    }

    .visit-topbar .nav-link:hover {
        color: #075c59 !important;
    }

    /* =====================================================
       PROFILE
    ====================================================== */

    .visit-topbar .img-profile {
        width: 36px;
        height: 36px;

        border: 2px solid #d8a35b;

        background: #e6f2ef;

        object-fit: cover;
    }

    .visit-topbar .admin-name {
        color: #126d69;

        font-size: 14px;
        font-weight: 600;
    }

    .visit-topbar .admin-role {
        display: block;

        margin-top: 2px;

        color: #a87842;

        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.4px;
    }

    /* =====================================================
       DROPDOWN
    ====================================================== */

    .visit-topbar .dropdown-menu {
        margin-top: 10px;

        border: 1px solid #e7dcc9;
        border-radius: 10px;

        box-shadow:
            0 8px 25px rgba(18, 109, 105, 0.10);
    }

    .visit-topbar .dropdown-item {
        padding: 10px 18px;

        color: #315e5c;

        font-size: 14px;
    }

    .visit-topbar .dropdown-item:hover {
        background: #f5e9d0;
        color: #075c59;
    }

    .visit-topbar .dropdown-item i {
        color: #d8a35b !important;
    }

    .visit-topbar .dropdown-divider {
        border-top: 1px solid #eee3d2;
    }
</style>


<nav
    class="navbar navbar-expand navbar-light topbar static-top shadow visit-topbar"
>

    <!-- Sidebar Toggle -->

    <button
        id="sidebarToggleTop"
        class="btn btn-link d-md-none rounded-circle mr-3"
        type="button"
    >

        <i class="fa fa-bars"></i>

    </button>


    <!-- Topbar Navbar -->

    <ul class="navbar-nav ml-auto">

        @auth

            <!-- User Information -->

            <li class="nav-item dropdown no-arrow">

                <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="userDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >

                    <img
                        class="img-profile rounded-circle"
                        src="{{ asset('img/undraw_profile.svg') }}"
                        alt="Profil Admin"
                    >

                    <span class="ml-2 d-none d-lg-inline admin-name">

                        {{ Auth::user()->name }}

                        <small class="admin-role">
                            Administrator VISIT-IN
                        </small>

                    </span>

                </a>


                <!-- Dropdown -->

                <div
                    class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown"
                >

                    <a
                        class="dropdown-item"
                        href="{{ route('admin.profile') }}"
                    >

                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>

                        Profile

                    </a>


                    <div class="dropdown-divider"></div>


                    <a
                        class="dropdown-item"
                        href="#"
                        onclick="event.preventDefault(); $('#form-logout').submit();"
                    >

                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                        Logout

                    </a>


                    <form
                        action="{{ route('logout') }}"
                        id="form-logout"
                        method="POST"
                        class="d-none"
                    >

                        @csrf

                    </form>

                </div>

            </li>

        @endauth

    </ul>

</nav>