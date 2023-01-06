@vite('public/css/adminCss/adminFaqs.css')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')
        @if ($errors->any())
            @include ('layouts.partials.errors')
        @endif
        @if (!empty(session('success')))
            @include ('layouts.partials.success')
        @endif
        <section class="content">
            <div class="container-fluid">


                <div class="card-body">
                    <h2 class="name-page"><a href="{{ url()->previous() }}">
                            <i class='bx bx-chevron-left bx-sm'></i></a>Faqs</h2>
                    <a class="button" href="{{ route('admin.faqs.create') }}"><i class='bx bx-plus'></i>Criar Faq</a>

                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Pergunta</th>
                                        <th scope="col">Resposta</th>
                                        <th scope="col">show</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($faqs as $faq)
                                        <tr>
                                            <td>{{ $faq->id }}</td>
                                            <td>{{ $faq->pergunta }}</td>
                                            <td>{{ $faq->resposta }}</td>
                                            <td>
                                                <a href="{{ route('admin.faqs.show', $faq) }}">
                                                    <button type="submit" class="link"
                                                        style="background-color: transparent; border:none">
                                                        <i class='bx bx-show bx-sm'style="color:var(--warning);" data-toogle="tooltip"></i> 
                                                </a>
                                                </button>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.faqs.edit', $faq) }}">
                                                    <button type="submit" class="link"
                                                        style="background-color: transparent; border:none">
                                                        <i class="mdi mdi-pencil mdi-24px" data-toogle="tooltip"></i>
                                                </a>
                                                </button>
                                            </td>
                                            <td>
                                                <form role="form" action="{{ route('admin.faqs.destroy', $faq) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="link"
                                                        style="background-color: transparent; border:none">
                                                        <i class="mdi mdi-trash-can mdi-24px text-danger"
                                                            data-toogle="tooltip"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- <div class="card-header py-3">
        <a class="btn btn-primary" href="{{ route('adminFaqsCreate') }}">
            <i class="fas fa-plus"></i> Nova Categoria
        </a>
    </div> --}}
                        {{-- <div class="card-body">
        @if (count($faqs))
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    ...
                    <tbody>
                        @foreach ($faqs as $faq)
                            <tr>
                                <td>{{ $faq->pergunta }}</td>
                                <td nowrap>
                                    <a class="btn btn-xs btn-primary btn-p"
                                        href="{{ route('adminFaqsShow', $faq) }}"><i
                                            class="fas fa-eye fa-xs"></i></a>
                                    <a class="btn btn-xs btn-warning btn-p"
                                        href="{{ route('adminFaqsEdit', $faq) }}"><i
                                            class="fas fa-pen fa-xs"></i></a>
                                    <form method="POST" action="{{ route('adminFaqsDestroy', $faq) }}"
                                        role="form" class="inline"
                                        onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-xs btn-danger btn-p">
                                            <i class="fas fa-trash fa-xs"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <h6>Não existem categorias registadas</h6>
        @endif
    </div> --}}
