@extends('layouts.master')

@vite("public/js/homepage.js")

@section('title', 'GorillaBoards')

@section('main')
 <!-- Carousel wrapper -->
 <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
            aria-label="Slide 3"></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="{{ asset('img/supertubosgifback.gif') }}" class="d-block w-100" alt="Supertubos" />

            <div class="centered giftitle"><img src="{{ asset('img/supertubosgif.gif') }}" alt="" style="width: 1000px"></div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{ asset('img/ericeira.gif') }}" class="d-block w-100" alt="Boardriders" />
            <div class="centered giftitle"><img src="{{ asset('img/Boardridersgif.gif') }}" alt="" style="width: 1000px"></div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{ asset('img/serradaestrelaimg.png') }}" class="d-block w-100" alt="serradaestrela" />
            <div class="centered">Serra da Estrela</div>
        </div>
    </div>
    <!-- Inner --> 

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
        data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
        data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel wrapper -->

<div id="info_Row">
  <div class="row">
    <a href="#desportos_section" class="col">
      <div class="info_home">
              <h3>Desportos</h3>

      </div>
    </a>
    <a href="#aulas_section" class="col">
      <div class="info_home">
              <h3>Aulas</h3>

      </div>
    </a>
    <a href="#loja_section" class="col">
      <div class="info_home">
              <h3>Loja</h3>

      </div>
    </a>    
  </div>    
</div>

<div id="desportos_section" class="desp_sec">
  <div class="title_sections_home">
    <h3>Desportos</h3>
    <img src="{{ asset('img/trianglefor_title.png') }}" alt="triangle" class="triangletitle">
  </div>
  <div id="card_section" class="row">
    @foreach ($desportos as $desporto)
      <a href="" class="col-md">

        @if($loop->index == 1 || $loop->index == 3)
        <div class="card nexttomiddlecard cartas_home">
        @elseif($loop->index == 2)
        <div class="card middlecard cartas_home">
        @else
        <div class="card outercard cartas_home">
        @endif

          <img src="{{ asset('img/' . $desporto->images->first()->image) }}" class="card-img-top" alt="...">
            <div class="card-body card_titulo">
              <h5 class="card-title">{{ $desporto->modalidades }}</h5>
            </div>
        </div>
      </a>
    @endforeach

  </div>
</div>

<div id="aulas_section">
  <div class="title_sections_home_aulas">
    <h3>Aulas</h3>
    <img src="{{ asset('img/trianglefor_title.png') }}" alt="triangle" class="triangletitle">
  </div>

  <div class="carousel-container">
    <div class="inner-carousel">
      <div class="track">
        @foreach ($aulas as $aula)

        <div class="card-container">
          <div class="card_aulas card1">
            @if ($aula->desporto_id == 1)
              <p>Surf</p>
            @elseif($aula->desporto_id == 2)
              <p>Skate</p>
            @elseif($aula->desporto_id == 3)
              <p>Bodyboard</p>
            @elseif($aula->desporto_id == 4)
              <p>Downhill Skate</p>
            @elseif($aula->desporto_id == 5)
              <p>Paddle Surf</p>
            @endif
            <p>{{$aula->local_aulas}}</p>
            <p>{{$aula->data_aulas}}</p>
          </div>
        </div>

        @endforeach

      </div>
      <div class="nav_carousel_aulas">
        <button class="prev_aulas"><i class="fas fa-arrow-left fa-2x"></i></button>
        <button class="next_aulas"><i class="fas fa-arrow-right fa-2x"></i></button>
      </div>
    </div>
  </div>
</div>

<div id="loja_section">
  <h3>Loja</h3>
</div>
@endsection

