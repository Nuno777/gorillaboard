@extends('layouts.master')
@vite(['/public/css/style_faqs.css', '/public/js/faqs.js'])
@section('title', 'GorillaBoards')

@section('main')
<div class="text container-fluid">
    <h1>Perguntas mais Frequentes</h1>
    <hr>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur culpa est laboriosam voluptates nobis nisi blanditiis? Consequatur, ut molestias quidem, a eos rem sunt fugiat saepe perferendis fugit minus? Hic.</p>
</div>
<div class="questions-container">
    @foreach ($faqResults as $faqResult)
        <div class="question">
            <button>
                <span>{{ $faqResult->Pergunta}}</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>{{ $faqResult->Resposta}}</p>
        </div>
    @endforeach
</div>
</section>
@endsection

