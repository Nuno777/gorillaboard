@extends('layouts.partials.navAdmin')
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
 </script>

@vite('public/css/adminCss/adminFaqs.css')
@section('adminMain')

<div class="">
    @if ($errors->any())
    @include ('layout.partials.error')
    @endif
    @if (!empty(session('success')))
    @include ('layout.partials.success')
    @endif
    </div>
    <div class="card-body">
        <h2 class="name-page"><a  href="{{ url()->previous() }}">
        <i class='bx bx-chevron-left bx-sm'></i></a>Faqs</h2>
        <a class="button" href="{{ route('admin.faqs.create') }}"><i class='bx bx-plus'></i>Criar Faq</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class=""><strong>ID</strong></th>
                    <th class=""><strong>Pergunta</strong></th>
                    <th class=""><strong>Resposta</strong></th>
                    <th class=""><strong>Acões</strong></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faqs as $faq)
                    <tr>
                        <td>{{ $faq->id}}</td>
                        <td>{{ $faq->pergunta }}</td>
                        <td>{{ $faq->resposta }}</td>
                        <td>
                            <a class="btn-view btn-p"href="{{ route('admin.faqs.show', $faq) }}">
                            <i class='bx bx-show bx-md'></i></a>
                            <a class="btn-edit btn-p"
                            href="{{ route('admin.faqs.edit', $faq) }}">
                            <i class='bx bx-edit bx-md'></i></a>
                            <form method="POST" action="{{ route('admin.faqs.destroy', $faq) }}" role="form" class="inline"
                                            onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-delete btn-p">
                                                <i class='bx bx-trash bx-md'></i></button>
                                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <div class="test">
        <button type="submit"><a  href="{{ url()->previous()}}"></a></button>
    </div>
</div>
    {{-- <div class="card-header py-3">
        <a class="btn btn-primary" href="{{ route('adminFaqsCreate') }}">
            <i class="fas fa-plus"></i> Nova Categoria
        </a>
    </div> --}}
    {{--<div class="card-body">
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
@endsection
