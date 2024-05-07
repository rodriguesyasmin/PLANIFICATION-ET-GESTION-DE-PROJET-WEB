<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Utilisateur;

class UtilisateurSeeder extends Seeder
{
    public function run()
    {
        Utilisateur::create([
            'nom' => 'Admin',
            'email' => 'admin@admin.com',
            'mot_de_passe' => bcrypt('123456'),
        ]);

    }
}
