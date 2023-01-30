@extends('layouts.master')
{{-- @section('custom_css', asset("css/stylesobre.css")) --}}
<link href="{{ asset('css/stylesobre.css') }}" rel="stylesheet">
@section('title', 'GorillaBoards')
@section('main')

<div class="imagem1">
        <img src="{{ asset('img/imagem1.png') }}" alt="imagem central">
    </div>

    <div class="texto1">
        <p>Como tudo começou...</p>

        <div class="texto1pequeno">
            <p>
                {{$sobre_texto->first()->texto}}
            </p>
        </div>
    </div>

 <!-- 3 IMAGENS DA EQUIPA -->

    <div class="row">@foreach ($sobre as $sobre)
        <div class="column">
        <img src="{{ asset('storage/' . $sobre->img) }}" alt="1a Imagem" style="width:100%"> 
        </div>
        @endforeach
    </div>
    </div>

    <div class="texto1">
        <p>Quem somos?</p>

        <div class="texto1pequeno">
            <p>{{$sobre_texto->last()->texto}}</p>
        </div>
    </div>

 <!-- IMAGENS DE NOS E CARGOS-->
<div class="containerimgs">
 @foreach ($users as $user)
 <div class="imagenspessoas row">

<div class="imagemtexto col">
   
    <img src="{{ asset('storage/' . $user->img) }}" alt="1a Imagem">
    <h6>{{ $user->name }} <br></h6>
  
</div>
</div>


  @endforeach
</div>

@endsection
