<x-app-layout>

<section class="container mx-auto overflow-auto">
        <div class="w-full bg-white py-10">
            <div class="flex flex-col justify-center items-center">
                <h2 class="text-xl font-bold pb-10">Application details</h2>

                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Applicant Name:</h2>
                    <p class="font-sm">{{ $adorption->username }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Email:</h2>
                    <p>{{ $adorption->email }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Address:</h2>
                    <p>{{ $adorption->address }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Number:</h2>
                    <p>{{ $adorption->number }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Pet Name:</h2>
                    <p class="font-sm"> {{ $adorption->petname }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Category:</h2>
                    <p class="font-sm"> {{ $adorption->category }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Color:</h2>
                    <p>{{ $adorption->color }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Age:</h2>
                    <p>{{ $adorption->age }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        weight:</h2>
                    <p>{{ $adorption->weight }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        breed:</h2>
                    <p>{{ $adorption->breed }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Description:</h2>
                    <p>{{ $adorption->description }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 text-slate-500 dark:text-gray-400">
                        Adorption Fee:</h2>
                    <p class="font-sm">Kshs. {{ $adorption->adorption_fee }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Experince with Pets?</h2>
                    <p class="font-sm">{{ $adorption->experience }}</p>

                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Has any pets?</h2>
                    <p>{{ $adorption->pets }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Vetenary:</h2>
                    <p>{{ $adorption->vetenary }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        House type:</h2>
                    <p>{{ $adorption->house_type }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        House Ownership:</h2>
                    <p>{{ $adorption->house_ownership }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        House Agreement:</h2>
                    <p>{{ $adorption->house_agreement }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Allergies:</h2>
                    <p>{{ $adorption->allergies }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Training Type:</h2>
                    <p>{{ $adorption->training_type }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Willing to Care for the pet?</h2>
                    <p>{{ $adorption->care }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Willing to send in follow up reports?</h2>
                    <p>{{ $adorption->followup }}</p>
                </div>
                <div class="flex justify-between items-center mb-2 w-3/4">
                    <h2 class="text-md font-sm text-slate-500 dark:text-gray-400">
                        Accepts Our Terms and Conditions?</h2>
                    <p>{{ $adorption->terms }}</p>
                </div>


                <div class="flex justify-center items-center py-10 w-full">

                    <form action="{{ route('adorption.update', $adorption->id) }}" method="post">
                        @csrf
                        @method('put')

                        <label for="adorption_status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                            option</label>
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
</section>

</x-app-layout>
