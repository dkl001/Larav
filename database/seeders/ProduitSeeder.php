<?php

namespace Database\Seeders;
use App\Models\Produit;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    public function run()
    {
        Produit::create([
            'nom' => 'Apple',
            'description' => 'Un produit de l\'Apple.',
            'prix' => 300000,
            'quantite' => 10,
            'categorie_id' => 1, 
        ]);
            

        Produit::create([
            'nom' => 'Lenovo',
            'description' => 'Un ordinateur portable.',
            'prix' => 800000,
            'quantite' => 100,
            'categorie_id' => 2, 
        ]);

        Produit::create([
            'nom' => 'Samsung TV',
            'description' => 'Un téléviseur.',
            'prix' => 1000000,
            'quantite' => 200,
            'categorie_id' => 3, 
        ]);
    }
}
