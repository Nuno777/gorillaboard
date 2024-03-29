<!DOCTYPE html>

<html lang="en" dir="ltr">

@include('layouts.partials.dashboard.head')

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        @include('layouts.partials.dashboard.nav')

        {{-- main --}}
        <div class="content-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="card card-default card-mini">
                            <div class="card-header">
                                <h2>Criar novo Professor</h2>
                                <div class="sub-title">
                                    <span class="mr-1"></span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-wrapper">
                                    <div>
                                        Criar Professor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card card-default card-mini">
                            <div class="card-header">
                                <h2>Criar nova Atleta</h2>
                                <div class="sub-title">
                                    <span class="mr-1"></span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-wrapper">
                                    <a href="{{ route('admin.atletas.index') }}">Criar Atleta</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6">
                        <div class="card card-default card-mini">
                            <div class="card-header">
                                <h2>Marcar presenças</h2>
                                <div class="sub-title">
                                    <span class="mr-1"></span>
                                </div>

                            </div>
                            <div class="card-body">

                                <div class="dropdown">Presenças
                                    <a class="dropdown-toggle icon" href="#" role="button" id="dropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('presenca.showSurf') }}">Surf</a>
                                        <a class="dropdown-item" href="{{ route('presenca.showSkate') }}">Skate</a>
                                        <a class="dropdown-item"
                                            href="{{ route('presenca.showBodyboard') }}">Bodyboard</a>
                                        <a class="dropdown-item"
                                            href="{{ route('presenca.showDownhill') }}">Downhill</a>
                                        <a class="dropdown-item" href="{{ route('presenca.showPaddle') }}">Paddle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6">
                        <div class="card card-default card-mini">
                            <div class="card-header">
                                <h2>Total de Alunos</h2>
                                <div class="sub-title">
                                    <span class="mr-1"></span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-wrapper">
                                    <div>
                                        {{ $userCount }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.partials.dashboard.footer')

    </div>

</body>

</html>
