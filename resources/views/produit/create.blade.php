@extends('partials.base')

@section('title', 'Créer produit')

@section('content')

    <div class="bg-[#8AD9D7] min-h-screen flex items-center text-lg">
        <form action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data" class="p-10 md:w-2/3 lg:w-1/2 mx-auto rounded">
            @csrf
            <div class="shadow">
                <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                    <label for="titre" class="w-20 text-right p-4 mr-8 text-[#231F52]">Titre</label>
                    <input type="text" name="titre" id="titre" placeholder="Titre"
                        class="flex-1 p-4 pl-0 bg-transparent outline-none text-[#231F52] overflow-ellipsis overflow-hidden">
                    @error('titre')
                        <p class="text-red-500 text-lg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                    <label for="description" class="w-20 text-right p-4 mr-8 text-[#231F52]">Description</label>
                    <input type="text" name="description" id="description" placeholder="Description"
                        class="flex-1 p-4 pl-0 bg-transparent outline-none text-[#231F52] overflow-ellipsis overflow-hidden">
                    @error('description')
                        <p class="text-red-500 text-lg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                    <label for="taille" class="w-20 text-right p-4 mr-8 text-[#231F52]">Taille</label>
                    <input type="text" name="taille" id="taille" placeholder="Taille"
                        class="flex-1 p-4 pl-0 bg-transparent outline-none text-[#231F52] overflow-ellipsis overflow-hidden">
                    @error('taille')
                        <p class="text-red-500 text-lg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                    <label for="photo" class="w-20 text-right p-4 mr-8 text-[#231F52]">Photo</label>
                    <input type="file" name="photo" id="photo"
                        class="flex-1 p-4 pl-0 bg-transparent outline-none text-[#231F52] overflow-ellipsis overflow-hidden">
                    @error('photo')
                        <p class="text-red-500 text-lg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                    <label for="photo2" class="w-20 text-right p-4 mr-8 text-[#231F52]">Photo 2</label>
                    <input type="file" name="photo2" id="photo2"
                        class="flex-1 p-4 pl-0 bg-transparent outline-none text-[#231F52] overflow-ellipsis overflow-hidden">
                    @error('photo2')
                        <p class="text-red-500 text-lg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                    <label for="photo3" class="w-20 text-right p-4 mr-8 text-[#231F52]">Photo 3</label>
                    <input type="file" name="photo3" id="photo3"
                        class="flex-1 p-4 pl-0 bg-transparent outline-none text-[#231F52] overflow-ellipsis overflow-hidden">
                    @error('photo3')
                        <p class="text-red-500 text-lg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                    <label for="categorie" class="w-20 text-right p-4 mr-8 text-[#231F52]">Catégorie</label>
                    <input type="text" name="categorie" id="categorie" placeholder="Catégorie"
                        class="flex-1 p-4 pl-0 bg-transparent outline-none text-[#231F52] overflow-ellipsis overflow-hidden">
                    @error('categorie')
                        <p class="text-red-500 text-lg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                    <label for="quantite" class="w-20 text-right p-4 mr-8 text-[#231F52]">Quantité</label>
                    <input type="number" name="quantite" id="quantite" placeholder="Quantité"
                        class="flex-1 p-4 pl-0 bg-transparent outline-none text-[#231F52] overflow-ellipsis overflow-hidden">
                    @error('quantite')
                        <p class="text-red-500 text-lg">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button class="bg-[#FF7755] block w-full rounded py-4 text-white font-bold shadow">Sauvegarder</button>
        </form>
    </div>

@endsection
