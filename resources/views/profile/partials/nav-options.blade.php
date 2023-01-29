@extends('layouts.profile')
@section('title', 'GorillaBoards')
@section('header-info')
    <h3>O meu Perfil</h3>
    <div class="d-flex">
        <button class="btn-nav-profile" id="changeProfile">Informações basicas</button>
        <button class="btn-nav-profile" id="changeImg" ></a>Alterar Imagem</button>
        <button class="btn-nav-profile" id="changeEmail" >Mudar Email</button>
        <button class="btn-nav-profile" id="changePassword" ></a>Mudar Password</button>
        <button class="btn-nav-profile del" id="deletAccount" >Eliminar Conta</button>
    </div>



@endsection
