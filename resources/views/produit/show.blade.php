@extends('partials.base')

@section('title', 'show')

@section('content')

    <main>
        <div class=" py-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row  bg-[#8AD9D7] -mx-4 p-10 rounded-2xl">
                    <div class="md:flex-1  px-4">
                        <div class="h-[460px] rounded-lg  dark:bg-gray-700 mb-4">
                            <img class="w-full h-full object-cover rounded-2xl"
                                src="{{ Vite::asset('storage/app/public/' . $produit->photo) }}"
                                alt="storage/{{ $produit->titre }}">
                        </div>
                        <div class="flex -mx-2 mb-4">
                            <div class="w-1/2 px-2">
                                <form action="stripe/test" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" id="checkout-test-button"
                                        class="w-full bg-gray-900 dark:bg-gray-600  py-2 px-4 rounded-full text-white hover:bg-gray-800 dark:hover:bg-gray-700">Checkout
                                        (Test)</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="md:flex-1 px-4">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $produit->titre }}</h2>
                        <div class="flex mb-4">
                            <div class="mr-4">
                                <span class="font-bold text-gray-700 ">Price:</span>
                                <span class="text-gray-600">{{ $produit->prix }}</span>
                            </div>
                            <div>
                                <span class="font-bold text-gray-700 ">Availability:</span>
                                <span
                                    class="text-gray-600 ">{{ $produit->quantite < 1 ? 'Out of Stock' : 'In Stock' }}</span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <span class="font-bold text-gray-700 ">Select Size:</span>
                            <div class="flex items-center mt-2">
                                <button
                                    class="bg-[#F2C749]  text-gray-700 dark: py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">S</button>
                                <button
                                    class="bg-[#F2C749]  text-gray-700 dark: py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">M</button>
                                <button
                                    class="bg-[#F2C749]  text-gray-700 dark: py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">L</button>
                                <button
                                    class="bg-[#F2C749]  text-gray-700 dark: py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">XL</button>
                                <button
                                    class="bg-[#F2C749] dark:bg-gray-700 text-gray-700 dark: py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">XXL</button>
                            </div>
                        </div>
                        <div>
                            <span class="font-bold text-gray-700">Product Description:</span>
                            <p class="text-gray-600  text-sm mt-2">
                                {{ $produit->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
