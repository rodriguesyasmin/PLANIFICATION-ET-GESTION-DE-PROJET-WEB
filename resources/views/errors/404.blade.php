@extends('partials.base')
@section('title', 'error')
@section('content')
    <!-- ====== Error 404 Section Start -->
    <section class="relative z-10 bg-primary py-[120px]">
        <div class="container mx-auto flex justify-center items-center text-center bg-[#8AD9D7] p-10">
            <div class="mx-auto max-w-[400px] text-center">
                <h2 class=" font-bold leading-none  sm:text-[42px] md:text-[42px]">
                   Oops! 
                </h2>
                <img class="w-full h-1/2 rounded-lg" src="{{ Vite::asset('resources/img/img-error.jpg') }}" alt="image d'erreur">


                <h4 class="mb-3 text-[22px] font-semibold leading-tight ">
                   That page can't be found
                </h4>
                <p class="mb-8 text-lg ">
                    Error 404
                </p>
                <a href="{{ route('index') }}"
                    class="mb-6 inline-block w-full rounded  px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal 
    transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-md focus:bg-primary-600 focus:shadow-md focus:outline-none 
    focus:ring-0 active:bg-primary-700 active:shadow-md dark:shadow-lg dark:hover:shadow-md dark:focus:shadow-md dark:active:shadow-md">
                    Go To Home
                </a>

            </div>
        </div>
        <div
            class="absolute top-0 left-0 -z-10 flex h-full w-full items-center justify-between space-x-5 md:space-x-8 lg:space-x-14">
     
        </div>
    </section>
    <!-- ====== Error 404 Section End -->
@endsection