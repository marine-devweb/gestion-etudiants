<!-- Indique qu'une vue spécifique hérite du contenu et de la structure définis dans le layout appelé 'layouts.app'. -->
@extends('layouts.app')

<!-- content est une convention de nommage -->
@section('content')
    <h1>Création d'un nouvel étudiant</h1>

    <form action="{{ route('etudiants.store') }}" method="POST">
        @csrf
        <button type="submit">Créer</button>
    </form>
@endsection
