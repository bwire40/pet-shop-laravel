<aside class="relative bg-slate-800 w-64 hidden sm:block shadow-xl overflow-y-hidden">
    <div class="p-6">
        <a href="{{ route('home') }}" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ secure_url(route('home')) }}" class="flex text-white py-4 pl-6 nav-item mb-3">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>



        {{-- pets section --}}
        <h1
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item text-md border-b-4 border-slate-500">
            Pets
        </h1>
        <a href="{{ secure_url(route('pet-categories.create')) }}"
            class="flex items-center text-white py-3 pl-6 nav-item mb-4">
            <i class="fa-solid fa-list mr-3"></i>
            Categories
        </a>
        <a href="{{ secure_url(route('breeds.create')) }}" class="flex items-center text-white py-3 pl-6 nav-item mb-4">
            <i class="fa-solid fa-dog mr-2"></i>
            Breeds
        </a>

        {{-- pets --}}
        <div class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item">
            {{-- <i class="fas fa-sticky-note mr-3"></i> --}}

            <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
                class="flex items-center justify-center text-md" type="button"><i class="fa-solid fa-cat mr-3"></i>
                Pets
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

        </div>
        <!-- Dropdown menu -->
        <div id="dropdownDivider"
            class=" z-10 hidden divide-y bg-slate-700 divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 w-11/12">
            <ul class="py-2 text-sm text-white dark:text-gray-200" aria-labelledby="dropdownDividerButton">
                <li>
                    <a href="{{ secure_url(route('pets.create')) }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
                        <i class="fa-solid fa-plus mr-2"></i>
                        New Pet
                    </a>
                </li>
                <li>
                    <a href="{{ secure_url(route('pets.index')) }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
                        <i class="fa-solid fa-dog mr-2"></i>
                        Manage Pets
                    </a>
                </li>
                <li>
                    <a href="{{ secure_url(route('adorption.index')) }}"
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
            class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item text-md border-b-4
             border-slate-500 mt-4">
            Accessories
        </h1>
        <a href="{{ secure_url(route('accessory-categories.create')) }}"
            class="flex items-center text-white py-4 pl-6 nav-item">
            <i class="fa-solid fa-list mr-3"></i>
            Categories
        </a>

        {{-- pets --}}
        <div class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            {{-- <i class="fas fa-sticky-note mr-3"></i> --}}

            <button id="dropdownDividerButton3" data-dropdown-toggle="dropdownDivider3"
                class="flex items-center justify-center text-md" type="button"><i
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
        <div id="dropdownDivider3"
            class=" z-10 hidden divide-y bg-slate-700 divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 w-11/12">
            <ul class="py-2 text-sm text-white dark:text-gray-200" aria-labelledby="dropdownDividerButton3">
                <li>
                    <a href="{{ secure_url(route('accessories.create')) }}"
                        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                        {{-- <i class="fas fa-sticky-note mr-3"></i> --}}
                        <i class="fa-solid fa-plus mr-2"></i>
                        New Item
                    </a>
                </li>
                <li>
                    <a href="{{ secure_url(route('accessories.index')) }}"
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
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item text-md
             border-b-2 border-slate-500 mt-4">
            Users
        </h1>
        <a href="{{ secure_url(route('users.index')) }}" class="flex items-center text-white py-4 pl-6 nav-item">
            <i class="fa-solid fa-users mr-3"></i>
            Manage Users
        </a>

        <a href="{{ secure_url(route('contact.index')) }}" class="flex items-center text-white py-4 pl-6 nav-item">
            <i class="fa-solid fa-message mr-3"></i>
            Enquiry
        </a>

        <a href="{{ secure_url(route('contact.index')) }}" class="flex items-center text-white py-4 pl-6 nav-item">
            <i class="fa-solid fa-message mr-3"></i>
            Reports
        </a>
    </nav>

</aside>
