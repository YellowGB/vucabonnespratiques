<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Guide des bonnes pratiques et de préconisations') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;0,700;0,800;0,900;1,500&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <header>
        <div class="w-screen flex justify-between p-4 md:px-80 bg-sky-300">
            <div>
                <a href="{{ route('home') }}">Transformation numérique</a>
            </div>
            <ul class="flex gap-4">
                <li>
                    <a href="{{ route('impact') }}">Impact</a>
                </li>
                <li>
                    <a href="{{ route('enjeux') }}">Enjeux</a>
                </li>
                <li>
                    <a href="{{ route('outils') }}">Outils</a>
                </li>
                <li>
                    <a href="{{ route('management') }}">Management</a>
                </li>
            </ul>
        </div>
    </header>
    <main class="p-4 md:px-80">
        {{ $slot }}
    </main>
    <footer>
        <div class="w-screen py-2 flex justify-center bg-sky-300">
            &copy; Groupe D 2022
        </div>
    </footer>
</body>
</html>