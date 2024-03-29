@extends('layouts.master')

@section('custom_css', asset('css/aulas.css'))

@section('title', 'GorillaBoards - ' . $desporto->modalidades)
@section('main')

    <div class="carousel-inner">
        <img src="{{ asset('img/aulas.png') }}" class="d-block w-100" alt="aulas" />
        <div class="centered escola">Escola GorillaBoards</div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="row justify-content-center care">Ao comprar uma aula na nossa escola, esta ajudar a causa do Gorilla Care, para proteger os Gorilas Gigantes do Congo!</div>

            <div class="row justify-content-center">
                <div class="col col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-users cor"></i><b> Aulas de Grupo</b>
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
                            <i class="fa-solid fa-user cor"></i><b> Aulas Privadas</b>
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
                <h3 class="row justify-content-center">Aulas de {{ $desporto->modalidades }} em Grupo</h3>
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
                            <h5 class="card-title text-center">2 Aula</h5>
                            <p class="card-text text-center"><b>60€</b></p>
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
            </div>
        </div>
        <p class="card-text text-center p-info"><b>Qualquer aula tem todo o</b> <b class="cor">material incluído.</b></p>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="row justify-content-center ">

                <h3 class="row justify-content-center ">Aulas Privadas de {{ $desporto->modalidades }}</h3>

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
        <p class="card-text text-center p-info"><b>Qualquer aula tem todo o</b> <b class="cor">material incluído.</b> </p>



        @if (Auth::check())
            <form role="form" method="POST" action="{{ route('aula.store', $desporto->id) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="form-group col">
                        <label for="inputEmail4">Email</label>

                        <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                            @if (Auth::check()) value="{{ Auth::user()->email }} " required
                    @endauth disabled>
                </div>

                <div class="form-group col">
                    <label for="inputEmail4">Nome</label>

                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome"
                        @if (Auth::check())
                    value="{{ Auth::user()->name }} " required
                @endauth disabled>
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label for="inputEmail4">Desporto</label>

                <input type="text" class="form-control" name="desporto" id="desporto" placeholder="desporto"
                    value="{{ $desporto->modalidades }}" disabled>
            </div>

            <div class="form-group col">
                <label for="inputPassword4">Número de Aulas</label>
                <input type="number" class="form-control" name="naulas" id="naulas" placeholder="Nº"
                    min="1" max="3" required>
            </div>
        </div>

    @if (is_null(Auth::user()->atletas))
        <div class="form-row justify-content-center">
            <a class="btn btn-primary" href='{{ route('profile.show.add-atleta') }}'>Adicionar como Atleta</a>
        </div>
    @else
        @if (Auth::user()->atletas->user_id == Auth::user()->id)
            <div class="form-row justify-content-center">
                <button type="submit" class="btn btn-primary ">Inscrição</button>
            </div>
        @else
        <div class="form-row justify-content-center">
            <a class="btn btn-primary cor" href='{{ route('profile.show.add-atleta') }}'>Adicionar como Atleta</a>
        </div> @endif
        @endif
            </form>
        @endauth
</div>
@endsection
