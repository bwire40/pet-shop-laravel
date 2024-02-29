@extends('layouts.home')
@section('content')
    <section class="overflow-hidden bg-white py-11 font-poppins dark:bg-gray-800">
        <div class="max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 md:w-1/2 ">
                    <div class="sticky top-0 z-50 overflow-hidden ">
                        <div class="relative mb-6 lg:mb-10 lg:h-2/4 ">
                            <img src="{{ asset('images/' . $pet->image) }}" alt=""
                                class="object-cover w-full lg:h-full ">
                        </div>
                        <div class="flex-wrap hidden md:flex ">
                            <div class="w-1/2 p-2 sm:w-1/4">
                                <a href="#"
                                    class="block border border-blue-300 dark:border-transparent dark:hover:border-blue-300 hover:border-blue-300">
                                    <img src="{{ asset('images/' . $pet->image) }}" alt=""
                                        class="object-cover w-full lg:h-20">
                                </a>
                            </div>
                            <div class="w-1/2 p-2 sm:w-1/4">
                                <a href="#"
                                    class="block border border-transparent dark:border-transparent dark:hover:border-blue-300 hover:border-blue-300">
                                    <img src="{{ asset('images/' . $pet->image) }}" alt=""
                                        class="object-cover w-full lg:h-20">
                                </a>
                            </div>
                            <div class="w-1/2 p-2 sm:w-1/4">
                                <a href="#"
                                    class="block border border-transparent dark:border-transparent dark:hover:border-blue-300 hover:border-blue-300">
                                    <img src="{{ asset('images/' . $pet->image) }}" alt=""
                                        class="object-cover w-full lg:h-20">
                                </a>
                            </div>
                            <div class="w-1/2 p-2 sm:w-1/4">
                                <a href="#"
                                    class="block border border-transparent dark:border-transparent dark:hover:border-blue-300 hover:border-blue-300">
                                    <img src="{{ asset('images/' . $pet->image) }}" alt=""
                                        class="object-cover w-full lg:h-20">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 ">
                    <div class="lg:pl-20">
                        <div class="mb-8 ">
                            {{-- <span class="text-lg font-medium text-rose-500 dark:text-rose-200">New</span> --}}
                            <h2 class="max-w-xl mt-2 mb-6 text-2xl font-bold dark:text-gray-400 md:text-4xl">
                                {{ $pet->name }}</h2>

                            <p class="max-w-md mb-8 text-gray-700 dark:text-gray-400">
                                {{ $pet->description }}
                            </p>

                        </div>
                        <div class="flex justify-between items-center mb-8  w-3/4">
                            <h2 class="text-xl font-bold text-red-500 dark:text-gray-400">
                                Adorption Fee:</h2>
                            <p class="font-bold">Kshs. {{ $pet->adorption_fee }}</p>
                        </div>
                        <div class="flex justify-between items-center mb-8  w-3/4">
                            <h2 class="text-xl font-bold dark:text-gray-400">
                                Color:</h2>
                            <p>{{ $pet->color }}</p>
                        </div>
                        <div class="flex justify-between items-center mb-8  w-3/4">
                            <h2 class="text-xl font-bold dark:text-gray-400">
                                Age:</h2>
                            <p>{{ $pet->age }}</p>
                        </div>
                        <div class="flex justify-between items-center mb-8  w-3/4">
                            <h2 class="text-xl font-bold dark:text-gray-400">
                                weight:</h2>
                            <p>{{ $pet->weight }}</p>
                        </div>
                        <div class="flex justify-between items-center mb-8  w-3/4">
                            <h2 class="text-xl font-bold dark:text-gray-400">
                                breed:</h2>
                            <p>{{ $pet->breed }}</p>
                        </div>


                        <div class="flex flex-wrap items-center -mx-4 ">

                            <div class="w-full px-4 mb-4 lg:mb-0 lg:w-1/2">
                                <a href="{{ route('adorpt-pet', $pet->id) }}"
                                    class="flex items-center justify-center w-full p-4 text-blue-500 border border-blue-500 rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-blue-600 hover:border-blue-600 hover:text-gray-100 dark:bg-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300">
                                    Proceed to Adorpt
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- footer --}}
    @include('shared.footer')
@endsection
