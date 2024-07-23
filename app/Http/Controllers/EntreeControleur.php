<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Entree;


class EntreeController extends Controller
{
    public function create($produitId)
    {
        $produit = Produit::findOrFail($id);
        return view('entrees.create', compact('produit'));
    }

    public function store(Request $request)
    {
        $entree = new Entree();
        $entree->produit_id = $request->produit_id;
        $entree->quantite = $request->quantite;
        $entree->save();

        $produit = Produit::findOrFail($request->produit_id);
        $produit->quantiteStock += $request->quantite;
        $produit->save();

        return redirect('/produits');
    }
}
