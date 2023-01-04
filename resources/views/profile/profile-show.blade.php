@extends('layouts.profile')

@section('page-title')
    <h3>Your Profile</h3>
@endsection

@section('profile-content')
    <div class="profile-details row">
        <div class="info col-xl-8 row ">
            <label for="">Nome</label>
            <h4 class="col-xl-3 col-lg-6 col-12">{{ Auth::user()->name }}</h4>

            <label for="">Email</label>
            <h4 class="col-xl-3 col-lg-6 col-12">{{ Auth::user()->email }}</h4>

            <label for="">Categoria</label>
            <h4 class="col-xl-3 col-lg-6 col-12">{{ Auth::user()->categoria_users }}</h4>

            <label for="">Cartão de cidadão</label>
            <h4 class="col-xl-3 col-lg-6 col-12">{{ Auth::user()->cartao_cidadao_users }}</h4>



        </div>
        <div class="option-account col-xl-4">
            <button><i class='bx bx-pencil bx-sm' ></i><a href=""></a> Editar Perfil</button><br>
            <button><i class='bx bx-lock-alt bx-sm'></i><a href=""></a>Editar Password</button>
            <div class="delete">
                <h4>Delete Account</h4>
                <p>Deleting Your Account Is Permanent</p>
                <button><a href=""></a>Delete Account</button>
            </div>
        </div>



    </div>
@endsection
