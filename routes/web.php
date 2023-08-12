<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NonconformitaController;

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

Route::post('/ncprova', [NonconformitaController::class, 'store'])->name('nonconformita.store');
Route::get('/ncprova/create', [NonconformitaController::class, 'create'])->name('nonconformita.create');


// Route::get('/registrazione', function () {
//     return view('registration');
// });
