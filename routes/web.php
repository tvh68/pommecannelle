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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/
// Routes Administration
Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('admin');

Route::get('/admin/restaurant', function () {
    return view('adminRestaurant');
})->middleware(['auth'])->name('adminRestaurant');

Route::get('/admin/patisserie', function () {
    return view('adminPatisserie');
})->middleware(['auth'])->name('adminPatisserie');

Route::get('/admin/commande', function () {
    return view('adminCommande');
})->middleware(['auth'])->name('adminCommande');

require __DIR__.'/auth.php';

// Routes des pages du site
Route::get('/', [MainController::class, 'accueil'])->name('accueil');

Route::get('/accueil', [MainController::class, 'accueil'])->name('accueil');

Route::get('/restaurant', [MainController::class, 'restaurant'])->name('restaurant');

Route::get('/patisserie', [MainController::class, 'patisserie'])->name('patisserie');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::get('/mentionslegales', [MainController::class, 'mentionslegales'])->name('mentionslegales');


//-------------------------------------------------
/*
//Mes tests
Route::get('test', function(){
    return dd(env('DB_DATABASE'));
});
*/
