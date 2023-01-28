<link href="{{ asset('img/favicon.png') }}" rel="icon">
<link href="{{ asset('img/favicon.png') }}" rel="apple-touch-icon">
<title>Register</title>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ route('index') }}">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            
            <!-- Name -->
            <div>
                
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                
            </div>

            
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
