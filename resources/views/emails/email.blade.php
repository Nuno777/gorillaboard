<!DOCTYPE html>
<html>

<head>
    <title>E-mail from Gorilaboards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div id="background-color">
        {{-- <header>
            <div id="logo">
                <img src="{{ asset('img/gori_horizontal.png') }}" alt="Logo_gorilla_boards" />
            </div>
        </header>
        <div id="banner">
            <img src="{{ asset('img/Artboard 1.png') }}" alt="" />
        </div> --}}
        <div class="one-col">
            <h1>Obrigado por nos ter contactado!</h1>
            {!! $content !!}

            <hr />

            <footer>
                <p id="contact">
                    GorillaBoards <br />
                    Número: + 351 234 567 890<br />
                    Morada: Rua do Sol, Peniche, Portugal <br />
                    contacto: admin@gorillaboards.com <br />
                    {{-- <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i> --}}
                </p>
            </footer>
        </div>
    </div>

    {{-- css --}}
    <style>
        body {
            background-color: #e5e4e4;
            font-size: 19px;
            max-width: 800px;
            margin: 0 auto;
            padding: 3%;
        }

        img {
            max-width: 100%;
        }

        header {
            width: 98%;
        }

        #logo {
            max-width: 120px;
            margin-top: 3%;
            margin-left: 3%;
            margin-bottom: 3%;
            float: left;
        }

        #background-color {
            background-color: #ddedfa;
        }

        .one-col {
            margin: 3%;
        }

        #contact {
            text-align: center;
            padding-bottom: 3%;
            line-height: 16px;
            font-size: 12px;
            color: #303840;
        }

        /* .fa {
            padding-top: 10px;
            font-size: 20px;
            width: 20px;
            text-decoration: none;
            color: black;
        } */
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>
