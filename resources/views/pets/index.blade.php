<x-app-layout>
    {{-- create --}}
    <div class="w-full overflow-x-hidden border-t flex flex-col">

        @include('shared.success_message')
        <main class="w-full flex-grow p-6 mt-14">
            {{-- view categories --}}
            <h1 class="text-xl font-bold">Manage Pets</h1>
            <div class="p-3">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                        id="pets_table">
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
                                    Pet Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Breed
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Age
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Weight
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Gender
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Image
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Adoption Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Adoption Fee (KSHS)
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

                            @foreach ($pets as $pet)
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
                                        {{ $pet->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $pet->category }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $pet->breed }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $pet->age }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $pet->weight }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $pet->color }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $pet->gender }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <img src="{{ asset('images/' . $pet->image) }}" class="w-20 h-20"
                                            alt="">
                                        {{-- {{ $pet->image }} --}}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($pet->adoption_status)
                                            {{ $pet->adoption_status }}
                                        @else
                                            {{ $pet->adoption_status }}
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $pet->adorption_fee }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $pet->updated_at }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('pets.edit', $pet->id) }}"
                                            class="font-semibold text-green-600 dark:text-green-500 hover:underline  text-lg"><i
                                                class="fa-regular fa-pen-to-square"></i></a>

                                        <form action="{{ secure_url(route('pets.destroy', $pet->id)) }}"
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
                    {{ $pets->links() }}
                </div>


            </div>

        </main>

        @include('admin.partials.footer')

</x-app-layout>
