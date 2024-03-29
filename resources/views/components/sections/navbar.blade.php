@php

    // map the routes to their menu names
    $menus = [
        'home' => 'Acceuil',
        'about-us' => 'Qui sommes-nous',
        'services' => 'Nos services',
        // 'events' => 'Communauté/Événements',
        'blog.index' => 'Blog',
        'contacts' => 'Contacts',
    ];

    // determine the page we're on
    $currentPage = Request::url();

@endphp

<nav
    class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/" class="flex items-center">
            <img src={{ asset('images/logo.png') }} class="mr-3 h-6 sm:h-9" alt="CGU Burundi Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">CGU Burundi</span>
        </a>
        <div class="flex md:order-2">
            <x-widgets.dark-mode-toggler />
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="menu" aria-expanded="false" data-cgu-toggle-menu>
                <span class="sr-only">Ouvrir le menu principal</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="menu">
            <ul
                class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                @foreach ($menus as $route => $menu)
                    <li>
                        <a href={{ route($route) }}
                            class="{{ strcmp($currentPage, route($route)) == 0
                                ? 'block py-2 pr-4 pl-3 text-white bg-secondary-700 rounded md:bg-transparent md:text-primary-700 md:p-0 dark:text-white'
                                : 'block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-secondary-700' }}">
                            {{ $menu }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
