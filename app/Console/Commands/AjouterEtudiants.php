<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Etudiant;

class AjouterEtudiants extends Command
{
    // php artisan etudiants:ajout en référence au nom de la signature
    protected $signature = 'etudiants:ajout';
    protected $description = 'Ajoute des étudiants en base de données';

    public function handle()
    {
        Etudiant::create([
            'nom' => 'Doe',
            'prenom' => 'John',
            'classe' => 'A',
            'action' => 'Inscription'
        ]);

        Etudiant::create([
            'nom' => 'Smith',
            'prenom' => 'Jane',
            'classe' => 'B',
            'action' => 'Inscription'
        ]);

        Etudiant::create([
            'nom' => 'Williams',
            'prenom' => 'Michael',
            'classe' => 'A',
            'action' => 'Réinscription'
        ]);
    
        Etudiant::create([
            'nom' => 'Johnson',
            'prenom' => 'Emily',
            'classe' => 'C',
            'action' => 'Inscription'
        ]);

        // Ajout d'autres étudiants ici

        $this->info('Étudiants ajoutés en base de données.');
    }
}
