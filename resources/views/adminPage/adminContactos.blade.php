@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')

        {{-- main --}}
        <section>
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

        </section>

        @include('layouts.partials.dashboard.footer')
