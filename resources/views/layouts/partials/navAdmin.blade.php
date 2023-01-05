<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['public/css/adminCss/navAdmin.css', 'public/js/navbarAdmin.js'])
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard Sidebar Menu</title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img id="logo" src="{{ asset('img/favicon.png') }}" alt="logotipo">
                </span>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">



                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Aulas</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">Presenças</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('admin.faqs.index') }}">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">faqs</span>
                        </a>
                        {{-- <i class='bx bx-chevron-down arrow'></i>
                        <ul class="sub-menu">
                            <li><a class="link_name" href="#"></a>Posts</li>
                            <li><a href="#"></a>mostrar</li>
                            <li><a href="#"></a>editar</li>
                        </ul> --}}
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">contactos</span>
                        </a>
                    </li>    
                </ul>
            </div>
            <div class="pro">
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="{{ asset('img/' . Auth::user()->img) }}" alt="profile">
                    </div>
                        <div class="name-job">
                            <div class="profile-name">{{ Auth::user()->name }}</div>
                            <div class="job">{{ Auth::user()->perms }}</div>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="route('logout')"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                <i class='bx bx-log-out icon'></i>
                            </a>
                        </form>
                </div>
            </div>
                <div class="bottom-content">
                    {{-- <li class="">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="route('logout')"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                <i class='bx bx-log-out icon'></i>
                                <span class="text nav-text">Logout</span>
                            </a>
                        </form>
                    </li> --}}

                    <li class="mode">
                        <div class="sun-moon">
                            <i class='bx bx-moon icon moon'></i>
                            <i class='bx bx-sun icon sun'></i>
                        </div>
                        <span class="mode-text text">Dark mode</span>

                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                    </li>
                </div>

            </div>
        </div>

    </nav>

    <section class="home">
        {{-- <div class="user">
            <h5>{{ Auth::user()->name }}</h4>
            <div class="img">
                <img src="{{ asset('img/'.Auth::user()->img) }}" alt="imagem Utilizador">
            </div>
        </div> --}}
        <div class="content">
            @yield('adminMain')
        </div>
    </section>

</body>

</html>
