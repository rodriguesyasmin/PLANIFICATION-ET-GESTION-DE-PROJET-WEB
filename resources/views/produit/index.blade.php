@extends('partials.base')

@section('title', 'Catalogue')

@section('content')

    <main>
        <div class="p-5 sm:p-8 bg-[#231F52]">
            <div class="columns-1 gap-5 sm:columns-2 sm:gap-8 md:columns-3 lg:columns-4 [&>img:not(:first-child)]:mt-8">
                @foreach ($produits as $produit)
                    <a class="max-w-xs" href="{{ route('produit.show', ['produit' => $produit->id]) }}">
                        <img src="{{ Vite::asset('storage/app/public/' . $produit->photo) }}" alt="{{ $produit->titre }}">
                    </a>
                @endforeach
            </div>
        </div>
    </main>

@endsection
