<title>Email de Verificação</title>
<link href="{{ asset('img/favicon.png') }}" rel="icon">
<link href="{{ asset('img/favicon.png ') }}" rel="apple-touch-icon">
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">

                <img src="{{ asset('img/gorilla_horizontal.png') }}" class="w-50 h-20 fill-current text-gray-500 alt="">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Obrigado pelo registro! Antes de começar, você poderia verificar seu endereço de e-mail clicando no link que acabamos de enviar para você? Se você não recebeu o e-mail, teremos o prazer de lhe enviar outro.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __(' Um novo link de verificação foi enviado para o endereço de e-mail que você forneceu durante o registro.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-primary-button>
                        {{ __(' Reenviar email de verificação') }}
                    </x-primary-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Logout') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
