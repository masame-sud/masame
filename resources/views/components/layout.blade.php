<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Masame</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">

      @include('layouts.navigation')
 
          
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            
            <!-- component -->
            <section class="bg-black">
                <div
                    class="max-w-lg bg-black px-4 pt-24 py-8 mx-auto text-left md:max-w-none md:text-center"
                >
                    <h1
                    class="text-3xl font-extrabold leading-10 tracking-tight text-left text-white text-center sm:leading-none md:text-6xl text-4xl lg:text-7xl"
                    >
                    <span class="inline md:block">{{__('Subscribe!')}}</span>

                    </h1>
                    <div
                    class="mx-auto rounded-lg font-black mt-5 text-zinc-400 md:mt-12 md:max-w-lg text-center lg:text-lg"
                    >
                    <button class="bg-tkb border text-sm text-white py-3 px-7 rounded-full" onClick={signInNow}>
                    Apuntate a nuestra lista
                    </button>
                    </div>
                </div>
            </section>

            <hr class="text-white mx-5" />
            <footer class="bg-black pb-5">
            <div class="max-w-screen-xl px-4 pt-8 mx-auto sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center sm:justify-between">
            <div class="flex justify-center text-teal-300 sm:justify-start">
            <img class="rounded-full" src="https://sahilnetic.xyz/evilcat.png" width="40" height="40" />
            </div>

            <p class="mt-4 text-sm text-center text-gray-400 lg:text-right lg:mt-0">
                T&C &nbsp; Career &nbsp; Privacy & Policy &nbsp; Developers
            </p>
            </div>
            </div>
            </footer>
        
    </body>
</html>