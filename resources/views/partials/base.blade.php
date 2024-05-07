<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description"
      content="Discover SuperThreads for your superhero apparel needs. Unleash your inner hero with our exclusive collection of costumes inspired by iconic characters. Perfect for journalists, photographers, and anyone seeking to embody the spirit of their favorite superheroes." />
        <title>@yield('title')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/js/app.js','resources/css/app.css'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    
    <body class="min-h-screen min-w-screen flex flex-col">
    
    @include('partials.header')
    
    @yield('content')
    
    @include('partials.footer')
    </body>
</html>