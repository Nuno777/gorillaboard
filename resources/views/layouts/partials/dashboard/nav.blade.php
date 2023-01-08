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
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#aulas"
                        aria-expanded="false" aria-controls="email">
                        <i class="mdi mdi-file"></i>
                        <span class="nav-text">Aulas</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="aulas" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li>
                                <a class="sidenav-item-link" href="/admincontactos">
                                    <span class="nav-text">Criar Aulas</span>

                                </a>
                            </li>

                            <li>
                                <a class="sidenav-item-link" href="/admincontactos">
                                    <span class="nav-text">Mostrar Aulas</span>

                                </a>
                            </li>
                        </div>
                    </ul>
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
                                <a class="sidenav-item-link" href="{{ route('presenca.show') }}">
                                    <span class="nav-text">Mostrar Presenças</span>

                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#faq"
                        aria-expanded="false" aria-controls="email">
                        <i class="mdi mdi-information-outline"></i>
                        <span class="nav-text">Faqs</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="faq" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.faqs.index') }}">
                                    <span class="nav-text">Faqs</span>

                                </a>
                            </li>
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
                                <a class="sidenav-item-link" href="/admincontactos">
                                    <span class="nav-text">Mostrar Contactos</span>

                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#atletas"
                        aria-expanded="false" aria-controls="email">
                        <i class="mdi mdi-information-outline"></i>
                        <span class="nav-text">Atletas</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="atletas" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li>
                                <a class="sidenav-item-link" href="{{ route('admin.atletas.index') }}">
                                    <span class="nav-text">Atletas</span>

                                </a>
                            </li>
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

                <ul class="nav navbar-nav">
                    <!-- User Account -->
                    <li class="dropdown user-menu">
                        <button class="dropdown-toggle nav-link" data-toggle="dropdown">

                            @if (Auth::check())
                                <img src="{{ asset('img/' . Auth::user()->img) }}" class="user-image rounded-circle"
                                    alt="User Image" />
                            @else
                                <a id="profile_Icon_Box" href="{{ route('login') }}">
                                    <img id="profile_Icon"src="{{ asset('img/profile_icon.png') }}" alt="">
                                </a>
                            @endauth

                            <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a class="dropdown-link-item" href="{{ route('profileAdmin.show') }}">
                                <i class="mdi mdi-account-outline"></i>
                                <span class="nav-text">Perfil</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-link-item" href="{{ route('profileAdmin.edit') }}">
                                <i class="mdi mdi-settings"></i>
                                <span class="nav-text">Configurações</span>
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
