<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Book Management System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <!-- ========== HEADER ========== -->
                    <header class="outline outline-green-500 bg-transparent py-2 mt-4 rounded flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">
                        <nav class="relative max-w-[85rem] w-full mx-auto flex items-center justify-between gap-3 py-2 px-4 sm:px-6 lg:px-8">
                            <a class="underline underline-offset-1 flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 dark:text-white" href="/homepage" aria-label="Brand">< /> TBS</a>

                            <!-- If logged in, show the addBook and logout button -->
                            @auth
                            <div class="flex items-center gap-3">
                                <!-- <img class="size-10 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/5/55/LogoCSAV.png" alt="Avatar"> -->
                                    <a href="/add-movie-form" class="text-sm px-4 py-1 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-300">+ Add Movie</a>
                                    <form action="/logout" method="POST">
                                    @csrf
                                    <button class="text-sm px-4 py-1 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-300">Logout</button>
                                </form>
                            </div>
                            <!-- If logged out, show the form for log in -->
                            @else
                                <form action="/login" method="POST">
                                    @csrf
                                    <div class="hidden md:flex items-center space-x-2 ml-auto">
                                        <input type="text" name="username" placeholder="Username" class="text-sm px-3 py-1 border rounded-lg text-white dark:bg-green-700 dark:border-green-600 focus:ring focus:ring-green-300">
                                        <input type="password" name="password" placeholder="Password" class="text-sm px-3 py-1 border rounded-lg text-white dark:bg-green-700 dark:border-green-600 focus:ring focus:ring-green-300">
                                        <button type="submit" class="text-sm px-4 py-1 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-300">Login</button>
                                    </div>
                                </form>
                            @endauth
                        </nav>
                    </header>
                <!-- ========== END HEADER ========== -->

                @if (session('failure'))
                    <div class="max-w-7xl px-4">
                        <div class="text-red-600 font-bold text-center p-4 outline outline-red-300 mt-5">
                            {{ session('failure') }}
                        </div>
                    </div>
                @endif

                @if (session('success'))
                    <div class="max-w-7xl px-4">
                        <div class="text-green-600 font-bold text-center p-4 outline outline-red-300 mt-5">
                            {{ session('success') }}
                        </div>
                    </div>
                @endif

                    <main class="mt-6">
                        {{ $slot }}
                    </main>

                </div>
            </div>
        </div>
    </body>
</html>
