@include('layouts.partials.dashboard.head')
<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <div class="app-brand">
            <a href="/">
                <img src="{{ asset('/dist/images/favicon.png') }}" width="35px" alt="Mono">
                <span class="brand-name">GORILLA BOARDS</span>
            </a>
        </div>

        <div class="sidebar-left" data-simplebar style="height: 100%;">

            <ul class="nav sidebar-inner" id="sidebar-menu">

                <li class="active">
                    <a class="sidenav-item-link" href="{{ route('dashboard') }}">
                        <i class="mdi mdi-monitor-dashboard"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ route('admin.Img_Dashboard.index') }}">
                        <i class="mdi mdi-image"></i>
                        <span class="nav-text">Imagens</span>
                    </a>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#presencas" aria-expanded="false" aria-controls="email">
                        <i class="mdi mdi-account-check"></i>
                        <span class="nav-text">Presenças</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="presencas" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ route('presenca.showSurf') }}">
                                    <span class="nav-text">Surf</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('presenca.showSkate') }}">
                                    <span class="nav-text">Skate</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('presenca.showBodyboard') }}">
                                    <span class="nav-text">Bodyboard</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('presenca.showDownhill') }}">
                                    <span class="nav-text">Downhill</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('presenca.showPaddle') }}">
                                    <span class="nav-text">Paddle</span>

                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ route('admin.faqs.index') }}">
                        <i class="mdi mdi-help"></i>
                        <span class="nav-text">Faqs</span>
                    </a>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ route('admincontactos') }}">
                        <i class="mdi mdi-phone"></i>
                        <span class="nav-text">Contactos</span>
                    </a>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ route('admin.atletas.index') }}">
                        <i class="mdi mdi-run"></i>
                        <span class="nav-text">Atletas</span>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sobre"
                        aria-expanded="false" aria-controls="email">
                        <i class="mdi mdi-information-outline"></i>
                        <span class="nav-text">Sobre</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="sobre" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.sobre.index') }}">
                                    <span class="nav-text">Sobre</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.sobre_texto.index') }}">
                                    <span class="nav-text">Sobre Texto</span>

                                </a>
                            </li>

                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="{{ route('admin.user.index') }}">
                        <i class="mdi mdi-account"></i>
                        <span class="nav-text">Users</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>


<div class="page-wrapper">

    <header class="main-header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
            <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
            </button>

            <span class="page-title">dashboard</span>

            <div class="navbar-right ">

                <ul class="nav navbar-nav">
                    <!-- User Account -->
                    <li class="dropdown user-menu">
                        <button class="dropdown-toggle nav-link" data-toggle="dropdown">

                            @if (Auth::check())
                                <img src="{{ asset('storage/' . Auth::user()->img) }}"
                                    class="user-image rounded-circle" alt="User Image" />
                            @else
                                <a id="profile_Icon_Box" href="{{ route('login') }}">
                                    <img id="profile_Icon"src="{{ asset('img/profile_icon.png') }}" alt="">
                                </a>
                            @endauth

                            <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a class="dropdown-link-item" href="/logs">
                                <i class="mdi mdi-settings"></i>
                                <span class="nav-text">Logs</span>
                            </a>
                        </li>

                        <li class="dropdown-footer">
                            @if (Auth::check())
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-link-item" href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="mdi mdi-logout"></i>

                                        <span class="nav-text">Logout</span>
                                    </a>
                                </form>
                            @endauth
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
</header>
