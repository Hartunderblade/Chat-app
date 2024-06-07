<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chateck</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body style="width: 1600px; margin: 0 auto;" class="antialiased font-sans ">
        <header style="border-bottom: 1px solid #000;">
            <nav>
                
                <div style="display: flex; align-items: center; margin: 20px 40px;" class="">
                <h3 style="font-size: 22px; font-weight: 600;">.MyChateck</h3>
                    @if (Route::has('login'))
                        <livewire:welcome.navigation />
                    @endif
                </div>
            </nav>
            
        </header>
        <main>
            <img style="width: 100%; height: 100%;" src="https://sun9-65.userapi.com/impg/Tln8K3xPOyTx54Lf8pAf3okts8MTrDbUJZA_-w/NYMtMk6CIRU.jpg?size=1280x1175&quality=96&sign=817ecdf2347b889d1954fd8694531f20&type=album" alt="">
        </main>
    </body>
</html>

<style>
    /* main{
        background-image: url('../img/bc-slidepng.png');
        height: 100%;
    } */
</style>
