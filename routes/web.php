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

Route::get('/', function () {
    return view('welcome');
});

// Atelier I 9°
Route::get('/contact',function() {
    return 'Omar BOUHDIDA';
});

// Atelier I 10°
// Route::get('/etudiant',function() {
//     return 'Étudiant';
// });

// Atelier I 12° Méthode 1
// Route::get('/etudiant',function() {
//     $nom = 'Omar';
//     $prenom = 'BOUHDIDA';
//     return view ('etudiant',compact('nom','prenom'));
// });

// Atelier I 12° Méthode 2
Route::get('/etudiant', function() {
    $nom = 'Omar';
    $prenom = 'BOUHDIDA';
    return view ('etudiant', [
        'nom'=>$nom,
        'prenom'=>$prenom,
    ]);
});
