<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthentificationControleur extends Controller
{
    public function afficherFormulaireConnexion()
    {
        return view('authentification.connexion');
    }

    public function connexion(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('produits/');
        }

        return redirect()->back()->withErrors(['username' => 'Nom d\'utilisateur ou mot de passe incorrect.']);
    }

    public function deconnexion(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
