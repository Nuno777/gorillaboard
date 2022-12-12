@extends('layouts.master')

@section('custom_css', asset("css/stylesobre.css"))

@section('title', 'GorillaBoards')
@section('main')

<div class="imagem1">
        <img src="{{ asset('img/imagem1.png') }}" alt="imagem central">
    </div>

    <div class="texto1">
        <p>Como tudo começou...</p>

        <div class="texto1pequeno">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type
                specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised
                in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type
                specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised
                in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.</p>
        </div>
    </div>

 <!-- 3 IMAGENS DA EQUIPA -->

    <div class="row">@foreach ($sobre as $sobre)
        <div class="column">
        <img src="{{ asset($sobre->img) }}" alt="1a Imagem" style="width:100%"> 
        </div>
        @endforeach
    </div>
    </div>

    <div class="texto1">
        <p>Quem somos?</p>

        <div class="texto1pequeno">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type
                specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised
                in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type
                specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised
                in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.</p>
        </div>
    </div>

 <!-- IMAGENS DE NOS -->

    <div class="imagenspessoas row">

        <div class="imagemtexto col">
            <img src="{{ asset('img/joel.png') }}" alt="1a Imagem">
            <h6>Joel Mota <br> CFO</h6>
        </div>
        <div class="imagemtexto col">
        <img src="{{ asset('img/miguel.png') }}" alt="2a Imagem">
            <h6>Miguel Mendes<br> CTO</h6>
        </div>
        <div class="imagemtexto col">
        <img src="{{ asset('img/roman.png') }}" alt="3a Imagem">
            <h6>Roman Kalyuzhnov<br> CEO</h6>
        </div>
        <div class="imagemtexto col">
        <img src="{{ asset('img/nuno.png') }}" alt="4a Imagem">
            <h6>Nuno Albano<br> COO</h6>
        </div>
        <div class="imagemtexto col">
        <img src="{{ asset('img/tiago.png') }}" alt="5a Imagem">
            <h6>Tiago Marques<br> CMO</h6>
        </div>

        </div>

@endsection
