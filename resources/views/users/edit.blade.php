<x-app-layout>

    <div class="w-full overflow-x-hidden border-t flex flex-col">

        @include('shared.success_message')
        <main class="w-full flex-grow p-6">



            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white text-center">Update User</h2>
            <img src="{{ asset('images/' . $user->image) }}"
                class="w-[400px] h-[400px] object-cover mx-auto rounded-full">
            <form class="mt-4 mx-4 my-3" action="{{ route('users.update', $user->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="flex items-center justify-center w-full py-4">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg
                                 cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600
                                  dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5
                                             5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                <span class="font-semibold">Click to
                                    upload</span> or drag and drop
                            </p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">
                                SVG, PNG, JPG or GIF </p>
                        </div>
                        <input id="dropzone-file" type="file" name="image" class=" sm:hidden lg:block" multiple />
                    </label>

                </div>
                @error('image')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900
                                 dark:text-white">Full
                            Name</label>
                        <input type="text" name="name" id="name" value="{{ $user->name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600
                                    focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                     dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type Full name">
                    </div>
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror

                    <div class="sm:col-span-2">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900
                                 dark:text-white">
                            Email</label>
                        <input type="text" name="email" id="email" value="{{ $user->email }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600
                                    focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                     dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type email">
                    </div>
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror

                    <div>
                        <label for="gender"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                        <select id="gender" name="gender"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">{{ $user->gender }}
                            </option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    @error('gender')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                    <div>
                        <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age
                        </label>
                        <input type="number" name="age" id="age" value="{{ $user->age }}" min="0"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="3">
                    </div>
                    @error('age')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                    <div class="col-span-2">
                        <label for="userType"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">UserType</label>
                        <select id="userType" name="userType"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">{{ $user->userType }}
                            </option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    @error('userType')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm
                            font-medium text-center text-white bg-slate-700 rounded-lg
                            focus:ring-4 focus:ring-slate-200 dark:focus:ring-slate-900
                            hover:bg-slate-800 mb-10">
                    Update user
                </button>
            </form>

        </main>
    </div>

    @include('admin.partials.footer')

</x-app-layout>
