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
Route::get('/', function(){
    return view('site.pages.accueil');
});

Route::get('accueil', function(){
    return view('site.pages.accueil');
});

Route::get('restaurant', function(){
    return view('site.pages.restaurant');
});

Route::get('patisserie', function(){
    return view('site.pages.patisserie');
});

Route::get('contact', function(){
    return view('site.pages.contact');
});


