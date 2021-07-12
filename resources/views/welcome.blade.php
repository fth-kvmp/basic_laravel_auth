<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'Laravel')}}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    </head>
    <body>
        {{-- @if (Route::has('login'))
            @auth
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <br>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif --}}

        <header class="absolute top-0 left-0 h-24 bg-transparent">
            There should lay the logo
        </header>
        <main class="text-gray-200">
            <section id="banner" class="py-32">
                <div class="w-3/4 mx-auto">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="slogan">
                            <h1 class="text-6xl">Serain. Avec la seconde main.</h1>
                            <p class="text-lg mt-3">Chez CarHere la serenité d'une voiture d'occasion fiable.</p>
                        </div>
                        <div class="search p-2 bg-white rounded-md shadow-md text-gray-900">
                            <div class="card">
                                <div class="context text-blue-600 font-semibold pt-2 pl-2 flex items-center">
                                    <svg class="w-8 h-8" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M16,6L19,10H21C22.11,10 23,10.89 23,12V15H21A3,3 0 0,1 18,18A3,3 0 0,1 15,15H9A3,3 0 0,1 6,18A3,3 0 0,1 3,15H1V12C1,10.89 1.89,10 3,10L6,6H16M10.5,7.5H6.75L4.86,10H10.5V7.5M12,7.5V10H17.14L15.25,7.5H12M6,13.5A1.5,1.5 0 0,0 4.5,15A1.5,1.5 0 0,0 6,16.5A1.5,1.5 0 0,0 7.5,15A1.5,1.5 0 0,0 6,13.5M18,13.5A1.5,1.5 0 0,0 16.5,15A1.5,1.5 0 0,0 18,16.5A1.5,1.5 0 0,0 19.5,15A1.5,1.5 0 0,0 18,13.5Z" />
                                    </svg>
                                    <p class="ml-2">Voiture en vente</p>
                                </div>
                                <div class="select-icon">
                                    <select class="border-b-2 border-blue-600 w-full p-4 outline-none" name="brands" id="brands">
                                        <option value="audi">Audi</option>
                                        <option value="bmw">Bmw</option>
                                        <option value="Volvo">Volvo</option>
                                    </select>
                                </div>
                                <div class="price-range">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            I am the footer of the app.
        </footer>

        </div>
    </body>
</html>
