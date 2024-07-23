<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\AuthentificationControleur;
use App\Http\Controllers\ProduitControleur;
use App\Http\Controllers\EntreeControleur;
use App\Http\Controllers\SortieControleur;
use App\Http\Controllers\CategorieControleur;




// Route::middleware(['auth', 'role:user'])->group(function () {
//     // Route::get('/accueil', [ProduitControleur::class, 'index']);
//     // Route::get('/produits', [ProduitControleur::class, 'index']);
//     // // Route::get('/produits/create', [ProduitControleur::class, 'create']);
//     // Route::post('/produits', [ProduitControleur::class, 'store']);
//     // // Route::get('/produits/{id}/edit', [ProduitControleur::class, 'edit']);
//     // // Route::put('/produits/{id}', [ProduitControleur::class, 'update']);
//     // // Route::delete('/produits/{id}', [ProduitControleur::class, 'destroy']);


//     // Route::get('/categories', [CategorieControleur::class, 'index']);
//     // Route::get('/categories/create', [CategorieControleur::class, 'create']);
//     // Route::post('/categories', [CategorieControleur::class, 'store']);
//     // Route::get('/categories/{id}/edit', [CategorieControleur::class, 'edit']);
//     // Route::put('/categories/{id}', [CategorieControleur::class, 'update']);
//     // Route::delete('/categories/{id}', [CategorieControleur::class, 'destroy']);

//     // Route::get('/entrees', [EntreeController::class, 'index']);
//     // Route::get('/entrees/create', [EntreeController::class, 'create']);
//     // Route::post('/entrees', [EntreeController::class, 'store']);

    
//     // Route::get('/sorties', [SortieController::class, 'index']);
//     // Route::get('/sorties/create', [SortieController::class, 'create']);
//     // Route::post('/sorties', [SortieController::class, 'store']);
    

//     Route::get('/produits', [ProduitControleur::class, 'index']);
//     Route::get('/produits/create', [ProduitControleur::class, 'create']);
//     Route::post('/produits', [ProduitControleur::class, 'store']);
//     Route::get('/produits/{id}/edit', [ProduitControleur::class, 'edit']);
//     Route::put('/produits/{id}', [ProduitControleur::class, 'update']);
//     Route::delete('/produits/{id}', [ProduitControleur::class, 'destroy']);

//     Route::get('/entrees/{produit}/create', [EntreeController::class, 'create']);
//     Route::post('/entrees', [EntreeController::class, 'store']);

//     Route::get('/sorties/{produit}/create', [SortieController::class, 'create']);
//     Route::post('/sorties', [SortieController::class, 'store']);

// });


// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/accueil', [ProduitControleur::class, 'index']);
//     Route::get('/produits', [ProduitControleur::class, 'index']);
//     Route::get('/produits/create', [ProduitControleur::class, 'create']);
//     Route::post('/produits', [ProduitControleur::class, 'store']);
//     Route::get('/produits/{id}/edit', [ProduitControleur::class, 'edit']);
//     Route::put('/produits/{id}', [ProduitControleur::class, 'update']);
//     Route::delete('/produits/{id}', [ProduitControleur::class, 'destroy']);


//     Route::get('/categories', [CategorieControleur::class, 'index']);
//     Route::get('/categories/create', [CategorieControleur::class, 'create']);
//     Route::post('/categories', [CategorieControleur::class, 'store']);
//     Route::get('/categories/{id}/edit', [CategorieControleur::class, 'edit']);
//     Route::put('/categories/{id}', [CategorieControleur::class, 'update']);
//     Route::delete('/categories/{id}', [CategorieControleur::class, 'destroy']);

    
//     Route::get('/entrees', [EntreeController::class, 'index']);
//     Route::get('/entrees/create', [EntreeController::class, 'create']);
//     Route::post('/entrees', [EntreeController::class, 'store']);

//     Route::get('/sorties', [SortieController::class, 'index']);
//     Route::get('/sorties/create', [SortieController::class, 'create']);
//     Route::post('/sorties', [SortieController::class, 'store']);
//     });

