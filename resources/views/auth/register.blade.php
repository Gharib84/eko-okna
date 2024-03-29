<x-guest-layout>
    <form method="POST" action="{{ route('rejester') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nazwa')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <x-input-label for="role" :value="__('Role')" class="mt-3 " />
        <select name="role" id="role" class="block mt-1 w-full bg-slate-700 text-white">
            <option value="admin" {{ old('role') === 'admin' || !old('role') ? 'selected' : '' }}>admin</option>
            <option value="uzytkownik" {{ old('role') === 'uzytkownik' ? 'selected' : '' }}>uzytkownik</option>
        </select>

        <x-input-label for="Magazyn" :value="__('Nazwa Magazyny')" class="mt-5" />

        <select name="magazyn" id="magazyn" class="block mt-1 w-full bg-slate-700 text-white">
            @foreach ($magazyns as $magazyn)
                <option class="white" value="{{ $magazyn->magazyn_id }}">{{ $magazyn->magazyn_nazwa }}</option>
            @endforeach
        </select>



        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('hasło')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Potwierdź hasło')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
