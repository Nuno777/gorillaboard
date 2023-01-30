@extends('layouts.master')
@vite(['/public/css/style_faqs.css', '/public/js/faqs.js'])
@section('title', 'GorillaBoards')

@section('main')
<div class="text container-fluid d-flex flex-column  justify-content-between">
    <h1>Perguntas mais Frequentes</h1>
    <form action="{{ route('btnSearch') }}" method="get">
        <div class="input-group">
            <div class="form-outline">
              <input type="search" id="form1" class="form-control" placeholder="Search" name="query" />
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i>
              </button>
          </div>
    </form>
    <hr>
</div>
<div class="questions-container">

    @foreach ($faqs as $faq)
        <div class="question">
            <button>
                <span>{{ $faq->pergunta}}</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>{{ $faq->resposta}}</p>
        </div>
    @endforeach
</div>
<div class="Paguination">
    {{ $faqs->links() }}
</div>
</section>
@endsection

