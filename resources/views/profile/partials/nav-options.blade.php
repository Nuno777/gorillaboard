@extends('layouts.profile')
@section('title', 'GorillaBoards')
@section('header-info')
<div class="d-flex header-home row">
        <div id="header-img" class="col-2 col-sm-2 col-md-1 col-lg-1 col-xl-1 p-0 header-img">
            <div class="img-user">
                <img class="" src="{{ asset('storage/' . Auth::user()->img) }}" alt="Imagem Profile">
            </div>
        </div>
        <div class="col ">
            <h3>O meu Perfil</h3>
            <div id="compt" class="d-flex btns-link">
                <button class="btn-nav-profile mr-4" id="changeProfile">Informações basicas</button>
                <button class="btn-nav-profile mr-4" id="changeImg" ></a>Alterar Imagem</button>
                <button class="btn-nav-profile mr-4" id="changeEmail" >Mudar Email</button>
                <button class="btn-nav-profile mr-4" id="changePassword" ></a>Mudar Password</button>
                <button class="btn-nav-profile del mr-4" id="deletAccount" >Eliminar Conta</button>
                @if (Auth::check())
                                <form method="POST" action="{{ route('logout') }}" class=" ">
                                    @csrf
                                    <a class="dropdown-link-item pr-3 btn-nav-profile" href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();">

                                        <span class="nav-text pl-3">Logout</span>
                                    </a>
                                </form>
                            @endauth
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


        </div>



    </div>



@endsection
