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

                            {{-- <td class="px-6 py-4">
                                        <a href="{{ route('adorption.edit', $adorption->id) }}"
                                            class="font-semibold text-green-600 dark:text-green-500 hover:underline  text-lg"><i
                                                class="fa-solid fa-pen-to-square"></i></i>Edit</a>

                                        <form action="{{route('')}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="text-red-600 text-lg"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td> --}}
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </section>
@endsection
