<x-app-layout>
    {{-- create --}}
    <div class="w-full overflow-x-hidden border-t flex flex-col">

        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-4 lg:py-16">
                {{-- manage contact --}}
                {{-- view contacts --}}
                @include('shared.success_message')
                <h1 class="text-xl font-bold mt-10">Manage contacts</h1>
                <div class="p-3">

                    <div class="relative overflow-x-auto shadow sm:rounded-lg">

                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        Message
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

                                @foreach ($contacts as $contact)
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
                                            {{ $contact->name }}
                                        </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $contact->email }}
                                        </th>

                                        <td class="px-6 py-4">
                                            {{ $contact->message }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $contact->updated_at }}
                                        </td>
                                        <td class="px-6 py-4 flex justify-evenly items-center">


                                            @if ($contact->message_status == 'read')
                                                <button
                                                    class="font-semibold text-white rounded-lg p-[0.4rem] flex justify-center items-center
                                                    w-fit transition-all duration-300 hover:bg-yellow-300  text-sm leading-3 bg-yellow-400 italic"
                                                    disabled>Read</button>
                                            @else
                                                <form action="{{ route('contact.update', $contact->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit"
                                                        class="font-semibold text-white rounded-lg p-[0.4rem] flex justify-center items-center
                                                        w-fit transition-all duration-300 hover:bg-green-300  text-sm leading-3 bg-green-400">Mark
                                                        as read</button>
                                                </form>
                                            @endif

                                            <form action="{{ secure_url(route('contact.destroy', $contact->id)) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="text-red-600 transition-all duration-300 hover:text-red-500 text-lg"><i
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
                        {{ $contacts->links() }}
                    </div>


                </div>
            </div>



        </section>
        @include('admin.partials.footer')

</x-app-layout>
