@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">


        @include('layouts.partials.dashboard.nav')
    <div class="wrapper">
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                            <form action="{{ route('adminContactos.enviarEmail', $contacto) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="message" class="message-padding">Mensagem</label><br>
                                    <textarea name="menssagem_Contactos" id="message" class="form-control" rows="3"
                                        placeholder="Insira a sua mensagem">{{old('menssagem_Contactos','')}}</textarea>
                                </div>

                                <div class="form-footer mt-6">
                                    <button type="submit" class="btn btn-success btn-pill">Submeter</button>
                                    <a href="{{ route('admincontactos') }}" class="btn btn btn-pill">Cancelar</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        @include('layouts.partials.dashboard.footer')
