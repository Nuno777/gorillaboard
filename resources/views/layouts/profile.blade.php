@extends('layouts.master')
@vite(['public/css/profile/profile.css'])
@section('title', 'GorillaBoards')

@section('main')

<div class="container">
    <div class="row">
        @csrf
        @method('patch')
        <div class="col-12 col-md-3 col-lg-4 col-xl-3 mt-3">
            @if (Auth::check())
            <div class="img-profile">
                <img src="{{ asset('img/' . Auth::user()->img) }}" alt="Profile_img"><br>
                <h3 class="mt-2 p-2">{{ Auth::user()->name }}</h3>
                @if (Auth::user()->password == 0)
                    <h5 class="mt-1 p-2">User</h4>
                @else
                    <h5 class="mt-1 p-2">Admin</h5>
                @endif

                <button><a href="{{ route('profile.updateimg') }}">Editar Imagem de Perfil</a></button>


            </div>
            @endif
        </div>
        <div class="col-12 col-md-9 col-lg-7 col-xl-9">
            @yield('page-title')
            @yield('profile-content')
        </div>
    </div>
</div>



@endsection
