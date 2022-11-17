@extends('layout.master')
@section('main')
<div class="container content-fuid">
    <div class="row">
        <div class="col-6">

        </div>
        <div class="contacts  col-lg-4 mx-auto">
            <div class="form p-3">
                <div class="form-row my-5">
                    <div class="col-lx-6">
                        <input type="text" class="effect-1" placeholder="Nome">
                        <span class="Focus-border"></span>
                    </div>
                    <div class="col-lx-6">
                        <input type="text" class="effect-1" placeholder="Sobrenome">
                        <span class="Focus-border"></span>
                    </div>
                </div>
                <div class="form-row pb-4">
                    <div class="col-lg-12">
                        <input type="text" class="effect-1" placeholder="Email">
                        <span class="Focus-border"></span>
                    </div>
                </div>
                <div class="form-row pt-5">
                    <div class="col-lg-12">
                        <input type="are" class="effect-1" placeholder="Pergunta">
                        <span class="Focus-border"></span>
                    </div>
                </div>
                <div class="form-row pb-4">
                    <div class="col-lg-6">
                        <p><input type="checkbox" value="">Não sou um roubou </p>
                    </div>
                    <div class="offset col-lg-4">
                        <button class="btn1">Enviar Pergunta</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



@endsection
