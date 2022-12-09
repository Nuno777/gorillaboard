@extends('layouts.partials.navAdmin')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


@section('adminMain')
<div class="container-fluid">
    @if ($errors->any())
    @include ('layout.partials.error')
    @endif
    @if (!empty(session('success')))
    @include ('layout.partials.success')
    @endif
    </div>
    <div class="card-header py-3">
        <a class="btn btn-primary" href="{{ route('admin.faqs.create') }}">
            <i class="fas fa-plus"></i> Nova Categoria
        </a>
    </div>
    <div class="card-body">
        @if (count($faqs))
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    ...
                    <tbody>
                        @foreach ($faqs as $faq)
                            <tr>
                                <td>{{ $faq->Pergunta }}</td>
                                <td nowrap>
                                    <a class="btn btn-xs btn-primary btn-p"
                                        href="{{ route('admin.faqs.show', $faq) }}"><i
                                            class="fas fa-eye fa-xs"></i></a>
                                    <a class="btn btn-xs btn-warning btn-p"
                                        href="{{ route('admin.faqs.edit', $faq) }}"><i
                                            class="fas fa-pen fa-xs"></i></a>
                                    <form method="POST" action="{{ route('admin.faqs.destroy', $faq) }}"
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
    </div>
@endsection
