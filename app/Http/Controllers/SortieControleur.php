<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Sortie;

class SortieController extends Controller
{
    public function create($produitId)
    {
        $produit = Produit::findOrFail($produitId);
        return view('sorties.create', compact('produit'));
    }

    public function store(Request $request)
    {
        $sortie = new Sortie();
        $sortie->produit_id = $request->produit_id;
        $sortie->quantite = $request->quantite;
        $sortie->save();

        $produit = Produit::findOrFail($request->produit_id);
        $produit->quantiteStock -= $request->quantite;
        $produit->save();

        return redirect('/produits');
    }
}