// // Route::get('/produits', [ProduitControleur::class, 'index']);
// // Route::get('/produits/create', [ProduitControleur::class, 'create']);
// // Route::post('/produits', [ProduitControleur::class, 'store']);
// // Route::get('/produits/{id}/edit', [ProduitControleur::class, 'edit']);
// // Route::put('/produits/{id}', [ProduitControleur::class, 'update']);
// // Route::delete('/produits/{id}', [ProduitControleur::class, 'destroy']);


// // Route::get('/categories', [CategorieControleur::class, 'index']);
// // Route::get('/categories/create', [CategorieControleur::class, 'create']);
// // Route::post('/categories', [CategorieControleur::class, 'store']);
// // Route::get('/categories/{id}/edit', [CategorieControleur::class, 'edit']);
// // Route::put('/categories/{id}', [CategorieControleur::class, 'update']);
// // Route::delete('/categories/{id}', [CategorieControleur::class, 'destroy']);

// Route::get('/', [AuthentificationControleur::class, 'afficherFormulaireConnexion'])->name('login');
// Route::get('/connexion', [AuthentificationControleur::class, 'afficherFormulaireConnexion']);
// Route::post('/connexion', [AuthentificationControleur::class, 'connexion']);
// Route::post('/logout', [AuthentificationControleur::class, 'deconnexion'])->name('logout');



Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/produits', [ProduitControleur::class, 'index']);
    Route::get('/produits/create', [ProduitControleur::class, 'create']);
    Route::post('/produits', [ProduitControleur::class, 'store']);
    Route::get('/produits/{id}/edit', [ProduitControleur::class, 'edit']);
    Route::put('/produits/{id}', [ProduitControleur::class, 'update']);
    Route::delete('/produits/{id}', [ProduitControleur::class, 'destroy']);

    Route::get('/entrees/{produit}/create', [EntreeController::class, 'create']);
    Route::post('/entrees', [EntreeController::class, 'store']);

    Route::get('/sorties/{id}/create', [SortieController::class, 'create']);
    Route::post('/sorties', [SortieController::class, 'store']);
});
Route::get('/categories', [CategorieControleur::class, 'index']);
Route::get('/categories/create', [CategorieControleur::class, 'create']);
Route::post('/categories', [CategorieControleur::class, 'store']);
Route::get('/categories/{id}/edit', [CategorieControleur::class, 'edit']);
Route::put('/categories/{id}', [CategorieControleur::class, 'update']);
Route::delete('/categories/{id}', [CategorieControleur::class, 'destroy']);

Route::get('/connexion', function () {
    return view('auth.login');
})->name('login');

Route::get('/', [AuthentificationControleur::class, 'afficherFormulaireConnexion'])->name('login');

Route::post('/connexion', [AuthentificationControleur::class, 'connexion']);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});


// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/produits', [ProduitControleur::class, 'index']);
//     Route::get('/produits/create', [ProduitControleur::class, 'create']);
//     Route::post('/produits', [ProduitControleur::class, 'store']);
//     Route::get('/produits/{id}/edit', [ProduitControleur::class, 'edit']);
//     Route::put('/produits/{id}', [ProduitControleur::class, 'update']);
//     Route::delete('/produits/{id}', [ProduitControleur::class, 'destroy']);

//     Route::get('/entrees/{produit}/create', [EntreeController::class, 'create']);
//     Route::post('/entrees', [EntreeController::class, 'store']);

//     Route::get('/sorties/{id}/create', [SortieController::class, 'create']);
//     Route::post('/sorties', [SortieController::class, 'store']);
// });

// Route::get('/categories', [CategorieControleur::class, 'index']);
// Route::get('/categories/create', [CategorieControleur::class, 'create']);
// Route::post('/categories', [CategorieControleur::class, 'store']);
// Route::get('/categories/{id}/edit', [CategorieControleur::class, 'edit']);
// Route::put('/categories/{id}', [CategorieControleur::class, 'update']);
// Route::delete('/categories/{id}', [CategorieControleur::class, 'destroy']);   


// Route::get('/connexion', function () {
//     return view('auth.login');
// })->name('login');

// Route::get('/', [AuthentificationControleur::class, 'afficherFormulaireConnexion'])->name('login');

// Route::post('/connexion', [AuthentificationControleur::class, 'login']);

// Route::middleware('auth')->group(function () {
//     Route::post('/logout', [AuthentificationControleur::class, 'logout'])->name('logout');
// });


