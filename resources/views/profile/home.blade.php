@extends('layouts.profile')
@section('title', 'GorillaBoards')
@section('header-info')

    <div class="textUser">
        <div class="col-12 introUser">
            <img class="imgUser" src="{{ asset('storage/' . Auth::user()->img) }}" alt="">
            <h3 style="color:black;">Olá, {{ Auth::user()->name }}</h3><br>
            <p style="color:black;">Bem vindo a sua conta na Gorillaboard </p>
        </div>
    @endsection


    @section('content-base')
    <div class="cont-user">
        <div class="infouser">
            <h2 style="color:blueviolet;">Sua Informação Base</h2>
            <div class="info">
                <label for="">Nome</label>
                <p>{{ Auth::user()->name }}</p>

                <label for="">Email</label>
                <p>{{ Auth::user()->email }}</p>
            </div>
        </div>
        <div class="infoatleta">
            {{-- @if( Auth::user()->atleta() <= '0')
                {{ return: Redirect::to('.profile.add-atleta') }}
            @else
                @if (Auth::user()->atletas->user_id == Auth::user()->id)
                    @if(Auth::user()->atletas->idade_atleta >= '18')
                        <h2>Dados do Atleta</h2>
                        <label for="">Idade</label>
                        <p>{{ Auth::user()->atletas->idade_atleta }}</p>
                    @else
                    <h2>Dados do Atleta</h2>
                    <label for="">Idade</label>
                    <p>{{ Auth::user()->atletas->idade_atleta }}</p>

                    <label for="">Email_Encarregado_Edu</label>
                    <p>{{ Auth::user()->atletas->email_encarregado_edu }}</p>

                    <label for="">CC_Encarregado_Edu</label>
                    <p>{{ Auth::user()->atletas->cc_encarregado_edu }}</p>

                    <label for="">Tele_Encarregado_Edu</label>
                    <p>{{ Auth::user()->atletas->tele_encarregado_edu }}</p>


                    @endif
                @endif
            @endif --}}
        </div>
    </div>


    @endsection
