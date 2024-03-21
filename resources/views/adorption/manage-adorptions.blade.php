@extends('layouts.home')
@section('content')
    <section class="bg-white py-8 mt-20">
        <div class="container mx-auto flex items-center justify-center flex-wrap pt-4">
            @include('shared.success_message')
            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-center mt-0 px-2 py-3">
                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl"
                        href="#">
                        Your adoptions
                    </a>


                </div>
            </nav>

            {{-- table --}}


            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                id="table_man_user_adoption">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pet Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            breed
                        </th>
                        <th scope="col" class="px-6 py-3">
                            age
                        </th>
                        <th scope="col" class="px-6 py-3">
                            weight
                        </th>
                        <th scope="col" class="px-6 py-3">
                            color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            gender
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Adoption Fee (KSHS)
                        </th>
                        <th scope="col" class="px-6 py-3">
                            adorption status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Preview
                        </th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($adorptions as $adorption)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                {{ $adorption->petname }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adorption->category }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adorption->breed }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adorption->age }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adorption->weight }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adorption->color }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $adorption->gender }}
                            </td>

                            <td class="px-6 py-4">
                                Kshs. {{ $adorption->adorption_fee }}
                            </td>
                            <td class="px-6 py-4">

                                @if ($adorption->adorption_status == 'approved')
                                    <span
                                        class="bg-green-500 text-white p-2 rounded-lg font-bold">{{ $adorption->adorption_status }}</span>
                                @elseif ($adorption->adorption_status == 'pending')
                                    <span
                                        class="bg-yellow-400 text-white p-2 rounded-lg font-bold">{{ $adorption->adorption_status }}</span>
                                @elseif ($adorption->adorption_status == 'rejected')
                                    <span
                                        class="bg-red-500 text-white p-2 rounded-lg font-bold">{{ $adorption->adorption_status }}</span>
                                @endif
                            </td>

                            <td class="px-6 py-4">
                                @if ($adorption->adorption_status != 'approved')
                                    <h1>Not approved yet</h1>
                                @else
                                    <a href="{{ route('preview-adorptions', $adorption->id) }}"
                                        class="font-semibold text-green-600 dark:text-green-500 hover:underline  text-lg flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3
                                                                                            304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4
                                                                                            93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144
                                                                                            256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                        </svg>

                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </section>
@endsection
