@extends('layouts.profile')
@section('title', 'GorillaBoards')
@section('header-info')
    <h3>O meu Perfil</h3>
    <div class="option-profile">
        <button class="btn-nav-profile"><a href="{{ route('profile.index') }}">Informações basicas</a></button>
        <button class="btn-nav-profile"><a href="{{ route('profile.upgradeimg') }}">Alterar Imagem</a></button>
        <button class="btn-nav-profile "><a href="{{ route('profile.updateEmail') }}">Mudar Email</a></button>
        <button class="btn-nav-profile "><a href="{{ route('profile.updatePasswowrd') }}">Mudar Password</a></button>
        <button class="btn-nav-profile del"><a href="{{ route('profile.delete-account') }}">Eliminar Conta</a></button>
    </div>



@endsection
