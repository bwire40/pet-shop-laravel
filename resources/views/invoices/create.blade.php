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
                                    Customer Details</h1>
                            </div>
                            <p tabindex="0" class="focus:outline-none mt-4 text-sm leading-5 text-gray-600">
                                Information about the
                                section could go here and a brief description of how this might be used.</p>
                        </div>
                        <div>
                            <div class="md:flex items-center lg:ml-24 lg:mt-0 mt-4">
                                <div class="md:w-64">
                                    <label class="text-sm leading-none text-gray-800" id="firstName">First name</label>
                                    <input type="name" tabindex="0"
                                        class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                        aria-labelledby="firstName" placeholder="John" />
                                </div>
                                <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                    <label class="text-sm leading-none text-gray-800" id="lastName">Last name</label>
                                    <input type="name" tabindex="0"
                                        class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                        aria-labelledby="lastName" placeholder="Doe" />
                                </div>
                            </div>
                            <div class="md:flex items-center lg:ml-24 mt-8">
                                <div class="md:w-64">
                                    <label class="text-sm leading-none text-gray-800" id="emailAddress">Email
                                        address</label>
                                    <input type="email" tabindex="0"
                                        class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                        aria-labelledby="emailAddress" placeholder="youremail@example.com" />
                                </div>
                                <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                    <label class="text-sm leading-none text-gray-800" id="phone">Phone
                                        number</label>
                                    <input type="name" tabindex="0"
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
                                    Security</h1>
                            </div>
                            <p tabindex="0" class="focus:outline-none mt-4 text-sm leading-5 text-gray-600">
                                Information about the
                                section could go here and a brief description of how this might be used.</p>
                        </div>
                        <div>
                            <div class="md:flex items-center lg:ml-24 lg:mt-0 mt-4">
                                <div class="md:w-64">
                                    <label class="text-sm leading-none text-gray-800" id="password">Password</label>
                                    <input type="name" tabindex="0"
                                        class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                        aria-labelledby="password" placeholder="Enter your password" />
                                </div>
                                <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                    <label class="text-sm leading-none text-gray-800" id="securityCode">Security
                                        Code</label>
                                    <input type="name" tabindex="0"
                                        class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                        aria-labelledby="securityCode" placeholder="Enter your security code" />
                                </div>
                            </div>
                            <div class="md:flex items-center lg:ml-24 mt-8">
                                <div class="md:w-64">
                                    <label class="text-sm leading-none text-gray-800" id="recoverEmail">Recovery Email
                                        address</label>
                                    <input type="name" tabindex="0"
                                        class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                        placeholder="Your recovery email" />
                                </div>
                                <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                    <label class="text-sm leading-none text-gray-800" id="altPhone">Alternate phone
                                        number</label>
                                    <input type="name" tabindex="0"
                                        class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                                        aria-labelledby="altPhone" placeholder="Your alternate phone number" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @include('admin.partials.footer')

</x-app-layout>
