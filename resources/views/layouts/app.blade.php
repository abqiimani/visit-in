<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="VISIT-IN Admin Dashboard">
    <meta name="author" content="VISIT-IN">

    <title>@yield('title', 'VISIT-IN Admin')</title>

    <!-- Font Awesome -->
    <link
        href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet"
        type="text/css"
    >

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"
    >

    <!-- SB Admin 2 -->
    <link
        href="{{ asset('css/sb-admin-2.min.css') }}"
        rel="stylesheet"
    >

    <!-- DataTables -->
    <link
        rel="stylesheet"
        href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css"
    >

    @stack('styles')

    <style>
        /* =====================================================
           FIX LAYOUT ADMIN VISIT-IN
        ====================================================== */

        #wrapper {
            width: 100%;
            min-height: 100vh;
        }

        /*
         * Content harus mulai setelah sidebar
         */
        #content-wrapper {
            margin-left: 14rem !important;
            width: calc(100% - 14rem) !important;
            min-height: 100vh;
        }

        /*
         * Content harus mulai setelah navbar
         */
        #content {
            padding-top: 75px !important;
            width: 100%;
            min-height: calc(100vh - 75px);
        }

        /*
         * Container halaman jangan keluar
         * dari area content
         */
        #content .container-fluid {
            width: 100%;
            max-width: 100%;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        /*
         * Table/card tetap berada
         * di dalam area content
         */
        #content .card {
            max-width: 100%;
        }

        #content .table-responsive {
            width: 100%;
            overflow-x: auto;
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 767.98px) {

            #content-wrapper {
                margin-left: 0 !important;
                width: 100% !important;
            }

            #content {
                padding-top: 75px !important;
            }

            #content .container-fluid {
                padding-left: 1rem;
                padding-right: 1rem;
            }

        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.inc.sidebar')
        <!-- End Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Navbar -->
                @include('layouts.inc.navbar')
                <!-- End Navbar -->


                <!-- Page Content -->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- End Page Content -->

            </div>
            <!-- End Main Content -->


            <!-- Footer -->
            @include('layouts.inc.footer')
            <!-- End Footer -->

        </div>
        <!-- End Content Wrapper -->

    </div>
    <!-- End Page Wrapper -->


    <!-- Scroll to Top -->
    <a
        class="scroll-to-top rounded"
        href="#page-top"
    >
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- jQuery Easing -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- SB Admin 2 JavaScript -->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>


    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap4.min.js"></script>


    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @stack('scripts')

</body>

</html>