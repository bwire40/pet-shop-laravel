<!--Nav-->
<nav id="header" class="w-full z-30 top-0 sticky bg-white">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">
        <label for="menu-toggle" class="cursor-pointer md:hidden block">
            <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">

            {{-- links --}}
            <nav>
                <ul class="md:flex items-center justify-between text-base text-gray-800 pt-4 md:pt-0">
                    <li>

                        <a href="/"
                            class="inline-block no-underline hover:text-black hover:underline py-2 px-4">Home</a>
                        {{-- <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-nav-link> --}}
                    </li>
                    <li>
                        <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                            {{ __('About') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('accessory-items')" :active="request()->routeIs('accessories-items')">
                            {{ __('Accessories') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('adopt')" :active="request()->routeIs('adopt')">
                            {{ __('Adopt Pet') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('contact-us')" :active="request()->routeIs('contact-us')">
                            {{ __('Contact') }}
                        </x-nav-link>
                    </li>
                </ul>


            </nav>
        </div>

        <div class="order-1 md:order-2">
            <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl"
                href="/">
                <svg class="fill-current text-gray-800 mr-2" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path
                        d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" />
                </svg>

                {{-- @include('partials.logo_svg') --}}
                Pet Shop
            </a>
        </div>



        <div class="order-2 md:order-3 flex items-center" id="nav-content">
            <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                type="button">
                {{-- <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24">
                    <circle fill="none" cx="12" cy="7" r="3" />
                    <path
                        d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                </svg> --}}
                <div class="flex flex-col justify-center items-center">
                    <img class="hover:grow shadow-lg w-12 h-12 rounded-full" src="https://rb.gy/y795kq"
                        width="100px" />


                    <div class="font-bold text-xs text-indigo-800">{{ Auth::user()->name ?? false }}</div>
                </div>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownDots"
                class="z-10 hidden bg-slate-200 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">

                    @auth

                        <li>
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                        </li>

                        <li>
                            <x-dropdown-link :href="route('manage-adorptions')">
                                {{ __('Manage your Adoptions') }}
                            </x-dropdown-link>
                        </li>

                        <li>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                    @else
                        <li>
                            <x-dropdown-link :href="route('register')">
                                {{ __('Sign Up') }}
                            </x-dropdown-link>
                        </li>
                        <div class="py-2">
                            <x-dropdown-link :href="route('login')">
                                {{ __('Sign In') }}
                            </x-dropdown-link>
                        </div>
                    @endauth

                </ul>
            </div>


            {{-- cart --}}


            @if (Auth::user())
                @include('partials.cart')
            @else
                <div class=""></div>
            @endif

        </div>
    </div>
</nav>
