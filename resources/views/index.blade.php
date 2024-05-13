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
        <div class="dark:bg-gray-800  relative overflow-hidden h-screen">
            <header class="h-24 sm:h-32 flex items-center z-30 w-full">
                <div class="container mx-auto px-6 flex items-center justify-between">
                    <div class="uppercase logo  text-5xl underline">
                        Super Clothes
                    </div>
                    <div class="flex items-center">
                        <nav class="font-sen  dark:text-white uppercase text-lg lg:flex items-center hidden">
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
            <div class=" dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
                <div class="container mx-auto px-6 flex relative py-16">
                    <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20  justify-center">

                        <h1
                            class="font-bebas-neue uppercase text-6xl sm:text-4xl font-black flex flex-col leading-none ">
                            Habillez-vous pour la job que vous voulez!
                        </h1>
                        <p class="text-sm sm:text-base text-gray-700 dark:text-white ">
                            Des tenues modernes pour le super-héros que vous êtes </p>

                    </div>
                    <div class="hidden sm:block sm:w-1/3 lg:w-3/5 relative">

                        <img src="{{ Vite::asset('resources/img/SuperClothes_icon_transparent.png') }}"
                            class="max-w-md md:max-w-lg m-auto" alt="Super Clothes Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>
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

    <footer>
        <div class="text-center  ">
            <a href="#" class="flex items-center justify-center mb-5 text-2xl font-semibold ">
                <img src="{{ Vite::asset('resources/img/SuperClothes_icon_transparent.png') }}"
                    class="h-36 mr-6 sm:h-15" alt="Super Clothes Logo">
            </a>
            <ul class="flex justify-center mt-5 space-x-5">
                <li>
                    <a href="#" class="text-gray-500 hover:text-gray-900">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-500 hover:text-gray-900">
                        <svg class="w-5 h-5" fill="" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            </ul>
            <span class="block text-base lg:text-lg text-center ">
                <a href="https://flowbite.com" class="hover:underline">Super Clothes ©</a>
                <a href="https://tailwindcss.com" class="hover:underline">- Tous droits
                    réservés</a>.
            </span>
        </div>
    </footer>
</body>

</html>