<!-- Indique qu'une vue spécifique hérite du contenu et de la structure définis dans le layout appelé 'layouts.app'. -->
@extends('layouts.app')

<!-- content est une convention de nommage -->
@section('content')
<div class="container">
    <h1>Création d'un nouvel étudiant</h1>

    <form action="{{ route('etudiants.store') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
