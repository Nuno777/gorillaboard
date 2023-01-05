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
                                <h4 class="title">Lista das Inscrições</h4>
                            </div>

                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">User</th>
                                                <th scope="col">Desporto</th>
                                                <th scope="col">Inscrições</th>
                                                <th scope="col">Presenças</th>
                                                <th scope="col">Editar</th>
                                                <th scope="col">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($linhas as $inscricao)
                                                <tr>
                                                    <td scope="row">{{ $inscricao->user->name }}</td>
                                                    <td> {{ $inscricao->desporto->modalidades }} </td>
                                                    <td> {{ $inscricao->num_inscricoes }} </td>
                                                    <td> {{ $inscricao->num_presencas }} </td>
                                                    <td>
                                                        <button type="submit" class="link"
                                                            style="background-color: transparent; border:none">
                                                            <i class="mdi mdi-pencil text-primary"
                                                                data-toogle="tooltip"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <form role="form" action="{{ route('presenca.delete', $inscricao->id) }}"
                                                            method="POST">
                                                            @csrf

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
