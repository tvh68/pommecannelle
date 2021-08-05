<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModalController;
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

/*
Route::resource('admin/restaurant', RestaurantController::class)->middleware(['auth']);
Route::resource('admin/patisserie', PatisserieController::class)->middleware(['auth']);
Route::resource('admin/commande', CommandeController::class)->middleware(['auth']);
*/
Route::redirect('/admin', '/admin/restaurant')->name('accueil');
//Routes pour admin Restaurant
Route::get('/admin/restaurant', [RestaurantController::class, 'index'])->middleware(['auth'])->name('restaurant.index');
Route::get('/admin/restaurant/create',[RestaurantController::class, 'create'])->middleware(['auth'])->name('restaurant.create');
Route::post('/admin/restaurant/store',[RestaurantController::class, 'store'])->middleware(['auth'])->name('restaurant.store');
Route::get('/admin/restaurant/{plat}/edit', [RestaurantController::class, 'edit'])->middleware(['auth'])->name('restaurant.edit');
Route::put('/admin/restaurant/{plat}/update',[RestaurantController::class, 'update'])->middleware(['auth'])->name('restaurant.update');
Route::delete('/admin/restaurant/{plat}/destroy', [RestaurantController::class, 'destroy'])->middleware(['auth'])->name('restaurant.destroy');

//Routes pour admin pâtisserie
Route::get('/admin/patisserie', [PatisserieController::class, 'index'])->middleware(['auth'])->name('patisserie.index');
Route::get('/admin/patisserie/create',[PatisserieController::class, 'create'])->middleware(['auth'])->name('patisserie.create');
Route::post('/admin/patisserie/store',[PatisserieController::class, 'store'])->middleware(['auth'])->name('patisserie.store');
Route::post('/admin/patisserie/download/{patisserie}',[PatisserieController::class, 'download'])->middleware(['auth'])->name('patisserie.download');
Route::get('/admin/patisserie/{patisserie}/edit', [PatisserieController::class, 'edit'])->middleware(['auth'])->name('patisserie.edit');
Route::put('/admin/patisserie/{patisserie}/update',[PatisserieController::class, 'update'])->middleware(['auth'])->name('patisserie.update');
Route::delete('/admin/patisserie/destroy/{patisserie}', [PatisserieController::class, 'destroy'])->middleware(['auth'])->name('patisserie.destroy');


/*
Route::get('/admin/patisserie', function () {
    return view('site.admin.adminPatisserie');
})->middleware(['auth'])->name('adminPatisserie');
*/
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

// Routes documents pdf
Route::get('/pdfrestaurant', [PdfController::class, 'pdfrestaurant'])->name('pdfrestaurant');
Route::get('/pdfpatisserie', [PdfController::class, 'pdfpatisserie'])->name('pdfpatisserie');

// Route pour le modal
//Route::get('/admin/modal', [ModalController::class, 'index'])->middleware(['auth'])->name('modal.index');
Route::get('/admin/{modal}/edit', [ModalController::class, 'edit'])->middleware(['auth'])->name('modal.edit');
//Route::get('/modal', [ModalController::class, 'index'])->middleware(['auth'])->name('modal.index');
Route::put('/admin/modal/{info}/update', [ModalController::class, 'update'])->middleware(['auth'])->name('modal.update');


//-------------------------------------------------
/*
//Mes tests
Route::get('test', function(){
    return dd(env('DB_DATABASE'));
});
*/
