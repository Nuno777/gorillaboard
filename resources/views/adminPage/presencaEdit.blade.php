@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">


    @include('layouts.partials.dashboard.nav')
    <div class="wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card card-header" style="background-color: #F3F8FB">
                        <div class="card-body">
                            <h4 class="title">Marcar Presença</h4>
                        </div>

                        <form action="{{ route('presenca.update', $userDesporto) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput2">Email</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Escreva o seu Email"
                                            value="{{ old('email') ?? $userDesporto->user->email }}"
                                            pattern="^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.(([0-9]{1,3})|([a-zA-Z]{2,3})|(aero|coop|info|museum|name))$"
                                            required disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlPassword">Nome</label>
                                        <input type="text" class="form-control" name="nome" id="nome"
                                            placeholder="Escreva o seu Nome"
                                            value="{{ old('nome') ?? $userDesporto->user->name }}" required disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlPassword">Desporto</label>
                                        <input type="text" class="form-control" name="desporto" id="desporto"
                                            placeholder="Desporto"
                                            value="{{ old('desporto') ?? $userDesporto->desporto->modalidades }}"
                                            required disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlPassword">Número Inscrições</label>
                                        <input type="number" class="form-control" name="ninscri" id="ninscri"
                                            placeholder="Número de Inscrições"
                                            value="{{ old('ninscri') ?? $userDesporto->num_inscricoes }}" required
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlPassword">Número Presenças</label>
                                        <input type="number" class="form-control" name="npresen" id="npresen"
                                            placeholder="Número de Presenças" min="1" max="3"
                                            value="{{ old('npresen') ?? $userDesporto->num_presencas }}" required>
                                    </div>
                                </div>

                                <div class="form-footer mt-6">
                                    <button type="submit" class="btn btn-primary btn-pill">Marcar Presença</button>
                                    <a href="{{ route('presenca.show') }}" class="btn btn-light btn-pill">Cancelar</a>
                                </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </section>

    @include('layouts.partials.dashboard.footer')
