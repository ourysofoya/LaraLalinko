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
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    // return 'Contacter nous au :' . $_GET['numero'];
    // return 'Appelez nous au : ' . request('numero');

    /*
   $nom = request('numero');

   return view('contact', ['affiche_numero' => $nom]);
   */
    return view('contact');
})->name("contact");

Route::get('/inscription', function () {
    return view('inscription');
})->name("inscription");

Route::post('/actionInscription', function () {
    return view('actionInscription');
    //return "Votre email est :" . request('email');
})->name("actionInscription");

Route::get('/test', function (){
    return view('test');
})->name("test");

Route::get('/clients', function(){
    return view('clients');
})->name("client");

Route::get('/portfolio', function(){
    return view('portfolio');
})->name("portfolio");

Route::get('/team', function(){
    return view('team');
})->name("team");

Route::get('/features', function(){
    return view('features');
})->name("features");