<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@extends('layouts.partials.navAdmin')
@vite('public/css/contactAdm.css')
@section('adminMain')

<section>
    <div class="card-body">
        @if (count($contactos))
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                …
                <tbody>
                    @foreach($contactos as $contact)
                    <tr>
                        <td>{{$contact->nome_Contactos}}</td>
                        <td>{{$contact->email_Contactos}}</td>
                        <td>{{$contact->created_at}}</td>
                        <td nowrap>
                            <a class="btn btn-xs btn-primary btn-p" href="{{route('adminPage.adminContactos.show',$contact)}}"><i class="fas fa-eye fa-xs"></i></a>
                            <form method="POST" action="{{route('adminPage.adminContactos.destroy',$contact)}}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-xs btn-danger btnp">
                                    <i class="fas fa-trash fa-xs"></i>
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

@endsection
