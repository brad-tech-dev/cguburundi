<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ __("CGU Burundi") }}</title>

    {{-- vite resources --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- livewire --}}
    @livewireStyles

    <x-core.dark-mode-toggler-script />
</head>
<body class="antialiased text-gray-900 dark:text-slate-300 tracking-tight bg-white dark:bg-slate-900">

    <x-sections.navbar />

    {{ $slot }}

    @livewireScripts
</body>
</html>

