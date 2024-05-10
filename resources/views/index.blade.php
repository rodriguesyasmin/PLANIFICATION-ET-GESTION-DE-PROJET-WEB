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
          <!-- source: https://github.com/mfg888/Responsive-Tailwind-CSS-Grid/blob/main/index.html -->



<!-- ✅ Grid Section - Starts Here 👇 -->
<section id="Projects"
    class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

    <!--   ✅ Product card 1 - Starts Here 👇 -->
    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="https://images.unsplash.com/photo-1646753522408-077ef9839300?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8NjZ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                    alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">
                <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                    <del>
                        <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                    </del>
                    <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                        </svg></div>
                </div>
            </div>
        </a>
    </div>
    <!--   🛑 Product card 1 - Ends Here  -->

</section>




        </section>


    </body>
    </html>


