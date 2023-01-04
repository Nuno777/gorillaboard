@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')

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
                                                <th scope="col">created_at</th>
                                                <th scope="col">Editar</th>
                                                <th scope="col">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contactos as $contacto)
                                                <tr>
                                                    <td scope="row">{{ $contacto->nome_Contactos }}</td>
                                                    <td>{{ $contacto->email_Contactos }}</td>
                                                    <td><a href="{{ route('adminContactosMenssagem', $contacto->id) }}/edit">
                                                            <button type="submit" class="link"
                                                                style="background-color: transparent; border:none">
                                                                <i class="mdi mdi-message-text-outline" data-toogle="tooltip"></i>
                                                        </a>
                                                        </button></td>
                                                        
                                                    <td>{{ $contacto->created_at }}</td>
                                                    <td>
                                                        <a href="{{ route('adminContactosEdit', $contacto->id) }}/edit">
                                                            <button type="submit" class="link"
                                                                style="background-color: transparent; border:none">
                                                                <i class="mdi mdi-pencil" data-toogle="tooltip"></i>
                                                        </a>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <form role="form"
                                                            action="{{ route('adminContactos.destroy', $contacto->id) }}"
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
        </section>

        @include('layouts.partials.dashboard.footer')
