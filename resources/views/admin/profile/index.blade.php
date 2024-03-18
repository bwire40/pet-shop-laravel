<x-app-layout>

    <div class="w-full overflow-x-hidden border-t flex flex-col">

        @include('shared.success_message')
        <main class="w-full flex-grow p-3">
            <form class="mt-4 my-3 max-w-6xl mx-auto" action="{{ route('admin-profile.update', $user->id) }}"
                method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center">
                    <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">Profile</p>
                    <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4.svg"
                            alt="info">
                        <img class="dark:block hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4dark.svg" alt="info">
                    </div>
                </div>
                {{-- edit image --}}
                <div class="rounded relative mt-8 h-96">
                    <img src="{{ asset('images/' . $user->image) }}" alt=""
                        class="img-preview w-full h-full object-cover rounded absolute shadow" />
                    <div class="absolute bg-black opacity-50 top-0 right-0 bottom-0 left-0 rounded"></div>
                    <div class="flex items-center px-3 py-2 rounded absolute right-0 mr-4 mt-4 cursor-pointer">

                    </div>
                    <div
                        class="w-20 h-20 rounded-full bg-cover bg-center bg-no-repeat absolute bottom-0 -mb-10 ml-12 shadow flex items-center justify-center">
                        <img src="{{ asset('images/' . $user->image) }}" alt=""
                            class="img-preview absolute z-0 h-full w-full object-cover rounded-full shadow top-0 left-0 bottom-0 right-0" />
                        <div class="absolute bg-black opacity-50 top-0 right-0 bottom-0 left-0 rounded-full z-0">
                        </div>
                        <label class="cursor-pointer flex flex-col justify-center items-center z-10 text-gray-100">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg1.svg"
                                alt="Edit">
                            <input type="file" name="image" class="hidden" id="choose-file">
                            <p class="text-xs text-gray-100">Edit Picture</p>
                        </label>
                    </div>
                    @error('image')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-14">
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
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500
                            block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
                            placeholder="Enter age">
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


            <div class="max-w-6xl mx-auto flex flex-col justify-center items-start mt-14">
                <div class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center">
                    <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">Security Details</p>
                    <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                        <img class="dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4.svg" alt="info">
                        <img class="dark:block hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4dark.svg" alt="info">
                    </div>
                </div>

                @include('profile.partials.update-password-form')
            </div>
            <form action="{{ route('admin-profile.destroy', $user->id) }}" class="max-w-6xl mx-auto" method="post">
                @csrf
                @method('delete')
                <div class="flex flex-col justify-center items-start my-14">
                    <div class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center">
                        <p class="text-lg text-red-600 dark:text-gray-100 font-bold">Delete Account</p>
                        <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4.svg"
                                alt="info">
                            <img class="dark:block hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg4dark.svg"
                                alt="info">
                        </div>
                    </div>


                    <p class="py-4">Once your account is deleted, all of its resources and
                        data will be permanently
                        deleted. Before
                        deleting your account, please download any data or information
                        that you wish to retain.</p>

                    <button type="submit" class="p-4 bg-red-600 text-white rounded-lg">Delete
                        Account</button>

                </div>
            </form>
        </main>
    </div>

    @include('admin.partials.footer')


</x-app-layout>


<script>
    const chooseFile = document.getElementById("choose-file");
    const imgPreview = document.querySelector(".img-preview");

    chooseFile.addEventListener("change", function() {
        getImgData();
    });


    function getImgData() {
        const files = chooseFile.files[0];
        if (files) {
            const fileReader = new FileReader();
            fileReader.readAsDataURL(files);
            fileReader.addEventListener("load", function() {
                imgPreview.style.display = "block";
                imgPreview.src = this.result;
            });
        }
    }
</script>
