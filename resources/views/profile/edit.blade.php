@vite(['public/js/profile-btn.js'])
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

    {{-- editar informaçoes base --}}

    <div id="info-base" class="card-body info-base " >
        <h2>Informações Base</h2>
        <form method="post" action="{{ route('profile.update', Auth::user()) }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')

            <div class="edit-data">
                <label for="name">Nome</label>
                <input class="mt-3" type="text" name="name"
                    value="{{ old('name', Auth::user()->name) }}" required autocomplete="name" placeholder="Nome"><br>
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

    {{-- edita a imaguem do utilizador  --}}

    <div id="change-img" class= "d-none">
        <form action="{{ route('profile.upgradeimg') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="imgchange">
                <input type="file" name="img" id="img">
            </div>

            <button type="submit">Submeter</button>
        </form>
    </div>

    {{-- edita o email do utilizador  --}}

    <div id="change-email" class="change-email d-none">
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

    {{-- edita a passsword do utilizador  --}}

    <div id="change-password" class="d-none">
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

    {{-- elemina a conta do utilizador --}}

    <div id="delete-account"  class=" d-none">
        <div class="cont-user">
            <p>Deleting Your Account Is Permanent</p>
            <form method="POST" action="{{ route('profile.destroy', Auth::user()) }}" role="form" class="inline"
                onsubmit="return confirm('Confirma que pretende eliminar a sua conta Permanentemente ?');">
                @csrf
                @method('DELETE')

                <button type="submit">Delete Account</button>
            </form>
        </div>
    </div>
    @endsection
