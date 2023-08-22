<?php

use App\Http\Controllers\DocumentiController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index']);





// Route::get('/registrazione', function () {
//     return view('registration');
// });

Auth::routes();


Route::middleware(['auth'])->group(function () {
    // Aggiungi le tue rotte protette qui
    // Esempio:
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('nonconformita', NonconformitaController::class);
    Route::resource('prodotto', ProdottoController::class);
    Route::get('/documenti', 'DocumentiController@index')->name('documenti.index');
    Route::get('/documenti/create', 'DocumentiController@create')->name('documenti.create');
    Route::post('/documenti/store', 'DocumentiController@store')->name('documenti.store');
    Route::get('/documenti/{id}', 'DocumentiController@show')->name('documenti.show');
});
