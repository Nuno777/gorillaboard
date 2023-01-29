@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">
        @if ($errors->any())
            @include ('layouts.partials.errors')
        @endif
        @if (!empty(session('success')))
            @include ('layouts.partials.success')
        @endif
        @include('layouts.partials.dashboard.nav')
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary" style="background-color: #F3F8FB">
                            <div class="card-body">
                                <h4 class="title">Página users</h4>
                            </div>

                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">Saudação</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">E-mail</th>
                                                <th scope="col">Telemovel</th>
                                                <th scope="col">Imagem</th>
                                                <th scope="col">Admin</th>
                                                <th scope="col">Editar</th>
                                                <th scope="col">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            <tr>
                                                @if($user->salutation == '' )
                                                    <td>Sem Saudação</td>
                                                @else
                                                    <td>{{ $user->salutation }}</td>
                                                @endif
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                @if(is_null($user->number_phone))
                                                    <td>Vazio</td>
                                                @else
                                                    <td>{{ $user->number_phone}}</td>
                                                @endif
                                                <td><img style="width: 50px; height:auto;" src="{{ asset('storage/public/' . $user->img) }}" alt="Imagem Profile"></td>
                                                <td>{{ $user->admin }}</td>
                                                <td>
                                                    <a href="{{ route('admin.user.edit', $user) }}">
                                                        <button type="submit" class="link" style="background-color: transparent; border:none">
                                                            <i class="mdi mdi-pencil" data-toogle="tooltip"></i>
                                                    </a>
                                                    </button>
                                                </td>
                                                <td>
                                                    <form role="form" action="{{ route('admin.user.destroy', $user) }}" method="POST" onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="link" style="background-color: transparent; border:none">
                                                            <i class="mdi mdi-trash-can text-danger" data-toogle="tooltip"></i>
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
