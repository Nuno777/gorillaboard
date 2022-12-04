<<<<<<< Updated upstream
<link href="{{ asset('img/favicon.png') }}" rel="icon">
<link href="{{ asset('img/favicon.png') }}" rel="apple-touch-icon">
<title>Login</title>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ route('index') }}">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
=======
@extends('layouts.master')
@vite(['/public/css/style_login.css', '/public/js/app.js'])
@section('title', 'GorillaBoards')
@section('main')
>>>>>>> Stashed changes

    {{-- Sing in code --}}
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                    @csrf
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" placeholder="Email" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" placeholder="Password" />

<<<<<<< Updated upstream
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
=======
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
>>>>>>> Stashed changes

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

<<<<<<< Updated upstream
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                @if (Route::has('register'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('register') }}">
                        {{ __('Create Account') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
=======
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        {{-- <x-primary-button class="ml-3">
                            {{ __('Log in') }}
                        </x-primary-button> --}}
                    </div>
                </form>

            {{-- Sing up code --}}
                <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                    @csrf
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        {{-- <x-input-label for="name" :value="__('Name')" /> --}}
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" placeholder="Name" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')"  placeholder="Email" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        {{-- <x-input-label for="password" :value="__('Password')" /> --}}

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password"  placeholder="Password"/>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" placeholder="Repeat password" required />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <input type="submit" class="btn" value="Sign up" />


                    <div class="flex items-center justify-end mt-4">
                        {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a> --}}

                        {{-- <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button> --}}
                    </div>
                </form>
>>>>>>> Stashed changes
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="{{ asset('img/undraw_surfer_re_hncq.svg') }}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="{{ asset('img/undraw_skateboard_re_we2n.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>

@endsection
