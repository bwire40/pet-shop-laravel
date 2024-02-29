<x-app-layout>
    {{-- create --}}
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class=" max-w-4xl flex-grow p-6">

            <h2 class="font-bold py-4">Update Accessory Category</h2>

            <form class="p-4 md:p-5" action="{{ route('accessory-categories.update', $accessory_category->id) }}"
                method="post">
                @csrf
                @method('put')
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name" value="{{ $accessory_category->name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type product name" required="">
                        {{-- $category->id --}}
                    </div>
                </div>
                <button type="submit"
                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                    Update
                </button>
            </form>
        </main>
    </div>
</x-app-layout>
