@extends('layouts.partials.navAdmin')

@section('adminMain')
    <div class="container-fluid">
            <div class="">
                <h2>Informação da Faq {{ $faq->id }}</h2>
            </div>
            <div class="goback">
                <button>
                    <a  href="{{ url()->previous() }}">
                        <i class="fa fa-arrow-circle-o-left"></i>
                        <span>Voltar</span>
                </button>
                </a>
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
