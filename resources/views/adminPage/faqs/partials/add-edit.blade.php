<div class="form-group">
    {{-- <label for="inputName">Nome</label> --}}
    <input type="text" class="form-control" placeholder="Pergunta" name="pergunta" value="{{ old('pergunta', $faq->pergunta)}}">
    <input type="text" class="form-control" placeholder="Resposta" name="resposta" id="inputName"value="{{old('resposta',$faq->resposta)}}"/>
</div>
