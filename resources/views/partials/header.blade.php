<header class="h-24 sm:h-32 flex items-center z-30 w-full bg-[#231F52]">
    <div class="container mx-auto px-6 flex items-center justify-between">
        <div class="uppercase text-[#FF7755] dark:text-white font-black text-3xl">
            Super Clothes
        </div>

        <div>
            <img src="{{ Vite::asset('resources/img/SuperClothes_icon_transparent.png') }}" class="h-40 mr-6 sm:h-15"
                alt="Super Clothes Logo">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/img/SuperClothes_icon_transparent.png') }}"
                        class="h-40 mr-6 sm:h-15 " alt="Super Clothes Logo">
                </a>
            </div>
            <div class="flex items-center">
                @include('partials.nav')
            </div>
        </div>
</header>