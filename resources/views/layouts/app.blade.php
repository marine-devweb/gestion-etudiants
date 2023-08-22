<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!-- Les liens vers les fichiers CSS, JavaScript, etc. -->
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active bold" aria-current="page" href="/">Accueil</a>
                        </li>
                    </ul>
                    <form class="d-flex hidden" role="search" id="search_student">
                        <input class="form-control me-2" type="search" placeholder="Rechercher..." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Cette section sera remplie par les vues spécifiques -->
    </main>

    <footer>
        <!-- Le contenu du pied de page -->
    </footer>

    <!-- <script>
        // Vérifier si vous êtes sur la page etudiant.creation
        if (window.location.pathname === '/etudiants/create') {
            // Sélectionner l'élément à masquer
            var elementToHide = document.getElementById('search_student');
            
            // Ajouter la classe pour masquer l'élément
            if (elementToHide) {
                elementToHide.classList.add('hidden');
            }
        }
    </link> -->

   
</body>
</html>

