@extends('layouts.home')
@section('content')
    <section class="bg-white">
        <div class="flex items-center justify-center py-4 flex-wrap">
            <div class="bg-white w-full flex items-center justify-center">
                <div class="sm:px-4 md:px-4 px-6 max-w-8xl mx-auto">
                    <h2 class="py-3 font-bold">Make sure all fileds are filled before submitting</h2>
                    <form action="{{ route('adorption.store') }}" method="post">
                        @csrf
                        @method('post')
                        <div class="px-8 w-full">
                            <h4 class="text-2xl font-semibold py-4">Personal Info</h4>
                            <p class="text-base pb-10">Fill in your personal information.</p>

                            <div class="flex flex-col justify-center items-start w-full">
                                <div class="w-full">
                                    <div class="relative z-0 w-full mb-5 group">
                                        <input type="email" name="email" id="email" value="{{ $user->email }}"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " />
                                        <label for="email"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                                            address</label>
                                        @error('email')
                                            <p class="py-3 text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="grid md:grid-cols-2 md:gap-6">
                                        <div class="relative z-0 w-full mb-5 group">
                                            <input type="text" name="username" id="username" value="{{ $user->name }}"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                placeholder=" " />
                                            <label for="username"
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]
                                                    peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                                                     peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Full
                                                name</label>
                                            @error('username')
                                                <p class="py-3 text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="relative z-0 w-full mb-5 group">
                                            <input type="text" name="address" id="address"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                placeholder=" " />
                                            <label for="address"
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                                Address (5000,Nairobi Kenya)</label>
                                            @error('address')
                                                <p class="py-3 text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid md:grid-cols-2 md:gap-6">
                                        <div class="relative z-0 w-full mb-5 group">
                                            <input type="tel" name="number" id="number"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                placeholder=" " />
                                            <label for="number"
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                                                number (123-456-7890)</label>

                                            @error('number')
                                                <p class="py-3 text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>


                            </div>

                            <h4 class="text-2xl font-semibold py-4">Pet Information</h4>
                            <p class="text-base pb-10">The pet information.</p>

                            <div class="flex flex-col justify-center items-start w-full">
                                <div class="w-full">
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pet
                                                Name</label>
                                            <input type="text" name="petname" id="petname" value="{{ $pet->name }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type pet name" required="">
                                            @error('petname')
                                                <p class="py-3 text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="w-full">
                                            <label for="breed"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">breed</label>
                                            <input type="text" name="breed" id="breed" value="{{ $pet->breed }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="pet breed" required="">
                                            @error('breed')
                                                <p class="py-3 text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="w-full">
                                            <label for="adorption_fee"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">adorption_fee</label>
                                            <input type="number" name="adorption_fee" id="adorption_fee"
                                                value="{{ $pet->adorption_fee }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="KSHS." required="">
                                            @error('adorption_fee')
                                                <p class="py-3 text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="w-full">
                                            <label for="category"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">category</label>
                                            <input type="text" name="category" id="category"
                                                value="{{ $pet->category }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="category" required="">
                                            @error('category')
                                                <p class="py-3 text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="w-full">
                                            <label for="age"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">age</label>
                                            <input type="text" name="age" id="age"
                                                value="{{ $pet->age }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="6" required="">
                                            @error('age')
                                                <p class="py-3 text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="w-full">
                                            <label for="gender"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">gender</label>
                                            <input type="text" name="gender" id="gender"
                                                value="{{ $pet->gender }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="" required="">
                                            @error('gender')
                                                <p class="py-3 text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="w-full">
                                            <label for="color"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">color</label>
                                            <input type="text" name="color" id="color"
                                                value="{{ $pet->color }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="red" required="">
                                            @error('color')
                                                <p class="py-3 text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="weight"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pet
                                                Weight (kg)</label>
                                            <input type="text" name="weight" id="weight"
                                                value="{{ $pet->weight }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="" required="">
                                            @error('weight')
                                                <p class="py-3 text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="w-full">
                                            <label for="description"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">description</label>
                                            <input type="text" name="description" id="description"
                                                value="{{ $pet->description }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="" required="">
                                            @error('description')
                                                <p class="py-3 text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>



                                </div>
                                <h4 class="text-2xl font-semibold py-4">Family Information</h4>
                                <p class="text-base pb-10">The Family information.</p>

                            </div>
                            <div class="flex flex-col justify-center items-start w-full">
                                <div class="w-full">
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                                        <div class="w-full">
                                            <label for="experience"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Are
                                                you experienced with pets?</label>

                                            <div class="flex">
                                                <div class="flex items-center me-4">
                                                    <input id="inline-radio" type="radio" value="yes"
                                                        name="experience"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-radio"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                                                </div>
                                                <div class="flex items-center me-4">
                                                    <input id="inline-2-radio" type="radio" value="no"
                                                        name="experience"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-2-radio"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                                                </div>

                                                @error('experience')
                                                    <p class="text-red-500 pyp-3">{{ $message }}</p>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="w-full">
                                            <label for="pets"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Do
                                                you own other pets?</label>

                                            <div class="flex">
                                                <div class="flex items-center me-4">
                                                    <input id="inline-radio" type="radio" value="yes"
                                                        name="pets"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-radio"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                                                </div>
                                                <div class="flex items-center me-4">
                                                    <input id="inline-2-radio" type="radio" value="no"
                                                        name="pets"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-2-radio"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                                                </div>

                                                @error('pets')
                                                    <p class="text-red-500 pyp-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="w-full">
                                            <label for="vetenary"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Do
                                                you have a vetenary?</label>

                                            <div class="flex">
                                                <div class="flex items-center me-4">
                                                    <input id="inline-radio" type="radio" value="yes"
                                                        name="vetenary"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-radio"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                                                </div>
                                                <div class="flex items-center me-4">
                                                    <input id="inline-2-radio" type="radio" value="no"
                                                        name="vetenary"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-2-radio"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                                                </div>

                                                @error('vetenary')
                                                    <p class="text-red-500 pyp-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <h4 class="text-2xl font-semibold py-4">Housing Information</h4>
                            <p class="text-base pb-10">The Housing information.</p>

                            <div class="flex flex-col justify-center items-start w-full">
                                <div class="w-full">
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                                        <h3 class="mb-4 text-gray-900 dark:text-white">Type of Housing
                                        </h3>
                                        <div>
                                            <ul
                                                class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                                <li
                                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                                    <div class="flex items-center ps-3">
                                                        <input id="horizontal-list-radio-license" type="radio"
                                                            value="apartment" name="house_type"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="horizontal-list-radio-license"
                                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apartment
                                                        </label>
                                                    </div>
                                                </li>
                                                <li
                                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                                    <div class="flex items-center ps-3">
                                                        <input id="horizontal-list-radio-id" type="radio"
                                                            value="personal" name="house_type"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="horizontal-list-radio-id"
                                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Town
                                                            home</label>
                                                    </div>
                                                </li>
                                                <li
                                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                                    <div class="flex items-center ps-3">
                                                        <input id="horizontal-list-radio-military" type="radio"
                                                            value="ranch" name="house_type"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="horizontal-list-radio-military"
                                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ranch</label>
                                                    </div>
                                                </li>
                                                <li class="w-full dark:border-gray-600">
                                                    <div class="flex items-center ps-3">
                                                        <input id="horizontal-list-radio-passport" type="radio"
                                                            value="other" name="house_type"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="horizontal-list-radio-passport"
                                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
                                                    </div>
                                                </li>

                                            </ul>
                                            @error('house_type')
                                                <p class="text-red-500 pyp-3">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="w-full">
                                            <label for="house_ownership"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Do
                                                you own the house?</label>

                                            <div class="flex">
                                                <div class="flex items-center me-4">
                                                    <input id="inline-radio-yes" type="radio" value="yes"
                                                        name="house_ownership"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-radio-yes"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                                                </div>
                                                <div class="flex items-center me-4">
                                                    <input id="inline-radio-no" type="radio" value="no"
                                                        name="house_ownership"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-radio-no"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                                                </div>

                                                @error('house_ownership')
                                                    <p class="text-red-500 pyp-3">{{ $message }}</p>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="w-full">
                                            <label for="house_agreement"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Are
                                                you in agreement with the household members to adorpt this
                                                pet?</label>

                                            <div class="flex">
                                                <div class="flex items-center me-4">
                                                    <input id="inline-radio-agree" type="radio" value="yes"
                                                        name="house_agreement"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-radio-agree"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                                                </div>
                                                <div class="flex items-center me-4">
                                                    <input id="inline-3-radio" type="radio" value="no"
                                                        name="house_agreement"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-3-radio"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                                                </div>

                                                @error('house_agreement')
                                                    <p class="text-red-500 pyp-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <label for="allergies"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Do
                                                you have any allergies to pets?</label>

                                            <div class="flex">
                                                <div class="flex items-center me-4">
                                                    <input id="inline-radio-allergies" type="radio" value="yes"
                                                        name="allergies"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-radio-allergies"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                                                </div>
                                                <div class="flex items-center me-4">
                                                    <input id="inline-4-radio" type="radio" value="no"
                                                        name="allergies"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-4-radio"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                                                </div>

                                                @error('allergies')
                                                    <p class="text-red-500 pyp-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div>
                                            <ul
                                                class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600
                                                 dark:text-white">
                                                <li
                                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                                    <div class="flex items-center ps-3">
                                                        <input id="horizontal-list-radio-profesional" type="radio"
                                                            value="proffesional" name="training_type"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="horizontal-list-radio-profesional"
                                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Proffesional
                                                        </label>
                                                    </div>
                                                </li>
                                                <li
                                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                                    <div class="flex items-center ps-3">
                                                        <input id="horizontal-list-radio-personal" type="radio"
                                                            value="personal" name="training_type"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="horizontal-list-radio-personal"
                                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Personal
                                                            Training</label>
                                                    </div>
                                                </li>
                                                <li
                                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                                    <div class="flex items-center ps-3">
                                                        <input id="horizontal-list-radio-hire" type="radio"
                                                            value="hire trainer" name="training_type"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="horizontal-list-radio-hire"
                                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hire
                                                            Trainer</label>
                                                    </div>
                                                </li>
                                                <li class="w-full dark:border-gray-600">
                                                    <div class="flex items-center ps-3">
                                                        <input id="horizontal-list-radio-other" type="radio"
                                                            value="other" name="training_type"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="horizontal-list-radio-other"
                                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
                                                    </div>
                                                </li>
                                            </ul>
                                            @error('training_type')
                                                <p class="text-red-500 pyp-3">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <h4 class="text-2xl font-semibold py-4">Agreements</h4>
                            {{-- <p class="text-base pb-10">The Agreements.</p> --}}

                            <div class="flex flex-col justify-center items-start w-full">
                                <div class="w-full flex flex-col justify-center items-start">
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                                        <div class="w-full">
                                            <label for="care"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Do
                                                you promise to offer the love and care our pet deserves?</label>

                                            <div class="flex">
                                                <div class="flex items-center me-4">
                                                    <input id="inline-radio-care" type="radio" value="yes"
                                                        name="care"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-radio-care"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                                                </div>
                                                <div class="flex items-center me-4">
                                                    <input id="inline-5-radio" type="radio" value="no"
                                                        name="care"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-5-radio"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                                                </div>

                                                @error('care')
                                                    <p class="text-red-500 pyp-3">{{ $message }}</p>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="w-full">
                                            <label for="followup"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Are
                                                you in agreement to send us followup reports concerning the
                                                wellbeing of
                                                this pet?</label>

                                            <div class="flex">
                                                <div class="flex items-center me-4">
                                                    <input id="inline-radio-follow" type="radio" value="yes"
                                                        name="followup"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-radio-follow"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                                                </div>
                                                <div class="flex items-center me-4">
                                                    <input id="inline-6-radio" type="radio" value="no"
                                                        name="followup"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-6-radio"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                                                </div>

                                                @error('followup')
                                                    <p class="text-red-500 pyp-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <label for="terms"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Do
                                                you accept our terms and conditions concerning the adorptioin of
                                                this
                                                pet?</label>

                                            <div class="flex">
                                                <div class="flex items-center me-4">
                                                    <input id="inline-radio-terms" type="radio" value="yes"
                                                        name="terms"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-radio-terms"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                                                </div>
                                                <div class="flex items-center me-4">
                                                    <input id="inline-7-radio" type="radio" value="no"
                                                        name="terms"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-7-radio"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                                                </div>

                                                @error('terms')
                                                    <p class="text-red-500 pyp-3">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <button type="submit"
                            class="font-bold p-3 my-10 bg-slate-800 text-white w-80 rounded-lg transition-all duration-300 hover:bg-slate-700">Submit
                            Form</button>
                    </form>
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection

<script>
    function openTabs(tabsName) {
        var i;
        var x = document.getElementsByClassName("step-tab");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(tabsName).style.display = "block";
    }
</script>
