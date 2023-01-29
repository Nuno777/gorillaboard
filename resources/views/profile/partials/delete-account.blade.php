@extends('profile.partials.nav-options')


@section('profile-content')
<div class="cont-user">
    <p>Deleting Your Account Is Permanent</p>
    <form method="POST" action="{{ route('profile.destroy', Auth::user()) }}" role="form" class="inline"
        onsubmit="return confirm('Confirma que pretende eliminar a sua conta Permanentemente ?');">
        @csrf
        @method('DELETE')

        <button type="submit">Delete Account</button>
    </form>
</div>

@endsection
