@include('layouts.partials.dashboard.head')
<style>
.buttonPlus {
    background-color: #2aa9ff;
    border: none;
    color: #fff;
    padding: 5px 10px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    transition-duration: 0.4s;
    border-radius: 0.5rem;
    margin-bottom: 0.5rem;
}

.buttonPlus:hover {
    background-color:#167abd;
    color: #fff;
}
</style>
<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')
        <section class="content">
            <div class="container-fluid">
                <a class="buttonPlus" href="{{ route('admin.sobre.create') }}"><i class='bx bx-plus'></i>Criar Sobre</a>
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary" style="background-color: #F3F8FB">
                            <div class="card-body">
                                <h4 class="title">Página Sobre</h4>
                            </div>

                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">Texto</th>
                                                <th scope="col">Imagem</th>
                                                <th scope="col">Featured</th>
                                                <th scope="col">Editar</th>
                                                <th scope="col">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sobre as $sobre)
                                            <tr>
                                                <td>{{ $sobre->texto }}</td>
                                                <td>{{ $sobre->img }}</td>
                                                <td>{{ $sobre->featured }}</td>
                                                <td>
                                                    <a href="{{ route('admin.sobre.edit', $sobre->id) }}">
                                                        <button type="submit" class="link" style="background-color: transparent; border:none">
                                                            <i class="mdi mdi-pencil" data-toogle="tooltip"></i>
                                                    </a>
                                                    </button>
                                                </td>
                                                <td>
                                                    <form role="form" action="{{ route('admin.sobre.destroy', $sobre) }}" method="POST" onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
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