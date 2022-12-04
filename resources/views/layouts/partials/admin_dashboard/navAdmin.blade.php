<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin - Gorillaboard</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/navbarAdmin.css') }}">
</head>

<body>
    <div class="sidebar close">
         {{-- LOGOTIPO --}}
        <a href="#" class="logo-box">
            <img src="{{ asset('img/gorilla_horizontal.png') }}" alt="Logotipo">
        </a>

         {{-- List --}}
         <ul class="sidebar-list">
             {{-- Non Dropdon List item --}}
             <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class="fa-solid fa-house"></i>
                        <span class="name">Home</span>
                    </a>
                    {{-- <i class="fa-solid fa-chevron-down"></i> --}}
                </div>
                <div class="submenu">
                    <a href="#">Home</a>
                     {{-- submenu List Here --}}
                </div>
             </li>

             {{-- Dropdon List item--}}
             <li class="dropdown">
                <div class="title">
                    <a href="#">
                        <i class="fa-solid fa-table"></i>
                        <span class="name">Tables Users</span>
                    </a>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Users</a>
                    <a href="#" class="link ">Atletas</a>
                    <a href="#" class="link ">Inscrição Aulas</a>
                    <a href="#" class="link ">Presenças</a>

                     {{-- submenu List Here --}}
                </div>
             </li>
         </ul>
    <div></div>

    </div>

     {{-- Home Section --}}

    <section>
        <div class="toggle-sidebar">
            <i class="fa-solid fa-bars"></i>
            <div class="text">
                toggle
            </div>
        </div>
    </section>

    <script src="{{ asset   ('js/navbarAdmin.js') }}"></script>
</body>

</html>
