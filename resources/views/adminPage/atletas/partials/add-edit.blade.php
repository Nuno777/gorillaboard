<div class="form-group">
    {{-- <label for="inputName">Nome</label> --}}
    <input type="date" class="form-control" placeholder="nasc_atleta" name="nasc_atleta" value="{{ old('nasc_atleta', $atleta->nasc_atleta)}}">
    <input type="number" class="form-control" placeholder="idade_atleta" name="idade_atleta" value="{{old('idade_atleta',$atleta->idade_atleta)}}"/>
    <input type="email" class="form-control" placeholder="email_encarregado_edu" name="email_encarregado_edu" value="{{ old('email_encarregado_edu', $atleta->email_encarregado_edu)}}">
    <input type="text" class="form-control" placeholder="cc_encarregado_edu" name="cc_encarregado_edu" value="{{old('cc_encarregado_edu',$atleta->cc_encarregado_edu)}}"/>
    <input type="tel"  pattern="[0-9]{3}[0-9]{3}[0-9]{3}" class="form-control" placeholder="tele_encarregado_edu" name="tele_encarregado_edu" value="{{ old('tele_encarregado_edu', $atleta->tele_encarregado_edu)}}">
   <select name="user_id" class="form-control">
    @foreach($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
   @endforeach
   </select>

</div>
