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

Route::get('/about', function () {
    return view('about');
});

Route::get('/home/{name}', function () {
    return view('homePage');
});



Route::get('/contact', function () {
    // return 'Contacter nous au :' . $_GET['numero'];
    // return 'Appelez nous au : ' . request('numero');

    /*
   $nom = request('numero');

   return view('contact', ['affiche_numero' => $nom]);
   */
    return view('contact', ['affiche_numero' => request('numero')]);
});

Route::get('/inscription', function () {
    return view('inscription');
});

Route::post('/actionInscription', function () {
    return view('actionInscription');
    //return "Votre email est :" . request('email');
});
