@extends('layouts.partials.navAdmin')
@vite('public/css/adminCss/adminFaqs.css')
@section('adminMain')
    <div class="container-fluid">
<<<<<<< HEAD
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação da Faq {{ $faq->id }}
=======
            <h2 class="name-page"><a  href="{{ url()->previous() }}">
                <i class='bx bx-chevron-left bx-sm'></i></a>Informação da Faq {{ $faq->id }}</h2>
>>>>>>> b316c58e9d9f59d5d705d14be69c6b129a02ca41
            </div>
            <div class="card-body">
                <div><strong>Id</strong> {{ $faq->id }} </div>
                <div><strong>Pergunta</strong> {{ $faq->pergunta }} </div>
                <div><strong>Resposta</strong> {{ $faq->resposta }} </div>
            </div>
            <button class="btn-warming"><a href="{{ url()->previous()}}"></a></button>
        </div>
    </div>
@endsection
