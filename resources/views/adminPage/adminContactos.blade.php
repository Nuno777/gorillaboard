@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')

        {{-- main --}}
        {{-- <section>
            <div class="card-body">
                @if (count($contactos))
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            …
                            <tbody>
                                @foreach ($contactos as $contact)
                                    <tr>
                                        <td>{{ $contact->nome_Contactos }}</td>
                                        <td>{{ $contact->email_Contactos }}</td>
                                        <td>{{ $contact->created_at }}</td>
                                        <td nowrap>
                                            <a class="btn btn-xs btn-primary btn-p"
                                                href="{{ route('adminPage.adminContactos.show', $contact) }}">
                                                Ver Mensagem
                                                <i class="mdi mdi-eye-settings"></i>
                                            </a>
                                            <form method="POST"
                                                action="{{ route('adminPage.adminContactos.destroy', $contact) }}" role="form" class="inline"onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-xs btn-danger btnp">
                                                    Eliminar
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <h6>Não existem contactos registados</h6>
                @endif
            </div>

        </section> --}}

        <section class="content">
            <div class="container-fluid">


                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary" style="background-color: #F3F8FB">
                            <div class="card-body">
                                <h4 class="title">Lista dos Contactos</h4>
                            </div>

                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Mensagem</th>
                                                <th scope="col">Editar</th>
                                                <th scope="col">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contactos as $contact)
                                                <tr>
                                                    <td scope="row">{{ $contact->nome_Contactos }}</td>
                                                    <td>{{ $contact->email_Contactos }}</td>
                                                    <td>{{ $contact->menssagem_Contactos }}</td>
                                                    <td>
                                                        <a href="{{ $contact->id }}/edit">
                                                            <button type="submit" class="link"
                                                                style="background-color: transparent; border:none">
                                                                <i class="mdi mdi-pencil" data-toogle="tooltip"></i>
                                                        </a>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <form role="form"
                                                            action="{{ route('adminPage.adminContactos.destroy', $contact->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="link"
                                                                style="background-color: transparent; border:none">
                                                                <i class="mdi mdi-trash-can text-danger"
                                                                    data-toogle="tooltip"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>


        @include('layouts.partials.dashboard.footer')
