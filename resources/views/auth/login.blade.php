<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- form --}}
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
        <p class="text-sm font-normal text-gray-600 mb-7">Welcome Back</p>


        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
            </svg>

            <x-text-input id="email" class="block mt-1 w-full" type="email" placeholder="Email Address"
                name="email" :value="old('email')" required autofocus autocomplete="username" />
        </div>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />

        {{-- password --}}
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                    clip-rule="evenodd" />
            </svg>
            <x-text-input id="password" class="block mt-1 w-full" type="password" placeholder="Password"
                name="password" required autocomplete="current-password" />

        </div>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <div class="flex flex-col items-center justify-center mt-4">

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                <a class="py-4 text-sm text-indigo-600 font-bold hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('register') }}">
                    {{ __('New Here? Sign Up') }}
                </a>
            @endif
        </div>
    </form>
    </div>
    </div>
</x-guest-layout>
