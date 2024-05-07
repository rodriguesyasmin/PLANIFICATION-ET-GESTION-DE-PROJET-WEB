@extends('partials.base')

@section('title', 'Insription')

@section('content')

    <div class="bg-[#8AD9D7] min-h-screen flex items-center text-lg">
        <form action="" class="p-10 md:w-2/3 lg:w-1/2 mx-auto rounded">
            <div class="shadow">
                <div class="flex items-center bg-[#F2C749] rounded-t-lg border-[#FF7755] border-b">
                    <label for="nom" class="w-20 text-right mr-8 p-4 text-[#231F52]">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Votre nom"
                        class="flex-1 p-4 pl-0 bg-transparent placeholder-purple-300  outline-none text-[#231F52] overflow-ellipsis overflow-hidden">
                </div>
                <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                    <label for="courriel" class="w-20 text-right p-4 mr-8 text-[#231F52]">Courriel</label>
                    <input type="text" name="courriel" id="courriel" placeholder="Votre courriel"
                        class="flex-1 p-4 pl-0 bg-transparent placeholder-purple-300 outline-none text-white overflow-ellipsis overflow-hidden">
                </div>
                <div class="flex items-center bg-[#F2C749] rounded-b-lg border-[#FF7755] mb-10">
                    <label for="motdepasse" class="w-20 text-right p-4 mr-8 text-[#231F52]">Mot de passe</label>
                    <input type="text" name="mot_de_passe" id="motdepasse" placeholder="Votre mot de passe"
                        class="flex-1 p-4 pl-0 bg-transparent placeholder-purple-300 outline-none text-[#231F52] overflow-ellipsis overflow-hidden">
                </div>
            </div>
            <button class="bg-[#FF7755] block w-full rounded py-4 text-white font-bold shadow">Soumettre</button>

        </form>
    </div>

@endsection
