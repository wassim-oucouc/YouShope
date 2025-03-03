<x-guest-layout>
    <!-- Afficher les erreurs de session (si présentes) -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Formulaire de connexion -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Champ Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Champ Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Case à cocher "Se souvenir de moi" -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" name="remember" class="rounded text-indigo-600 shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Bouton de connexion -->
        <div class="flex items-center justify-end mt-4">
            <x-primary-button>{{ __('Log in') }}</x-primary-button>
        </div>
    </form>

</x-guest-layout>
