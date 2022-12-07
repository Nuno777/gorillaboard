@extends('layout.navAdmin')
@section('adminMain')
    <div class="card-header py-3">
        <a class="btn btn-primary" href="{{ route('admin.categories.create') }}">
            <i class="fas fa-plus"></i> Nova Categoria
        </a>
    </div>
    <div class="card-body">
        @if (count($categories))
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    ...
                    <tbody>
                        @foreach ($faqResults as $faqResult)
                            <tr>
                                <td>{{ $faqResult->name }}</td>
                                <td nowrap>
                                    <a class="btn btn-xs btn-primary btn-p"
                                        href="{{ route('admin.categories.show', $faqResult) }}"><i
                                            class="fas fa-eye fa-xs"></i></a>
                                    <a class="btn btn-xs btn-warning btn-p"
                                        href="{{ route('admincategories.edit', $faqResult) }}"><i
                                            class="fas fa-pen fa-xs"></i></a>
                                    <form method="POST" action="{{ route('admin.categories.destroy', $faqResult) }}"
                                        role="form" class="inline"
                                        onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-xs btn-danger btn-
    p">
                                            <i class="fas fa-trash fa-xs"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endsection
