<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Apagar Conta') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Depois que sua conta for apagada, todos os seus dados serão excluídos permanentemente. Se tiver algum problema ao apagar a sua conta entre em contacto com um administrador.') }}
        </p>
    </header>

    <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
        {{ __('Apagar Conta') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy' , Auth::user()) }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">Tem certeza de que deseja apagar sua conta?</h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Depois que sua conta for apagada, todos os seus dados serão excluídos permanentemente. Se tiver algum problema ao apagar a sua conta entre em contacto com um administrador. Digite sua password para confirmar que deseja excluir permanentemente sua conta.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="Password" class="sr-only" />

                <x-text-input id="password" name="password" type="password" class="mt-1 block w-3/4"
                    placeholder="Password" />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Apagar Conta') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
