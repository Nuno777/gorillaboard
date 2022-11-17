<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/homepage_Style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesobre.css') }}">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />

</head>

<body>

    <nav>
        <ul id="navbar">
            <li><a id="profile_Icon_Box" href="#"><img id="profile_Icon" src="{{ asset('img/profile_icon.png') }}"
                        alt=""></a></li>
            <li id="li_Logo"><a href="/"><img id="nav_Logo" src="{{ asset('img/gorilla_horizontal.png') }}"
                        alt=""></a></li>
            <div class="nav_option">
                <li><a id="phone_Group" href="#"><img id="phone_Icon" src="{{ asset('img/phone_icon.png') }}"
                            alt="">266123123</a></li>
                <li><a class="active" href="{{route('sobre')}}">Sobre</a></li>
                <li><a c href="#news">Horarios</a></li>
                <li><a href="{{ route('aula') }}">Aulas</a></li>
                <li><a href="#about">Desportos</a></li>

            </div>
        </ul>

    </nav>


    <main>
        @yield('main')
    </main>


    <footer class="footer">
        <div class="footer__addr">
            <h1 class="footer__logo"><img src="{{ asset('IMG/gori_horizontal_branco.png') }}" alt="logo" width="130" /></h1>

            <h2>Contacto</h2>

            <address>
                Leiria, Portugal. Escola Superior de Tecnologia e GestÃ£o<br>

                <a class="footer__btn" href="mailto:gorillaboards@gmail.com">Contacte-nos</a>
            </address>
        </div>

        <ul class="footer__nav">
            <li class="nav__item">
                <h2 class="nav__title">Media</h2>

                <ul class="nav__ul">
                    <li>
                        <a href="#">Online</a>
                    </li>

                    <li>
                        <a href="#">Print</a>
                    </li>

                    <li>
                        <a href="#">Alternative Ads</a>
                    </li>
                </ul>
            </li>

            <li class="nav__item nav__item--extra">
                <h2 class="nav__title">Technology</h2>

                <ul class="nav__ul nav__ul--extra">
                    <li>
                        <a href="#">Hardware Design</a>
                    </li>

                    <li>
                        <a href="#">Software Design</a>
                    </li>

                    <li>
                        <a href="#">Digital Signage</a>
                    </li>

                    <li>
                        <a href="#">Artificial Intelligence</a>
                    </li>

                    <li>
                        <a href="#">IoT</a>
                    </li>
                </ul>
            </li>

            <li class="nav__item">
                <h2 class="nav__title">Legal</h2>

                <ul class="nav__ul">
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>

                    <li>
                        <a href="#">Terms of Use</a>
                    </li>

                    <li>
                        <a href="#">Sitemap</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="legal">
            <p>&copy; 2022 GorillaBoards. Todos os direitos reservados.</p>


        </div>
    </footer>





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>




</body>

</html>
