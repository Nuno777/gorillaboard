{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> --}}
    @extends('layouts.master')
    @vite(['/public/css/style_login.css', '/public/js/app.js'])
    @section('title', 'GorillaBoards')
    @section('main')
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <h2 class="title">Reset Password</h2>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" placeholder="Email" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 input-field">
                        <i class="fas fa-lock"></i>
                        {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"  placeholder="Password" required />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4 input-field">
                        <i class="fas fa-lock"></i>
                        {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" placeholder="repeat Password" required />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            {{ __('Reset Password') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>És um de nós ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent"><a href="{{ Route('login') }}">Login</a></button>

                </div>
                <img src="{{ asset('img/undraw_security_re_a2rk.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>

    @endsection
    {{-- </x-auth-card>
</x-guest-layout> --}}
