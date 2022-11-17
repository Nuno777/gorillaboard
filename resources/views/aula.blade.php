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
                </div>
            </div>
        </div>
    </div>

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

    <div class="container">
        <div class="row">
            <div class="row justify-content-center ">
                <div class="col col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">1 Aula</h5>
                            <p class="card-text text-center"><b>30€</b></p>
                            <p class="card-text text-center"><b>por pessoa</b></p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">3 Aula</h5>
                            <p class="card-text text-center"><b>60€</b></p>
                            <p class="card-text text-center"><b>por pessoa</b></p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">5 Aula</h5>
                            <p class="card-text text-center"><b>90€</b></p>
                            <p class="card-text text-center"><b>por pessoa</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="row justify-content-center ">
                <div class="col col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">1 Aula</h5>
                            <p class="card-text text-center"><b>50€</b></p>
                            <p class="card-text text-center"><b>por pessoa</b></p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">3 Aula</h5>
                            <p class="card-text text-center"><b>80€</b></p>
                            <p class="card-text text-center"><b>por pessoa</b></p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">5 Aula</h5>
                            <p class="card-text text-center"><b>110€</b></p>
                            <p class="card-text text-center"><b>por pessoa</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="card-text text-center"><b>Qualquer aula tem todo o material incluído (prancha e fato).</b></p>
    </div>
@endsection
