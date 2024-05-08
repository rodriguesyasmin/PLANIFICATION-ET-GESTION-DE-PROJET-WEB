<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description"
      content="Discover SuperThreads for your superhero apparel needs. Unleash your inner hero with our exclusive collection of costumes inspired by iconic characters. Perfect for journalists, photographers, and anyone seeking to embody the spirit of their favorite superheroes." />
        <title>Accueil</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/js/app.js','resources/css/app.css'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
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
                                <a href="" class="py-2 px-6 flex">
                                    Accueil
                                </a>
                                <a href="{{ route('produit.index') }}" class="py-2 px-6 flex">
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
    </html>


