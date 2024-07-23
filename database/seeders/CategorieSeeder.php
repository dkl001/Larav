<?php

namespace Database\Seeders;
use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    public function run()
    {
        Categorie::create(['nom' => 'portable']);
        Categorie::create(['nom' => 'ordinateur']);
        Categorie::create(['nom' => 'televiseur']);
    }
}
