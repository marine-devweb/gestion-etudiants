<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    public function liste_etudiant()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // Vue du formulaire de création
    public function create()
    {
        return view('etudiant.creation');
    }

    /**
     * Store a newly created resource in storage.
     */
    //  traitement des données envoyées via le formulaire de création et enregistrer le nouvel étudiant en base de données.
    public function store(Request $request)
    {
         // Valider les données du formulaire

        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->action = 'Inscription';
        $etudiant->save();

        return redirect('/')->with('status', 'L\'étudiant a bien été ajouté avec succés.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Recherche l'étudiant à supprimer
        $etudiant = Etudiant::findOrFail($id);
        // Supprime l'étudiant
        $etudiant->delete();
    
        return redirect()->route('etudiants.index')->with('success', 'Étudiant supprimé avec succès.');
    }
}
