{{--  @extends('layouts.partials.navAdmin')

@section('adminMain')

@endsection --}}

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Dashboard - Gorilla Boards</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="{{ asset('/dist/plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/dist/plugins/simplebar/simplebar.css" rel="stylesheet') }}" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('/dist/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
    <link href="{{ asset('/dist/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('/dist/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <link href="{{ asset('/dist/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('/dist/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />

    <link id="main-css-href" rel="stylesheet" href="{{ asset('/dist/css/style.css') }}" />

    <link href="{{ asset('/dist/images/favicon.png') }}" rel="shortcut icon" />

    <script src="{{ asset('/dist/plugins/nprogress/nprogress.js') }}"></script>
</head>


<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">
        {{-- menu --}}
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <div class="app-brand">
                    <a href="/">
                        <img src="{{ asset('/dist/images/favicon.png') }}" width="40px" alt="Mono">
                        <span class="brand-name">GORILLA BOARDS</span>
                    </a>
                </div>

                <div class="sidebar-left" data-simplebar style="height: 100%;">

                    <ul class="nav sidebar-inner" id="sidebar-menu">

                        <li class="active">
                            <a class="sidenav-item-link" href="index.html">
                                <i class="mdi mdi-monitor-dashboard"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#faq" aria-expanded="false" aria-controls="email">
                                <i class="mdi mdi-information-outline"></i>
                                <span class="nav-text">Faqs</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="faq" data-parent="#sidebar-menu">
                                <div class="sub-menu">

                                    <li>
                                        <a class="sidenav-item-link" href="email-inbox.html">
                                            <span class="nav-text">Mostrar Faqs</span>

                                        </a>
                                    </li>

                                    <li>
                                        <a class="sidenav-item-link" href="email-details.html">
                                            <span class="nav-text">Editar Faqs</span>

                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#contactos" aria-expanded="false" aria-controls="email">
                                <i class="mdi mdi-phone"></i>
                                <span class="nav-text">Contactos</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="contactos" data-parent="#sidebar-menu">
                                <div class="sub-menu">

                                    <li>
                                        <a class="sidenav-item-link" href="email-inbox.html">
                                            <span class="nav-text">Mostrar Contactos</span>

                                        </a>
                                    </li>

                                    <li>
                                        <a class="sidenav-item-link" href="email-details.html">
                                            <span class="nav-text">Editar Contactos</span>

                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>


        <div class="page-wrapper">

            <!-- Header -->
            <header class="main-header" id="header">
                <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>

                    <span class="page-title">dashboard</span>

                    <div class="navbar-right ">

                        <!-- search form -->
                        {{--  <div class="search-form">
                            <form action="index.html" method="get">
                                <div class="input-group input-group-sm" id="input-group-search">
                                    <input type="text" autocomplete="off" name="query" id="search-input"
                                        class="form-control" placeholder="Search..." />
                                    <div class="input-group-append">
                                        <button class="btn" type="button">/</button>
                                    </div>
                                </div>
                            </form>

                        </div> --}}

                        <ul class="nav navbar-nav">
                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <img src="{{ asset('img/' . Auth::user()->img) }}"
                                        class="user-image
                                    rounded-circle"
                                        alt="User Image" />
                                    <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a class="dropdown-link-item" href="user-profile.html">
                                            <i class="mdi mdi-account-outline"></i>
                                            <span class="nav-text">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link-item" href="user-account-settings.html">
                                            <i class="mdi mdi-settings"></i>
                                            <span class="nav-text">Account Setting</span>
                                        </a>
                                    </li>

                                    <li class="dropdown-footer">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="dropdown-link-item" href="route('logout')"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                <i class="mdi mdi-logout"></i>
                                                <span class="nav-text">Log Out</span>
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            {{-- main --}}
            <div class="content-wrapper">
                <div class="content">
                    <!-- Top Statistics -->
                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card card-default card-mini">
                                <div class="card-header">
                                    <h2>$18,699</h2>
                                    <div class="sub-title">
                                        <span class="mr-1">Sales of this year</span> |
                                        <span class="mx-1">45%</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-wrapper">
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card card-default card-mini">
                                <div class="card-header">
                                    <h2>$14,500</h2>
                                    <div class="sub-title">
                                        <span class="mr-1">Expense of this year</span> |
                                        <span class="mx-1">50%</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-wrapper">
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card card-default card-mini">
                                <div class="card-header">
                                    <h2>$4199</h2>
                                    <div class="sub-title">
                                        <span class="mr-1">Profit of this year</span> |
                                        <span class="mx-1">20%</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-wrapper">
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card card-default card-mini">
                                <div class="card-header">
                                    <h2>$20,199</h2>
                                    {{--     <div class="dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div> --}}
                                    <div class="sub-title">
                                        <span class="mr-1">Revenue of this year</span> |
                                        <span class="mx-1">35%</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-wrapper">
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        &copy; <span id="copy-year"></span> Copyright Dashboard by <a class="text-primary">Gorilla
                            Boards</a>
                    </p>
                </div>
                <script>
                    var d = new Date();
                    var year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year;
                </script>
            </footer>

        </div>
    </div>

    <script src="{{ asset('/dist/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/dist/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/dist/plugins/simplebar/simplebar.min.js') }}"></script>
    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
    <script src="{{ asset('/dist/plugins/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('/dist/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/dist/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('/dist/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('/dist/plugins/jvectormap/jquery-jvectormap-us-aea.js') }}"></script>
    <script src="{{ asset('/dist/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('/dist/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('input[name="dateRange"]').daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                locale: {
                    cancelLabel: 'Clear'
                }
            });
            jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
                jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
            });
            jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
                jQuery(this).val('');
            });
        });
    </script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="{{ asset('/dist/plugins/toaster/toastr.min.js') }}"></script>
    <script src="{{ asset('/dist/js/mono.js') }}"></script>
    <script src="{{ asset('/dist/js/chart.js') }}"></script>
    <script src="{{ asset('/dist/js/map.js') }}"></script>
    <script src="{{ asset('/dist/js/custom.js') }}"></script>

</body>

</html>
