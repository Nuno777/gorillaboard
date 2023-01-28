@section('content-base')
<form action="{{ route('profile.update' , Auth::user()) }}" method="POST">
    <label for="name">Nome</label>
    <input type="text" name="name" value="{{ old(Auth::user()->name)}}">

    <label for="email">Email</label>
    <input type="email" name="email" value="{{ old(Auth::user()->email) }}">

    <label for="cartao_cidadao_users">Cartão de Cidadão</label>
    {{-- <input type="text" name="cartao_cidadao_users" value="{{ old(Auth::user()->cartao_cidadao_users) }}"  > --}}

    <button type="submit">Guardar Alterações</button>
</form>

@endsection
