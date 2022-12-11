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

            <div class="centered"><img src="{{ asset('img/supertubosgif.gif') }}" alt=""></div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{ asset('img/ericeira.gif') }}" class="d-block w-100" alt="Boardriders" />
            <div class="centered"><img src="{{ asset('img/Boardridersgif.gif') }}" alt=""></div>
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
    <a href="" class="col-md">
      <div class="card outercard cartas_home">
        <img src="{{ asset('img/surf_homepage_img.png') }}" class="card-img-top" alt="...">
          <div class="card-body card_titulo">
            <h5 class="card-title">Surf</h5>
          </div>
      </div>
    </a>
    <a href="" class="col-md">
      <div class="card nexttomiddlecard cartas_home">
        <img src="{{ asset('img/skate_homepage_img.png') }}" class="card-img-top" alt="...">
          <div class="card-body card_titulo">
            <h5 class="card-title">Skate</h5>
          </div>
      </div>
    </a>
    <a href="" class="col-md">
      <div class="card middlecard cartas_home">
        <img src="{{ asset('img/bodyboard_homepage_img.png') }}" class="card-img-top" alt="...">
          <div class="card-body card_titulo">
            <h5 class="card-title">Bodyboard</h5>
          </div>
      </div>
    </a>
    <a href="" class="col-md">
      <div class="card nexttomiddlecard cartas_home">
        <img src="{{ asset('img/dhskate_homepage_img.png') }}" class="card-img-top" alt="...">
          <div class="card-body card_titulo">
            <h5 class="card-title">Downhill Skate</h5>
          </div>
      </div>
    </a>
    <a href="" class="col-md">
      <div class="card outercard cartas_home">
        <img src="{{ asset('img/psurf_homepage_img.png') }}" class="card-img-top" alt="...">
          <div class="card-body card_titulo">
            <h5 class="card-title">Paddle Surf</h5>
          </div>
      </div>
    </a>
  </div>
</div>

<div id="aulas_section">
  <h3>Aulas</h3>
</div>

<div id="loja_section">
  <h3>Loja</h3>
</div>
@endsection

