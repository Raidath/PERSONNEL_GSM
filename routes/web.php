<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonnelController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function(){
    return view('auth/login');

});

Route::get('/register', function(){
   return view('auth/register') ;

})->name('register');
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/', function () {
   return view('welcome');
});

// Routes pour la gestion du personnel
Route::middleware(['auth'])->group(function () {
   // Affichage de la liste des  Personels
   Route::get('/home', [PersonnelController ::class, 'index'])->name('Personnels.index');

// Formulaire pour ajouter un nouvel  Personnel
Route::get('/Personnels/create', function () {
   return view('Personnels.create');
})->name('Personnels.create');

// Ajout d'un nouvel  Personnel
Route::post('/Personnels', [PersonnelController::class, 'store'])->name('Personnels.store');

// Formulaire pour modifier les informations d'un   Employe
Route::get('/Personnels/{personnnel}/edit', [PersonnelController::class, 'edit'])->name('Personnels.edit');

// Mise à jour des informations d'un    Personnel
Route::put('/Personnels/{personnnel}',  [PersonnelController::class, 'update'])->name('Personnels.update');

// Suppression d'un    Personnels
Route::delete('/ Personnels/{personnel}', [PersonnelController::class, 'destroy'])->name('Personnels.destroy');


});
// Route::post('/Enregistrer', [ Controller::class, 'enregistre'])->name('Enregistrer');

