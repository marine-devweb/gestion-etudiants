<!-- Indique qu'une vue spécifique hérite du contenu et de la structure définis dans le layout appelé 'layouts.app'. -->
@extends('layouts.app')

<!-- content est une convention de nommage -->
@section('content')
<div class="container mt-5">
    <h1>Création d'un nouvel étudiant</h1>

    <form action="{{ route('etudiants.store') }}" method="POST">
    @csrf
        <div class="mb-3 mt-5">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom_id" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom_id">
        </div>
        <div class="mb-3">
            <label for="classe" class="form-label">Classe</label>
            <input type="text" class="form-control" id="classe_id">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
@endsection
