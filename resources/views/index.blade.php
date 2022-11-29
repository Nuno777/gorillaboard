@extends('layouts.master')
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
            <img src="{{ asset('img/supertubos.png') }}" class="d-block w-100" alt="Sunset Over the City" />
            <div class="carousel-caption d-none d-md-block color_back">
                <h3>Supertubos</h3>
                <h5>
                    Peniche
                </h5>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{ asset('img/ericeira.png') }}" class="d-block w-100" alt="Canyon at Nigh" />
            <div class="carousel-caption d-none d-md-block color_back">
                <h3>Boardriders Skatepark</h3>
                <h5>
                    Ericeira
                </h5>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="{{ asset('img/nazare.png') }}" class="d-block w-100" alt="Cliff Above a Stormy Sea" />
            <div class="carousel-caption d-none d-md-block color_back">
                <h3>Praia do Norte</h3>
                <h5>
                    Nazaré
                </h5>
            </div>
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
        <div class="info_home col">
            <div class="info_text">
                <h3>Desportos</h3>
            </div>
        </div>
        <div class="info_home col">
            <div class="info_text">
                <h3>Aulas</h3>
            </div>
        </div>
        <div class="info_home col">
            <div class="info_text">
                <h3>Loja</h3>
            </div>
        </div>
    </div>
</div>
@endsection

