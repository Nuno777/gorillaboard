@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">


        @include('layouts.partials.dashboard.nav')
    <div class="wrapper">
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                            <form action="{{ route('adminContactos.update', $contacto) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="name-padding">Nome</label><br>
                                    <input type="text" name="nome_Contactos" id="name" class="form-control"
                                        placeholder="Insira o seu nome" value="{{old('nome_Contactos',$contacto->nome_Contactos)}}">
                                </div>

                                <div class="form-group">
                                    <label for="email" class="email-padding">Email</label><br>
                                    <input type="email" name="email_Contactos" id="email" class="form-control"
                                        placeholder="Insira o seu mail" value="{{old('email_Contactos',$contacto->email_Contactos)}}">
                                </div>

                                <div class="form-group">
                                    <label for="message" class="message-padding">Mensagem</label><br>
                                    <textarea name="menssagem_Contactos" id="message" class="form-control" rows="3"
                                        placeholder="Insira a sua mensagem">{{old('menssagem_Contactos',$contacto->menssagem_Contactos)}}</textarea>
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
