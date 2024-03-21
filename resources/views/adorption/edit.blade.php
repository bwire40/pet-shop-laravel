    <x-app-layout>

        <section class="container mx-auto overflow-auto">
            <div class="w-full bg-white py-10">
                <div aria-label="form" tabindex="0" class="focus:outline-none xl:w-10/12 w-full px-8">

                    <div class="bg-gray-100 py-12 flex flex-wrap items-center justify-center">

                        <h1 class="font-bold text-slate-800 text-2xl">Application Information</h1>

                    </div>
                    <div class="xl:px-24">

                        <div class="mt-16 lg:flex justify-between border-b border-gray-200 pb-16">
                            <div class="w-80">
                                <div class="flex items-center">
                                    <h1 tabindex="0"
                                        class="focus:outline-none text-xl font-medium pr-2 leading-5 text-blue-600">
                                        Customer Information</h1>
                                </div>

                            </div>
                            <div>
                                <div class="md:flex items-center lg:ml-24 lg:mt-0 mt-4">
                                    <div class="md:w-64">
                                        <label class="text-sm leading-none font-bold text-blue-600" id="firstName">Full
                                            name</label>
                                        <p class="font-sm">{{ $adorption->username }}</p>
                                    </div>
                                    <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="lastName">Email</label>
                                        <p>{{ $adorption->email }}</p>
                                    </div>
                                </div>
                                <div class="md:flex items-center lg:ml-24 mt-8">
                                    <div class="md:w-64">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="emailAddress">Address</label>
                                        <p>{{ $adorption->address }}</p>
                                    </div>
                                    <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                        <label class="text-sm leading-none font-bold text-blue-600" id="phone">Phone
                                            number</label>
                                        <p>{{ $adorption->number }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-16 lg:flex justify-between border-b border-gray-200 pb-16 mb-4">
                            <div class="w-80">
                                <div class="flex items-center">
                                    <h1 tabindex="0"
                                        class="focus:outline-none text-xl font-medium pr-2 leading-5 text-blue-600">
                                        Pet Details</h1>
                                </div>

                            </div>
                            <div>
                                <div class="md:flex items-center lg:ml-24 lg:mt-0 mt-4">
                                    <div class="md:w-64">
                                        <label class="text-sm leading-none font-bold text-blue-600" id="firstName">Pet
                                            name</label>
                                        <p class="font-sm">{{ $adorption->petname }}</p>
                                    </div>
                                    <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="lastName">Category</label>
                                        <p>{{ $adorption->category }}</p>
                                    </div>
                                </div>
                                <div class="md:flex items-center lg:ml-24 mt-8">
                                    <div class="md:w-64">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="emailAddress">Color</label>
                                        <p>{{ $adorption->color }}</p>
                                    </div>
                                    <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="phone">Age</label>
                                        <p>{{ $adorption->age }}</p>
                                    </div>
                                </div>
                                <div class="md:flex items-center lg:ml-24 mt-8">
                                    <div class="md:w-64 md:mt-0 mt-4">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="phone">Weight</label>
                                        <p>{{ $adorption->weight }}</p>
                                    </div>
                                </div>
                                <div class="md:flex items-center lg:ml-24 mt-8">
                                    <div class="md:w-64">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="emailAddress">Breed</label>
                                        <p>{{ $adorption->breed }}</p>
                                    </div>
                                    <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="phone">Description</label>
                                        <p>{{ $adorption->description }}</p>
                                    </div>
                                </div>
                                <div class="md:flex items-center lg:ml-24 mt-8">
                                    <div class="md:w-64">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="emailAddress">Adoption
                                            Fee</label>
                                        <p>{{ $adorption->adorption_fee }}</p>
                                    </div>
                                    <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="phone">Experince
                                            with
                                            Pets?</label>
                                        <p>{{ $adorption->experience }}</p>
                                    </div>
                                </div>

                                <div class="md:flex items-center lg:ml-24 mt-8">
                                    <div class="md:w-64">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="emailAddress">Has
                                            any
                                            pets?</label>
                                        <p>{{ $adorption->pets }}</p>
                                    </div>
                                    <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="phone">Vetenary</label>
                                        <p>{{ $adorption->vetenary }}</p>
                                    </div>
                                </div>
                                <div class="md:flex items-center lg:ml-24 mt-8">
                                    <div class="md:w-64">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="emailAddress">House
                                            Type</label>
                                        <p>{{ $adorption->house_type }}</p>
                                    </div>
                                    <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                        <label class="text-sm leading-none font-bold text-blue-600" id="phone">House
                                            Ownership</label>
                                        <p>{{ $adorption->house_ownership }}</p>
                                    </div>
                                </div>
                                <div class="md:flex items-center lg:ml-24 mt-8">
                                    <div class="md:w-64">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="emailAddress">Household
                                            Agreement:</label>
                                        <p>{{ $adorption->house_agreement }}</p>
                                    </div>
                                    <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="phone">Allergies:</label>
                                        <p>{{ $adorption->allergies }}</p>
                                    </div>
                                </div>
                                <div class="md:flex items-center lg:ml-24 mt-8">
                                    <div class="md:w-64">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="emailAddress">Training
                                            Type:</label>
                                        <p>{{ $adorption->training_type }}</p>
                                    </div>
                                    <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="phone">Willing
                                            to Care for
                                            the
                                            pet?</label>
                                        <p>{{ $adorption->care }}</p>
                                    </div>
                                </div>
                                <div class="md:flex items-center lg:ml-24 mt-8">
                                    <div class="md:w-64">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="emailAddress">Willing to send
                                            in follow
                                            up reports?</label>
                                        <p>{{ $adorption->followup }}</p>
                                    </div>
                                    <div class="md:w-64 md:ml-12 md:mt-0 mt-4">
                                        <label class="text-sm leading-none font-bold text-blue-600"
                                            id="phone">Accepts
                                            Our Terms
                                            and
                                            Conditions?<label>
                                                <p>{{ $adorption->terms }}</p>
                                    </div>
                                </div>

                                <div class="flex justify-center items-center py-10 w-full">

                                    <form action="{{ route('adorption.update', $adorption->id) }}" method="post">
                                        @csrf
                                        @method('put')

                                        <label for="adorption_status"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Update
                                            Application</label>
                                        <select id="adorption_status" name="adorption_status"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Approve or Reject Application</option>
                                            <option value="approved">Approve</option>
                                            <option value="rejected">Reject</option>
                                        </select>
                                        @error('adorption_status')
                                            <p class="text-red-500">{{ $message }}</p>
                                        @enderror

                                        <button type="submit"
                                            class="flex items-center justify-center w-full mt-4 p-4 text-yellow-500 border border-yellow-500 rounded-md dark:text-gray-200 dark:border-yellow-600 hover:bg-yellow-600 hover:border-yellow-600 hover:text-gray-100 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:hover:border-yellow-700 dark:hover:text-gray-300">
                                            Update
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </x-app-layout>
