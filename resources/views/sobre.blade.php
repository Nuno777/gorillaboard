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
        <img src="{{ asset('img/' . $sobre->img) }}" alt="1a Imagem" style="width:100%"> 
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

 <!-- IMAGENS DE NOS E CARGOS-->
<div class="containerimgs">
 @foreach ($users as $user)
 <div class="imagenspessoas row">

<div class="imagemtexto col">
   
    <img src="{{ asset('img/' . $user->img) }}" alt="1a Imagem">
    <h6>{{ $user->name }} <br></h6>
  
</div>
</div>


  @endforeach
</div>

@endsection
