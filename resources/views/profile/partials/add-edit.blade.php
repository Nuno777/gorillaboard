<div class="form-group d-flex row">
    {{-- <label for="inputName">Nome</label> --}}
    <div class="col-6">
        <label for="">Data de nacimento do Atleta</label>
        <input type="date" class="form-control" placeholder="nasc_atleta" name="nasc_atleta" value="{{ old('nasc_atleta', $atleta->nasc_atleta)}}">
    </div>

    <div class="col-6">
        <label for="">Idade do Atleta</label>
        <input type="number" class="form-control" placeholder="idade_atleta" name="idade_atleta" value="{{old('idade_atleta',$atleta->idade_atleta)}}"/>

    </div>

    <div class="col-6">
        <label for="">Email do Encarregado</label>
        <input type="email" class="form-control" placeholder="email_encarregado_edu" name="email_encarregado_edu" value="{{ old('email_encarregado_edu', $atleta->email_encarregado_edu)}}">
    </div>

    <div class="col-6">
        <label for="">Cartão de cidadão do Encarregado</label>
        <input type="text" class="form-control" placeholder="cc_encarregado_edu" name="cc_encarregado_edu" value="{{old('cc_encarregado_edu',$atleta->cc_encarregado_edu)}}"/>
    </div>

    <div class="col-6">
        <label for="">Numero de Telemovel do Encarregado</label>
        <input type="tel"  pattern="[0-9]{3}[0-9]{3}[0-9]{3}" class="form-control" placeholder="tele_encarregado_edu" name="tele_encarregado_edu" value="{{ old('tele_encarregado_edu', $atleta->tele_encarregado_edu)}}">
    </div>

    <div class="col-6">
        <label for="">ID do Utilizador</label>
        <input type="number" class="form-control" name="user_id" placeholder="User Id" value="{{ Auth::user()->id }}" readonly>

    </div>





</div>
