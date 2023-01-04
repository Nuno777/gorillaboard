@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')

        <section class="content">
            <div class="container-fluid">

                <div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            Informação da Menssagem
                        </div>
                        <div class="card-body">
                            <div><strong>Menssagem:</strong> {{ $contacto->menssagem_Contactos }} </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

    @include('layouts.partials.dashboard.footer')
