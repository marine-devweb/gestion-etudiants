<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Les liens vers les fichiers CSS, JavaScript, etc. -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/etudiants">Étudiants</a></li>
                <!-- Autres liens de navigation -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Cette section sera remplie par les vues spécifiques -->
    </main>

    <footer>
        <!-- Le contenu du pied de page -->
    </footer>
</body>
</html>
