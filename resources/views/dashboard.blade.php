{{--  @extends('layouts.partials.navAdmin')

@section('adminMain')

@endsection --}}

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
                                <h2>Criar nova Aula</h2>
                                <div class="sub-title">
                                    <span class="mr-1"></span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-wrapper">
                                    <div>
                                        Criar Aula
                                    </div>
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
                                <div class="chart-wrapper">
                                    <div>
                                        Presenças
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card card-default card-mini">
                            <div class="card-header">
                                <h2>Total de Alunos</h2>
                                {{--     <div class="dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div> --}}
                                <div class="sub-title">
                                    <span class="mr-1"></span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-wrapper">
                                    <div>
                                        {{ Auth::user()->id }}
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
