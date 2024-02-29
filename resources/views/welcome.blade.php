@extends('layouts.home')
@section('content')
    @include('shared.header_slides')


    @if ($pets)
        {{-- Pets Accessories --}}
        <section class="bg-white py-8">
            <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
                <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl"
                            href="#">
                            Pets
                        </a>

                        <div class="flex items-center" id="store-nav-content">
                            <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                                </svg>
                            </a>

                            <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </nav>



                @foreach ($pets as $pet)
                    <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                        <a href="{{ route('show-pet', $pet->id) }}">
                            <img class="hover:grow hover:shadow-lg rounded-lg" src="{{ asset('images/' . $pet->image) }}" />
                            <div class="pt-3 flex items-center justify-between">
                                <p class="">Pet Name: {{ $pet->name }}</p>
                            </div>

                            <p class="">More details: {{ $pet->description }}</p>
                            <p class="">Age: {{ $pet->age }}</p>
                            <a href="{{ route('show-pet', $pet->id) }}"
                                class="bg-blue-500 text-white p-2 my-2 text-sm w-fit rounded-lg transition-all duration-300 hover:bg-blue-600">>>
                                View
                                More</a>
                        </a>
                    </div>
                @endforeach
            @else
                <div>
                    Nothing
                </div>
    @endif



    </div>

    {{-- accessories --}}
    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
        <nav id="store" class="w-full z-30 top-0 px-6 py-1">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
                <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl"
                    href="#">
                    Accessories
                </a>

                <div class="flex items-center" id="store-nav-content">
                    <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                        </svg>
                    </a>

                    <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path
                                d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                        </svg>
                    </a>
                </div>
            </div>
        </nav>

        @foreach ($accessories as $accessory)
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="{{ route('show-accessory', $accessory->id) }}">
                    <img class="hover:grow hover:shadow-lg rounded-lg" src="{{ asset('images/' . $accessory->image) }}" />
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">{{ $accessory->name }}</p>

                    </div>
                    <p class="">More details: {{ $accessory->description }}</p>
                    <p class="">Price: KES {{ $accessory->price }}</p>

                </a>
                <a href="{{ route('show-accessory', $accessory->id) }}"
                    class="bg-blue-500 text-white p-2 my-2 text-sm w-fit rounded-lg transition-all duration-300 hover:bg-blue-600">>>
                    View
                    More</a>
            </div>
        @endforeach


    </div>
    </section>


    {{-- about --}}
    <section class="bg-white py-8">
        <div class="container py-8 px-6 mx-auto">
            <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl mb-8"
                href="#">
                About
            </a>



            <p class="mb-8">
                At PetShop, our mission is to unite people with their perfect animal
                companions and provide them with everything they need to ensure a happy and healthy life together. We
                specialize in facilitating adoptions, connecting pets with caring individuals and families who are ready to
                open their hearts and homes to a new furry friend.


            </p>
        </div>
    </section>


    {{-- footer --}}
    @include('shared.footer')
@endsection
