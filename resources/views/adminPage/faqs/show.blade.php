@extends('layouts.partials.navAdmin')

@section('adminMain')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação da Faq {{ $faq->id }}
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
