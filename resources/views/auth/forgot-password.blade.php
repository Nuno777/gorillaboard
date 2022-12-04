{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div> --}}
    @extends('layouts.master')
    @vite(['/public/css/style_login.css', '/public/js/app.js'])
    @section('title', 'GorillaBoards')
    @section('main')

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <h2 class="title">Forgot Password</h2>
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Your Email" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Email Password Reset Link') }}
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
                    <img src="{{ asset('img/undraw_mail_re_duel.svg') }}" class="image" alt="" />
                </div>
        </div>
    @endsection
    {{-- </x-auth-card>
</x-guest-layout> --}}
