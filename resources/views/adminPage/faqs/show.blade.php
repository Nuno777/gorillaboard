@extends('layouts.partials.navAdmin')
@vite('public/css/adminCss/adminFaqs.css')
@section('adminMain')
    <div class="container-fluid">
            <h2 class="name-page"><a  href="{{ url()->previous() }}">
                <i class='bx bx-chevron-left bx-sm'></i></a>Informação da Faq {{ $faq->id }}</h2>
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
