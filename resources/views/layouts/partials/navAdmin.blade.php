<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['public/css/navAdmin.css', 'public/js/navbarAdmin.js'])
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Dashboard - GorillaBoard</title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <a href="#"><img id="logo" src="{{ asset('img/favicon.png') }}" alt="logotipo"></a>

                </span>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class="fa-solid fa-magnifying-glass icon"></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class="fa-regular fa-house icon"></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class="fa-light fa-users icon"></i>
                            <span class="text nav-text">Users</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">professor_aula</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class="fa-regular fa-presentation-screen icon"></i>
                            <span class="text nav-text">presencas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">inscricao_aulas</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('adminfaqs') }}">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">faqs</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">desportos</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('admincontactos')}}">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">contactos</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="fa-regular fa-screen-users icon"></i>
                            <span class="text nav-text">aulas </span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">atletas </span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">aluno_aula </span>
                        </a>
                    </li>
                </ul>
            </div>
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

    </nav>

    <section class="home">
        <div class="content">
            @yield('adminMain')
        </div>
    </section>

</body>

</html>
