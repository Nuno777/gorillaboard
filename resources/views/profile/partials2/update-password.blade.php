@extends('layouts.profile')


@section('page-title')
<h3>Change Password</h3>
@endsection



    <div>
        <x-input-label for="current_password" :value="__('Password Atual')" />
        <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="password" :value="__('Nova Password')" />
        <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        <x-text-input  />
        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
    </div>


</form>
@section('profile-content')
    @if ($errors->any())
        @include ('layouts.partials.errors')
    @endif
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <input id="current_password" name="current_password" type="password" class="" autocomplete="current-password">
        <input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password">
        <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password">

        <div>
            <button type="submit">Atualizar password</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Atualizado') }}</p>
            @endif
        </div>

    </form>

@endsection
