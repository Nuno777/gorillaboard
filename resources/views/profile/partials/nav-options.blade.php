@extends('layouts.profile')
@section('title', 'GorillaBoards')
@section('header-info')
    <h3>O meu Perfil</h3>
    <div id="compt" class="d-flex ">
        <button class="btn-nav-profile" id="changeProfile">Informações basicas</button>
        <button class="btn-nav-profile" id="changeImg" ></a>Alterar Imagem</button>
        <button class="btn-nav-profile" id="changeEmail" >Mudar Email</button>
        <button class="btn-nav-profile" id="changePassword" ></a>Mudar Password</button>
        <button class="btn-nav-profile del" id="deletAccount" >Eliminar Conta</button>
    </div>
    <div id="mobile" class="form-floating d-none" >
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
            <option selected>Escolher Página</option>
            <option class="" id="changeProfile" value="1">Informações basicas</option>
            <option class="" id="changeImg" value="2">Alterar Imagem</option>
            <option class="" id="changeEmail"  value="3">Mudar Email</option>
            <option class="" id="changePassword"  value="4">Mudar Password</option>
            <option class="" id="deletAccount" value="5">Eliminar Conta</option>
          </select>
          <label for="floatingSelect">Página Escolhida:</label>
    </div>



@endsection
