@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Edition de l'étudiant</h1>

    <form action="{{ route('etudiants.update', $etudiant->id) }}" method="POST">
    @csrf
    <!-- Utilise la méthode PUT pour la mise à jour -->
    @method('PUT') 
        <div class="mb-3 mt-5">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom_id" name="nom" value="{{ $etudiant->nom }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom" value="{{ $etudiant->prenom }}" id="prenom_id">
        </div>
        <div class="mb-3">
            <label for="classe" class="form-label">Classe</label>
            <input type="text" class="form-control" name="classe" value="{{ $etudiant->classe }}" id="classe_id">
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
