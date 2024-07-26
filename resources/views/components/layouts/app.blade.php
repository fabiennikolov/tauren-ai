<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @vite('resources/css/app.css')
    </head>
    <body>
        <main class="bg-[#0f0d1b] min-h-screen">
            <livewire:nav />
            {{ $slot }}
            <livewire:footer />
        </main>
    </body>
</html>
