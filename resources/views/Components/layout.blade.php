<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 12</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white shadow-md p-6 max-w-4xl mx-auto mt-10">
    <nav class="mb-6">
        <ul class="flex space-x-4">
            <x-link-item href="/" :active="Route::currentRouteName() === 'homepage'" class="underline">
                Home Page
            </x-link-item>
            <x-link-item href="/project" :active="Route::currentRouteName() === 'project'">
                Project
            </x-link-item>
        </ul>
    </nav>

    <div class="p-4">
        {{ $slot }}
    </div>
</body>
</html>
