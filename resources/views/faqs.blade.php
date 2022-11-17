@extends('layout.master')
@section('title', 'GorillaBoards')

@section('main')
    <div class="text container-fluid">
        <h1>Perguntas mais Frequentes</h1>
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur culpa est laboriosam voluptates nobis nisi blanditiis? Consequatur, ut molestias quidem, a eos rem sunt fugiat saepe perferendis fugit minus? Hic.</p>
    </div>
<div class="container content-fuid">
    <div class="row">
        <div class=" FAQS col-lg-6">
            <div class="accordion">
                <div class="accordion-item" id="QT1">
                    <a class="accordion-link"href="#QT1">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit?
                        <i class="fa-solid fa-plus"></i>
                        <i class="fa-solid fa-minus"></i>
                    </a>
                    <div class="resposta">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis excepturi optio id minima quibusdam quo mollitia quidem pariatur numquam iusto ad odio exercitationem perferendis accusamus veritatis, officia alias doloribus saepe?</p>
                    </div>
                </div>
                <div class="accordion-item" id="QT2">
                    <a class="accordion-link"href="#QT2">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit?
                        <i class="fa-solid fa-plus"></i>
                        <i class="fa-solid fa-minus"></i>
                    </a>
                    <div class="resposta">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis excepturi optio id minima quibusdam quo mollitia quidem pariatur numquam iusto ad odio exercitationem perferendis accusamus veritatis, officia alias doloribus saepe?</p>
                    </div>
                </div>
                <div class="accordion-item" id="QT3">
                    <a class="accordion-link"href="#QT3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit?
                        <i class="fa-solid fa-plus"></i>
                        <i class="fa-solid fa-minus"></i>
                    </a>
                    <div class="resposta">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis excepturi optio id minima quibusdam quo mollitia quidem pariatur numquam iusto ad odio exercitationem perferendis accusamus veritatis, officia alias doloribus saepe?</p>
                    </div>
                </div>
                <div class="accordion-item" id="QT4">
                    <a class="accordion-link"href="#QT4">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit?
                        <i class="fa-solid fa-plus"></i>
                        <i class="fa-solid fa-minus"></i>
                    </a>
                    <div class="resposta">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis excepturi optio id minima quibusdam quo mollitia quidem pariatur numquam iusto ad odio exercitationem perferendis accusamus veritatis, officia alias doloribus saepe?</p>
                    </div>
                </div>
                <div class="accordion-item" id="QT5">
                    <a class="accordion-link"href="#QT5">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit?
                        <i class="fa-solid fa-plus"></i>
                        <i class="fa-solid fa-minus"></i>
                    </a>
                    <div class="resposta">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis excepturi optio id minima quibusdam quo mollitia quidem pariatur numquam iusto ad odio exercitationem perferendis accusamus veritatis, officia alias doloribus saepe?</p>
                    </div>
                </div>
                <div class="accordion-item" id="QT6">
                    <a class="accordion-link"href="#QT6">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit?
                        <i class="fa-solid fa-plus"></i>
                        <i class="fa-solid fa-minus"></i>
                    </a>
                    <div class="resposta">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis excepturi optio id minima quibusdam quo mollitia quidem pariatur numquam iusto ad odio exercitationem perferendis accusamus veritatis, officia alias doloribus saepe?</p>
                    </div>
                </div>
                <div class="accordion-item" id="QT7">
                    <a class="accordion-link"href="#QT7">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit?
                        <i class="fa-solid fa-plus"></i>
                        <i class="fa-solid fa-minus"></i>
                    </a>
                    <div class="resposta">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis excepturi optio id minima quibusdam quo mollitia quidem pariatur numquam iusto ad odio exercitationem perferendis accusamus veritatis, officia alias doloribus saepe?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts  col-lg-4 mx-auto">
            <div class="form p-3">
                <div class="form-row my-5">
                    <div class="col-lx-6">
                        <input type="text" class="effect-1" placeholder="Nome">
                        {{-- <span class="Focus-border"></span> --}}
                    </div>
                    <div class="col-lx-6">
                        <input type="text" class="effect-1" placeholder="Sobrenome">
                        {{-- <span class="Focus-border"></span> --}}
                    </div>
                </div>
                <div class="form-row pb-4">
                    <div class="col-lg-12">
                        <input type="text" class="effect-1" placeholder="Email">
                        {{-- <span class="Focus-border"></span> --}}
                    </div>
                </div>
                <div class="form-row pt-5">
                    <div class="col-lg-12">
                        <input type="are" class="effect-1" placeholder="Pergunta">
                        {{-- <span class="Focus-border"></span> --}}
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
