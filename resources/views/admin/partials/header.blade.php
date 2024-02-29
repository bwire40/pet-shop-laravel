<!-- Desktop Header -->
<header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
    <div class="w-1/2"></div>
    <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
        <button @click="isOpen = !isOpen"
            class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
            <i class="fa-solid fa-bars"></i>
        </button>
        <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
        <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
            <a href="{{ secure_url(route('admin-profile.index')) }}"
                class="block px-4 py-2 account-link hover:text-white">Profile</a>
            <form action="{{ secure_url(route('logout')) }}" method="post"
                class="block px-4 py-2 account-link hover:text-white">
                @csrf
                <button type="submit">Sign
                    Out</button>
            </form>
        </div>
    </div>
</header>

<!-- Mobile Header & Nav -->
<header x-data="{ isOpen: false }" class="w-full bg-slate-800 py-5 px-6 sm:hidden">
    <div class="flex items-center justify-between">
        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
        </button>
    </div>

    <!-- Dropdown Nav -->
    <nav :class="isOpen ? 'flex' : 'hidden'" class="flex flex-col pt-4 overflow-auto">
        <a href="{{ secure_url(route('home')) }}" class="flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>



        {{-- pets section --}}
        <h1
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item text-md border-b-2 border-slate-500">
            Pets
        </h1>
        <div class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            {{-- <i class="fas fa-sticky-note mr-3"></i> --}}

            <button id="dropdownDividerButton4" data-dropdown-toggle="dropdownDivider4"
                class="flex items-center justify-center text-sm" type="button"><i class="fa-solid fa-list mr-3"></i>
                Categories
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

        </div>
        <!-- Dropdown menu -->
        <div id="dropdownDivider4"
            class=" z-10 hidden divide-y bg-slate-700 divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 w-11/12">
            <ul class="py-2 text-sm text-white dark:text-gray-200" aria-labelledby="dropdownDividerButton4">
                <li>
                    <a href="{{ route('pet-categories.create') }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
                        <i class="fa-solid fa-plus mr-2"></i>
                        New Category
                    </a>
                </li>
            </ul>

        </div>

        {{-- pets --}}
        <div class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            {{-- <i class="fas fa-sticky-note mr-3"></i> --}}

            <button id="dropdownDividerButton5" data-dropdown-toggle="dropdownDivider5"
                class="flex items-center justify-center text-sm" type="button"><i class="fa-solid fa-cat mr-3"></i>
                Pets
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

        </div>
        <!-- Dropdown menu -->
        <div id="dropdownDivider5"
            class=" z-10 hidden divide-y bg-slate-700 divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 w-11/12">
            <ul class="py-2 text-sm text-white dark:text-gray-200" aria-labelledby="dropdownDividerButton5">
                <li>
                    <a href="{{ route('pets.create') }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
                        <i class="fa-solid fa-plus mr-2"></i>
                        New Pet
                    </a>
                </li>
                <li>
                    <a href="{{ route('pets.index') }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
                        <i class="fa-solid fa-dog mr-2"></i>
                        Manage Pets
                    </a>
                </li>
                <li>
                    <a href="{{ route('adorption.index') }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
                        <i class="fa-solid fa-dog mr-2"></i>
                        Manage Adorption
                    </a>
                </li>
            </ul>

        </div>



        {{-- accessories --}}
        {{-- section --}}
        <h1
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item text-md border-b-2 border-slate-500">
            Accessories
        </h1>
        <div class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            {{-- <i class="fas fa-sticky-note mr-3"></i> --}}

            <button id="dropdownDividerButton6" data-dropdown-toggle="dropdownDivider6"
                class="flex items-center justify-center text-sm" type="button"><i class="fa-solid fa-list mr-3"></i>
                Categories
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

        </div>
        <!-- Dropdown menu -->
        <div id="dropdownDivider6"
            class=" z-10 hidden divide-y bg-slate-700 divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 w-11/12">
            <ul class="py-2 text-sm text-white dark:text-gray-200" aria-labelledby="dropdownDividerButton6">
                <li>
                    <a href="{{ route('accessory-categories.create') }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
                        <i class="fa-solid fa-plus mr-2"></i>
                        New Category
                    </a>
                </li>
                <li>
                    <a href="{{ route('accessory-categories.create') }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
                        <i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>
                        Manage Categories
                    </a>
                </li>
            </ul>

        </div>

        {{-- pets --}}
        <div class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            {{-- <i class="fas fa-sticky-note mr-3"></i> --}}

            <button id="dropdownDividerButton7" data-dropdown-toggle="dropdownDivider7"
                class="flex items-center justify-center text-sm" type="button"><i
                    class="fa-brands fa-product-hunt mr-3"></i>
                Accessories
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

        </div>
        <!-- Dropdown menu -->
        <div id="dropdownDivider7"
            class=" z-10 hidden divide-y bg-slate-700 divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 w-11/12">
            <ul class="py-2 text-sm text-white dark:text-gray-200" aria-labelledby="dropdownDividerButton7">
                <li>
                    <a href="{{ route('accessories.create') }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
                        <i class="fa-solid fa-plus mr-2"></i>
                        New Item
                    </a>
                </li>
                <li>
                    <a href="{{ route('accessories.index') }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
                        <i class="fa-solid fa-dog mr-2"></i>
                        Manage Accessories
                    </a>
                </li>

            </ul>

        </div>

        {{-- Users --}}
        {{-- section --}}
        <h1
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item text-md border-b-2 border-slate-500">
            Users
        </h1>
        <a href="{{ secure_url(route('users.index')) }}" class="flex items-center text-white py-4 pl-6 nav-item">
            <i class="fa-solid fa-gear mr-3"></i>
            Manage Users
        </a>

        {{-- System --}}
        {{-- section --}}
        <h1
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item text-md border-b-2 border-slate-500">
            System
        </h1>
        <a href="{{ secure_url(route('contact.index')) }}" class="flex items-center text-white py-4 pl-6 nav-item">
            <i class="fa-solid fa-gear mr-3"></i>
            Enquiry
        </a>

        <a href="{{ route('admin-profile.index') }}"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            <i class="fas fa-user mr-3"></i>
            My Account
        </a>

        <form action="{{ secure_url(route('logout')) }}" method="post"
            class="block px-4 py-2 account-link hover:text-white">
            @csrf
            <button type="submit" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 nav-item">
                <i class="fas fa-sign-out-alt mr-3"></i>
                Sign Out
            </button>
        </form>

    </nav>
    <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
        <i class="fas fa-plus mr-3"></i> New Report
    </button> -->
</header>
