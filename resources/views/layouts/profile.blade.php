@extends('layouts.master')
@section('title', 'GorillaBoards')
@vite(['public/css/profile/profile-test.css'])
@section('main')

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <div class="nav-profile">
                    <table>
                        <ul>
                            <li>
                                <div class="profile-logout">
                                    <img class="imgUser" src="{{ asset('storage/' . Auth::user()->img) }}" alt="Imagem Profile">
                                    <p id="name">{{ Auth::user()->name }}</p>
                                    <i title="Logout" class="fa-solid fa-right-from-bracket"></i>
                                </div>
                                <hr>
                            </li>
                            <li><i class="fa-solid fa-house"></i><a href="">Home</a></li>
                            <li><i class="fa-solid fa-user"></i><a href="{{ route('profile.edit', Auth::user()) }}">Meu Perfil</a></li>
                            <li><i class="fa-solid fa-person-running"></i><a href="{{ route('profile.add-atleta') }}">Adiconar Atleta</a></li>
                        </ul>
                    </table>
                </div>
            </div>
            <div class="col-10 row p-0 .shadow">
                @yield('header-info')
                <div class="content-account col-12 p-2" style="margin:1.5rem;" >
                    @yield('content-base')
                </div>

            </div>
        </div>

    </div>

@endsection
