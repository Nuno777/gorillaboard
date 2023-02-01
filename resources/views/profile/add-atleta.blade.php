@extends('profile.partials.nav-options')

@section('content-base')
    <div class="cont-user">
        <form method="POST" action="{{ route('profile.add-atleta') }}" class="form-group">
            @csrf
            <h3>Adicionar-me como Atleta</h3>
            @include('profile.partials.add-edit')
            <div class="form-group">
                <button type="submit" class="btn btn-success" name="ok">Save</button>
                <a href="{{ route('profile.index') }}" class="btn btn-default">Cancel</a>
            </div>
        </form>
    </div>
@endsection
