<x-app-layout>
    {{-- create --}}
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div aria-label="form" tabindex="0" class="focus:outline-none xl:w-10/12 w-full px-2">
                <div class="bg-gray-100 py-12 flex flex-wrap items-center">
                    <h1 class="text-2xl font-bold">Invoice Form</h1>
                </div>
                <div class="xl:px-24">

                    <div class="mt-16 lg:flex justify-between border-b border-gray-200 pb-16">
                        <div class="w-80">
                            <div class="flex items-center">
                                <h1 tabindex="0"
                                    class="focus:outline-none text-xl font-medium pr-2 leading-5 text-gray-800">
                                    Business Details</h1>
                            </div>

                        </div>
                        <div>
                            <div class="md:flex items-center lg:ml-24 lg:mt-0 mt-4">
                                <div class="md:w-64">
                                    <label class="text-sm leading-none text-gray-800" id="businessname">Business
                                        name</label>
                                    <input type="name" tabindex="0" name="name"
                                        class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                        aria-labelledby="businessname" placeholder="Inc." />
                                </div>
                                <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                    <label class="text-sm leading-none text-gray-800" id="lastName">Business Address
                                    </label>
                                    <input type="name" tabindex="0" name="bussiness_address"
                                        class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                        aria-labelledby="lastName" placeholder="200-00100" />
                                </div>

                                <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                    <label for="countries"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                                    <select id="countries" name="country"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Choose a country</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="UG">Uganda</option>
                                        <option value="US">USA</option>
                                        <option value="UK">UK</option>
                                    </select>
                                </div>

                            </div>
                            <div class="md:flex items-center lg:ml-24 mt-8">
                                <div class="md:w-64">
                                    <label class="text-sm leading-none text-gray-800" id="emailAddress">Email
                                        address</label>
                                    <input type="email" tabindex="0" name="email"
                                        class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                        aria-labelledby="emailAddress" placeholder="youremail@example.com" />
                                </div>
                                <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                    <label class="text-sm leading-none text-gray-800" id="phone">Phone
                                        number</label>
                                    <input type="number" tabindex="0" name="phone"
                                        class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                        aria-labelledby="phone" placeholder="123-1234567" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-16 lg:flex justify-between border-b border-gray-200 pb-16 mb-4">
                        <div class="w-80">
                            <div class="flex items-center">
                                <h1 tabindex="0"
                                    class="focus:outline-none text-xl font-medium pr-2 leading-5 text-gray-800">
                                    Customer Details</h1>
                            </div>
                        </div>
                        <div>
                            <div class="md:flex items-center lg:ml-24 lg:mt-0 mt-4">
                                <div class="md:w-64">
                                    <label class="text-sm leading-none text-gray-800" id="customername">Customer
                                        name</label>
                                    <input type="name" tabindex="0" name="customername"
                                        class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                        aria-labelledby="customername" placeholder="John" />
                                </div>
                                <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                    <label class="text-sm leading-none text-gray-800" id="lastName">Address
                                    </label>
                                    <input type="name" tabindex="0" name="customer_address"
                                        class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                        aria-labelledby="lastName" placeholder="200-00100" />
                                </div>

                                <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                    <label for="countries"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                                    <select id="countries" name="customer_country"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Choose a country</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="UG">Uganda</option>
                                        <option value="US">USA</option>
                                        <option value="UK">UK</option>
                                    </select>
                                </div>

                            </div>
                            <div class="md:flex items-center lg:ml-24 mt-8">
                                <div class="md:w-64">
                                    <label class="text-sm leading-none text-gray-800" id="emailAddress">Email
                                        address</label>
                                    <input type="email" tabindex="0" name="customer_email"
                                        class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                        aria-labelledby="emailAddress" placeholder="youremail@example.com" />
                                </div>
                                <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                    <label class="text-sm leading-none text-gray-800" id="phone">Phone
                                        number</label>
                                    <input type="number" tabindex="0" name="customer_phone"
                                        class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                        aria-labelledby="phone" placeholder="123-1234567" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @include('admin.partials.footer')

</x-app-layout>
