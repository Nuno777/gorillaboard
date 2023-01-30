@extends('profile.partials.nav-options')
@section('content-base')
    @if ($errors->any())
        @include ('layouts.partials.errors')
    @endif
    @if (!empty(session('success')))
        @include ('layouts.partials.success')
    @endif
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <div class="cont-user">
        <h2>Email</h2>
        <form method="post" action="{{ route('profile.update', Auth::user()) }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')

            <div class="edit-data">
                <label for="email">Email</label>
                <input class="mt-3" type="text" name="email"
                    value="{{ old('email', Auth::user()->email) }}" required autocomplete="email" placeholder="Email"><br>
                @if (Auth::user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !Auth::user()->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
                <div>
                    <button type="submit">Atualizar Perfil</button>
                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">{{ __('Atualizado') }}</p>
                    @endif
                </div>
            </div>

        </form>
     </div>

    @endsection
