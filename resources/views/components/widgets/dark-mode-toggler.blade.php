<button type="button"
    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 inline-flex items-center"
    aria-label="Basculer entre les modes sombre et clair" data-cgu-toggle-color-scheme>

    {{-- sun: hidden, visible on dark mode --}}
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun w-6 h-6 hidden dark:block"
        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
        stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <circle cx="12" cy="12" r="4" />
        <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
    </svg>

    {{-- moon: visible, hidden on dark mode --}}
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-moon w-6 h-6 block dark:hidden"
        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
        stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
    </svg>

</button>
