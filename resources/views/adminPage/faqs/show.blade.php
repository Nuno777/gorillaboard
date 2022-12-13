@extends('layouts.partials.navAdmin')
@vite('public/css/adminCss/adminFaqs.css')
@section('adminMain')
    <div class="container-fluid">
            <h2 class="name-page"><a  href="{{ url()->previous() }}">
                <i class='bx bx-chevron-left bx-sm'></i></a>Informação da Faq {{ $faq->id }}</h2>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <strong>Id</strong> {{ $faq->id }}
                        </div>
                        <div class="col-5">
                            <strong>Pergunta</strong> {{ $faq->pergunta }}
                        </div>
                        <div class="col-5">
                            <strong>Resposta</strong> {{ $faq->resposta }}
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
