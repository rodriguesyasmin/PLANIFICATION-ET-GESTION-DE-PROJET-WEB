@extends('partials.base')

@section('title', 'Créer produit')

@section('content')

<div class="min-h-screen flex items-center text-lg">

    <form action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data"
        class="bg-[#8AD9D7] p-10 md:w-2/3 lg:w-1/2 mx-auto rounded mt-12 mb-12">
        @csrf
        <h1 class="text-3xl uppercase text-[#231F52]">Enregistrer un produit</h1>
        <div class="shadow">
            <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                <label for="titre" class="w-20 text-right p-4 mr-8 text-[#231F52]">Titre</label>
                <input type="text" name="titre" id="titre" placeholder="Titre"
                    class="flex-1 p-4 pl-0 bg-transparent outline-none text-[#231F52] overflow-ellipsis overflow-hidden"
                    value="{{ old('titre') }}">
                @error('titre')
                <p class="text-red-500 text-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                <label for="description" class="w-20 text-right p-4 mr-8 text-[#231F52]">Description</label>
                <input type="text" name="description" id="description" placeholder="Description"
                    value="{{ old('description') }}"
                    class="flex-1 p-4 pl-0 bg-transparent outline-none text-[#231F52] overflow-ellipsis overflow-hidden">
                @error('description')
                <p class="text-red-500 text-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                <label for="taille" class="w-20 text-right p-4 mr-8 text-[#231F52]">Taille</label>
                <select name="taille" id="taille"
                    class="flex-1 p-4 pl-0 bg-transparent outline-none text-[#231F52] overflow-ellipsis overflow-hidden">
                    <option value="S" {{ old('taille') === 'S' ? 'selected' : '' }}>S</option>
                    <option value="M" {{ old('taille') === 'M' ? 'selected' : '' }}>M</option>
                    <option value="L" {{ old('taille') === 'L' ? 'selected' : '' }}>L</option>
                    <option value="XL" {{ old('taille') === 'XL' ? 'selected' : '' }}>XL</option>
                    <option value="XXL" {{ old('taille') === 'XXL' ? 'selected' : '' }}>XXL</option>
                </select>
                @error('taille')
                <p class="text-red-500 text-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                <label for="photo" class="w-20 text-right p-4 mr-8 text-[#231F52]">Photo</label>
                <input type="file" name="photo" id="photo"
                    class="flex-1 p-4 pl-0 bg-transparent outline-none text-[#231F52] overflow-ellipsis overflow-hidden"
                    value="{{ old('photo') }}">
                @error('photo')
                <p class="text-red-500 text-lg">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                <label for="categorie" class="w-20 text-right p-4 mr-8 text-[#231F52]">Catégorie</label>
                <input type="text" name="categorie" id="categorie" placeholder="Catégorie"
                    class="flex-1 p-4 pl-0 bg-transparent outline-none text-[#231F52] overflow-ellipsis overflow-hidden"
                    value="{{ old('categorie') }}">
                @error('categorie')
                <p class="text-red-500 text-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                <label for="quantite" class="w-20 text-right p-4 mr-8 text-[#231F52]">Quantité</label>
                <input type="number" name="quantite" id="quantite" placeholder="Quantité"
                    class="flex-1 p-4 pl-0 bg-transparent outline-none text-[#231F52] overflow-ellipsis overflow-hidden"
                    value="{{ old('quantite') }}">
                @error('quantite')
                <p class="text-red-500 text-lg">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <button class="bg-[#FF7755] block w-full rounded py-4 text-white font-bold shadow">Sauvegarder</button>
    </form>
</div>

@endsection