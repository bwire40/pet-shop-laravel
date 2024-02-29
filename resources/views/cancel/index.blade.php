@extends('layouts.home')
@section('content')
    <div class="flex items-center justify-center py-12">
        <div class="bg-white dark:bg-gray-800 rounded-md flex items-center justify-center mx-4 w-full">
            <div class="flex flex-col items-center py-16 w-full">
                <img class="px-4 hidden md:block"
                    src="https://images.pexels.com/photos/2194261/pexels-photo-2194261.jpeg?auto=compress&cs=tinysrgb&w=600" />
                {{-- <img class="md:hidden" src="https://i.ibb.co/RgYQvV7/undraw-page-not-found-su7k-1.png" /> --}}
                <h1 class="px-4 pt-8 pb-4 text-center dark:text-white text-8xl font-bold text-gray-800">You cancel the
                    Transaction!</h1>
                <p class="px-4 pb-10 text-base leading-none dark:text-gray-200 text-center text-gray-600">Continue shopping
                    with us for more.</p>
                <a href="{{ route('accessory-items') }}"
                    class="mx-4 h-10 w-44  rounded-md text-red-500 text-md leading-3 text-base">
                    << Go Back</a>
            </div>
        </div>
    </div>
@endsection
