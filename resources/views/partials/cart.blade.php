<div class="pl-3 inline-block no-underline hover:text-black">
    <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
        class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400"
        type="button">
        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24">
            <path
                d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
            <circle cx="10.5" cy="18.5" r="1.5" />
            <circle cx="17.5" cy="18.5" r="1.5" />
        </svg>
        <span class="sr-only">Cart</span>
        <div
            class="absolute inline-flex items-center
        justify-center w-6 h-6 text-xs font-bold
         text-white bg-red-500 border-2 border-white
         rounded-full -top-2 -end-2 dark:border-gray-900">
            {{ count((array) session('cart')) }}</div>
    </button>

    <!-- Dropdown menu -->
    <div id="dropdownNotification"
        class="z-30 hidden w-full max-w-sm bg-white divide-y divide-gray-100 
    rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700"
        aria-labelledby="dropdownNotificationButton">
        @php
            $total = 0;
        @endphp
        @foreach ((array) session('cart') as $id => $details)
            @php
                $total += $details['price'] * $details['quantity'];
            @endphp
        @endforeach
        <div
            class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
            Cart List
        </div>
        <div class="divide-y divide-gray-100 dark:divide-gray-700">
            @if (session('cart'))

                @foreach (session('cart') as $id => $details)
                    <div class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex-shrink-0">
                            <img class=" w-32 h-32" src="{{ asset('images/' . $details['image']) }}" alt="Jese image">

                        </div>
                        <div class="w-full ps-3 flex flex-col justify-center">
                            <h3 class="font-bold">Product Name: {{ $details['name'] }}</h3>
                            <p class="font-bold ">Quantity: {{ $details['quantity'] }} items
                            </p>
                            <p class="font-bold text-green-500">Kshs. {{ $details['price'] }}</p>
                        </div>

                    </div>
                @endforeach

            @endif

        </div>
        <div class="mt-10 p-2">
            <h3 class="font-bold">Total: <span class="font-semibold"> Kshs. {{ $total }}</span></h3>
        </div>
        <a href="{{ route('cart') }}"
            class="block py-2 text-sm font-medium text-center
         text-gray-900 rounded-b-lg bg-gray-50 
        hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
            <div class="inline-flex items-center ">
                <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path
                        d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                </svg>
                View all
            </div>
        </a>
    </div>


</div>
