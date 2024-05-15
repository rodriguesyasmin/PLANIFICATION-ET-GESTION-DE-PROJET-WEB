@extends('partials.base')

@section('title', 'Catalogue')

@section('content')

    <div class="flex flex-col min-h-screen">
        <main class="flex-grow">
            <div class="sm:p-8 bg-[#231F52] flex-grow">
                <div
                    class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-20 mt-10 mb-5">
                    @foreach ($produits as $produit)
                        <a class="max-w-xs" href="{{ route('produit.show', ['produit' => $produit->id]) }}">
                            <img class="rounded-xl" src="{{ Vite::asset('storage/app/public/' . $produit->photo) }}"
                                alt="{{ $produit->titre }}">
                        </a>
                    @endforeach
                </div>
            </div>
        </main>

    @endsection
