<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\PatisserieController;
use App\Http\Controllers\RestaurantController;

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
    return view('dashboard');
})->middleware(['auth'])->name('admin');


//Route::get('/admin/patisserie', [PatisserieController::class, 'adminPatisserie'])->middleware(['auth'])->name('adminPatisserie');
//Route::get('/admin/commande', [CommandeController::class, 'adminCommande'])->middleware(['auth'])->name('adminCommande');
/*
Route::resource('admin/restaurant', RestaurantController::class)->middleware(['auth']);
Route::resource('admin/patisserie', PatisserieController::class)->middleware(['auth']);
Route::resource('admin/commande', CommandeController::class)->middleware(['auth']);
*/
//Routes pour le formulaire d'ajout de plat
Route::get('/admin/restaurant', [RestaurantController::class, 'index'])->middleware(['auth'])->name('restaurant.index');
Route::get('/admin/restaurant/create',[RestaurantController::class, 'create'])->middleware(['auth'])->name('restaurant.create');
Route::post('/admin/restaurant/store',[RestaurantController::class, 'store'])->middleware(['auth'])->name('restaurant.store');
Route::get('/admin/restaurant/{plat}/edit', [RestaurantController::class, 'edit'])->middleware(['auth'])->name('restaurant.edit');
Route::put('/admin/restaurant/{plat}/update',[RestaurantController::class, 'update'])->middleware(['auth'])->name('restaurant.update');
Route::delete('/admin/restaurant/{plat}/destroy', [RestaurantController::class, 'destroy'])->middleware(['auth'])->name('restaurant.destroy');

Route::get('/admin/patisserie', function () {
    return view('site.admin.adminPatisserie');
})->middleware(['auth'])->name('adminPatisserie');

Route::get('/admin/commande', function () {
    return view('site.admin.adminCommande');
})->middleware(['auth'])->name('adminCommande');

require __DIR__.'/auth.php';

// Routes des pages du site
Route::redirect('/', '/accueil')->name('accueil');

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
