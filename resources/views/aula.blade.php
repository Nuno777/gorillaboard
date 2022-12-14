@extends('layouts.master')

@section('custom_css', asset('css/aulas.css'))

@section('title', 'GorillaBoards')
@section('main')

    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
        </div>
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <img src="{{ asset('img/supertubosgifback.gif') }}" class="d-block w-100" alt="Supertubos" />

                <div class="centered giftitle"><img src="{{ asset('img/supertubosgif.gif') }}" alt=""
                        style="width: 1000px"></div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-users"></i><b>Aulas de Grupo</b>
                            <p class="card-text">Durante as aulas serão transmitidas as bases da modalidade, de forma a
                                permitir uma aprendizagem rápida e sustentada.</p>
                            <p class="card-text">O acompanhamento do instrutor será sempre próximo, permitindo corrigir de
                                forma adequada todos os erros existentes.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-user"></i><b>Aulas Privadas</b>
                            <p class="card-text">As aulas privadas permitem um desenvolvimento mais rápido e eficaz do
                                aluno. </p>
                            <p class="card-text">O instrutor acompanha em exclusivo o aluno, permitindo a correção imediata
                                e contínua de todos os erros.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="row justify-content-center ">
                <h3 class="row justify-content-center">Aulas de Surf em Grupo</h3>
                <div class="col col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">1 Aula</h5>
                            <p class="card-text text-center"><b>28€</b></p>
                            <p class="card-text text-center"><b>por pessoa</b></p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">3 Aula</h5>
                            <p class="card-text text-center"><b>90€</b></p>
                            <p class="card-text text-center"><b>por pessoa</b></p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">5 Aula</h5>
                            <p class="card-text text-center"><b>130€</b></p>
                            <p class="card-text text-center"><b>por pessoa</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="card-text text-center p-info"><b>Qualquer aula tem todo o material incluído (prancha e fato).</b></p>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="row justify-content-center ">

                <h3 class="row justify-content-center">Aulas Privadas de </h3>

                <div class="col col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">1 Aula</h5>
                            <p class="card-text text-center"><b>70€</b></p>
                            <p class="card-text text-center"><b>por pessoa</b></p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">2 Aula</h5>
                            <p class="card-text text-center"><b>130€</b></p>
                            <p class="card-text text-center"><b>por pessoa</b></p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">3 Aula</h5>
                            <p class="card-text text-center"><b>180€</b></p>
                            <p class="card-text text-center"><b>por pessoa</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="card-text text-center p-info"><b>Qualquer aula tem todo o material incluído (prancha e fato).</b></p>

        <form role="form" method="POST" action="/aulas/" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col">
                    <label for="inputEmail4">Nome</label>

                    <input type="text" class="form-control" id="nome" placeholder="Nome" @if (Auth::check())
                    value="{{ Auth::user()->name }} " required
                @endauth
                >
            </div>
            <div class="form-group col">
                <label for="inputPassword4">Número de Aulas</label>
                <input type="number" class="form-control" id="naulas" placeholder="Nº" min="1" max="5"
                    required>
            </div>
        </div>
        <div class="form-row justify-content-center">
            <button type="submit" class="btn btn-primary ">Inscrição</button>
        </div>
    </form>
</div>



@endsection
