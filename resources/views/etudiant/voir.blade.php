@extends('layouts.app')

@section('content')
<form class="mx-5 no-edit bold" action="{{ route('etudiants.show', $etudiant->id) }}" method="GET">
    @csrf
    <div class="mb-3 mt-5">
        <label for="Nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom_id" name="nom" value="{{ $etudiant->nom }}">
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" name="prenom" value="{{ $etudiant->prenom }}" id="prenom_id">
    </div>
    <div class="mb-3">
        <label for="classe" class="form-label">Classe</label>
        <input type="text" class="form-control" name="classe" value="{{ $etudiant->classe }}" id="classe_id">
    </div>
</form>
@endsection