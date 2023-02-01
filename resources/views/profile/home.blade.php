@extends('layouts.profile')
@section('title', 'GorillaBoards')
@section('header-info')
    <div class="d-flex header-home row">
        <div id="header-img" class="col-2 col-sm-2 col-md-1 col-lg-1 col-xl-1 p-0 header-img">
            <div class="img-user">
                <img class="" src="{{ asset('storage/' . Auth::user()->img) }}" alt="Imagem Profile">
            </div>
        </div>
        <div class="col p-0">
            @if (Auth::user()->salutation != 'Sra')
                <h3 class="card-title"> Bem vindo {{ Auth::user()->salutation }}, {{ Auth::user()->name }}</h3>
            @else
                <h3 class="card-title"> Bem vinda {{ Auth::user()->salutation }}, {{ Auth::user()->name }}</h3>
            @endif
            <div class="d-flex ">
                <a href="{{ route('profile.index') }}"><button class="btn-nav-profile"> </button>Home</a>
                <a href="{{ route('profile.edit', Auth::user()) }}"><button class="btn-nav-profile pr-3"></button>Alterar
                    Perfil</a>
                <a href="{{ route('profile.add-atleta') }}"><button class="btn-nav-profile pr-3"></button>Adicionar
                    Atleta</a>
            </div>

        </div>

    </div>

@endsection


@section('content-base')
    <div class="row ">
        <h2 style="color:#0E71B3;">Informação Base</h2>
        <div class="col-6">
            <label for="">Saudação</label>
            @if (Auth::user()->salutation == '')
                <p>Sem Saudação</p>
            @else
                <p>{{ Auth::user()->salutation }}</p>
            @endif
        </div>

        <div class="col-6">
            <label for="">Nome</label>
            <p>{{ Auth::user()->name }}</p>
        </div>

        <div class="col-6">
            <label for="">Email</label>

            <p>{{ Auth::user()->email }}</p>
        </div>

        <div class="col-6">
            <label for="">Numero de telemovel</label>
            @if (is_null(Auth::user()->number_phone))
                <p>Sem Contacto</p>
            @else
                <p>{{ Auth::user()->number_phone }}</p>
            @endif
        </div>
        <div class="infoatleta row">
            @if (is_null(Auth::user()->atletas))
            @else
                @if (Auth::user()->atletas->user_id == Auth::user()->id)
                    @if (Auth::user()->atletas->idade_atleta >= '18')
                        <h2 style="color:#0E71B3;">Dados do Atleta</h2>
                        <label for="">Idade</label>
                        <p>{{ Auth::user()->atletas->idade_atleta }}</p>
                    @else
                        <h2 style="color:#0E71B3;">Dados do Atleta</h2>
                        <div class="col">
                            <label for="">Idade</label>
                            <p>{{ Auth::user()->atletas->idade_atleta }}</p>
                        </div>

                        <div class="col">
                            <label for="">Email Encarregado Edu</label>
                            <p>{{ Auth::user()->atletas->email_encarregado_edu }}</p>
                        </div>

                        <div class="col">
                            <label for="">CC Encarregado Edu</label>
                            <p>{{ Auth::user()->atletas->cc_encarregado_edu }}</p>
                        </div>

                        <div class="col">
                            <label for="">Tele Encarregado Edu</label>
                            <p>{{ Auth::user()->atletas->tele_encarregado_edu }}</p>
                        </div>
                    @endif
                @endif
            @endif
        </div>

    </div>




@endsection
