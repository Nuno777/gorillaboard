@extends('profile.partials.nav-options')
@section('content-base')
<div class="cont-user">
    @if ($errors->any())
    @include ('layouts.partials.errors')
@endif
<form method="post" action="{{ route('password.update' , Auth::user()) }}" class="mt-6 space-y-6">
    @csrf
    @method('put')

    <label for="current_password">Password Atual</label>
    <input id="current_password" name="current_password" type="password" class="" autocomplete="current-password">
    <label for="password">Nova Password</label>
    <input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password">
    <label for="password_confirmation">Confirmar Password</label>
    <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full"
        autocomplete="new-password">

    <div>
        <button type="submit">Atualizar password</button>

        @if (session('status') === 'password-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600">{{ __('Atualizado') }}</p>
        @endif
    </div>

</form>
</div>

@endsection
