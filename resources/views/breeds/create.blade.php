<x-app-layout>
    {{-- create --}}
    <div class="w-full overflow-x-hidden border-t flex flex-col">


        <section class="bg-white dark:bg-gray-900">

            @include('shared.success_message')
            <div class="py-8 px-4 mx-4 lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new Breed</h2>
                <form action="{{ secure_url(route('breeds.store')) }}" method="post">
                    @csrf
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="w-full">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Breed Name</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Type breed name">
                            @error('name')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>


                        <div>
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <select id="category" name="category" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700
                                 dark:border-gray-600 dark:placeholder-gray-400
                                  dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                                @foreach ($categories as $category)
                                    <option selected="">{{ $category->name }}</option>
                                @endforeach

                            </select>

                            @error('category')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center
                         text-white bg-slate-700 rounded-lg focus:ring-4
                         focus:ring-slate-200 dark:focus:ring-slate-900 hover:bg-slate-800">
                        Add breed
                    </button>
                </form>




                {{-- manage breed --}}
                {{-- view breeds --}}
                <h1 class="text-xl font-bold mt-10">Manage breeds</h1>
                <div class="p-3">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                            id="breed_table">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-all-search" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Breed
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Category
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

                                @foreach ($breeds as $breed)
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
                                            {{ $breed->name }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $breed->category }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $breed->created_at }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $breed->updated_at }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('breeds.edit', $breed->id) }}"
                                                class="font-semibold text-green-600 dark:text-green-500 hover:underline  text-lg"><i
                                                    class="fa-regular fa-pen-to-square"></i></a>


                                            <form action="{{ secure_url(route('breeds.destroy', $breed->id)) }}"
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

                    {{-- pagination --}}
                    <div class="py-3">
                        {{ $breeds->links() }}
                    </div>


                </div>
            </div>



        </section>
        @include('admin.partials.footer')

</x-app-layout>
