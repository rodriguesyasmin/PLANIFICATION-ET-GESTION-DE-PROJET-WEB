@extends('partials.base')

@section('title', 'Accueil')

@section('content')

    <body>
        <section>
            <div class="dark:bg-gray-800 bg-white relative overflow-hidden h-screen">
                <header class="h-24 sm:h-32 flex items-center z-30 w-full">
                    <div class="container mx-auto px-6 flex items-center justify-between">
                        <div class="uppercase text-gray-800 dark:text-white font-black text-3xl">
                            Super Clothes
                        </div>
                        <div class="flex items-center">
                            <nav class="font-sen text-gray-800 dark:text-white uppercase text-lg lg:flex items-center hidden">
                                <a href="#" class="py-2 px-6 flex">
                                    Accueil
                                </a>
                                <a href="#" class="py-2 px-6 flex">
                                    Catalogue
                                </a>
                                <a href="#" class="py-2 px-6 flex">
                                    Contact
                                </a>
                            </nav>
                        </div>
                    </div>
                </header>
                <div class="bg-white dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
                    <div class="container mx-auto px-6 flex relative py-16">
                        <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20  justify-center">
                         
                            <h1 class="font-bebas-neue uppercase text-6xl sm:text-4xl font-black flex flex-col leading-none dark:text-white text-gray-800">
                                Habillez-vous pour la job que vous voulez!
                            </h1>
                            <p class="text-sm sm:text-base text-gray-700 dark:text-white ">
                                Des tenues modernes pour le super-héros que vous êtes                            </p>
                        
                        </div>
                        <div class="hidden sm:block sm:w-1/3 lg:w-3/5 relative">
    
                            <img src="{{ Vite::asset('resources/img/SuperClothes_icon_transparent.png') }}" class="max-w-md md:max-w-lg m-auto" alt="Super Clothes Logo">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <p>Aqui entrarão os cards da home</p>
        </section>


    </body>

@endsection
