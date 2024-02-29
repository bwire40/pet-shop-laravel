@extends('layouts.home')
@section('content')
    {{-- @include('shared.header_slides') --}}



    <div class="flex items-center lg:flex-row flex-col justify-center border-2" id="cart">
        <div class="lg:w-1/2 md:w-8/12 w-full lg:px-8 lg:py-14 md:px-6 px-4 md:py-8 py-4 bg-white dark:bg-gray-800 overflow-y-hidden overflow-x-hidden lg:h-screen h-auto"
            id="scroll">

            @include('shared.success_message')
            <p class="lg:text-4xl text-3xl font-black leading-10 text-gray-800 dark:text-white pt-3">Accessories</p>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-16 py-3">
                                <span class="sr-only">Image</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Product
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Qty
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sub Total
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        @if (session('cart'))
                            @foreach ((array) session('cart') as $id => $details)
                                @php
                                    $total += $details['price'] * $details['quantity'];
                                @endphp


                                <tr data-id="{{ $id }}"
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="p-4">
                                        <img src="{{ asset('images/' . $details['image']) }}"
                                            class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        {{ $details['name'] }}
                                    </td>

                                    <td>
                                        <input type="number" value="{{ $details['quantity'] }}" min="1"
                                            class="w-32 cart_update quantity">
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        Kshs. {{ $details['price'] * $details['quantity'] }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <button
                                            class="text-xs leading-3 underline text-red-500 pl-5 
                                        cursor-pointer cart_remove">
                                            Remove</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="lg:w-96 md:w-8/12 w-full bg-gray-100 dark:bg-gray-900 h-full">
            <div
                class="flex flex-col lg:h-screen h-auto lg:px-8 md:px-7 px-4 lg:py-20 md:py-10 py-6 justify-start overflow-y-auto">
                <div>
                    <p class="lg:text-4xl text-3xl font-black leading-9 text-gray-800 dark:text-white">Summary</p>
                </div>
                <div class="pt-10">
                    <div class="flex items-center pb-6 justify-between lg:pt-5">
                        <p class="text-2xl leading-normal text-gray-800 dark:text-white">Total</p>
                        <p class="text-2xl font-bold leading-normal text-right text-gray-800 dark:text-white">Kshs.
                            {{ $total }}</p>
                    </div>
                    <form action="{{ route('session') }}" method="POST">

                        <a href="{{ route('accessory-items') }}"
                            class="text-sm leading-3 underline text-red-500 cursor-pointer mt-10">
                            << Continue shopping</a>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit"
                                    class="text-base leading-none 
                                    w-full py-5 bg-gray-800
                       transition-all duration-300 hover:bg-slate-500
                        text-white dark:hover:bg-gray-700">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>






    {{-- footer --}}
    @include('shared.footer')

@endsection

@section('scripts')
    <script type="text/javascript">
        $(".cart_remove").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Do you really want to remove?")) {
                $.ajax({
                    url: " {{ route('remove_from_cart') }}",
                    method: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });

        $(".cart_update").change(function(e) {
            e.preventDefault();

            var ele = $(this);


            $.ajax({
                url: " {{ route('update_cart') }}",
                method: "patch",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        })
    </script>
@endsection
