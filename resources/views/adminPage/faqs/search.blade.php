@vite('public/css/adminCss/adminFaqs.css')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')
        @if ($errors->any())
            @include ('layouts.partials.errors')
        @endif
        <section class="content">
            <div class="container-fluid">


                <div class="card-body">
                    <h2 class="name-page"><a href="{{ url()->previous() }}">
                            <i class='bx bx-chevron-left bx-sm'></i></a>Faqs</h2>
                    <a class="buttonPlus" href="{{ route('admin.faqs.create') }}"><i class='bx bx-plus'></i>Criar Faq</a>
                    <form action="{{ route('admin.faqs.search', $faqs) }}" method="get">
                        <div class="input-group">
                            <div class="form-outline">
                              <input type="search" id="form1" class="form-control" placeholder="Search" name="query" />
                            </div>
                            <button type="button" class="btn btn-primary">
                                <i class="fas fa-search"></i> go
                              </button>
                          </div>
                    </form>

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
                                            <td class="text-center">
                                                <a href="{{ route('admin.faqs.show', $faq) }}">
                                                    <button type="submit" class="link"
                                                        style="background-color: transparent; border:none">
                                                        <i class='bx bx-show bx-sm'style="color:var(--warning);" data-toogle="tooltip"></i>
                                                </a>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.faqs.edit', $faq) }}">
                                                    <button type="submit" class="link"
                                                        style="background-color: transparent; border:none">
                                                        <i class="mdi mdi-pencil mdi-24px" data-toogle="tooltip"></i>
                                                </a>
                                                </button>
                                            </td>
                                            <td class="text-center">
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
                            <div class="Paguination">
                                {{ $faqs->links() }}
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </section>
    </div>
</body>
