<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Minimaliste</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen">
    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-xl font-bold">Logo</a>
            <ul class="flex space-x-6">
                <x-link-item href="/" :active="Route::currentRouteName() === 'homepage' ? true : false" class="underline">Homepage</x-link-item>
                <x-link-item href="/projects" :active="Route::currentRouteName() === 'projects' ? true : false">Projects</x-link-item>
                <x-link-item href="/recipes" :active="fnmatch('recipes.*', Route::currentRouteName()) ? true : false">Recipes</x-link-item>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto p-6">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 text-center p-4 mt-6">
        <p class="text-gray-600">&copy; 2025 MonSite. Tous droits réservés.</p>
    </footer>
</body>

</html>
