<x-app-layout>
    {{-- create --}}
    <div class="w-full overflow-x-hidden border-t flex flex-col">

        @include('shared.success_message')
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-5xl lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit pet</h2>
                <img src="{{ asset('images/' . $pet->image) }}">
                <form class="mt-4" action="{{ route('pets.update', $pet->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="flex items-center justify-center w-full py-4">
                        <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                    800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" name="image" class=" sm:hidden lg:block" />
                        </label>

                    </div>
                    @error('image')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900
                             dark:text-white">Pet
                                Name</label>
                            <input type="text" name="name" id="name" value="{{ $pet->name }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Type pet name">
                            @error('name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="breed"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Breed</label>
                            <select id="breed" name="breed"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="{{ $pet->breed }}">{{ $pet->breed }}</option>
                                @foreach ($breeds as $breed)
                                    <option selected="{{ $breed->name }}">{{ $breed->name }}</option>
                                @endforeach
                            </select>
                            @error('breed')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <select id="category" name="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="{{ $pet->category }}">{{ $pet->category }}</option>
                                @foreach ($categories as $category)
                                    <option selected="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label for="color"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
                            <input type="text" name="color" id="color" value="{{ $pet->color }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="brown">
                            @error('color')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="adoption_status"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adoption-Status</label>
                            <select id="adoption_status" name="adoption_status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="{{ $pet->adoption_status }}">{{ $pet->adoption_status }}</option>
                                <option value="Adopted">Adopted</option>
                                <option value="Not Adopted">Not Adopted</option>
                                <option value="Pending">Pending</option>
                            </select>
                            @error('adoption_status')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="adorption_fee"
                                class="block mb-2 text-sm font-medium text-gray-900
                             dark:text-white">Pet
                                adorption_fee (Kshs)</label>
                            <input type="number" name="adorption_fee" id="adorption_fee" min="0"
                                value="{{ $pet->adorption_fee }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Kshs. 00">
                            @error('adorption_fee')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- gender --}}
                        <div>
                            <label for="gender"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                            <div class="flex">
                                <div class="flex items-center me-4">
                                    <input id="inline-radio" type="radio" value="Male" name="gender"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-radio"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="inline-2-radio" type="radio" value="Female" name="gender"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-2-radio"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                                </div>

                            </div>
                            @error('gender')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- weight --}}

                        <div class="w-full">
                            <label for="weight"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">weight</label>
                            <ul
                                class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex
                                dark:bg-gray-700 dark:border-gray-600 dark:text-white">

                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-license" type="radio" value="less 1kg"
                                            name="weight"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-license"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">less
                                            than 1kg </label>
                                    </div>
                                </li>
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-id" type="radio" value="1kg-5kg"
                                            name="weight"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-id"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1kg-5kg</label>
                                    </div>
                                </li>
                                <li
                                    class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-military" type="radio" value="5kg-10kg"
                                            name="weight"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-military"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5kg-10kg</label>
                                    </div>
                                </li>
                                <li class="w-full dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-passport" type="radio" value="over 10kg"
                                            name="weight"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-passport"
                                            class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">over
                                            10kg</label>
                                    </div>
                                </li>
                            </ul>
                            @error('weight')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- age --}}
                        <div class="w-full">
                            <label for="age"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age
                            </label>
                            <div class="flex">
                                <div class="flex items-center me-4">
                                    <input id="red-radio" type="radio" value="under 1 year" name="age"
                                        class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="red-radio"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">under 1
                                        year</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="green-radio" type="radio" value="1-3 years" name="age"
                                        class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="green-radio"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1-3
                                        years</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="purple-radio" type="radio" value="3-6 years" name="age"
                                        class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="purple-radio"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3-6
                                        years</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="teal-radio" type="radio" value="6-9 years" name="age"
                                        class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="teal-radio"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">6-9
                                        years</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="yellow-radio" type="radio" value="9 years and above" name="age"
                                        class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="yellow-radio"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">9 years and
                                        above</label>
                                </div>
                            </div>
                            @error('age')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="sm:col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" rows="8" name="description"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Your description here">{{ $pet->description }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm
                        font-medium text-center text-white bg-slate-700 rounded-lg
                        focus:ring-4 focus:ring-slate-200 dark:focus:ring-slate-900
                        hover:bg-slate-800">
                        Update pet
                    </button>
                </form>
            </div>
        </section>



        @include('admin.partials.footer')

</x-app-layout>
