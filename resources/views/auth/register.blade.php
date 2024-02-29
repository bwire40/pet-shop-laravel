<x-guest-layout>


    <form method="POST" action="{{ route('register') }}">
        @csrf


        <h1 class="text-gray-800 font-bold text-2xl mb-1">Get started with Us today!</h1>
        <p class="text-sm font-normal text-gray-600 mb-7">Quick sign up</p>

        <!-- Name -->
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg fill="#000000" width="24" height="24" class="text-gray-400" viewBox="0 0 16 16"
                xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.31,9.12H5.5A4.52,4.52,0,0,0,1,13.62,2.34,2.34,0,0,0,1,14H14.78a2.34,2.34,0,0,0,0-.38A4.51,4.51,0,0,0,10.31,9.12ZM8,7.88A3.94,3.94,0,1,0,4.06,3.94,3.94,3.94,0,0,0,8,7.88Z" />
                </g>

            </svg>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" placeholder="Enter your full name" />
        </div>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />

        <!-- Email Address -->
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
            </svg>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" placeholder="Enter your Email" />
        </div>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />

        <!-- Password -->
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                    clip-rule="evenodd" />
            </svg>

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" placeholder="Password" />

        </div>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <!-- Confirm Password -->
        <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                    clip-rule="evenodd" />
            </svg>

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password" />

        </div>
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        <div class="flex flex-col items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

        </div>
    </form>
</x-guest-layout>
