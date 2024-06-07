<nav style="column-gap: 20px;" class="-mx-3 flex flex-1 justify-end">
    @auth
        <a
            href="{{ url('/dashboard') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
        >
            Чат
        </a>
    @else
        <a
            href="{{ route('login') }}"
            class=""
            style="font-size: 16px;"
        >
            Вход
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                style="font-size: 16px; "
            >
                Регистрация
            </a>
        @endif
    @endauth
</nav>
