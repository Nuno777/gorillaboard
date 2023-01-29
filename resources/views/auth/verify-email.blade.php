@extends('layouts.master')
    @vite(['/public/css/style_login.css', '/public/js/app.js'])
    @section('title', 'GorillaBoards')
    @section('main')

        <!-- Session Status -->
        <div class="container-fluid">
            @if ($errors->any())
                @include ('layouts.partials.errors')
            @endif

            @if (!empty(session('success')))
                @include ('layouts.partials.success')
            @endif
        </div>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __(' Um novo link de verificação foi enviado para o endereço de e-mail que você forneceu durante o registro.') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <h2 class="title">Email de Verificação</h2>
                        <button type="submit" class="btn solid">Reenviar email de verificação</button>
                    </form>

                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Olá {{ Auth::user()->name }}</h3>
                        <p>
                            Precisa agora de verifiar a sua identidade!
                        </p>
                        <form action="{{ route('logout') }}" method="post">
                        @csrf
                    <button class="btn transparent" type="submit">Logout</button>
                    </form>

                    </div>
                    <img src="{{ asset('img/undraw_fingerprint_re_uf3f.svg') }}" class="image" alt="" />
                </div>
        </div>
    @endsection
