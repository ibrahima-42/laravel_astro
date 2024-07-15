<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset ('css/app.css')}}">

        <style>
            .first {
                background-image: url('{{ asset ('images/Cloudy.svg') }}');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                width: 100%;
                {{--  height: 400px;  --}}
            }
        </style>

    </head>

    <header class="header">
        <div class="container">
            {{--  <img src="" alt="logo">  --}}
            <img id="logo" src="{{ asset('images/2d131efc-0f0b-49ff-b38d-f826b396d110-removebg-preview.png') }}" alt="">

            {{--  <h1>AS</h1>  --}}
        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                <ul class="menu">
                    <li><a href="">Home</a></li>
                    <li><a href="{{'/list'}}">Equipage</a></li>
                    <li><a href="">Navetes</a></li>
                    <li><a href="">Apolo </a></li>
                </ul>
                <!-- Authentication -->
                <form id="logout" method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Deconnecter') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg>
                    </x-responsive-nav-link>
                </form>

                {{--  @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 out text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Log in
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" x2="3" y1="12" y2="12"/></svg>
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2  out text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Register
                        </a>
                    @endif
                @endauth  --}}
            </nav>
        @endif
    </div>
    </header>
    <body>
                    <div class="first">
                        <div class="container">

                            <div class="first-text">
                                <h1>Astro <br> votre site pour decouvrir <br> <span>l espace</span>  </h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Temporibus, consequatur impedit! Distinctio vitae beatae cupiditate.</p>

                                <div class="link">
                                    <a href="">Decouvrir astro</a>
                                    <a href="{{'/liste'}}">Voir equipage</a>
                                </div>
                            </div>
                            <div id="astro">
                                <img src="{{ asset('images/Anne_De_Angelis_Illustration-removebg-preview.png') }}" alt="">
                            </div>
                        </div>
                    </div>


                    {{--  <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>  --}}
                </div>
            </div>
        </div>
    </body>
</html>
