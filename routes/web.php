<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

// Route du tableau d'administration
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Routes des pages du site
Route::get('/', [MainController::class, 'accueil'])->name('accueil');

Route::get('/accueil', [MainController::class, 'accueil'])->name('accueil');

Route::get('/restaurant', [MainController::class, 'restaurant'])->name('restaurant');

Route::get('/patisserie', [MainController::class, 'patisserie'])->name('patisserie');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::get('/mentionslegales', [MainController::class, 'mentionslegales'])->name('mentionslegales');





//-------------------------------------------------
//Mes tests
Route::get('test', function(){
    return dd(env('DB_DATABASE'));
});
