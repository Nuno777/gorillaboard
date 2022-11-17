@extends('layout.master')
@section('title', 'GorillaBoards')
@section('main')

<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
    </div>
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="{{ asset('img/supertubos.png') }}" class="d-block w-100" alt="Sunset Over the City" />
            <div class="carousel-caption d-none d-md-block color_back">
                <h3>Aulas de Surf</h3>
                <h5>
                    Peniche
                </h5>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>


  </div>


@endsection
