<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.min.css">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <script src="https://kit.fontawesome.com/cc31d88ebe.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="bg-white rounded-lg shadow-lg px-8 py-10 max-w-3xl mx-auto">
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center">
                <img class="h-8 w-8 mr-2" src="https://tailwindflex.com/public/images/logos/favicon-32x32.png"
                    alt="Logo" />
                <div class="text-gray-700 font-semibold text-2xl">PetYaMe PetShop</div>
            </div>
            <div class="text-gray-700">
                <div class="font-bold text-2xl mb-2 text-center">ORDER INVOICE</div>
                <div class="text-md font-bold">Date: <span class="text-sm text-slate-500">
                        {{ $adorption->created_at }}</span></div>
                <div class="text-md font-bold">INVOICE NO: <span
                        class="text-sm text-slate-500">PET00{{ $adorption->id }}</span></div>
            </div>
        </div>
        <div class="border-b-2 border-gray-300 pb-8 mb-8">
            <h2 class="text-2xl font-bold mb-4">Bill To:</h2>
            <div class="text-gray-700 mb-2">{{ $adorption->username }}</div>
            <div class="text-gray-700 mb-2">{{ $adorption->address }}</div>
            <div class="text-gray-700 mb-2">{{ $adorption->number }}</div>
            <div class="text-gray-700">{{ $adorption->email }}</div>
        </div>
        <table class="w-full text-left mb-8">
            <thead>
                <tr>
                    <th class="text-gray-700 font-bold uppercase py-2">Pet</th>
                    <th class="text-gray-700 font-bold uppercase py-2">Description</th>
                    <th class="text-gray-700 font-bold uppercase py-2">Fee</th>
                    <th class="text-gray-700 font-bold uppercase py-2">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-4 text-gray-700">{{ $adorption->petname }}</td>
                    <td class="py-4 text-gray-700">{{ $adorption->description }}</td>
                    <td class="py-4 text-gray-700">KES {{ $adorption->adorption_fee }}</td>
                    <td class="py-4 text-gray-700">KES {{ $total }}</td>
                </tr>

            </tbody>
        </table>
        <div class="flex justify-end mb-8">
            <div class="text-gray-700 mr-2">Subtotal:</div>
            <div class="text-gray-700">KES {{ $total }}</div>
        </div>
        <div class="text-right mb-8">
            <div class="text-gray-700 mr-2">Tax:</div>
            <div class="text-gray-700">KES 00.00</div>

        </div>
        <div class="flex justify-end mb-8">
            <div class="text-gray-700 mr-2">Total:</div>
            <div class="text-gray-700 font-bold text-xl">KES {{ $total }}</div>
        </div>
        <div class="border-t-2 border-gray-300 pt-8 mb-8">
            <div class="text-gray-700 mb-2">Payment is due within 30 days. Late payments are subject to fees.</div>
            <div class="text-gray-700 mb-2">Please make checks payable to Your Company Name and mail to:</div>
            <div class="text-gray-700">petyame@mail.com</div>
        </div>
    </div>

</body>

</html>
