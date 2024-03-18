<x-app-layout>
    {{-- create --}}
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <form action="{{ secure_url(route('pet-categories.store')) }}" method="post" enctype="multipart/form-data"
                class="p-4  mb-10">
                @csrf
                <div class="space-y-12">


                    @include('shared.success_message')

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="name" class="block text-md font-bold leading-6 text-gray-900">New
                                category</label>
                            <div class="mt-2">
                                <input type="text" name="name" id="name" autocomplete="given-name"
                                    class="block w-80 rounded-md border-0 py-3 text-gray-900 shadow-sm ring-1
                                    ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                                    focus:ring-indigo-600 sm:text-md sm:leading-6">
                            </div>
                            @error('name')
                                <p class="text-red-500 m-3">* {{ $message }}</p>
                            @enderror
                        </div>
                    </div>


                </div>

                <div class="mt-6 flex items-center justify-start gap-x-6">
                    <button type="reset" class="text-md font-semibold leading-6 text-gray-900">Cancel</button>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-md font-semibold
                        text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2
                         focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>

            {{-- view categories --}}
            <h1 class="text-xl font-bold">Manage Categories</h1>
            <div class="p-3">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                        id="pet_cat">
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
                                    Pet category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Created By
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Created at
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Updated at
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($categories as $pet_category)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $pet_category->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $pet_category->user_id }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $pet_category->created_at }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $pet_category->updated_at }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('pet-categories.edit', $pet_category->id) }}"
                                            class="font-semibold text-green-600 dark:text-green-500 hover:underline  text-lg"><i
                                                class="fa-regular fa-pen-to-square"></i></a>


                                        <form
                                            action="{{ secure_url(route('pet-categories.destroy', $pet_category->id)) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="text-red-600 text-lg"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                {{-- pagination
                <div class="py-3">
                    {{ $categories->links() }}
                </div> --}}


            </div>

        </main>

        @include('admin.partials.footer')

</x-app-layout>
