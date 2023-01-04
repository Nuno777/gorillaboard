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
                                                <th scope="col">Email</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Aulas</th>
                                                <th scope="col">Editar</th>
                                                <th scope="col">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($aula as $aulas)
                                                <tr>
                                                    <td scope="row">{{ $aulas->num_inscricoes }}</td>

                                                  {{--   <td>
                                                        <a href="{{ $aulas->id }}/edit">
                                                            <button type="submit" class="link"
                                                                style="background-color: transparent; border:none">
                                                                <i class="mdi mdi-pencil" data-toogle="tooltip"></i>
                                                        </a>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <form role="form"
                                                            action="{{ route('', $aulas->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="link"
                                                                style="background-color: transparent; border:none">
                                                                <i class="mdi mdi-trash-can text-danger"
                                                                    data-toogle="tooltip"></i>
                                                            </button>
                                                        </form>
                                                    </td> --}}
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
