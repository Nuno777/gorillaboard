@extends('layouts.partials.navAdmin')

@section('adminMain')
<div class="form-group">
    {{-- <label for="inputName">Nome</label> --}}
    <input type="text" class="form-control" name="resposta" id="inputName"
    value="{{old('resposta',$faqs->resposta)}}"/>

    <input type="text" class="form-control" name="pergunta" value="{{ old('pergunta', $faqs->pergunta)}}">
    </div>
@endsection
