<x-app-layout>
    {{-- main dashboard content --}}
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-6">Dashboard</h1>


            <!-- Card is full width. Use in 12 col grid for best view. -->
            <!-- Card code block start -->
            <div class="w-full grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <a aria-label="card 1" href="{{ route('accessories.index') }}"
                    class="bg-white dark:bg-gray-800 rounded  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none focus:bg-gray-100 hover:bg-gray-100">
                    <div class="shadow px-8 py-6 flex items-center">
                        <div class="p-4 bg-indigo-700 rounded">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_with_icon-svg1.svg"
                                alt="icon" />
                        </div>

                        <div class="ml-6">
                            <h3 class="mb-1 leading-5 text-gray-800 dark:text-gray-100 font-bold text-2xl">2,330
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm tracking-normal font-normal leading-5">
                                Avg Sales</p>
                        </div>
                    </div>
                </a>
                <a aria-label="card 2" href="javascript:void(0)"
                    class="bg-white dark:bg-gray-800 rounded  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none focus:bg-gray-100 hover:bg-gray-100">
                    <div class=" shadow px-8 py-6 flex items-center">
                        <div class="p-4 bg-indigo-700 rounded text-white">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_with_icon-svg2.svg"
                                alt="icon" />

                        </div>
                        <div class="ml-6">
                            <h3 class="mb-1 leading-5 text-gray-800 dark:text-gray-100 font-bold text-2xl">12%</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm tracking-normal font-normal leading-5">
                                Click Rates</p>
                        </div>
                    </div>
                </a>
                <a aria-label="card 3" href="{{ route('users.index') }}"
                    class="bg-white dark:bg-gray-800 rounded  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none focus:bg-gray-100 hover:bg-gray-100">
                    <div class=" shadow px-8 py-6 flex items-center">
                        <div class="p-4 bg-indigo-700 rounded text-white">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_with_icon-svg3.svg"
                                alt="icon" />

                        </div>
                        <div class="ml-6">
                            <h3 class="mb-1 leading-5 text-gray-800 dark:text-gray-100 font-bold text-2xl">3245</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm tracking-normal font-normal leading-5">
                                Customers</p>
                        </div>
                    </div>
                </a>
                <a aria-label="card 4" href="{{ route('adorption.index') }}"
                    class="bg-white dark:bg-gray-800 rounded  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none focus:bg-gray-100 hover:bg-gray-100">
                    <div class="shadow px-8 py-6 flex items-center">
                        <div class="p-4 bg-indigo-700 rounded text-white">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/medium_stat_cards_with_icon-svg4.svg"
                                alt="icon" />

                        </div>
                        <div class="ml-6">
                            <h3 class="mb-1 leading-5 text-gray-800 dark:text-gray-100 font-bold text-2xl">245
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm tracking-normal font-normal leading-5">
                                Pets Adorpted</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Card code block end -->

            {{-- stats --}}

            <div class="mt-10 w-full">
                <div class="max-w-7xl mx-auto rounded shadow bg-white dark:bg-gray-800 py-6 pl-6 pr-12">
                    <div class="flex items-center">
                        <p tabindex="0"
                            class="focus:outline-none text-lg md:pr-96 font-semibold leading-4 text-gray-800 dark:text-gray-100">
                            Statistics</p>
                        <p tabindex="0"
                            class="focus:outline-none text-xs leading-3 pl-6 text-right text-gray-500 dark:text-gray-400">
                            Updated 1 month ago</p>
                    </div>
                    <div class="md:flex items-center justify-between pt-8">
                        <div class="flex items-center">
                            <div role="img" aria-label="graph" tabindex="0"
                                class="focus:outline-none flex items-center justify-center w-12 h-12 bg-purple-100 rounded-full">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/card92-svg1.svg"
                                    alt="icon" />

                            </div>
                            <div class="pl-4">
                                <p tabindex="0"
                                    class="focus:outline-none w-11 text-lg font-semibold leading-none text-gray-800 dark:text-gray-100">
                                    230k</p>
                                <a href="javascript:void(0)"
                                    class="focus:outline-none focus:text-indigo-800 hover:text-indigo-800 text-gray-500 dark:text-gray-400  ">
                                    <p class="w-8  mt-2 text-xs leading-3">Sales</p>
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center md:pt-0 pt-4 md:pl-10">
                            <div tabindex="0" role="img" aria-label="user"
                                class="focus:outline-none flex items-center justify-center w-12 h-12 bg-blue-100 rounded-full">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/card92-svg2.svg"
                                    alt="icon" />

                            </div>
                            <div class="pl-4">
                                <p tabindex="0"
                                    class="focus:outline-none w-11 text-lg font-semibold leading-none text-gray-800 dark:text-gray-100">
                                    800</p>
                                <a href="javascript:void(0)"
                                    class="focus:outline-none focus:text-indigo-800 hover:text-indigo-800 text-gray-500 dark:text-gray-400  ">
                                    <p class="w-8 text-xs leading-3  mt-2 ">Customers</p>
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center md:pt-0 pt-4 md:pl-10">
                            <div role="img" aria-label="box" tabindex="0"
                                class="focus:outline-none flex items-center justify-center w-12 h-12 bg-red-100 rounded-full">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/card92-svg3.svg"
                                    alt="icon" />

                            </div>
                            <div class="pl-4">
                                <p tabindex="0"
                                    class="focus:outline-none w-11 text-lg font-semibold leading-none text-gray-800 dark:text-gray-100">
                                    1k</p>
                                <a href="javascript:void(0)"
                                    class="focus:outline-none focus:text-indigo-800 hover:text-indigo-800 text-gray-500 dark:text-gray-400  ">
                                    <p class="w-8 text-xs mt-2 leading-3 ">Products</p>
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center md:pt-0 pt-4 md:pl-10">
                            <div aria-label="dollar" role="img" tabindex="0"
                                class="focus:outline-none flex items-center justify-center w-12 h-12 bg-green-100 rounded-full">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/card92-svg4.svg"
                                    alt="icon" />

                            </div>
                            <div class="pl-4">
                                <p tabindex="0"
                                    class="focus:outline-none w-11 text-lg font-semibold leading-none text-gray-800 dark:text-gray-100">
                                    Kshs 1M</p>
                                <a href="javascript:void(0)"
                                    class="focus:outline-none focus:text-indigo-800 hover:text-indigo-800 text-gray-500 dark:text-gray-400  ">
                                    <p class="w-8 text-xs leading-3  mt-2">Revenue</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="overflow-x-auto w-full mt-10">
                <h1>:: Latest Customers</h1>
                <div class="w-full rounded shadow">
                    <table class="w-full">
                        <thead class="dark:bg-gray-900 bg-gray-100">
                            <td tabindex="0"
                                class="focus:outline-none text-xs font-semibold text-gray-800 dark:text-gray-100 uppercase sm:py-8 py-4 sm:pl-6 pl-4">
                                <div class="flex items-center">
                                    User
                                    <div onkeypress="dropdownHandler(this)" tabindex="0"
                                        class="text-gray-300 focus:text-indigo-600 focus:outline-none pl-24 relative cursor-pointer"
                                        onclick="dropdownHandler(this)">
                                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="14"
                                            height="25" viewBox="0 0 14 25" fill="none">
                                            <path
                                                d="M10.9083 9.15817C10.7916 9.27484 10.675 9.33317 10.5 9.33317C10.325 9.33317 10.2083 9.27484 10.0916 9.15817L6.99996 6.0665L3.90829 9.15817C3.67496 9.3915 3.32496 9.3915 3.09163 9.15817C2.85829 8.92484 2.85829 8.57484 3.09163 8.3415L6.59163 4.8415C6.82496 4.60817 7.17496 4.60817 7.40829 4.8415L10.9083 8.3415C11.1416 8.57484 11.1416 8.92484 10.9083 9.15817Z"
                                                fill="currentColor" />
                                            <path
                                                d="M10.9083 16.6582L7.40829 20.1582C7.29163 20.2748 7.17496 20.3332 6.99996 20.3332C6.82496 20.3332 6.70829 20.2748 6.59163 20.1582L3.09163 16.6582C2.85829 16.4248 2.85829 16.0748 3.09163 15.8415C3.32496 15.6082 3.67496 15.6082 3.90829 15.8415L6.99996 18.9332L10.0916 15.8415C10.325 15.6082 10.675 15.6082 10.9083 15.8415C11.1416 16.0748 11.1416 16.4248 10.9083 16.6582Z"
                                                fill="currentColor" />
                                        </svg>
                                        <ul class="hidden mt-1 absolute -ml-12 bg-white rounded shadow">
                                            <li tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-xs text-gray-800 dark:text-gray-100 hover:text-white hover:bg-indigo-700 py-2 px-4">
                                                edit</li>
                                            <li tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-xs text-gray-800 dark:text-gray-100 hover:text-white hover:bg-indigo-700 py-2 px-4">
                                                add</li>
                                            <li tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-xs text-gray-800 dark:text-gray-100 hover:text-white hover:bg-indigo-700 py-2 px-4">
                                                Select</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td tabindex="0"
                                class="focus:outline-none text-xs font-semibold text-gray-800 dark:text-gray-100 pl-6 uppercase">
                                <div class="flex items-center">
                                    Age
                                    <div onkeypress="dropdownHandler(this)" tabindex="0"
                                        class="text-gray-300 focus:outline-none focus:text-indigo-600 pl-16 relative cursor-pointer"
                                        onclick="dropdownHandler(this)">
                                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="14"
                                            height="25" viewBox="0 0 14 25" fill="none">
                                            <path
                                                d="M10.9083 9.15817C10.7916 9.27484 10.675 9.33317 10.5 9.33317C10.325 9.33317 10.2083 9.27484 10.0916 9.15817L6.99996 6.0665L3.90829 9.15817C3.67496 9.3915 3.32496 9.3915 3.09163 9.15817C2.85829 8.92484 2.85829 8.57484 3.09163 8.3415L6.59163 4.8415C6.82496 4.60817 7.17496 4.60817 7.40829 4.8415L10.9083 8.3415C11.1416 8.57484 11.1416 8.92484 10.9083 9.15817Z"
                                                fill="currentColor" />
                                            <path
                                                d="M10.9083 16.6582L7.40829 20.1582C7.29163 20.2748 7.17496 20.3332 6.99996 20.3332C6.82496 20.3332 6.70829 20.2748 6.59163 20.1582L3.09163 16.6582C2.85829 16.4248 2.85829 16.0748 3.09163 15.8415C3.32496 15.6082 3.67496 15.6082 3.90829 15.8415L6.99996 18.9332L10.0916 15.8415C10.325 15.6082 10.675 15.6082 10.9083 15.8415C11.1416 16.0748 11.1416 16.4248 10.9083 16.6582Z"
                                                fill="currentColor" />
                                        </svg>
                                        <ul class="hidden mt-1 absolute -ml-12 bg-white rounded shadow">
                                            <li tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-xs text-gray-800 dark:text-gray-100 hover:text-white hover:bg-indigo-700 py-2 px-4">
                                                edit</li>
                                            <li tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-xs text-gray-800 dark:text-gray-100 hover:text-white hover:bg-indigo-700 py-2 px-4">
                                                add</li>
                                            <li tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-xs text-gray-800 dark:text-gray-100 hover:text-white hover:bg-indigo-700 py-2 px-4">
                                                Select</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td tabindex="0"
                                class="focus:outline-none text-xs font-semibold text-gray-800 dark:text-gray-100 pl-6 uppercase">
                                <div class="flex items-center">
                                    Created at
                                    <div onkeypress="dropdownHandler(this)" tabindex="0"
                                        class="text-gray-300 focus:outline-none focus:text-indigo-600 pl-10 relative cursor-pointer"
                                        onclick="dropdownHandler(this)">
                                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="14"
                                            height="25" viewBox="0 0 14 25" fill="none">
                                            <path
                                                d="M10.9083 9.15817C10.7916 9.27484 10.675 9.33317 10.5 9.33317C10.325 9.33317 10.2083 9.27484 10.0916 9.15817L6.99996 6.0665L3.90829 9.15817C3.67496 9.3915 3.32496 9.3915 3.09163 9.15817C2.85829 8.92484 2.85829 8.57484 3.09163 8.3415L6.59163 4.8415C6.82496 4.60817 7.17496 4.60817 7.40829 4.8415L10.9083 8.3415C11.1416 8.57484 11.1416 8.92484 10.9083 9.15817Z"
                                                fill="currentColor" />
                                            <path
                                                d="M10.9083 16.6582L7.40829 20.1582C7.29163 20.2748 7.17496 20.3332 6.99996 20.3332C6.82496 20.3332 6.70829 20.2748 6.59163 20.1582L3.09163 16.6582C2.85829 16.4248 2.85829 16.0748 3.09163 15.8415C3.32496 15.6082 3.67496 15.6082 3.90829 15.8415L6.99996 18.9332L10.0916 15.8415C10.325 15.6082 10.675 15.6082 10.9083 15.8415C11.1416 16.0748 11.1416 16.4248 10.9083 16.6582Z"
                                                fill="currentColor" />
                                        </svg>
                                        <ul class="hidden mt-1 absolute -ml-12 bg-white rounded shadow">
                                            <li tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-xs text-gray-800 dark:text-gray-100
                                                 hover:text-white hover:bg-indigo-700 py-2 px-4">
                                                edit</li>
                                            <li tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-xs text-gray-800 dark:text-gray-100 hover:text-white hover:bg-indigo-700 py-2 px-4">
                                                add</li>
                                            <li tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-xs text-gray-800 dark:text-gray-100 hover:text-white hover:bg-indigo-700 py-2 px-4">
                                                Select</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td tabindex="0"
                                class="focus:outline-none text-xs font-semibold text-gray-800 dark:text-gray-100 pl-6 uppercase">
                                <div class="flex items-center">
                                    Status
                                    <div tabindex="0" onkeypress="dropdownHandler(this)"
                                        class="text-gray-300 focus:outline-none focus:text-indigo-600 pl-6 relative cursor-pointer"
                                        onclick="dropdownHandler(this)">
                                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="14"
                                            height="25" viewBox="0 0 14 25" fill="none">
                                            <path
                                                d="M10.9083 9.15817C10.7916 9.27484 10.675 9.33317 10.5 9.33317C10.325 9.33317 10.2083 9.27484 10.0916 9.15817L6.99996 6.0665L3.90829 9.15817C3.67496 9.3915 3.32496 9.3915 3.09163 9.15817C2.85829 8.92484 2.85829 8.57484 3.09163 8.3415L6.59163 4.8415C6.82496 4.60817 7.17496 4.60817 7.40829 4.8415L10.9083 8.3415C11.1416 8.57484 11.1416 8.92484 10.9083 9.15817Z"
                                                fill="currentColor" />
                                            <path
                                                d="M10.9083 16.6582L7.40829 20.1582C7.29163 20.2748 7.17496 20.3332 6.99996 20.3332C6.82496 20.3332 6.70829 20.2748 6.59163 20.1582L3.09163 16.6582C2.85829 16.4248 2.85829 16.0748 3.09163 15.8415C3.32496 15.6082 3.67496 15.6082 3.90829 15.8415L6.99996 18.9332L10.0916 15.8415C10.325 15.6082 10.675 15.6082 10.9083 15.8415C11.1416 16.0748 11.1416 16.4248 10.9083 16.6582Z"
                                                fill="currentColor" />
                                        </svg>
                                        <ul class="hidden mt-1 absolute -ml-12 bg-white rounded shadow">
                                            <li tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-xs text-gray-800 dark:text-gray-100 hover:text-white hover:bg-indigo-700 py-2 px-4">
                                                edit</li>
                                            <li tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-xs text-gray-800 dark:text-gray-100 hover:text-white hover:bg-indigo-700 py-2 px-4">
                                                add</li>
                                            <li tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-xs text-gray-800 dark:text-gray-100 hover:text-white hover:bg-indigo-700 py-2 px-4">
                                                Select</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td tabindex="0"
                                class="focus:outline-none text-xs font-semibold text-gray-800 dark:text-gray-100 pl-6 uppercase sm:pr-6 pr-4">
                                <div class="flex items-center">
                                    Loyalty
                                    <div onkeypress="dropdownHandler(this)" tabindex="0"
                                        class="text-gray-300 focus:outline-none focus:text-indigo-600 pl-6 relative cursor-pointer"
                                        onclick="dropdownHandler(this)">
                                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="14"
                                            height="25" viewBox="0 0 14 25" fill="none">
                                            <path
                                                d="M10.9083 9.15817C10.7916 9.27484 10.675 9.33317 10.5 9.33317C10.325 9.33317 10.2083 9.27484 10.0916 9.15817L6.99996 6.0665L3.90829 9.15817C3.67496 9.3915 3.32496 9.3915 3.09163 9.15817C2.85829 8.92484 2.85829 8.57484 3.09163 8.3415L6.59163 4.8415C6.82496 4.60817 7.17496 4.60817 7.40829 4.8415L10.9083 8.3415C11.1416 8.57484 11.1416 8.92484 10.9083 9.15817Z"
                                                fill="currentColor" />
                                            <path
                                                d="M10.9083 16.6582L7.40829 20.1582C7.29163 20.2748 7.17496 20.3332 6.99996 20.3332C6.82496 20.3332 6.70829 20.2748 6.59163 20.1582L3.09163 16.6582C2.85829 16.4248 2.85829 16.0748 3.09163 15.8415C3.32496 15.6082 3.67496 15.6082 3.90829 15.8415L6.99996 18.9332L10.0916 15.8415C10.325 15.6082 10.675 15.6082 10.9083 15.8415C11.1416 16.0748 11.1416 16.4248 10.9083 16.6582Z"
                                                fill="currentColor" />
                                        </svg>
                                        <ul class="hidden mt-1 absolute -ml-12 bg-white rounded shadow">
                                            <li tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-xs text-gray-800 dark:text-gray-100 hover:text-white hover:bg-indigo-700 py-2 px-4">
                                                edit</li>
                                            <li tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-xs text-gray-800 dark:text-gray-100 hover:text-white hover:bg-indigo-700 py-2 px-4">
                                                add</li>
                                            <li tabindex="0"
                                                class="focus:outline-none focus:text-indigo-600 text-xs text-gray-800 dark:text-gray-100 hover:text-white hover:bg-indigo-700 py-2 px-4">
                                                Select</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800">

                            @foreach ($users as $user)
                                <tr class="border-b border-gray-200 dark:border-gray-900">
                                    <td class="py-4 sm:pl-6 pl-4">
                                        <div class="flex items-center">
                                            <div role="img" aria-label="icon" tabindex="0"
                                                class="focus:outline-none w-8 h-8 bg-gray-100 rounded flex items-center justify-center">
                                                <img src="{{ asset('images/' . $user->image) }}" alt="" />
                                            </div>
                                            <div class="pl-5">
                                                <p tabindex="0"
                                                    class="focus:outline-none text-sm font-semibold leading-none text-gray-800 dark:text-gray-100 pb-2">
                                                    {{ $user->name }}</p>
                                                <p tabindex="0"
                                                    class="focus:outline-none text-xs leading-3 text-gray-500 dark:text-gray-400">
                                                    {{ $user->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 sm:pl-6 pl-4">
                                        <div class="flex items-center">
                                            <div role="img" aria-label="monitor icon" tabindex="0"
                                                class="focus:outline-none w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/card89-svg7.svg"
                                                    alt="technology" />
                                            </div>
                                            <p tabindex="0"
                                                class="focus:outline-none text-sm leading-tight text-gray-500 dark:text-gray-400 pl-3">
                                                {{ $user->age }}</p>
                                        </div>
                                    </td>
                                    <td class="py-4 sm:pl-6 pl-4">
                                        <p tabindex="0"
                                            class="focus:outline-none text-sm font-semibold leading-none text-gray-800 dark:text-gray-100">
                                            {{ $user->created_at }}</p>

                                    </td>
                                    <td class="py-4 sm:pl-6 pl-4">
                                        <p tabindex="0"
                                            class="focus:outline-none text-sm leading-none text-gray-800 dark:text-gray-100">
                                            {{ $user->userType }}</p>
                                    </td>
                                    <td class="py-4 sm:px-6 px-4">
                                        <div class="flex items-center">
                                            <p tabindex="0"
                                                class="focus:outline-none text-sm font-semibold pr-3 leading-none text-gray-800 dark:text-gray-100">
                                                68%</p>
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/card89-svg11.svg"
                                                alt="up" />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>



            <!-- Card is full width. Use in 12 col grid for best view. -->
            <!-- Card code block start -->
            <h1 class="mt-10">News Desk</h1>
            <div class="flex flex-col-reverse lg:flex-row w-full bg-white dark:bg-gray-800 shadow rounded mt-10">
                <div class="w-full lg:w-1/2">
                    <div aria-label="card" class="pt-4 lg:pt-6 pb-4 lg:pb-6 pl-4 lg:pl-6 pr-4 lg:pr-6">
                        <div class="flex justify-between items-center lg:items-start flex-row-reverse lg:flex-col">
                            <h4 class="text-base text-indigo-700 dark:text-indigo-600 tracking-normal leading-4">
                                {{ date('Y') }}</h4>
                            <h4 class="lg:mt-3 text-gray-600 dark:text-gray-400 text-base font-normal">
                                {{ date('Y-M-D') }}</h4>
                        </div>
                        <a tabindex="0"
                            class="focus:outline-none focus:underline focus:text-gray-500 hover:text-gray-500 cursor-pointer text-gray-800 dark:text-gray-100">
                            <h2 class=" mt-4 mb-2 tracking-normal text-xl lg:text-2xl font-bold">CES - The Global Stage
                                for Innovation</h2>
                        </a>
                        <p
                            class="mb-6 font-normal text-gray-600 dark:text-gray-400 text-sm tracking-normal w-11/12 lg:w-9/12">
                            The Consumer Technology Association’s CES 2024 will take place on 7-10 Febuary at the Las
                            Vegas Convention Center in Nevada. It will bring together over 150,000 delegates and 4,500
                            exhibitors to explore the business of consumer technologies.</p>
                        <div class="flex lg:items-center items-start flex-col lg:flex-row">
                            <div class="flex items-center">
                                <div class="border-2 border-white dark:border-gray-700 shadow rounded-full w-6 h-6">
                                    <img class="w-full h-full overflow-hidden object-cover rounded-full"
                                        src="https://dh-ui.s3.amazonaws.com/assets/webapp/layout/grid_cards/grid_card8.jpg"
                                        alt="avatar" />
                                </div>
                                <div
                                    class="-ml-2 border-2 border-white dark:border-gray-700 shadow rounded-full w-6 h-6">
                                    <img class="w-full h-full overflow-hidden object-cover rounded-full"
                                        src="https://dh-ui.s3.amazonaws.com/assets/webapp/layout/grid_cards/grid_card9.jpg"
                                        alt="avatar" />
                                </div>
                                <div
                                    class="-ml-2 border-2 border-white dark:border-gray-700 shadow rounded-full w-6 h-6">
                                    <img class="w-full h-full overflow-hidden object-cover rounded-full"
                                        src="https://dh-ui.s3.amazonaws.com/assets/webapp/layout/grid_cards/grid_card10.jpg"
                                        alt="avatar" />
                                </div>
                                <div
                                    class="-ml-2 border-2 border-white dark:border-gray-700 shadow rounded-full w-6 h-6">
                                    <img class="w-full h-full overflow-hidden object-cover rounded-full"
                                        src="https://dh-ui.s3.amazonaws.com/assets/webapp/layout/grid_cards/grid_card11.jpg"
                                        alt="avatar" />
                                </div>
                                <div
                                    class="-ml-2 border-2 border-white dark:border-gray-700 shadow rounded-full w-6 h-6">
                                    <img class="w-full h-full overflow-hidden object-cover rounded-full"
                                        src="https://dh-ui.s3.amazonaws.com/assets/webapp/layout/grid_cards/grid_card12.jpg"
                                        alt="avatar" />
                                </div>
                                <a tabindex="0"
                                    class="cursor-pointer text-gray-600 focus:outline-none focus:underline focus:text-gray-400 hover:text-gray-500">
                                    <p class=" dark:text-gray-400 text-xs font-normal ml-1">+12 Attendees</p>
                                </a>
                            </div>
                            <button
                                class="text-gray-600 dark:text-gray-400 focus:outline-none hover:text-indigo-700 focus:text-indigo-700 mt-4 lg:mt-0 ml-0 lg:ml-12 flex items-end">
                                <span class="mr-1 ">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-map-pin" width="20" height="20"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <circle cx="12" cy="11" r="3" />
                                        <path
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 0 1 -2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" />
                                    </svg>
                                </span>
                                <p class=" text-sm tracking-normal font-normal text-center">Nairobi, kenya</p>
                            </button>
                        </div>
                    </div>
                    <div
                        class="px-5 lg:px-5 md:px-10 py-3 lg:py-4 flex flex-row items-center justify-between border-t border-gray-300">
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <div
                                    class="bg-white rounded-full w-5 h-5 flex flex-shrink-0 justify-center items-center relative">
                                    <input aria-labelledby="id1" checked type="radio" name="radio"
                                        class="checkbox appearance-none focus:outline-none border rounded-full border-gray-400 absolute cursor-pointer w-full h-full checked:border-none" />
                                    <div
                                        class="check-icon hidden border-4 border-black dark:border-gray-700 rounded-full w-full h-full z-1">
                                    </div>
                                </div>
                                <p id="id1"
                                    class="ml-3 text-base leading-4 font-normal text-gray-800 dark:text-gray-100">Going
                                </p>
                            </div>
                            <div class="flex items-center ml-6">
                                <div
                                    class="bg-white rounded-full w-5 h-5 flex flex-shrink-0 justify-center items-center relative">
                                    <input aria-labelledby="id2" type="radio" name="radio"
                                        class="checkbox appearance-none focus:outline-none border rounded-full border-gray-400 absolute cursor-pointer w-full h-full checked:border-none" />
                                    <div
                                        class="check-icon hidden border-4 border-black dark:border-gray-700 rounded-full w-full h-full z-1">
                                    </div>
                                </div>
                                <p id="id2"
                                    class="ml-3 text-base leading-4 font-normal text-gray-800 dark:text-gray-100">Not
                                    Going</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <button aria-label="save"
                                class="focus:outline-none focus:text-gray-400 hover:text-gray-500  text-gray-600 dark:text-gray-400  cursor-pointer mr-4">
                                <svg class="feather feather-bookmark" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                </svg>
                            </button>
                            <button aria-label="share"
                                class="text-indigo-700 dark:text-indigo-600  hover:text-indigo-500  focus:outline-none focus:text-indigo-500 cursor-pointer">
                                <svg class="feather feather-share-2" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="18" cy="5" r="3"></circle>
                                    <circle cx="6" cy="12" r="3"></circle>
                                    <circle cx="18" cy="19" r="3"></circle>
                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="relative w-full h-64 lg:h-auto lg:w-1/2 rounded-t lg:rounded-t-none lg:rounded-r inline-block">
                    <img class="w-full h-full absolute inset-0 object-cover rounded-t lg:rounded-r lg:rounded-t-none"
                        src="https://tuk-cdn.s3.amazonaws.com/assets/components/grid_cards/gc_27.png"
                        alt="banner" />
                </div>
                <style>
                    .checkbox:checked {
                        border: none;
                    }

                    .checkbox:checked+.check-icon {
                        display: flex;
                    }
                </style>
            </div>
            <!-- Card code block end -->

        </main>

        @include('admin.partials.footer')

</x-app-layout>
